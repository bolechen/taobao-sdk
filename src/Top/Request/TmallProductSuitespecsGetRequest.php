<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: tmall.product.suitespecs.get request
 *
 * @author auto create
 * @since  1.0, 2016.04.13
 */
class TmallProductSuitespecsGetRequest implements RequestInterface
{
    /**
     * 类目的ID号，该id必须和properties同时传入。
     * 而且只有当product_id不传入的时候才起效果。
     **/
    private $catId;

    /**
     * 产品的ID。这个不能和properties和cat_id同时起效果
     **/
    private $productId;

    /**
     * 关键属性的字符串，pid:vid;pid:vid
     * 该字段必须和cat_id同时传入才起效果。 而且只有当product_id不传入的时候才起效果。
     **/
    private $properties;

    private $apiParas = [ ];

    public function setCatId($catId)
    {
        $this->catId = $catId;
        $this->apiParas["cat_id"] = $catId;
    }

    public function getCatId()
    {
        return $this->catId;
    }

    public function setProductId($productId)
    {
        $this->productId = $productId;
        $this->apiParas["product_id"] = $productId;
    }

    public function getProductId()
    {
        return $this->productId;
    }

    public function setProperties($properties)
    {
        $this->properties = $properties;
        $this->apiParas["properties"] = $properties;
    }

    public function getProperties()
    {
        return $this->properties;
    }

    public function getApiMethodName()
    {
        return "tmall.product.suitespecs.get";
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
