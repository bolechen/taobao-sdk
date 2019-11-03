<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.fenxiao.grade.delete request
 *
 * @author auto create
 * @since  1.0, 2016.04.11
 */
class FenxiaoGradeDeleteRequest implements RequestInterface
{
    /**
     * 等级ID
     **/
    private $gradeId;

    private $apiParas = [ ];

    public function setGradeId($gradeId)
    {
        $this->gradeId = $gradeId;
        $this->apiParas["grade_id"] = $gradeId;
    }

    public function getGradeId()
    {
        return $this->gradeId;
    }

    public function getApiMethodName()
    {
        return "taobao.fenxiao.grade.delete";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {
        RequestCheckUtil::checkNotNull($this->gradeId, "gradeId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}
