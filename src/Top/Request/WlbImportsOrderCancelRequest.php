<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.wlb.imports.order.cancel request
 *
 * @author auto create
 * @since  1.0, 2016.01.27
 */
class WlbImportsOrderCancelRequest implements RequestInterface
{
    /**
     * 物流订单编号
     **/
    private $lgorderCode;

    private $apiParas = [ ];

    public function setLgorderCode($lgorderCode)
    {
        $this->lgorderCode = $lgorderCode;
        $this->apiParas["lgorder_code"] = $lgorderCode;
    }

    public function getLgorderCode()
    {
        return $this->lgorderCode;
    }

    public function getApiMethodName()
    {
        return "taobao.wlb.imports.order.cancel";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {
        RequestCheckUtil::checkNotNull($this->lgorderCode, "lgorderCode");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}
