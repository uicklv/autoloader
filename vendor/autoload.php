<?php


class AutoLoader
{

    protected $prefixes = array();

    public function createdNamespace($prefix, $base_dir)
    {

        $array_path = array($prefix => $base_dir);
        array_push($this->prefixes, $array_path);

    }

    public function register()
    {
        spl_autoload_register(array($this, 'loadClass'));
    }

    public function loadClass($class)
    {

        $namespace = $class;
        $path = explode('\\', $namespace);
        $len = count($this->prefixes);
        $leng = count($path);
        $start_dir = '';
        for ($i = 0; $i < $len; $i++) {
            foreach ($this->prefixes[$i] as $key => $value) {
                if ($path[0] === $key) {
                    $start_dir .= $value;
                    for ($i = 1; $i < $leng; $i++) {
                        $start_dir .= '/' . $path[$i];
                    }
                }

            }
        }
        $file = $start_dir . '.php';
        require $file;

    }
}

$autoloader = new Autoloader();
$autoloader->createdNamespace('App', '../src');
$autoloader->createdNamespace('Project', '../app');
$autoloader->register();





