<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.fenxiao.order.message.add request
 *
 * @author auto create
 * @since  1.0, 2016.04.13
 */
class FenxiaoOrderMessageAddRequest implements RequestInterface
{
    /**
     * 留言内容
     **/
    private $message;

    /**
     * 采购单id
     **/
    private $purchaseOrderId;

    private $apiParas = [ ];

    public function setMessage($message)
    {
        $this->message = $message;
        $this->apiParas["message"] = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setPurchaseOrderId($purchaseOrderId)
    {
        $this->purchaseOrderId = $purchaseOrderId;
        $this->apiParas["purchase_order_id"] = $purchaseOrderId;
    }

    public function getPurchaseOrderId()
    {
        return $this->purchaseOrderId;
    }

    public function getApiMethodName()
    {
        return "taobao.fenxiao.order.message.add";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->message, "message");
        RequestCheckUtil::checkNotNull($this->purchaseOrderId, "purchaseOrderId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}
