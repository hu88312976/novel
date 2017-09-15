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

$api = app(Dingo\Api\Routing\Router::class);

$api->version('v1', ["prefix" => "api/","namespace" => "App\\Http\\Controllers\\Api", "middleware" => ["api.log", "api.response.log", "cors"]],
    function (Dingo\Api\Routing\Router $api) {
        $api->get("getAdList", "AdController@getAdList");//获取广告列表
        $api->get("getBookDetail", "BookController@getBookDetail");//获取书籍列
        $api->get("getCommentList", "BookCommentController@getCommentList");//获取评论列表


        $api->post("dataImport","FileUploadController@dataImport");
        $api->get("postComment", "BookCommentController@postComment");//发表评论
        $api->get("delComment", "BookCommentController@delComment");//删除评论

    });
