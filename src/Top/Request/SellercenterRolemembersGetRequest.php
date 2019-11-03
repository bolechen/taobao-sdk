<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.sellercenter.rolemembers.get request
 *
 * @author auto create
 * @since  1.0, 2016.03.05
 */
class SellercenterRolemembersGetRequest implements RequestInterface
{
    /**
     * 角色id
     **/
    private $roleId;

    private $apiParas = [ ];

    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;
        $this->apiParas["role_id"] = $roleId;
    }

    public function getRoleId()
    {
        return $this->roleId;
    }

    public function getApiMethodName()
    {
        return "taobao.sellercenter.rolemembers.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->roleId, "roleId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}
