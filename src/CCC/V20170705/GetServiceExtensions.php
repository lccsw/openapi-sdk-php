<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetServiceExtensions
 *
 * @method string getServiceType()
 * @method string getInstanceId()
 */
class GetServiceExtensions extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CCC';

    /**
     * @var string
     */
    public $version = '2017-07-05';

    /**
     * @var string
     */
    public $action = 'GetServiceExtensions';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @deprecated deprecated since version 2.0, Use withServiceType() instead.
     *
     * @param string $serviceType
     *
     * @return $this
     */
    public function setServiceType($serviceType)
    {
        return $this->withServiceType($serviceType);
    }

    /**
     * @param string $serviceType
     *
     * @return $this
     */
    public function withServiceType($serviceType)
    {
        $this->data['ServiceType'] = $serviceType;
        $this->options['query']['ServiceType'] = $serviceType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }
}