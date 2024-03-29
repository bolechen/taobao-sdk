<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.picture.isreferenced.get request
 *
 * @author auto create
 * @since  1.0, 2013.11.26
 */
class PictureIsreferencedGetRequest implements RequestInterface
{
    /**
     * 图片id
     **/
    private $pictureId;

    private $apiParas = [ ];

    public function setPictureId($pictureId)
    {
        $this->pictureId = $pictureId;
        $this->apiParas["picture_id"] = $pictureId;
    }

    public function getPictureId()
    {
        return $this->pictureId;
    }

    public function getApiMethodName()
    {
        return "taobao.picture.isreferenced.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->pictureId, "pictureId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}
