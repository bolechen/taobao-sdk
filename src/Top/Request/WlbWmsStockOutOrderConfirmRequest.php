<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.wlb.wms.stock.out.order.confirm request
 *
 * @author auto create
 * @since  1.0, 2015.07.27
 */
class WlbWmsStockOutOrderConfirmRequest implements RequestInterface
{
    /**
     * 出库订单确认信息
     **/
    private $content;

    private $apiParas = [ ];

    public function setContent($content)
    {
        $this->content = $content;
        $this->apiParas["content"] = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getApiMethodName()
    {
        return "taobao.wlb.wms.stock.out.order.confirm";
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
