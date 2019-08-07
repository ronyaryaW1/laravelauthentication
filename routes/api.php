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
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function($api){
    
    
    $api->post('/login' , function(){
        return ['status' => 204, 'data' => 'Success'];
    });
    
   
    
$api->group(['middleware' => 'api.auth'], function ($api) {
    $api->get('/me', function(){
        $data = [
            "name" => "Indra Hehe Aja",
            "nickname" => "goeroeku",
            "gender" => "Male",
            "class" => "Pro Akut",
        ];
        return ['status' => 200, 'data' =>  $data];
    });
    $api->delete('/logout' , function(){
        return ['status' => 204, 'data' => 'Success'];
    });
     $api->post('/register' , function(){
        return ['status' => 204, 'data' => 'Success'];
    });


    
});
// Route::get('/me', function(){
// 	return ['success' => 'true', 'data' => 'Ini data'];
// });

// Route::post('/login', function(){
// 	return ['success' => 'true', 'data' => 'Login berhasil'];
// });

// Route::delete('/logout', function(){
// 	return ['success' => 'true', 'data' => 'Logout sukses'];
// });
 
    // $api ->delete 'app/Http/Controller/Auth/AuthController';
//  $api ->register 'app/Http/Controller/Auth/AuthController';

Route::post('/register', 'AuthController@register');
Route::get('/me', 'AuthController@me');
Route::post('/login', 'AuthController@login');
Route::delete('/logout', 'AuthController@logout');
    
});
