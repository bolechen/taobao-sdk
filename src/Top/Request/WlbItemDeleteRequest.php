<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.wlb.item.delete request
 *
 * @author auto create
 * @since  1.0, 2016.03.05
 */
class WlbItemDeleteRequest implements RequestInterface
{
    /**
     * 商品ID
     **/
    private $itemId;

    /**
     * 商品所有人淘宝nick
     **/
    private $userNick;

    private $apiParas = [ ];

    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        $this->apiParas["item_id"] = $itemId;
    }

    public function getItemId()
    {
        return $this->itemId;
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
        return "taobao.wlb.item.delete";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {
        RequestCheckUtil::checkNotNull($this->itemId, "itemId");
        RequestCheckUtil::checkNotNull($this->userNick, "userNick");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}
