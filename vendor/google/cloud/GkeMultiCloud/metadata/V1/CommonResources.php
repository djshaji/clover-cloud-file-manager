<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/common_resources.proto

namespace GPBMetadata\Google\Cloud\Gkemulticloud\V1;

class CommonResources
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�	
4google/cloud/gkemulticloud/v1/common_resources.protogoogle.cloud.gkemulticloud.v1google/protobuf/timestamp.proto"^
WorkloadIdentityConfig

issuer_uri (	
workload_pool (	
identity_provider (	"3
MaxPodsConstraint
max_pods_per_node (B�A"�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
status_detail (	B�A
error_detail (	B�A"�
	NodeTaint
key (	B�A
value (	B�AD
effect (2/.google.cloud.gkemulticloud.v1.NodeTaint.EffectB�A"Y
Effect
EFFECT_UNSPECIFIED 
NO_SCHEDULE
PREFER_NO_SCHEDULE

NO_EXECUTE"6
Fleet
project (	B�A

membership (	B�A"`
LoggingConfigO
component_config (25.google.cloud.gkemulticloud.v1.LoggingComponentConfig"�
LoggingComponentConfigZ
enable_components (2?.google.cloud.gkemulticloud.v1.LoggingComponentConfig.Component"L
	Component
COMPONENT_UNSPECIFIED 
SYSTEM_COMPONENTS
	WORKLOADSB�
!com.google.cloud.gkemulticloud.v1BCommonResourcesProtoPZJgoogle.golang.org/genproto/googleapis/cloud/gkemulticloud/v1;gkemulticloud�Google.Cloud.GkeMultiCloud.V1�Google\\Cloud\\GkeMultiCloud\\V1� Google::Cloud::GkeMultiCloud::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

