<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.wlb.wlborder.get request
 *
 * @author auto create
 * @since  1.0, 2016.01.12
 */
class WlbWlborderGetRequest implements RequestInterface
{
    /**
     * 物流宝订单编码
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
        return "taobao.wlb.wlborder.get";
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
