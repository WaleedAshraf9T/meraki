<?php
class Router
{
    /**
     * indicate weather the route  has been successfully handled.
     */
    private $handled = false;

    public function __construct(){}

//    public function get($uri, $view){}

//    public function post($uri, $view){}

    public function delete($uri, $view){}

    public function put($uri, $view){}

    public function patch($uri, $view){}

    /**
     *handle get route requests
     *
     * @var $route string the route to handle
     * @var $view string the view to render
     */
    public function get($routes){
        if($_SERVER['REQUEST_METHOD'] !== 'GET'){
            return false;
        }
        $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

        if(array_key_exists($uri, $routes)){
            return include_once controllers . $routes[$uri];
        }
        
        return include_once (controllers . '/404.php');
    }

    public  function post($route, $view){
        if($_SERVER['REQUEST_METHOD'] !== 'POST'){
            return false;
        }

        $uri = $_SERVER['REQUEST_URI'];
        if($uri === $route){
            $this->handled = true;
            return include_once (controllers . $view);
        }
    }
}