<?php

/**
 * User: hanxiaolong
 * Date: 2018/12/22
 *
 * 公告管理
 */
class clsMessage {
    /**
     * 公告列表 - 获取
     * @param $param
     * @param $data
     * @return int
     */
    public static function announceListGet($param, &$data) {
        return daoMessage::announceListGet($param, $data);
    }

    /**
     * 公告列表 - 添加
     * @param $param
     * @param $data
     * @return int
     */
    public static function announceListAdd($param, &$data) {
        return daoMessage::announceListAdd($param, $data);
    }

    /**
     * 公告列表 - 编辑
     * @param $param
     * @param $data
     * @return int
     */
    public static function announceListEdit($param, &$data) {
        return daoMessage::announceListEdit($param, $data);
    }

    /**
     * 公告列表 - 删除
     * @param $param
     * @param $data
     * @return int
     */
    public static function announceListDel($param, &$data) {
        return daoMessage::announceListDel($param, $data);
    }

    /**
     * 站内消息 - 获取
     * @param $param
     * @param $data
     * @return int
     */
    public static function stationMessageGet($param, &$data) {
        return daoMessage::stationMessageGet($param, $data);
    }

    /**
     * 站内消息 - 发新消息
     * @param $param
     * @param $data
     * @return int
     */
    public static function stationMessageSend($param, &$data) {
        return daoMessage::stationMessageSend($param, $data);
    }

    /**
     * 站内消息 - 查看消息
     * @param $param
     * @param $data
     * @return int
     */
    public static function stationMessageViewMsg($param, &$data) {
        return daoMessage::stationMessageViewMsg($param, $data);
    }

    /**
     * 站内消息 - 查看收件人
     * @param $param
     * @param $data
     * @return int
     */
    public static function stationMessageViewRecipient($param, &$data) {
        return daoMessage::stationMessageViewRecipient($param, $data);
    }
}