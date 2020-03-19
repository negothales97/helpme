<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$router->get('/',function(){
    return redirect('/api');
});
$router->get('/api', function () use ($router) {
    return '<h1>API desenvolvida para identificação de queda. TCC CPS.</h1>';
});
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/ola', function () use ($router) {
        $data['aceleracao'] = 0;
        return response()
            ->json($data, 200);
    });
    $router->post('/ola', 'FallController@getFall');
    $router->post('/queda', 'FallController@getFall');
});
