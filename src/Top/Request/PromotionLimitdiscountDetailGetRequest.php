<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.promotion.limitdiscount.detail.get request
 *
 * @author auto create
 * @since  1.0, 2016.03.05
 */
class PromotionLimitdiscountDetailGetRequest implements RequestInterface
{
    /**
     * 限时打折ID。这个针对查询唯一限时打折情况。
     **/
    private $limitDiscountId;

    private $apiParas = [ ];

    public function setLimitDiscountId($limitDiscountId)
    {
        $this->limitDiscountId = $limitDiscountId;
        $this->apiParas["limit_discount_id"] = $limitDiscountId;
    }

    public function getLimitDiscountId()
    {
        return $this->limitDiscountId;
    }

    public function getApiMethodName()
    {
        return "taobao.promotion.limitdiscount.detail.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->limitDiscountId, "limitDiscountId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}
