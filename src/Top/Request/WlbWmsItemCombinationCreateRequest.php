<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.wlb.wms.item.combination.create request
 *
 * @author auto create
 * @since  1.0, 2016.05.17
 */
class WlbWmsItemCombinationCreateRequest implements RequestInterface
{
    /**
     * 组合商品ID
     **/
    private $itemId;

    /**
     * 子货品列表
     **/
    private $subItemList;

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

    public function setSubItemList($subItemList)
    {
        $this->subItemList = $subItemList;
        $this->apiParas["sub_item_list"] = $subItemList;
    }

    public function getSubItemList()
    {
        return $this->subItemList;
    }

    public function getApiMethodName()
    {
        return "taobao.wlb.wms.item.combination.create";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {
        RequestCheckUtil::checkNotNull($this->itemId, "itemId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}
