<?php
    namespace Lib;

    class Route{
        private static $routes = [];

        public static function get($uri, $callback){
            $uri = trim($uri, '/');
            self::$routes['GET'][$uri] = $callback;
        }

        public static function post($uri, $callback){
            $uri = trim($uri, '/');
            self::$routes['POST'][$uri] = $callback;
        }

        public static function dispatch(){
            #$uri = trim($_SERVER['REQUEST_URI'], '/');
            $method = $_SERVER['SERVER_ADDR'];

           /*  foreach(self::$routes[$method] as $route => $callback){
                if($uri == $route){
                    $callback();
                    return;
                }
            } */
            #echo "404: $uri not found";            
            # echo $_SERVER['SERVER_NAME']; <= Muestra el nombre del servidor, para aplicar en la direccion de la app

            $url = rtrim($_SERVER['REQUEST_URI'], '/');
            echo "<br>";
            print_r($url);
			$url = filter_var($url, FILTER_SANITIZE_URL);
            echo "<br>";
            print_r($url);
			$url = explode('/', $url);
            echo "<br>";
            print_r($url);
        }
    }
?>