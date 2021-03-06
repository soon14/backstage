<?php

/**
 * User: hanxiaolong
 * Date: 2018/12/21
 *
 * 网站管理
 */
class svcWebsite {
    /**
     * 轮播图设置 - 获取
     * @param $param
     * @param $data
     * @return int
     */
    public function bannerSettingGet($param, &$data) {
        return clsWebsite::bannerSettingGet($param, $data);
    }

    /**
     * 轮播图设置 - 上传
     * @param $param
     * @param $data
     * @return int
     */
    public function bannerSettingUpload($param, &$data) {
        return clsWebsite::bannerSettingUpload($param, $data);
    }

    /**
     * 轮播图设置 - 保存
     * @param $param
     * @param $data
     * @return int
     */
    public function bannerSettingSave($param, &$data) {
        return clsWebsite::bannerSettingSave($param, $data);
    }

    /**
     * 广告图设置 - 上传
     * @param $param
     * @param $data
     * @return int
     */
    public function adSettingUpload($param, &$data) {
        return clsWebsite::adSettingUpload($param, $data);
    }

    /**
     * 广告图设置 - 保存
     * @param $param
     * @param $data
     * @return int
     */
    public function adSettingSave($param, &$data) {
        return clsWebsite::adSettingSave($param, $data);
    }
}