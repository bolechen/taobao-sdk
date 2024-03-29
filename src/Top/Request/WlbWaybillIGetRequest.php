<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.wlb.waybill.i.get request
 *
 * @author auto create
 * @since  1.0, 2016.03.24
 */
class WlbWaybillIGetRequest implements RequestInterface
{
    /**
     * 面单申请
     **/
    private $waybillApplyNewRequest;

    private $apiParas = [ ];

    public function setWaybillApplyNewRequest($waybillApplyNewRequest)
    {
        $this->waybillApplyNewRequest = $waybillApplyNewRequest;
        $this->apiParas["waybill_apply_new_request"] = $waybillApplyNewRequest;
    }

    public function getWaybillApplyNewRequest()
    {
        return $this->waybillApplyNewRequest;
    }

    public function getApiMethodName()
    {
        return "taobao.wlb.waybill.i.get";
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
