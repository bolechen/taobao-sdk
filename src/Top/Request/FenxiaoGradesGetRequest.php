<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.fenxiao.grades.get request
 *
 * @author auto create
 * @since  1.0, 2016.04.13
 */
class FenxiaoGradesGetRequest implements RequestInterface
{

	private $apiParas = [ ];

	public function getApiMethodName()
	{
		return "taobao.fenxiao.grades.get";
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
