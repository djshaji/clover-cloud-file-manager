<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/environment.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes one particular pool of Cloud Dataflow workers to be
 * instantiated by the Cloud Dataflow service in order to perform the
 * computations required by a job.  Note that a workflow job may use
 * multiple pools, in order to match the various computational
 * requirements of the various stages of the job.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.WorkerPool</code>
 */
class WorkerPool extends \Google\Protobuf\Internal\Message
{
    /**
     * The kind of the worker pool; currently only `harness` and `shuffle`
     * are supported.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     */
    private $kind = '';
    /**
     * Number of Google Compute Engine workers in this pool needed to
     * execute the job.  If zero or unspecified, the service will
     * attempt to choose a reasonable default.
     *
     * Generated from protobuf field <code>int32 num_workers = 2;</code>
     */
    private $num_workers = 0;
    /**
     * Packages to be installed on workers.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.Package packages = 3;</code>
     */
    private $packages;
    /**
     * The default package set to install.  This allows the service to
     * select a default set of packages which are useful to worker
     * harnesses written in a particular language.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.DefaultPackageSet default_package_set = 4;</code>
     */
    private $default_package_set = 0;
    /**
     * Machine type (e.g. "n1-standard-1").  If empty or unspecified, the
     * service will attempt to choose a reasonable default.
     *
     * Generated from protobuf field <code>string machine_type = 5;</code>
     */
    private $machine_type = '';
    /**
     * Sets the policy for determining when to turndown worker pool.
     * Allowed values are: `TEARDOWN_ALWAYS`, `TEARDOWN_ON_SUCCESS`, and
     * `TEARDOWN_NEVER`.
     * `TEARDOWN_ALWAYS` means workers are always torn down regardless of whether
     * the job succeeds. `TEARDOWN_ON_SUCCESS` means workers are torn down
     * if the job succeeds. `TEARDOWN_NEVER` means the workers are never torn
     * down.
     * If the workers are not torn down by the service, they will
     * continue to run and use Google Compute Engine VM resources in the
     * user's project until they are explicitly terminated by the user.
     * Because of this, Google recommends using the `TEARDOWN_ALWAYS`
     * policy except for small, manually supervised test jobs.
     * If unknown or unspecified, the service will attempt to choose a reasonable
     * default.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.TeardownPolicy teardown_policy = 6;</code>
     */
    private $teardown_policy = 0;
    /**
     * Size of root disk for VMs, in GB.  If zero or unspecified, the service will
     * attempt to choose a reasonable default.
     *
     * Generated from protobuf field <code>int32 disk_size_gb = 7;</code>
     */
    private $disk_size_gb = 0;
    /**
     * Type of root disk for VMs.  If empty or unspecified, the service will
     * attempt to choose a reasonable default.
     *
     * Generated from protobuf field <code>string disk_type = 16;</code>
     */
    private $disk_type = '';
    /**
     * Fully qualified source image for disks.
     *
     * Generated from protobuf field <code>string disk_source_image = 8;</code>
     */
    private $disk_source_image = '';
    /**
     * Zone to run the worker pools in.  If empty or unspecified, the service
     * will attempt to choose a reasonable default.
     *
     * Generated from protobuf field <code>string zone = 9;</code>
     */
    private $zone = '';
    /**
     * Settings passed through to Google Compute Engine workers when
     * using the standard Dataflow task runner.  Users should ignore
     * this field.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.TaskRunnerSettings taskrunner_settings = 10;</code>
     */
    private $taskrunner_settings = null;
    /**
     * The action to take on host maintenance, as defined by the Google
     * Compute Engine API.
     *
     * Generated from protobuf field <code>string on_host_maintenance = 11;</code>
     */
    private $on_host_maintenance = '';
    /**
     * Data disks that are used by a VM in this workflow.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.Disk data_disks = 12;</code>
     */
    private $data_disks;
    /**
     * Metadata to set on the Google Compute Engine VMs.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 13;</code>
     */
    private $metadata;
    /**
     * Settings for autoscaling of this WorkerPool.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.AutoscalingSettings autoscaling_settings = 14;</code>
     */
    private $autoscaling_settings = null;
    /**
     * Extra arguments for this worker pool.
     *
     * Generated from protobuf field <code>.google.protobuf.Any pool_args = 15;</code>
     */
    private $pool_args = null;
    /**
     * Network to which VMs will be assigned.  If empty or unspecified,
     * the service will use the network "default".
     *
     * Generated from protobuf field <code>string network = 17;</code>
     */
    private $network = '';
    /**
     * Subnetwork to which VMs will be assigned, if desired.  Expected to be of
     * the form "regions/REGION/subnetworks/SUBNETWORK".
     *
     * Generated from protobuf field <code>string subnetwork = 19;</code>
     */
    private $subnetwork = '';
    /**
     * Required. Docker container image that executes the Cloud Dataflow worker
     * harness, residing in Google Container Registry.
     * Deprecated for the Fn API path. Use sdk_harness_container_images instead.
     *
     * Generated from protobuf field <code>string worker_harness_container_image = 18;</code>
     */
    private $worker_harness_container_image = '';
    /**
     * The number of threads per worker harness. If empty or unspecified, the
     * service will choose a number of threads (according to the number of cores
     * on the selected machine type for batch, or 1 by convention for streaming).
     *
     * Generated from protobuf field <code>int32 num_threads_per_worker = 20;</code>
     */
    private $num_threads_per_worker = 0;
    /**
     * Configuration for VM IPs.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.WorkerIPAddressConfiguration ip_configuration = 21;</code>
     */
    private $ip_configuration = 0;
    /**
     * Set of SDK harness containers needed to execute this pipeline. This will
     * only be set in the Fn API path. For non-cross-language pipelines this
     * should have only one entry. Cross-language pipelines will have two or more
     * entries.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.SdkHarnessContainerImage sdk_harness_container_images = 22;</code>
     */
    private $sdk_harness_container_images;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kind
     *           The kind of the worker pool; currently only `harness` and `shuffle`
     *           are supported.
     *     @type int $num_workers
     *           Number of Google Compute Engine workers in this pool needed to
     *           execute the job.  If zero or unspecified, the service will
     *           attempt to choose a reasonable default.
     *     @type \Google\Cloud\Dataflow\V1beta3\Package[]|\Google\Protobuf\Internal\RepeatedField $packages
     *           Packages to be installed on workers.
     *     @type int $default_package_set
     *           The default package set to install.  This allows the service to
     *           select a default set of packages which are useful to worker
     *           harnesses written in a particular language.
     *     @type string $machine_type
     *           Machine type (e.g. "n1-standard-1").  If empty or unspecified, the
     *           service will attempt to choose a reasonable default.
     *     @type int $teardown_policy
     *           Sets the policy for determining when to turndown worker pool.
     *           Allowed values are: `TEARDOWN_ALWAYS`, `TEARDOWN_ON_SUCCESS`, and
     *           `TEARDOWN_NEVER`.
     *           `TEARDOWN_ALWAYS` means workers are always torn down regardless of whether
     *           the job succeeds. `TEARDOWN_ON_SUCCESS` means workers are torn down
     *           if the job succeeds. `TEARDOWN_NEVER` means the workers are never torn
     *           down.
     *           If the workers are not torn down by the service, they will
     *           continue to run and use Google Compute Engine VM resources in the
     *           user's project until they are explicitly terminated by the user.
     *           Because of this, Google recommends using the `TEARDOWN_ALWAYS`
     *           policy except for small, manually supervised test jobs.
     *           If unknown or unspecified, the service will attempt to choose a reasonable
     *           default.
     *     @type int $disk_size_gb
     *           Size of root disk for VMs, in GB.  If zero or unspecified, the service will
     *           attempt to choose a reasonable default.
     *     @type string $disk_type
     *           Type of root disk for VMs.  If empty or unspecified, the service will
     *           attempt to choose a reasonable default.
     *     @type string $disk_source_image
     *           Fully qualified source image for disks.
     *     @type string $zone
     *           Zone to run the worker pools in.  If empty or unspecified, the service
     *           will attempt to choose a reasonable default.
     *     @type \Google\Cloud\Dataflow\V1beta3\TaskRunnerSettings $taskrunner_settings
     *           Settings passed through to Google Compute Engine workers when
     *           using the standard Dataflow task runner.  Users should ignore
     *           this field.
     *     @type string $on_host_maintenance
     *           The action to take on host maintenance, as defined by the Google
     *           Compute Engine API.
     *     @type \Google\Cloud\Dataflow\V1beta3\Disk[]|\Google\Protobuf\Internal\RepeatedField $data_disks
     *           Data disks that are used by a VM in this workflow.
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *           Metadata to set on the Google Compute Engine VMs.
     *     @type \Google\Cloud\Dataflow\V1beta3\AutoscalingSettings $autoscaling_settings
     *           Settings for autoscaling of this WorkerPool.
     *     @type \Google\Protobuf\Any $pool_args
     *           Extra arguments for this worker pool.
     *     @type string $network
     *           Network to which VMs will be assigned.  If empty or unspecified,
     *           the service will use the network "default".
     *     @type string $subnetwork
     *           Subnetwork to which VMs will be assigned, if desired.  Expected to be of
     *           the form "regions/REGION/subnetworks/SUBNETWORK".
     *     @type string $worker_harness_container_image
     *           Required. Docker container image that executes the Cloud Dataflow worker
     *           harness, residing in Google Container Registry.
     *           Deprecated for the Fn API path. Use sdk_harness_container_images instead.
     *     @type int $num_threads_per_worker
     *           The number of threads per worker harness. If empty or unspecified, the
     *           service will choose a number of threads (according to the number of cores
     *           on the selected machine type for batch, or 1 by convention for streaming).
     *     @type int $ip_configuration
     *           Configuration for VM IPs.
     *     @type \Google\Cloud\Dataflow\V1beta3\SdkHarnessContainerImage[]|\Google\Protobuf\Internal\RepeatedField $sdk_harness_container_images
     *           Set of SDK harness containers needed to execute this pipeline. This will
     *           only be set in the Fn API path. For non-cross-language pipelines this
     *           should have only one entry. Cross-language pipelines will have two or more
     *           entries.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Environment::initOnce();
        parent::__construct($data);
    }

    /**
     * The kind of the worker pool; currently only `harness` and `shuffle`
     * are supported.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * The kind of the worker pool; currently only `harness` and `shuffle`
     * are supported.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Number of Google Compute Engine workers in this pool needed to
     * execute the job.  If zero or unspecified, the service will
     * attempt to choose a reasonable default.
     *
     * Generated from protobuf field <code>int32 num_workers = 2;</code>
     * @return int
     */
    public function getNumWorkers()
    {
        return $this->num_workers;
    }

    /**
     * Number of Google Compute Engine workers in this pool needed to
     * execute the job.  If zero or unspecified, the service will
     * attempt to choose a reasonable default.
     *
     * Generated from protobuf field <code>int32 num_workers = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNumWorkers($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_workers = $var;

        return $this;
    }

    /**
     * Packages to be installed on workers.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.Package packages = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPackages()
    {
        return $this->packages;
    }

    /**
     * Packages to be installed on workers.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.Package packages = 3;</code>
     * @param \Google\Cloud\Dataflow\V1beta3\Package[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPackages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataflow\V1beta3\Package::class);
        $this->packages = $arr;

        return $this;
    }

    /**
     * The default package set to install.  This allows the service to
     * select a default set of packages which are useful to worker
     * harnesses written in a particular language.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.DefaultPackageSet default_package_set = 4;</code>
     * @return int
     */
    public function getDefaultPackageSet()
    {
        return $this->default_package_set;
    }

    /**
     * The default package set to install.  This allows the service to
     * select a default set of packages which are useful to worker
     * harnesses written in a particular language.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.DefaultPackageSet default_package_set = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setDefaultPackageSet($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataflow\V1beta3\DefaultPackageSet::class);
        $this->default_package_set = $var;

        return $this;
    }

    /**
     * Machine type (e.g. "n1-standard-1").  If empty or unspecified, the
     * service will attempt to choose a reasonable default.
     *
     * Generated from protobuf field <code>string machine_type = 5;</code>
     * @return string
     */
    public function getMachineType()
    {
        return $this->machine_type;
    }

    /**
     * Machine type (e.g. "n1-standard-1").  If empty or unspecified, the
     * service will attempt to choose a reasonable default.
     *
     * Generated from protobuf field <code>string machine_type = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setMachineType($var)
    {
        GPBUtil::checkString($var, True);
        $this->machine_type = $var;

        return $this;
    }

    /**
     * Sets the policy for determining when to turndown worker pool.
     * Allowed values are: `TEARDOWN_ALWAYS`, `TEARDOWN_ON_SUCCESS`, and
     * `TEARDOWN_NEVER`.
     * `TEARDOWN_ALWAYS` means workers are always torn down regardless of whether
     * the job succeeds. `TEARDOWN_ON_SUCCESS` means workers are torn down
     * if the job succeeds. `TEARDOWN_NEVER` means the workers are never torn
     * down.
     * If the workers are not torn down by the service, they will
     * continue to run and use Google Compute Engine VM resources in the
     * user's project until they are explicitly terminated by the user.
     * Because of this, Google recommends using the `TEARDOWN_ALWAYS`
     * policy except for small, manually supervised test jobs.
     * If unknown or unspecified, the service will attempt to choose a reasonable
     * default.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.TeardownPolicy teardown_policy = 6;</code>
     * @return int
     */
    public function getTeardownPolicy()
    {
        return $this->teardown_policy;
    }

    /**
     * Sets the policy for determining when to turndown worker pool.
     * Allowed values are: `TEARDOWN_ALWAYS`, `TEARDOWN_ON_SUCCESS`, and
     * `TEARDOWN_NEVER`.
     * `TEARDOWN_ALWAYS` means workers are always torn down regardless of whether
     * the job succeeds. `TEARDOWN_ON_SUCCESS` means workers are torn down
     * if the job succeeds. `TEARDOWN_NEVER` means the workers are never torn
     * down.
     * If the workers are not torn down by the service, they will
     * continue to run and use Google Compute Engine VM resources in the
     * user's project until they are explicitly terminated by the user.
     * Because of this, Google recommends using the `TEARDOWN_ALWAYS`
     * policy except for small, manually supervised test jobs.
     * If unknown or unspecified, the service will attempt to choose a reasonable
     * default.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.TeardownPolicy teardown_policy = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setTeardownPolicy($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataflow\V1beta3\TeardownPolicy::class);
        $this->teardown_policy = $var;

        return $this;
    }

    /**
     * Size of root disk for VMs, in GB.  If zero or unspecified, the service will
     * attempt to choose a reasonable default.
     *
     * Generated from protobuf field <code>int32 disk_size_gb = 7;</code>
     * @return int
     */
    public function getDiskSizeGb()
    {
        return $this->disk_size_gb;
    }

    /**
     * Size of root disk for VMs, in GB.  If zero or unspecified, the service will
     * attempt to choose a reasonable default.
     *
     * Generated from protobuf field <code>int32 disk_size_gb = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setDiskSizeGb($var)
    {
        GPBUtil::checkInt32($var);
        $this->disk_size_gb = $var;

        return $this;
    }

    /**
     * Type of root disk for VMs.  If empty or unspecified, the service will
     * attempt to choose a reasonable default.
     *
     * Generated from protobuf field <code>string disk_type = 16;</code>
     * @return string
     */
    public function getDiskType()
    {
        return $this->disk_type;
    }

    /**
     * Type of root disk for VMs.  If empty or unspecified, the service will
     * attempt to choose a reasonable default.
     *
     * Generated from protobuf field <code>string disk_type = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setDiskType($var)
    {
        GPBUtil::checkString($var, True);
        $this->disk_type = $var;

        return $this;
    }

    /**
     * Fully qualified source image for disks.
     *
     * Generated from protobuf field <code>string disk_source_image = 8;</code>
     * @return string
     */
    public function getDiskSourceImage()
    {
        return $this->disk_source_image;
    }

    /**
     * Fully qualified source image for disks.
     *
     * Generated from protobuf field <code>string disk_source_image = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setDiskSourceImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->disk_source_image = $var;

        return $this;
    }

    /**
     * Zone to run the worker pools in.  If empty or unspecified, the service
     * will attempt to choose a reasonable default.
     *
     * Generated from protobuf field <code>string zone = 9;</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Zone to run the worker pools in.  If empty or unspecified, the service
     * will attempt to choose a reasonable default.
     *
     * Generated from protobuf field <code>string zone = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * Settings passed through to Google Compute Engine workers when
     * using the standard Dataflow task runner.  Users should ignore
     * this field.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.TaskRunnerSettings taskrunner_settings = 10;</code>
     * @return \Google\Cloud\Dataflow\V1beta3\TaskRunnerSettings|null
     */
    public function getTaskrunnerSettings()
    {
        return $this->taskrunner_settings;
    }

    public function hasTaskrunnerSettings()
    {
        return isset($this->taskrunner_settings);
    }

    public function clearTaskrunnerSettings()
    {
        unset($this->taskrunner_settings);
    }

    /**
     * Settings passed through to Google Compute Engine workers when
     * using the standard Dataflow task runner.  Users should ignore
     * this field.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.TaskRunnerSettings taskrunner_settings = 10;</code>
     * @param \Google\Cloud\Dataflow\V1beta3\TaskRunnerSettings $var
     * @return $this
     */
    public function setTaskrunnerSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataflow\V1beta3\TaskRunnerSettings::class);
        $this->taskrunner_settings = $var;

        return $this;
    }

    /**
     * The action to take on host maintenance, as defined by the Google
     * Compute Engine API.
     *
     * Generated from protobuf field <code>string on_host_maintenance = 11;</code>
     * @return string
     */
    public function getOnHostMaintenance()
    {
        return $this->on_host_maintenance;
    }

    /**
     * The action to take on host maintenance, as defined by the Google
     * Compute Engine API.
     *
     * Generated from protobuf field <code>string on_host_maintenance = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setOnHostMaintenance($var)
    {
        GPBUtil::checkString($var, True);
        $this->on_host_maintenance = $var;

        return $this;
    }

    /**
     * Data disks that are used by a VM in this workflow.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.Disk data_disks = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDataDisks()
    {
        return $this->data_disks;
    }

    /**
     * Data disks that are used by a VM in this workflow.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.Disk data_disks = 12;</code>
     * @param \Google\Cloud\Dataflow\V1beta3\Disk[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDataDisks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataflow\V1beta3\Disk::class);
        $this->data_disks = $arr;

        return $this;
    }

    /**
     * Metadata to set on the Google Compute Engine VMs.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 13;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Metadata to set on the Google Compute Engine VMs.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 13;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;

        return $this;
    }

    /**
     * Settings for autoscaling of this WorkerPool.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.AutoscalingSettings autoscaling_settings = 14;</code>
     * @return \Google\Cloud\Dataflow\V1beta3\AutoscalingSettings|null
     */
    public function getAutoscalingSettings()
    {
        return $this->autoscaling_settings;
    }

    public function hasAutoscalingSettings()
    {
        return isset($this->autoscaling_settings);
    }

    public function clearAutoscalingSettings()
    {
        unset($this->autoscaling_settings);
    }

    /**
     * Settings for autoscaling of this WorkerPool.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.AutoscalingSettings autoscaling_settings = 14;</code>
     * @param \Google\Cloud\Dataflow\V1beta3\AutoscalingSettings $var
     * @return $this
     */
    public function setAutoscalingSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataflow\V1beta3\AutoscalingSettings::class);
        $this->autoscaling_settings = $var;

        return $this;
    }

    /**
     * Extra arguments for this worker pool.
     *
     * Generated from protobuf field <code>.google.protobuf.Any pool_args = 15;</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getPoolArgs()
    {
        return $this->pool_args;
    }

    public function hasPoolArgs()
    {
        return isset($this->pool_args);
    }

    public function clearPoolArgs()
    {
        unset($this->pool_args);
    }

    /**
     * Extra arguments for this worker pool.
     *
     * Generated from protobuf field <code>.google.protobuf.Any pool_args = 15;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setPoolArgs($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->pool_args = $var;

        return $this;
    }

    /**
     * Network to which VMs will be assigned.  If empty or unspecified,
     * the service will use the network "default".
     *
     * Generated from protobuf field <code>string network = 17;</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Network to which VMs will be assigned.  If empty or unspecified,
     * the service will use the network "default".
     *
     * Generated from protobuf field <code>string network = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * Subnetwork to which VMs will be assigned, if desired.  Expected to be of
     * the form "regions/REGION/subnetworks/SUBNETWORK".
     *
     * Generated from protobuf field <code>string subnetwork = 19;</code>
     * @return string
     */
    public function getSubnetwork()
    {
        return $this->subnetwork;
    }

    /**
     * Subnetwork to which VMs will be assigned, if desired.  Expected to be of
     * the form "regions/REGION/subnetworks/SUBNETWORK".
     *
     * Generated from protobuf field <code>string subnetwork = 19;</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnetwork = $var;

        return $this;
    }

    /**
     * Required. Docker container image that executes the Cloud Dataflow worker
     * harness, residing in Google Container Registry.
     * Deprecated for the Fn API path. Use sdk_harness_container_images instead.
     *
     * Generated from protobuf field <code>string worker_harness_container_image = 18;</code>
     * @return string
     */
    public function getWorkerHarnessContainerImage()
    {
        return $this->worker_harness_container_image;
    }

    /**
     * Required. Docker container image that executes the Cloud Dataflow worker
     * harness, residing in Google Container Registry.
     * Deprecated for the Fn API path. Use sdk_harness_container_images instead.
     *
     * Generated from protobuf field <code>string worker_harness_container_image = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setWorkerHarnessContainerImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->worker_harness_container_image = $var;

        return $this;
    }

    /**
     * The number of threads per worker harness. If empty or unspecified, the
     * service will choose a number of threads (according to the number of cores
     * on the selected machine type for batch, or 1 by convention for streaming).
     *
     * Generated from protobuf field <code>int32 num_threads_per_worker = 20;</code>
     * @return int
     */
    public function getNumThreadsPerWorker()
    {
        return $this->num_threads_per_worker;
    }

    /**
     * The number of threads per worker harness. If empty or unspecified, the
     * service will choose a number of threads (according to the number of cores
     * on the selected machine type for batch, or 1 by convention for streaming).
     *
     * Generated from protobuf field <code>int32 num_threads_per_worker = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setNumThreadsPerWorker($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_threads_per_worker = $var;

        return $this;
    }

    /**
     * Configuration for VM IPs.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.WorkerIPAddressConfiguration ip_configuration = 21;</code>
     * @return int
     */
    public function getIpConfiguration()
    {
        return $this->ip_configuration;
    }

    /**
     * Configuration for VM IPs.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.WorkerIPAddressConfiguration ip_configuration = 21;</code>
     * @param int $var
     * @return $this
     */
    public function setIpConfiguration($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataflow\V1beta3\WorkerIPAddressConfiguration::class);
        $this->ip_configuration = $var;

        return $this;
    }

    /**
     * Set of SDK harness containers needed to execute this pipeline. This will
     * only be set in the Fn API path. For non-cross-language pipelines this
     * should have only one entry. Cross-language pipelines will have two or more
     * entries.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.SdkHarnessContainerImage sdk_harness_container_images = 22;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSdkHarnessContainerImages()
    {
        return $this->sdk_harness_container_images;
    }

    /**
     * Set of SDK harness containers needed to execute this pipeline. This will
     * only be set in the Fn API path. For non-cross-language pipelines this
     * should have only one entry. Cross-language pipelines will have two or more
     * entries.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.SdkHarnessContainerImage sdk_harness_container_images = 22;</code>
     * @param \Google\Cloud\Dataflow\V1beta3\SdkHarnessContainerImage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSdkHarnessContainerImages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataflow\V1beta3\SdkHarnessContainerImage::class);
        $this->sdk_harness_container_images = $arr;

        return $this;
    }

}

