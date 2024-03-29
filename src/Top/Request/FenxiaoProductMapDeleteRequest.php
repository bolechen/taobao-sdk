<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.fenxiao.product.map.delete request
 *
 * @author auto create
 * @since  1.0, 2016.04.13
 */
class FenxiaoProductMapDeleteRequest implements RequestInterface
{
    /**
     * 分销产品id。
     **/
    private $productId;

    /**
     * 分销产品的sku id列表，逗号分隔，在有sku时需要指定。
     **/
    private $skuIds;

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

    public function setSkuIds($skuIds)
    {
        $this->skuIds = $skuIds;
        $this->apiParas["sku_ids"] = $skuIds;
    }

    public function getSkuIds()
    {
        return $this->skuIds;
    }

    public function getApiMethodName()
    {
        return "taobao.fenxiao.product.map.delete";
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
