<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.wlb.waybill.i.cancel request
 *
 * @author auto create
 * @since  1.0, 2015.11.03
 */
class WlbWaybillICancelRequest implements RequestInterface
{
    /**
     * 取消接口入参
     **/
    private $waybillApplyCancelRequest;

    private $apiParas = [ ];

    public function setWaybillApplyCancelRequest($waybillApplyCancelRequest)
    {
        $this->waybillApplyCancelRequest = $waybillApplyCancelRequest;
        $this->apiParas["waybill_apply_cancel_request"] = $waybillApplyCancelRequest;
    }

    public function getWaybillApplyCancelRequest()
    {
        return $this->waybillApplyCancelRequest;
    }

    public function getApiMethodName()
    {
        return "taobao.wlb.waybill.i.cancel";
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
