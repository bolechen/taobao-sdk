<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.tmc.user.topics.get request
 *
 * @author auto create
 * @since  1.0, 2016.03.03
 */
class TmcUserTopicsGetRequest implements RequestInterface
{
    /**
     * 卖家nick
     **/
    private $nick;

    private $apiParas = [ ];

    public function setNick($nick)
    {
        $this->nick = $nick;
        $this->apiParas["nick"] = $nick;
    }

    public function getNick()
    {
        return $this->nick;
    }

    public function getApiMethodName()
    {
        return "taobao.tmc.user.topics.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}
