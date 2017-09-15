<?php

namespace App\Models;


class BookComment extends BaseModel
{

    //
    protected $table      = "book_comment";
    protected $primaryKey = 'id';

    /**
     * 按条件查询单条数据
     */
    public function getOne(array $where = [], $fields = '*')
    {
        return $this->_getOne($where, $fields);
    }
    /**
     * 按条件查询全部数据,根据配置显示条数显示
     */

    public function getApiList(array $where = [],  $pageSize = ''){
        if (empty($pageSize)){
            $pageSize = 10;
        }
        $order = ['created_at' => 'desc'];
        $res = $this->leftjoin('users','users.id','book_comment.user_id')
            ->select('book_comment.*','users.nickname')
            ->multiWhere($where)->order($order)->paginate($pageSize);
        if ($res) {
            return $res->toArray();
        }

    }

    public function getList(array $where = [], $fields = '*', $order = '', $pageSize = '')
    {
        $order = ['id' => 'asc'];
        if ($pageSize) {
            $res = $this->getPaginate($where, $fields, $order, $pageSize);
            if ($res) {
                $res = $res->toArray();
            }


        } else {
            $res = $this->getAll($where, $fields, $order);
            if ($res) {
                $res = $res->toArray();
            }
        }
        return $res;
    }

    public function Add($data){
        return $this->_add($data);
    }

    public function Del($where){
        return $this->_Del($where);
    }

    public function Updata($where,$data){
        return $this->_updata($where,$data);
    }


}
