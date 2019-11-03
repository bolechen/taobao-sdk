<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.wlb.orderstatus.get request
 *
 * @author auto create
 * @since  1.0, 2016.04.11
 */
class WlbOrderstatusGetRequest implements RequestInterface
{
    /**
     * 物流宝订单编码
     **/
    private $orderCode;

    private $apiParas = [ ];

    public function setOrderCode($orderCode)
    {
        $this->orderCode = $orderCode;
        $this->apiParas["order_code"] = $orderCode;
    }

    public function getOrderCode()
    {
        return $this->orderCode;
    }

    public function getApiMethodName()
    {
        return "taobao.wlb.orderstatus.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {
        RequestCheckUtil::checkNotNull($this->orderCode, "orderCode");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}
