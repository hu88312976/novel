<?php

namespace App\Http\Controllers\Api;

use App\Models\BookComment;
use Dingo\Api\Http\Request;
use DB;


class BookCommentController extends BaseController
{
    private  $BookComment;

    public function __construct(BookComment $BookComment)
    {
        $this->BookComment = $BookComment;
    }


    /**
     * @api               {get} getCommentList 获取评论列表
     * @apiName           getCommentList
     * @apiGroup          Comment
     * @apiVersion        1.0.0
     * @apiUse            Error404
     * @apidescribe       评论列表
     * @apiParam {int} user_id 用户id，可传参数(2个参数必须传一个)
     * @apiParam {int} book_id 作品id，可传参数(2个参数必须传一个)
     * @apiSuccess {number} status 结果状态值，0：请求失败；1：请求成功
     * @apiSuccess {string} info 返回状态说明，status为0时，info返回错误原因，否则返回“OK”
     * @apiSuccess {int} current_page 当前页码
     * @apiSuccess {int} total 总页数
     * @apiSuccess {int} per_page 每页行数
     * @apiSuccess {array} data 返回数据
     * @apiSuccess {int}   data.id 评论id
     * @apiSuccess {string}   data.comment 评论内容
     * @apiSuccess {int}   data.user_id 评论人id
     * @apiSuccess {string}   data.nickname 评论人昵称
     * @apiSuccess {int}   data.book_id 作品id
     * @apiSuccess {string}   data.score 作品分数
     * @apiSuccess {string}   data.created_at 创建时间
     *
     * @apiSuccessExample Success-Response:
     * HTTP/1.1 200 OK
     *{
     *"status": 1,
     *"info": "ok",
     *"data": {
     *"current_page": 1,
     *"data": [
     *{
     *"id": 6,
     *"comment": "2",
     *"user_id": 1,
     *"book_id": 1,
     *"score": 4.2,
     *"created_at": "2017-09-15 10:16:13",
     *"nickname": "测试昵称"
     *},
     *{
     *"id": 7,
     *"comment": "2",
     *"user_id": 2,
     *"book_id": 1,
     *"score": 5,
     *"created_at": "2017-09-15 10:15:46",
     *"nickname": "苦咖啡"
     *}
     *],
     *"from": 1,
     *"last_page": 1,
     *"next_page_url": null,
     *"path": "http://book.dev/api/getCommentList",
     *"per_page": 10,
     *"prev_page_url": null,
     *"to": 2,
     *"total": 2
     *}
     *}
     *
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function getCommentList(Request $request){
        if ($request->has('book_id')){
            $where = ['book_id'=>$request->get('book_id')];
        }elseif($request->has('user_id')){
            $where = ['user_id'=>$request->get('user_id')];
        }else{
            return $this->error('缺少参数');
        }

        return $this->success($this->BookComment->getApiList($where));
    }


    /**
     * @api               {post} postComment 发表评论
     * @apiName           postComment
     * @apiGroup          Comment
     * @apiVersion        1.0.0
     * @apiUse            Error404
     * @apidescribe       发表评论
     * @apiParam {int} user_id 用户id，必传参数
     * @apiParam {int} book_id 作品id，必传参数
     * @apiParam {string} comment 评论内容，必传参数
     * @apiParam {string} score 评分，必传参数
     * @apiSuccess {number} status 结果状态值，0：请求失败；1：请求成功
     * @apiSuccess {string} info 返回状态说明，status为0时，info返回错误原因，否则返回“OK”
     * @apiSuccess {array} data 返回执行成功的id
     *
     * @apiSuccessExample Success-Response:
     * HTTP/1.1 200 OK
     *{
     *"status": 1,
     *"info": "ok",
     *"data": 1
     *}
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function postComment(Request $request){
        if ($request->has('book_id') && $request->has('user_id')){
            $data = ['book_id'=>$request->get('book_id'),'user_id'=>$request->get('user_id')];
            $where = $data;
        }else{
            return $this->error('缺少参数');
        }

        $comment = $request->get('comment');
        $score = $request->get('score');

        if(empty($comment) && empty($score)){
            return $this->error('缺少评论内容');
        }

        if (empty($score)){
            $score = '5.0';
        }
        $data['comment'] = $comment;
        $data['score'] = $score;

        $count = $this->BookComment->getList($where);

        if (count($count)>0){
            return $this->error('不可重评论');
        }
        return $this->success($this->BookComment->Add($data));
    }

    /**
     * @api               {post} delComment 删除评论
     * @apiName           delComment
     * @apiGroup          Comment
     * @apiVersion        1.0.0
     * @apiUse            Error404
     * @apidescribe       发表评论
     * @apiParam {int} user_id 用户id，必传参数
     * @apiParam {int} book_id 作品id，必传参数
     * @apiSuccess {number} status 结果状态值，0：请求失败；1：请求成功
     * @apiSuccess {string} info 返回状态说明，status为0时，info返回错误原因，否则返回“OK”
     * @apiSuccess {array} data 返回执行成功的行数
     *
     * @apiSuccessExample Success-Response:
     * HTTP/1.1 200 OK
     *{
     *"status": 1,
     *"info": "ok",
     *"data": 1
     *}
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function delComment(Request $request){
        if ($request->has('book_id') && $request->has('user_id')){
            $where = ['book_id'=>$request->get('book_id'),'user_id'=>$request->get('user_id')];

        }else{
            return $this->error('缺少参数');
        }
        return $this->success($this->BookComment->Del($where));
    }


}
