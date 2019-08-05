<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function($api){
    $api->get('/me', function(){
        $data = [
            "name" => "Indra Hehe Aja",
            "nickname" => "goeroeku",
            "gender" => "Male",
            "class" => "Pro Akut",
        ];
        return ['status' => 200, 'data' =>  $data];
    });
    $api->post('/login' , function(){
        return ['status' => 204, 'data' => 'Success'];
    });
    $api->delete('/logout' , function(){
        return ['status' => 204, 'data' => 'Success'];
    });
    $api->post('/register' , function(){
        return ['status' => 204, 'data' => 'Success'];
    });
});
