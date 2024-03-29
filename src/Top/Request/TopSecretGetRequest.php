<?php
namespace Lonquan\TaobaoSDK\Top\Request;

use Lonquan\TaobaoSDK\Top\RequestCheckUtil;
use Lonquan\TaobaoSDK\Top\RequestInterface;

/**
 * TOP API: taobao.top.secret.get request
 *
 * @author auto create
 * @since  1.0, 2016.04.06
 */
class TopSecretGetRequest implements RequestInterface
{
    /**
     * 伪随机数
     **/
    private $randomNum;

    /**
     * 秘钥版本号
     **/
    private $secretVersion;

    private $apiParas = [ ];

    public function setRandomNum($randomNum)
    {
        $this->randomNum = $randomNum;
        $this->apiParas["random_num"] = $randomNum;
    }

    public function getRandomNum()
    {
        return $this->randomNum;
    }

    public function setSecretVersion($secretVersion)
    {
        $this->secretVersion = $secretVersion;
        $this->apiParas["secret_version"] = $secretVersion;
    }

    public function getSecretVersion()
    {
        return $this->secretVersion;
    }

    public function getApiMethodName()
    {
        return "taobao.top.secret.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {
        RequestCheckUtil::checkNotNull($this->randomNum, "randomNum");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[ $key ] = $value;
        $this->$key = $value;
    }
}
