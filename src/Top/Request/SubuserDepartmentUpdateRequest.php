<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.subuser.department.update request
 *
 * @author auto create
 * @since  1.0, 2016.03.05
 */
class SubuserDepartmentUpdateRequest implements RequestInterface
{
    /**
     * 部门ID
     **/
    private $departmentId;

    /**
     * 部门名称
     **/
    private $departmentName;

    /**
     * 父部门ID 如果是最高部门则传入0
     **/
    private $parentId;

    /**
     * 主账号用户名
     **/
    private $userNick;

    private $apiParas = [ ];

    public function setDepartmentId($departmentId)
    {
        $this->departmentId = $departmentId;
        $this->apiParas["department_id"] = $departmentId;
    }

    public function getDepartmentId()
    {
        return $this->departmentId;
    }

    public function setDepartmentName($departmentName)
    {
        $this->departmentName = $departmentName;
        $this->apiParas["department_name"] = $departmentName;
    }

    public function getDepartmentName()
    {
        return $this->departmentName;
    }

    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
        $this->apiParas["parent_id"] = $parentId;
    }

    public function getParentId()
    {
        return $this->parentId;
    }

    public function setUserNick($userNick)
    {
        $this->userNick = $userNick;
        $this->apiParas["user_nick"] = $userNick;
    }

    public function getUserNick()
    {
        return $this->userNick;
    }

    public function getApiMethodName()
    {
        return "taobao.subuser.department.update";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->departmentId, "departmentId");
        RequestCheckUtil::checkNotNull($this->userNick, "userNick");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}
