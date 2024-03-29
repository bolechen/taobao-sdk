<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.httpdns.get request
 *
 * @author auto create
 * @since  1.0, 2016.03.24
 */
class HttpdnsGetRequest implements RequestInterface
{

	private $apiParas = [ ];

	public function getApiMethodName()
	{
		return "taobao.httpdns.get";
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
