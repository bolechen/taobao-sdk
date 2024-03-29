<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.wlb.waybill.i.product request
 *
 * @author auto create
 * @since  1.0, 2015.04.03
 */
class WlbWaybillIProductRequest implements RequestInterface
{
    /**
     * 查询物流商电子面单产品类型入参
     **/
    private $waybillProductTypeRequest;

    private $apiParas = [ ];

    public function setWaybillProductTypeRequest($waybillProductTypeRequest)
    {
        $this->waybillProductTypeRequest = $waybillProductTypeRequest;
        $this->apiParas["waybill_product_type_request"] = $waybillProductTypeRequest;
    }

    public function getWaybillProductTypeRequest()
    {
        return $this->waybillProductTypeRequest;
    }

    public function getApiMethodName()
    {
        return "taobao.wlb.waybill.i.product";
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
