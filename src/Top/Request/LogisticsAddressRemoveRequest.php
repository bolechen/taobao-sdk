<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.logistics.address.remove request
 *
 * @author auto create
 * @since  1.0, 2016.04.11
 */
class LogisticsAddressRemoveRequest implements RequestInterface
{
    /**
     * 地址库ID
     **/
    private $contactId;

    private $apiParas = [ ];

    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
        $this->apiParas["contact_id"] = $contactId;
    }

    public function getContactId()
    {
        return $this->contactId;
    }

    public function getApiMethodName()
    {
        return "taobao.logistics.address.remove";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->contactId, "contactId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}
