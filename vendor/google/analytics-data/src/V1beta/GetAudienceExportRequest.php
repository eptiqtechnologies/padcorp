<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1beta/analytics_data_api.proto

namespace Google\Analytics\Data\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to retrieve configuration metadata about a specific audience
 * export.
 *
 * Generated from protobuf message <code>google.analytics.data.v1beta.GetAudienceExportRequest</code>
 */
class GetAudienceExportRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The audience export resource name.
     * Format: `properties/{property}/audienceExports/{audience_export}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. The audience export resource name.
     *                     Format: `properties/{property}/audienceExports/{audience_export}`
     *                     Please see {@see BetaAnalyticsDataClient::audienceExportName()} for help formatting this field.
     *
     * @return \Google\Analytics\Data\V1beta\GetAudienceExportRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The audience export resource name.
     *           Format: `properties/{property}/audienceExports/{audience_export}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Beta\AnalyticsDataApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The audience export resource name.
     * Format: `properties/{property}/audienceExports/{audience_export}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The audience export resource name.
     * Format: `properties/{property}/audienceExports/{audience_export}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

