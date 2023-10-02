<?php 
    class Router {

        public static function hundle($method = 'GET', $path='/', $controller='', $action = null)
        {
             
            $currentMethod = $_SERVER['REQUEST_METHOD'];
            $currentUri = $_SERVER['REQUEST_URI'];
            if($currentMethod != $method){
                return false;
            }
            $root= '';
            $pattern = '#^'.$root.$path.'$#siD';
            if(preg_match($pattern, $currentUri)){
                if (is_callable($controller)) {
                    $controller();
                }else{
                    require_once '../controller/'.$controller.'.php';
                    $controller = new $controller();
                    $controller-> $action();
                }
                exit;
            }

            return false;
        }

        //GET method- get and return route to redirect to path
        public static function get($path='/', $controller='', $action = null) {
            return self::hundle('GET', $path, $controller, $action);
        }


         // POST method- get and return route to redirect to path
         public static function post ($path='/', $controller='', $action = null) {
            return self::hundle('POST', $path, $controller, $action);
        }

        // PUT method- get and return route to redirect to path
        public static function put ($path='/', $controller='', $action = null) {
            return self::hundle('PUT', $path, $controller, $action);
        }


        // PATCH method- get and return route to redirect to path
        public static function patch ($path='/', $controller='', $action = null) {
            return self::hundle('PATCH', $path, $controller, $action);
        }

         // DELETE method- get and return route to redirect to path
         public static function delete ($path='/', $controller='', $action = null) {
            return self::hundle('DELETE', $path, $controller, $action);
        }


        

    }


?>