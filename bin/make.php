<?php

$extName = isset($argv[1]) ? $argv[1] : 0;
$extName OR die("ext name is not null!\n");
extension_loaded($extName) OR die("{$extName} Not Found\n");

$srcPath = __DIR__ . "/../src/{$extName}";
file_exists($srcPath) OR mkdir($srcPath, 0644, 1);
$ReflectionExtension = new \ReflectionExtension($extName);
$phpDeclare = "<?php" . PHP_EOL . PHP_EOL;
$onlyNamespace = 1;
$DS = "/";
$tab = "    ";


//生成版本
file_put_contents("{$srcPath}/__version.txt", $ReflectionExtension->getVersion());


//生成常量
$content = '';
foreach ($ReflectionExtension->getConstants() as $k => $v) {
    $content .= "define('{$k}', '{$v}');" . PHP_EOL;
}
if ($content) file_put_contents("{$srcPath}/__constants.php", $phpDeclare . $content);


//生成函数
$content = '';
foreach ($ReflectionExtension->getFunctions() as $k => $v) {
    $parameterModifiers = getParameterModifiers($v->getParameters());
    $content .= "function " . $k . "({$parameterModifiers}){}" . PHP_EOL;
}
if ($content) file_put_contents("{$srcPath}/__functions.php", $phpDeclare . $content);


//生成类
foreach ($ReflectionExtension->getClasses() as $k => $v) {
    $classPath = $srcPath . DIRECTORY_SEPARATOR . strtr($k, "\\", $DS) . ".php";
    $dirPath = dirname($classPath);
    file_exists($dirPath) OR mkdir($dirPath, 0644, 1);
    $content = $phpDeclare;

    $namespaceName = $v->getNamespaceName();
    if ($onlyNamespace && !$namespaceName && $k{0} !== ucfirst($k){0}) continue;
    $content .= $namespaceName ? "namespace {$namespaceName};\n\n" : "";

    $isInterface = $v->isInterface();
    if ($isInterface) {
        $content .= "interface ";
    } elseif ($v->isTrait()) {
        $content .= "trait ";
    } else {
        $modifierNames = implode(" ", \Reflection::getModifierNames($v->getModifiers()));
        $content .= $modifierNames ? "{$modifierNames} class " : "class ";
    }

    $content .= $v->getShortName();

    $parentClass = $v->getParentClass();
    $parentProperties = [];
    $parentMethods = [];
    $parentClassName = "";
    if ($parentClass) {
        $parentClassName = "\\" . $parentClass->getName();
        foreach ($parentClass->getMethods() as $kk => $vv) {
            $parentMethods[$vv->getName()] = 1;
        }
        foreach ($parentClass->getProperties() as $kk => $vv) {
            $parentProperties[$vv->getName()] = 1;
        }
    }
    $content .= $parentClassName ? " extends {$parentClassName}" : "";

    $interfaceNames = $v->getInterfaceNames();
    if ($interfaceNames) {
        $hasIterator = in_array("Iterator", $interfaceNames);
        foreach ($interfaceNames as $kk => $vv) {
            if ($vv == "SessionIdInterface") {
                //为了不让ide报错
                unset($interfaceNames[$kk]);
            } elseif ($hasIterator && $vv == "Traversable") {
                //为了不让ide报错
                unset($interfaceNames[$kk]);
            } else {
                $interfaceNames[$kk] = "\\" . $vv;
            }
        }
        $interfaceNames = implode(", ", $interfaceNames);
        $content .= $interfaceNames ? " implements {$interfaceNames}" : "";
    }

    $content .= PHP_EOL;
    $content .= "{" . PHP_EOL;

    foreach ($v->getConstants() as $kk => $vv) {
        $content .= "{$tab}const {$kk} = " . var_export($vv, 1) . ";" . PHP_EOL;
    }

    $defaultProperties = $v->getDefaultProperties();
    foreach ($v->getProperties() as $kk => $vv) {
        $propertyName = $vv->getName();
        if (!empty($parentProperties[$propertyName])) continue;
        $propertyModifiers = implode(" ", \Reflection::getModifierNames($vv->getModifiers()));
        $content .= "{$tab}{$propertyModifiers} \${$propertyName} = " . (isset($defaultProperties[$propertyName]) ? var_export($defaultProperties[$propertyName], 1) : "null") . ";" . PHP_EOL;
    }

    foreach ($v->getMethods() as $kk => $vv) {
        $methodName = $vv->getName();
        if (!empty($parentMethods[$methodName])) continue;

        $parameterModifiers = getParameterModifiers($vv->getParameters());
        $modifiers = $vv->getModifiers();
        //为了不让ide报错
        $modifiers = $isInterface ? $modifiers ^ \ReflectionMethod::IS_ABSTRACT : $modifiers;
        $modifierNames = implode(" ", \Reflection::getModifierNames($modifiers));
        //为了不让ide报错
        $functionBody = $methodName === "__toString" ? "return \"\";" : "";
        $content .= "{$tab}{$modifierNames} function {$methodName}({$parameterModifiers})";
        $content .= $isInterface ? ";" : "{{$functionBody}}";
        $content .= PHP_EOL;
    }

    $content .= "}" . PHP_EOL;

    file_put_contents($classPath, $content);
}


function getParameterModifiers($ReflectionParameterList)
{
    $str = '';
    foreach ($ReflectionParameterList as $kkk => $vvv) {
        $isOptional = $vvv->isOptional();
        $isRef = $vvv->isPassedByReference();
        $type = $vvv->getType() ? $vvv->getType()->getName() . " " : "";
        $ref = $isRef ? "&" : "";
        $defaultValue = $isOptional ? " = null" : "";
        $str .= "{$type}{$ref}\$" . $vvv->getName() . "{$defaultValue}, ";
    }
    $str = rtrim($str, ", ");
    return $str;
}