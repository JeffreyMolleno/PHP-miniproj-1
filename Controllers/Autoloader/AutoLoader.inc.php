<?

    spl_autoload_register('myAutoLoader');

    function myAutoLoader($className){
        $path = "Views";
        $extension = ".components.php";
        $fullPath = $path . $className . $extension;

        include_once($fullPath);
    }