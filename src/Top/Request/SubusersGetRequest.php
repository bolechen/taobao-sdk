<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.subusers.get request
 *
 * @author auto create
 * @since  1.0, 2013.01.22
 */
class SubusersGetRequest implements RequestInterface
{
    /**
     * 主账号用户名
     **/
    private $userNick;

    private $apiParas = [ ];

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
        return "taobao.subusers.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {
        RequestCheckUtil::checkNotNull($this->userNick, "userNick");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}