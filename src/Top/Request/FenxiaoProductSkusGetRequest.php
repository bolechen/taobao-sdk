<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.fenxiao.product.skus.get request
 *
 * @author auto create
 * @since  1.0, 2014.12.12
 */
class FenxiaoProductSkusGetRequest implements RequestInterface
{
    /**
     * 产品ID
     **/
    private $productId;

    private $apiParas = [ ];

    public function setProductId($productId)
    {
        $this->productId = $productId;
        $this->apiParas["product_id"] = $productId;
    }

    public function getProductId()
    {
        return $this->productId;
    }

    public function getApiMethodName()
    {
        return "taobao.fenxiao.product.skus.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->productId, "productId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}
