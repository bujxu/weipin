<?php
/**
 * ============================================================================
 * Copyright (c) 2016-2017 #### All rights reserved.
 * ----------------------------------------------------------------------------
 * 文件名称：GroupModel.class.php
 * ----------------------------------------------------------------------------
 * 功能描述：########
 * ----------------------------------------------------------------------------
 * 作者:chenbei
 * ----------------------------------------------------------------------------
 * 时间:下午4:46:49
 * ----------------------------------------------------------------------------
 */
class GroupModel extends Model {
    public function getGroup($where='',$field='*') {
        return $this->where($where)->field($field)->find();
    }
}