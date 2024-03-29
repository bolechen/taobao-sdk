<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.fenxiao.grade.add request
 *
 * @author auto create
 * @since  1.0, 2016.04.13
 */
class FenxiaoGradeAddRequest implements RequestInterface
{
    /**
     * 等级名称，等级名称不可重复
     **/
    private $name;

    private $apiParas = [ ];

    public function setName($name)
    {
        $this->name = $name;
        $this->apiParas["name"] = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getApiMethodName()
    {
        return "taobao.fenxiao.grade.add";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->name, "name");
        RequestCheckUtil::checkMaxLength($this->name, 20, "name");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}
