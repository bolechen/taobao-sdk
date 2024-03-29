<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.fenxiao.distributors.get request
 *
 * @author auto create
 * @since  1.0, 2016.04.13
 */
class FenxiaoDistributorsGetRequest implements RequestInterface
{
    /**
     * 分销商用户名列表。多个之间以“,”分隔;最多支持50个分销商用户名。
     **/
    private $nicks;

    private $apiParas = [ ];

    public function setNicks($nicks)
    {
        $this->nicks = $nicks;
        $this->apiParas["nicks"] = $nicks;
    }

    public function getNicks()
    {
        return $this->nicks;
    }

    public function getApiMethodName()
    {
        return "taobao.fenxiao.distributors.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->nicks, "nicks");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}
