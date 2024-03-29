<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.wlb.item.combination.delete request
 *
 * @author auto create
 * @since  1.0, 2016.03.05
 */
class WlbItemCombinationDeleteRequest implements RequestInterface
{
    /**
     * 组合商品的id列表
     **/
    private $destItemList;

    /**
     * 组合关系的商品id
     **/
    private $itemId;

    private $apiParas = [ ];

    public function setDestItemList($destItemList)
    {
        $this->destItemList = $destItemList;
        $this->apiParas["dest_item_list"] = $destItemList;
    }

    public function getDestItemList()
    {
        return $this->destItemList;
    }

    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        $this->apiParas["item_id"] = $itemId;
    }

    public function getItemId()
    {
        return $this->itemId;
    }

    public function getApiMethodName()
    {
        return "taobao.wlb.item.combination.delete";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {
        RequestCheckUtil::checkNotNull($this->destItemList, "destItemList");
        RequestCheckUtil::checkMaxListSize($this->destItemList, 20, "destItemList");
        RequestCheckUtil::checkNotNull($this->itemId, "itemId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}
