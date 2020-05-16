<?php

namespace dhcc\sdk\request;

use dhcc\sdk\traits\Page;

/**
 * 淘宝各大榜单数据，1.实时榜 2.全天榜 3.热推榜
 * 由平台人工整理，收集优质商品
 * Class DhccTbkGoodsRanking
 * @package dhcc\sdk\request
 */
class DhccActivityUrl extends Request
{


    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.activity.url';
    }

    public function setActivityId(int $activityId)
    {
        $this->params['activity_id'] = $activityId;

        return $this;
    }

    /**
     * 淘客推广位pid,官方获取
     * @param string $tbPid
     * @return $this
     */
    public function setTbkPid(string $tbkPid)
    {
        $this->params['tbk_pid'] = $tbkPid;

        return $this;
    }

    /**
     * 淘客渠道id，淘客非必传
     * @param string $tbkRelationId
     * @return $this
     */
    public function setTbkRelationId(string $tbkRelationId)
    {
        $this->params['tbk_relation_id'] = $tbkRelationId;

        return $this;
    }

    /**
     * 淘宝客授权session，淘客必传
     * @param string $tbkAccessToken
     * @return $this
     */
    public function setTbkAccessToken(string $tbkAccessToken)
    {
        $this->params['tbk_access_token'] = $tbkAccessToken;

        return $this;
    }

    /**
     * 京东跟单pid,规则为 用户id+9000000000
     * @param string $jdPid
     * @return $this
     */
    public function setJdPid(string $jdPid)
    {
        $this->params['jd_pid'] = $jdPid;

        return $this;
    }

    /**
     * 京东跟单pid,规则为 用户id+9000000000
     * @param string $jdUnionId
     * @return $this
     */
    public function setJdUnionId(string $jdUnionId)
    {
        $this->params['jd_union_id'] = $jdUnionId;

        return $this;
    }

    /**
     * 拼多多推广位pid,官方获取
     * @param string $pddPid
     * @return $this
     */
    public function setPddPid(string $pddPid)
    {
        $this->params['pdd_pid'] = $pddPid;

        return $this;
    }

    /**
     * 拼多多授权token
     * @param string $pddAccessToken
     * @return $this
     */
    public function setPddAccessToken(string $pddAccessToken)
    {
        $this->params['pdd_access_token'] = $pddAccessToken;

        return $this;
    }

    /**
     * 唯品会跟单pid,dh+用户id
     * @param string $vipPid
     * @return $this
     */
    public function setVipPid(string $vipPid)
    {
        $this->params['vip_pid'] = $vipPid;

        return $this;
    }

    /**
     * 唯品会access_token，唯品会必传
     * @param string $vipAccessToken
     * @return $this
     */
    public function setVipAccessToken(string $vipAccessToken)
    {
        $this->params['vip_access_token'] = $vipAccessToken;

        return $this;
    }

    /**
     * 考拉跟单pid，考拉必传，track_code + user_id 拼接
     * @param string $klPid
     * @return $this
     */
    public function setKlPid(string $klPid)
    {
        $this->params['kl_pid'] = $klPid;

        return $this;
    }

    /**
     * 考拉app_key，考拉必传
     * @param string $klAppKey
     * @return $this
     */
    public function setKlAppKey(string $klAppKey)
    {
        $this->params['kl_app_key'] = $klAppKey;

        return $this;
    }

    /**
     * 考拉app_secret，考拉必传
     * @param string $klAppSecret
     * @return $this
     */
    public function setKlAppSecret(string $klAppSecret)
    {
        $this->params['kl_app_secret'] = $klAppSecret;

        return $this;
    }

    /**
     * 考拉默认推广位pid，考拉必传,官方获取
     * @param string $klDefaultPid
     * @return $this
     */
    public function setKlDefaultPid(string $klDefaultPid)
    {
        $this->params['kl_default_pid'] = $klDefaultPid;

        return $this;
    }

    /**
     * 苏宁子会员码，苏宁必传
     * @param string $snSubUserId
     * @return $this
     */
    public function setSnSubUserId(string $snSubUserId)
    {
        $this->params['sn_sub_user_id'] = $snSubUserId;

        return $this;
    }

    /**
     * 苏宁推广位pid，苏宁必传,官方获取
     * @param string $snPid
     * @return $this
     */
    public function setSnPid(string $snPid)
    {
        $this->params['sn_pid'] = $snPid;

        return $this;
    }

    /**
     * 苏宁app_key，苏宁必传
     * @param string $snAppKey
     * @return $this
     */
    public function setSnAppKey(string $snAppKey)
    {
        $this->params['sn_app_key'] = $snAppKey;

        return $this;
    }

    /**
     * 苏宁app_secret，苏宁必传
     * @param string $snAppSecret
     * @return $this
     */
    public function setSnAppSecret(string $snAppSecret)
    {
        $this->params['sn_app_secret'] = $snAppSecret;

        return $this;
    }

    /**
     * 蘑菇街access_token，蘑菇街必传
     * @param string $mgAccessToken
     * @return $this
     */
    public function setMgAccessToken(string $mgAccessToken)
    {
        $this->params['mg_access_token'] = $mgAccessToken;

        return $this;
    }

    /**
     * 蘑菇街跟单pid，自定义
     * @param string $mgPid
     * @return $this
     */
    public function setMgPid(string $mgPid)
    {
        $this->params['mg_pid'] = $mgPid;

        return $this;
    }

    /**
     * 蘑菇街用户id，蘑菇街必传,来自官方
     * @param string $mgUserId
     * @return $this
     */
    public function setMgUserId(string $mgUserId)
    {
        $this->params['mg_user_id'] = $mgUserId;

        return $this;
    }
}

