<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.trade.postage.update request
 *
 * @author auto create
 * @since  1.0, 2015.11.10
 */
class TradePostageUpdateRequest implements RequestInterface
{
    /**
     * 邮费价格(邮费单位是元）
     **/
    private $postFee;

    /**
     * 主订单编号
     **/
    private $tid;

    private $apiParas = [ ];

    public function setPostFee($postFee)
    {
        $this->postFee = $postFee;
        $this->apiParas["post_fee"] = $postFee;
    }

    public function getPostFee()
    {
        return $this->postFee;
    }

    public function setTid($tid)
    {
        $this->tid = $tid;
        $this->apiParas["tid"] = $tid;
    }

    public function getTid()
    {
        return $this->tid;
    }

    public function getApiMethodName()
    {
        return "taobao.trade.postage.update";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {
        RequestCheckUtil::checkNotNull($this->postFee, "postFee");
        RequestCheckUtil::checkNotNull($this->tid, "tid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}
