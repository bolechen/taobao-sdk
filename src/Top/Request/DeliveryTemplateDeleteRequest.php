<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.delivery.template.delete request
 *
 * @author auto create
 * @since  1.0, 2016.04.11
 */
class DeliveryTemplateDeleteRequest implements RequestInterface
{
    /**
     * 运费模板ID
     **/
    private $templateId;

    private $apiParas = [ ];

    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;
        $this->apiParas["template_id"] = $templateId;
    }

    public function getTemplateId()
    {
        return $this->templateId;
    }

    public function getApiMethodName()
    {
        return "taobao.delivery.template.delete";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->templateId, "templateId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}
