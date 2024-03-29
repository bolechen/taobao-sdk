<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.subuser.duty.add request
 *
 * @author auto create
 * @since  1.0, 2016.03.05
 */
class SubuserDutyAddRequest implements RequestInterface
{
    /**
     * 职务级别
     **/
    private $dutyLevel;

    /**
     * 职务名称
     **/
    private $dutyName;

    /**
     * 主账号用户名
     **/
    private $userNick;

    private $apiParas = [ ];

    public function setDutyLevel($dutyLevel)
    {
        $this->dutyLevel = $dutyLevel;
        $this->apiParas["duty_level"] = $dutyLevel;
    }

    public function getDutyLevel()
    {
        return $this->dutyLevel;
    }

    public function setDutyName($dutyName)
    {
        $this->dutyName = $dutyName;
        $this->apiParas["duty_name"] = $dutyName;
    }

    public function getDutyName()
    {
        return $this->dutyName;
    }

    public function setUserNick($userNick)
    {
        $this->userNick = $userNick;
        $this->apiParas["user_nick"] = $userNick;
    }

    public function getUserNick()
    {
        return $this->userNick;
    }

    public function getApiMethodName()
    {
        return "taobao.subuser.duty.add";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->dutyLevel, "dutyLevel");
        RequestCheckUtil::checkNotNull($this->dutyName, "dutyName");
        RequestCheckUtil::checkNotNull($this->userNick, "userNick");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}
