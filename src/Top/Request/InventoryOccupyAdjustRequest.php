<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.inventory.occupy.adjust request
 *
 * @author auto create
 * @since  1.0, 2016.03.23
 */
class InventoryOccupyAdjustRequest implements RequestInterface
{
    /**
     * 商家外部订单号
     **/
    private $bizUniqueCode;

    /**
     * 商品初始库存信息： [{ "TBOrderCode":"淘宝交易号","TBSubOrderCode ":"淘宝子交易单号","originalStoreCode":"交易下单的仓库编码","storeCode":"要切换占用到的商家仓库编码"," scItemId ":"商品后端ID","scItemCode":"商品商家编码","inventoryType":"仓储类型","quantity":"新仓库的占用数量，如果不传，则取用原先的占用数"}]
     **/
    private $items;

    /**
     * 业务操作时间
     **/
    private $operateTime;

    /**
     * 订单类型：B2C、B2B
     **/
    private $tbOrderType;

    private $apiParas = [ ];

    public function setBizUniqueCode($bizUniqueCode)
    {
        $this->bizUniqueCode = $bizUniqueCode;
        $this->apiParas["biz_unique_code"] = $bizUniqueCode;
    }

    public function getBizUniqueCode()
    {
        return $this->bizUniqueCode;
    }

    public function setItems($items)
    {
        $this->items = $items;
        $this->apiParas["items"] = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setOperateTime($operateTime)
    {
        $this->operateTime = $operateTime;
        $this->apiParas["operate_time"] = $operateTime;
    }

    public function getOperateTime()
    {
        return $this->operateTime;
    }

    public function setTbOrderType($tbOrderType)
    {
        $this->tbOrderType = $tbOrderType;
        $this->apiParas["tb_order_type"] = $tbOrderType;
    }

    public function getTbOrderType()
    {
        return $this->tbOrderType;
    }

    public function getApiMethodName()
    {
        return "taobao.inventory.occupy.adjust";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->bizUniqueCode, "bizUniqueCode");
        RequestCheckUtil::checkNotNull($this->items, "items");
        RequestCheckUtil::checkNotNull($this->operateTime, "operateTime");
        RequestCheckUtil::checkNotNull($this->tbOrderType, "tbOrderType");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}
