<?php
namespace Common\Model;

use Think\Model\RelationModel;

class AdsModel extends RelationModel
{
    protected $_link = array(
        'File' => array(
            'mapping_type' => self::BELONGS_TO,
            'mapping_name' => 'file',
            'foreign_key' => 'file_id',//关联id
            'as_fields' => 'savename:savename,savepath:savepath',
        ),
        'Shop' => array(
            'mapping_type' => self::BELONGS_TO,
            'mapping_name' => 'shop',
            'foreign_key' => 'shop_id',//关联id
//            'mapping_fields' => 'remark',
        ),
    );

    public function get($condition = array(), $relation = false)
    {
        $data = $this->where($condition);
        if ($relation) {
            $data = $data->relation($relation);
        }
        $data = $data->find();

        return $data;
    }

    public function getList($condition = array(), $relation = false, $order = "id desc", $p = 0, $num = 0, $limit = 0)
    {
        $data = $this->where($condition);
        if ($relation) {
            $data = $data->relation($relation);
        }
        if ($p && $num) {
            $data = $data->page($p . ',' . $num . '');
        }
        if ($limit) {
            $data = $data->limit($limit);
        }

        $data = $data->order($order)->select();

        return $data;
    }

    public function getMethod($condition = array(), $method, $args)
    {
        $field = isset($args) ? $args : '*';
        $data = $this->where($condition)->getField(strtoupper($method) . '(' . $field . ') AS tp_' . $method);
        return $data;
    }

    public function add($data)
    {
        if ($data["id"] == 0 || !isset($data["id"])) {
            $id = parent::add($data);
            return $id;
        } else {
            $this->save($data);
            return $data["id"];
        }
    }

    public function addAll($data)
    {
        parent::addAll($data);
    }

    public function save($data)
    {
        parent::save($data);
    }

    public function del($condition = array())
    {
        $this->where($condition)->delete();
    }
//cui    
      public function getAds($condition = array(), $relation = false)
    {
        $data = $this->where($condition);
        if ($relation) {
            $data = $data->relation(true);
        }
        $data = $data->find();

        return $data;
    }

    public function getAdsList($condition = array(), $relation = false, $order = "id desc", $p = 0, $num = 0, $limit = 0)
    {
        $list = $this->where($condition);
        if ($relation) {
            $list = $list->relation(true);
        }
        if ($p && $num) {
            $list = $list->page($p . ',' . $num . '');
        }
        if ($limit) {
            $list = $list->limit($limit);
        }

        $list = $list->order($order)->select();

        return $list;
    }

    public function getAdsListCount($condition = array())
    {
        $count = $this->where($condition)->count();
        return $count;
    }

    public function addAds($data)
    {
        if ($data["id"] == 0) {
            $this->add($data);
        } else {
            $this->save($data);
        }
    }

    public function delAds($ids)
    {
        $this->where(array("id" => array("in", $ids)))->delete();
    }  
    
    
}