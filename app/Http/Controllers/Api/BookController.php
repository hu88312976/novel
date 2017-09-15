<?php

namespace App\Http\Controllers\Api;

use App\Models\Book;
use Dingo\Api\Http\Request;
use DB;


class BookController extends BaseController
{
    private  $Book;

    public function __construct(Book $Book)
    {
        $this->Book = $Book;
    }


    /**
     * @api               {get} getAdList 获取广告列表
     * @apiName           getAdList
     * @apiGroup          Ad
     * @apiVersion        1.0.0
     * @apiUse            Error404
     * @apidescribe       广告列表
     *
     * @apiSuccess {number} status 结果状态值，0：请求失败；1：请求成功
     * @apiSuccess {string} info 返回状态说明，status为0时，info返回错误原因，否则返回“OK”
     * @apiSuccess {array} data 返回数据
     * @apiSuccess {int}   data.id 广告id
     * @apiSuccess {int}   data.title 广告标题
     * @apiSuccess {int}   data.image 广告图片
     * @apiSuccess {int}   data.link_address 广告地址
     *
     * @apiSuccessExample Success-Response:
     * HTTP/1.1 200 OK
     *{
     *"status": 1,
     *"info": "ok",
     *"data": [
     *{
     *"id": 1,
     *"title": "广告1",
     *"image": "specialty_images/1503369608_88542300.jpg",
     *"link_address": "www.baidu.com"
     *}
     *]
     *}
     *
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function getBookDetail(Request $request){


        //$re_list = $this->Book->getOne(['book_id'=>$request->get('book_id')]);
        if (!$request->has('book_id')){
            return $this->error('缺少参数');
        }
        $book_id = $request->get('book_id');
        $this->success(DB::table('book')->where('book_id','=',$book_id)->increment('look_num'));
        return 1;
     //   return  view('book_detail');
    }


}
