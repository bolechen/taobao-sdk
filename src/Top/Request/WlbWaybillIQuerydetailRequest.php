<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.wlb.waybill.i.querydetail request
 *
 * @author auto create
 * @since  1.0, 2015.11.03
 */
class WlbWaybillIQuerydetailRequest implements RequestInterface
{
    /**
     * 面单查询请求
     **/
    private $waybillDetailQueryRequest;

    private $apiParas = [ ];

    public function setWaybillDetailQueryRequest($waybillDetailQueryRequest)
    {
        $this->waybillDetailQueryRequest = $waybillDetailQueryRequest;
        $this->apiParas["waybill_detail_query_request"] = $waybillDetailQueryRequest;
    }

    public function getWaybillDetailQueryRequest()
    {
        return $this->waybillDetailQueryRequest;
    }

    public function getApiMethodName()
    {
        return "taobao.wlb.waybill.i.querydetail";
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
