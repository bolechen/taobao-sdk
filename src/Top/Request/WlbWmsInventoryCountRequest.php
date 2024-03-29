<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.wlb.wms.inventory.count request
 *
 * @author auto create
 * @since  1.0, 2016.05.30
 */
class WlbWmsInventoryCountRequest implements RequestInterface
{
    /**
     * 损益单回传信息
     **/
    private $content;

    private $apiParas = [ ];

    public function setContent($content)
    {
        $this->content = $content;
        $this->apiParas["content"] = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getApiMethodName()
    {
        return "taobao.wlb.wms.inventory.count";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}
