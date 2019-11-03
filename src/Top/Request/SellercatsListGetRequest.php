<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.sellercats.list.get request
 *
 * @author auto create
 * @since  1.0, 2016.03.17
 */
class SellercatsListGetRequest implements RequestInterface
{
    /**
     * fields参数
     **/
    private $fields;

    /**
     * 卖家昵称
     **/
    private $nick;

    private $apiParas = [ ];

    public function setFields($fields)
    {
        $this->fields = $fields;
        $this->apiParas["fields"] = $fields;
    }

    public function getFields()
    {
        return $this->fields;
    }

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
        return "taobao.sellercats.list.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkMaxListSize($this->fields, 20, "fields");
        RequestCheckUtil::checkNotNull($this->nick, "nick");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}
