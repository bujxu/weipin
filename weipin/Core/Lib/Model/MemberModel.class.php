<?php
/**
 * ============================================================================
 * Copyright (c) 2016-2017 #### All rights reserved.
 * ----------------------------------------------------------------------------
 * 文件名称：MemberModel.class.php
 * ----------------------------------------------------------------------------
 * 功能描述：########
 * ----------------------------------------------------------------------------
 * 作者:chenbei
 * ----------------------------------------------------------------------------
 * 时间:下午2:03:52
 * ----------------------------------------------------------------------------
 */
class MemberModel extends Model {
    /**
     * 获取指定用户
     */
    public function getMember($where = '',$field = '*') {
        return $this->where($where)->field($field)->find();
    }
}