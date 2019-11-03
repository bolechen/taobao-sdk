<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.item.update.delisting request
 *
 * @author auto create
 * @since  1.0, 2015.01.19
 */
class ItemUpdateDelistingRequest implements RequestInterface
{
    /**
     * 商品数字ID，该参数必须
     **/
    private $numIid;

    private $apiParas = [ ];

    public function setNumIid($numIid)
    {
        $this->numIid = $numIid;
        $this->apiParas["num_iid"] = $numIid;
    }

    public function getNumIid()
    {
        return $this->numIid;
    }

    public function getApiMethodName()
    {
        return "taobao.item.update.delisting";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->numIid, "numIid");
        RequestCheckUtil::checkMinValue($this->numIid, 0, "numIid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}
