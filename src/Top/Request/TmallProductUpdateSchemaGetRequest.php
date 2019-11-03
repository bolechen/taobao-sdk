<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: tmall.product.update.schema.get request
 *
 * @author auto create
 * @since  1.0, 2016.02.29
 */
class TmallProductUpdateSchemaGetRequest implements RequestInterface
{
    /**
     * 产品编号
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
        return "tmall.product.update.schema.get";
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