<?php

/**
 * User: hanxiaolong
 * Date: 2018/12/21
 *
 * 首页
 */
class svcHomepage {
    /**
     * 获取头部信息
     * @param $param
     * @param $data
     * @return int
     */
    public function getHead($param, &$data) {
        return clsHomepage::getHead($param, $data);
    }

    /**
     * 获取笔数/人数
     * @param $param
     * @param $data
     * @return int
     */
    public function getNum($param, &$data) {
        return clsHomepage::getNum($param, $data);
    }

    /**
     * 获取充提
     * @param $param
     * @param $data
     * @return int
     */
    public function getCharge($param, &$data) {
        return clsHomepage::getCharge($param, $data);
    }

    /**
     * 获取盈亏
     * @param $param
     * @param $data
     * @return int
     */
    public function getProfit($param, &$data) {
        return clsHomepage::getProfit($param, $data);
    }

    /**
     * 获取在线人数
     * @param $param
     * @param $data
     * @return int
     */
    public function getOnlineNum($param, &$data) {
        return clsHomepage::getOnlineNum($param, $data);
    }
}