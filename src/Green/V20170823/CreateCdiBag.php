<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateCdiBag
 *
 * @method string getClientToken()
 * @method string getOrderNum()
 * @method string getCommodityCode()
 * @method string getOwnerId()
 * @method string getFlowOutSpec()
 * @method string getOrderType()
 */
class CreateCdiBag extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Green';

    /**
     * @var string
     */
    public $version = '2017-08-23';

    /**
     * @var string
     */
    public $action = 'CreateCdiBag';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'green';

    /**
     * @deprecated deprecated since version 2.0, Use withClientToken() instead.
     *
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        return $this->withClientToken($clientToken);
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOrderNum() instead.
     *
     * @param string $orderNum
     *
     * @return $this
     */
    public function setOrderNum($orderNum)
    {
        return $this->withOrderNum($orderNum);
    }

    /**
     * @param string $orderNum
     *
     * @return $this
     */
    public function withOrderNum($orderNum)
    {
        $this->data['OrderNum'] = $orderNum;
        $this->options['query']['OrderNum'] = $orderNum;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCommodityCode() instead.
     *
     * @param string $commodityCode
     *
     * @return $this
     */
    public function setCommodityCode($commodityCode)
    {
        return $this->withCommodityCode($commodityCode);
    }

    /**
     * @param string $commodityCode
     *
     * @return $this
     */
    public function withCommodityCode($commodityCode)
    {
        $this->data['CommodityCode'] = $commodityCode;
        $this->options['query']['CommodityCode'] = $commodityCode;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFlowOutSpec() instead.
     *
     * @param string $flowOutSpec
     *
     * @return $this
     */
    public function setFlowOutSpec($flowOutSpec)
    {
        return $this->withFlowOutSpec($flowOutSpec);
    }

    /**
     * @param string $flowOutSpec
     *
     * @return $this
     */
    public function withFlowOutSpec($flowOutSpec)
    {
        $this->data['FlowOutSpec'] = $flowOutSpec;
        $this->options['query']['FlowOutSpec'] = $flowOutSpec;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOrderType() instead.
     *
     * @param string $orderType
     *
     * @return $this
     */
    public function setOrderType($orderType)
    {
        return $this->withOrderType($orderType);
    }

    /**
     * @param string $orderType
     *
     * @return $this
     */
    public function withOrderType($orderType)
    {
        $this->data['OrderType'] = $orderType;
        $this->options['query']['OrderType'] = $orderType;

        return $this;
    }
}
