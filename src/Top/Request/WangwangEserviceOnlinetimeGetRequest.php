<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.wangwang.eservice.onlinetime.get request
 *
 * @author auto create
 * @since  1.0, 2013.11.05
 */
class WangwangEserviceOnlinetimeGetRequest implements RequestInterface
{
    /**
     * 结束日期
     **/
    private $endDate;

    /**
     * 客服人员id：cntaobao+淘宝nick，例如cntaobaotest
     **/
    private $serviceStaffId;

    /**
     * 开始日期
     **/
    private $startDate;

    private $apiParas = [ ];

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        $this->apiParas["end_date"] = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setServiceStaffId($serviceStaffId)
    {
        $this->serviceStaffId = $serviceStaffId;
        $this->apiParas["service_staff_id"] = $serviceStaffId;
    }

    public function getServiceStaffId()
    {
        return $this->serviceStaffId;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        $this->apiParas["start_date"] = $startDate;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function getApiMethodName()
    {
        return "taobao.wangwang.eservice.onlinetime.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {
        RequestCheckUtil::checkNotNull($this->endDate, "endDate");
        RequestCheckUtil::checkNotNull($this->serviceStaffId, "serviceStaffId");
        RequestCheckUtil::checkNotNull($this->startDate, "startDate");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}
