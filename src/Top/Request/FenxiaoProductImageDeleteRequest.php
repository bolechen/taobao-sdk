<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.fenxiao.product.image.delete request
 *
 * @author auto create
 * @since  1.0, 2016.04.11
 */
class FenxiaoProductImageDeleteRequest implements RequestInterface
{
	/**
	 * 图片位置
	 **/
	private $position;

	/**
	 * 产品ID
	 **/
	private $productId;

	/**
	 * properties表示sku图片的属性。key:value形式，key是pid，value是vid。如果position是0的话，则properties需要是必传项
	 **/
	private $properties;

	private $apiParas = [ ];

	public function setPosition($position)
	{
		$this->position = $position;
		$this->apiParas["position"] = $position;
	}

	public function getPosition()
	{
		return $this->position;
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
		return "taobao.fenxiao.product.image.delete";
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{

		RequestCheckUtil::checkNotNull($this->position, "position");
		RequestCheckUtil::checkNotNull($this->productId, "productId");
	}

	public function putOtherTextParam($key, $value)
	{
		$this->apiParas[ $key ] = $value;
		$this->$key = $value;
	}
}
