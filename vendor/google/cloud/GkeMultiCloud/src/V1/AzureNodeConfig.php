<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/azure_resources.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters that describe the configuration of all node machines
 * on a given node pool.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.AzureNodeConfig</code>
 */
class AzureNodeConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The Azure VM size name. Example: `Standard_DS2_v2`.
     * See [Supported VM
     * sizes](https://cloud.google.com/anthos/clusters/docs/azure/reference/supported-vms) for options.
     * When unspecified, it defaults to `Standard_DS2_v2`.
     *
     * Generated from protobuf field <code>string vm_size = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $vm_size = '';
    /**
     * Optional. Configuration related to the root volume provisioned for each
     * node pool machine.
     * When unspecified, it defaults to a 32-GiB Azure Disk.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureDiskTemplate root_volume = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $root_volume = null;
    /**
     * Optional. A set of tags to apply to all underlying Azure resources for this node
     * pool. This currently only includes Virtual Machine Scale Sets.
     * Specify at most 50 pairs containing alphanumerics, spaces, and symbols
     * (.+-=_:&#64;/). Keys can be up to 127 Unicode characters. Values can be up to
     * 255 Unicode characters.
     *
     * Generated from protobuf field <code>map<string, string> tags = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $tags;
    /**
     * Optional. The OS image type to use on node pool instances.
     * Can have a value of `ubuntu`, or `windows` if the cluster enables
     * the Windows node pool preview feature.
     * When unspecified, it defaults to `ubuntu`.
     *
     * Generated from protobuf field <code>string image_type = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $image_type = '';
    /**
     * Required. SSH configuration for how to access the node pool machines.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureSshConfig ssh_config = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $ssh_config = null;
    /**
     * Optional. Proxy configuration for outbound HTTP(S) traffic.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureProxyConfig proxy_config = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $proxy_config = null;
    /**
     * Optional. Configuration related to vm config encryption.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureConfigEncryption config_encryption = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $config_encryption = null;
    /**
     * Optional. The initial taints assigned to nodes of this node pool.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkemulticloud.v1.NodeTaint taints = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $taints;
    /**
     * Optional. The initial labels assigned to nodes of this node pool. An object
     * containing a list of "key": value pairs. Example: { "name": "wrench",
     * "mass": "1.3kg", "count": "3" }.
     *
     * Generated from protobuf field <code>map<string, string> labels = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $vm_size
     *           Optional. The Azure VM size name. Example: `Standard_DS2_v2`.
     *           See [Supported VM
     *           sizes](https://cloud.google.com/anthos/clusters/docs/azure/reference/supported-vms) for options.
     *           When unspecified, it defaults to `Standard_DS2_v2`.
     *     @type \Google\Cloud\GkeMultiCloud\V1\AzureDiskTemplate $root_volume
     *           Optional. Configuration related to the root volume provisioned for each
     *           node pool machine.
     *           When unspecified, it defaults to a 32-GiB Azure Disk.
     *     @type array|\Google\Protobuf\Internal\MapField $tags
     *           Optional. A set of tags to apply to all underlying Azure resources for this node
     *           pool. This currently only includes Virtual Machine Scale Sets.
     *           Specify at most 50 pairs containing alphanumerics, spaces, and symbols
     *           (.+-=_:&#64;/). Keys can be up to 127 Unicode characters. Values can be up to
     *           255 Unicode characters.
     *     @type string $image_type
     *           Optional. The OS image type to use on node pool instances.
     *           Can have a value of `ubuntu`, or `windows` if the cluster enables
     *           the Windows node pool preview feature.
     *           When unspecified, it defaults to `ubuntu`.
     *     @type \Google\Cloud\GkeMultiCloud\V1\AzureSshConfig $ssh_config
     *           Required. SSH configuration for how to access the node pool machines.
     *     @type \Google\Cloud\GkeMultiCloud\V1\AzureProxyConfig $proxy_config
     *           Optional. Proxy configuration for outbound HTTP(S) traffic.
     *     @type \Google\Cloud\GkeMultiCloud\V1\AzureConfigEncryption $config_encryption
     *           Optional. Configuration related to vm config encryption.
     *     @type \Google\Cloud\GkeMultiCloud\V1\NodeTaint[]|\Google\Protobuf\Internal\RepeatedField $taints
     *           Optional. The initial taints assigned to nodes of this node pool.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. The initial labels assigned to nodes of this node pool. An object
     *           containing a list of "key": value pairs. Example: { "name": "wrench",
     *           "mass": "1.3kg", "count": "3" }.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AzureResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The Azure VM size name. Example: `Standard_DS2_v2`.
     * See [Supported VM
     * sizes](https://cloud.google.com/anthos/clusters/docs/azure/reference/supported-vms) for options.
     * When unspecified, it defaults to `Standard_DS2_v2`.
     *
     * Generated from protobuf field <code>string vm_size = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getVmSize()
    {
        return $this->vm_size;
    }

    /**
     * Optional. The Azure VM size name. Example: `Standard_DS2_v2`.
     * See [Supported VM
     * sizes](https://cloud.google.com/anthos/clusters/docs/azure/reference/supported-vms) for options.
     * When unspecified, it defaults to `Standard_DS2_v2`.
     *
     * Generated from protobuf field <code>string vm_size = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setVmSize($var)
    {
        GPBUtil::checkString($var, True);
        $this->vm_size = $var;

        return $this;
    }

    /**
     * Optional. Configuration related to the root volume provisioned for each
     * node pool machine.
     * When unspecified, it defaults to a 32-GiB Azure Disk.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureDiskTemplate root_volume = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\AzureDiskTemplate|null
     */
    public function getRootVolume()
    {
        return $this->root_volume;
    }

    public function hasRootVolume()
    {
        return isset($this->root_volume);
    }

    public function clearRootVolume()
    {
        unset($this->root_volume);
    }

    /**
     * Optional. Configuration related to the root volume provisioned for each
     * node pool machine.
     * When unspecified, it defaults to a 32-GiB Azure Disk.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureDiskTemplate root_volume = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\AzureDiskTemplate $var
     * @return $this
     */
    public function setRootVolume($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\AzureDiskTemplate::class);
        $this->root_volume = $var;

        return $this;
    }

    /**
     * Optional. A set of tags to apply to all underlying Azure resources for this node
     * pool. This currently only includes Virtual Machine Scale Sets.
     * Specify at most 50 pairs containing alphanumerics, spaces, and symbols
     * (.+-=_:&#64;/). Keys can be up to 127 Unicode characters. Values can be up to
     * 255 Unicode characters.
     *
     * Generated from protobuf field <code>map<string, string> tags = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Optional. A set of tags to apply to all underlying Azure resources for this node
     * pool. This currently only includes Virtual Machine Scale Sets.
     * Specify at most 50 pairs containing alphanumerics, spaces, and symbols
     * (.+-=_:&#64;/). Keys can be up to 127 Unicode characters. Values can be up to
     * 255 Unicode characters.
     *
     * Generated from protobuf field <code>map<string, string> tags = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setTags($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tags = $arr;

        return $this;
    }

    /**
     * Optional. The OS image type to use on node pool instances.
     * Can have a value of `ubuntu`, or `windows` if the cluster enables
     * the Windows node pool preview feature.
     * When unspecified, it defaults to `ubuntu`.
     *
     * Generated from protobuf field <code>string image_type = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getImageType()
    {
        return $this->image_type;
    }

    /**
     * Optional. The OS image type to use on node pool instances.
     * Can have a value of `ubuntu`, or `windows` if the cluster enables
     * the Windows node pool preview feature.
     * When unspecified, it defaults to `ubuntu`.
     *
     * Generated from protobuf field <code>string image_type = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setImageType($var)
    {
        GPBUtil::checkString($var, True);
        $this->image_type = $var;

        return $this;
    }

    /**
     * Required. SSH configuration for how to access the node pool machines.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureSshConfig ssh_config = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\AzureSshConfig|null
     */
    public function getSshConfig()
    {
        return $this->ssh_config;
    }

    public function hasSshConfig()
    {
        return isset($this->ssh_config);
    }

    public function clearSshConfig()
    {
        unset($this->ssh_config);
    }

    /**
     * Required. SSH configuration for how to access the node pool machines.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureSshConfig ssh_config = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\AzureSshConfig $var
     * @return $this
     */
    public function setSshConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\AzureSshConfig::class);
        $this->ssh_config = $var;

        return $this;
    }

    /**
     * Optional. Proxy configuration for outbound HTTP(S) traffic.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureProxyConfig proxy_config = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\AzureProxyConfig|null
     */
    public function getProxyConfig()
    {
        return $this->proxy_config;
    }

    public function hasProxyConfig()
    {
        return isset($this->proxy_config);
    }

    public function clearProxyConfig()
    {
        unset($this->proxy_config);
    }

    /**
     * Optional. Proxy configuration for outbound HTTP(S) traffic.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureProxyConfig proxy_config = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\AzureProxyConfig $var
     * @return $this
     */
    public function setProxyConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\AzureProxyConfig::class);
        $this->proxy_config = $var;

        return $this;
    }

    /**
     * Optional. Configuration related to vm config encryption.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureConfigEncryption config_encryption = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\AzureConfigEncryption|null
     */
    public function getConfigEncryption()
    {
        return $this->config_encryption;
    }

    public function hasConfigEncryption()
    {
        return isset($this->config_encryption);
    }

    public function clearConfigEncryption()
    {
        unset($this->config_encryption);
    }

    /**
     * Optional. Configuration related to vm config encryption.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureConfigEncryption config_encryption = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\AzureConfigEncryption $var
     * @return $this
     */
    public function setConfigEncryption($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\AzureConfigEncryption::class);
        $this->config_encryption = $var;

        return $this;
    }

    /**
     * Optional. The initial taints assigned to nodes of this node pool.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkemulticloud.v1.NodeTaint taints = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTaints()
    {
        return $this->taints;
    }

    /**
     * Optional. The initial taints assigned to nodes of this node pool.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkemulticloud.v1.NodeTaint taints = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\NodeTaint[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTaints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\GkeMultiCloud\V1\NodeTaint::class);
        $this->taints = $arr;

        return $this;
    }

    /**
     * Optional. The initial labels assigned to nodes of this node pool. An object
     * containing a list of "key": value pairs. Example: { "name": "wrench",
     * "mass": "1.3kg", "count": "3" }.
     *
     * Generated from protobuf field <code>map<string, string> labels = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. The initial labels assigned to nodes of this node pool. An object
     * containing a list of "key": value pairs. Example: { "name": "wrench",
     * "mass": "1.3kg", "count": "3" }.
     *
     * Generated from protobuf field <code>map<string, string> labels = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

