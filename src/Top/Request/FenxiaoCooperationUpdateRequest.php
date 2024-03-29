<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.fenxiao.cooperation.update request
 *
 * @author auto create
 * @since  1.0, 2016.03.05
 */
class FenxiaoCooperationUpdateRequest implements RequestInterface
{
    /**
     * 分销商ID
     **/
    private $distributorId;

    /**
     * 等级ID(0代表取消)
     **/
    private $gradeId;

    /**
     * 分销方式(新增)： AGENT(代销)、DEALER(经销)(默认为代销)
     **/
    private $tradeType;

    private $apiParas = [ ];

    public function setDistributorId($distributorId)
    {
        $this->distributorId = $distributorId;
        $this->apiParas["distributor_id"] = $distributorId;
    }

    public function getDistributorId()
    {
        return $this->distributorId;
    }

    public function setGradeId($gradeId)
    {
        $this->gradeId = $gradeId;
        $this->apiParas["grade_id"] = $gradeId;
    }

    public function getGradeId()
    {
        return $this->gradeId;
    }

    public function setTradeType($tradeType)
    {
        $this->tradeType = $tradeType;
        $this->apiParas["trade_type"] = $tradeType;
    }

    public function getTradeType()
    {
        return $this->tradeType;
    }

    public function getApiMethodName()
    {
        return "taobao.fenxiao.cooperation.update";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->distributorId, "distributorId");
        RequestCheckUtil::checkNotNull($this->gradeId, "gradeId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}
