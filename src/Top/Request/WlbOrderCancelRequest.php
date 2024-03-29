<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.wlb.order.cancel request
 *
 * @author auto create
 * @since  1.0, 2016.04.14
 */
class WlbOrderCancelRequest implements RequestInterface
{
    /**
     * 物流宝订单编号
     **/
    private $wlbOrderCode;

    private $apiParas = [ ];

    public function setWlbOrderCode($wlbOrderCode)
    {
        $this->wlbOrderCode = $wlbOrderCode;
        $this->apiParas["wlb_order_code"] = $wlbOrderCode;
    }

    public function getWlbOrderCode()
    {
        return $this->wlbOrderCode;
    }

    public function getApiMethodName()
    {
        return "taobao.wlb.order.cancel";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {
        RequestCheckUtil::checkNotNull($this->wlbOrderCode, "wlbOrderCode");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}
