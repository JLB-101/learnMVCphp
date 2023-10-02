<?php
//includes -- Imports
require_once 'Router.php';

// Router::get('/test', function(){
//     echo '<h1>I am  in init file</h1>';
// });


# Test controller
Router::get('/test/[0-9]*', 'TestController', 'show');

# Products Controller
Router::get('/products', 'ProductController', 'index');
Router::post('/products', 'ProductController', 'store');
# Products List Controller
Router::get('/products/[0-9]*', 'ProductController', 'show');
Router::get('/products/{id}/edit', 'ProductController', 'edit');
Router::put('/products/{id}', 'ProductController', 'update');
Router::delete('/products/{id}', 'ProductController', 'delete');


# Product Detail Controller
//Router::get('/products', 'ProductController', 'index');
# Product Update Controller
//Router::get('/products', 'ProductController', 'index');
# Product Delete Controller
//Router::get('/products', 'ProductController', 'index');
# Product Controller



?>