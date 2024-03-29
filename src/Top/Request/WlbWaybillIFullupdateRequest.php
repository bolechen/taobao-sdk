<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.wlb.waybill.i.fullupdate request
 *
 * @author auto create
 * @since  1.0, 2015.11.03
 */
class WlbWaybillIFullupdateRequest implements RequestInterface
{
    /**
     * 更新面单信息请求
     **/
    private $waybillApplyFullUpdateRequest;

    private $apiParas = [ ];

    public function setWaybillApplyFullUpdateRequest($waybillApplyFullUpdateRequest)
    {
        $this->waybillApplyFullUpdateRequest = $waybillApplyFullUpdateRequest;
        $this->apiParas["waybill_apply_full_update_request"] = $waybillApplyFullUpdateRequest;
    }

    public function getWaybillApplyFullUpdateRequest()
    {
        return $this->waybillApplyFullUpdateRequest;
    }

    public function getApiMethodName()
    {
        return "taobao.wlb.waybill.i.fullupdate";
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
