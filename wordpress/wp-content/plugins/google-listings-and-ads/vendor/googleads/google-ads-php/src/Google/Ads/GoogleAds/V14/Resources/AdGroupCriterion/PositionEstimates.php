<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/ad_group_criterion.proto

namespace Google\Ads\GoogleAds\V14\Resources\AdGroupCriterion;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Estimates for criterion bids at various positions.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.resources.AdGroupCriterion.PositionEstimates</code>
 */
class PositionEstimates extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The estimate of the CPC bid required for ad to be shown on
     * first page of search results.
     *
     * Generated from protobuf field <code>optional int64 first_page_cpc_micros = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $first_page_cpc_micros = null;
    /**
     * Output only. The estimate of the CPC bid required for ad to be displayed
     * in first position, at the top of the first page of search results.
     *
     * Generated from protobuf field <code>optional int64 first_position_cpc_micros = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $first_position_cpc_micros = null;
    /**
     * Output only. The estimate of the CPC bid required for ad to be displayed
     * at the top of the first page of search results.
     *
     * Generated from protobuf field <code>optional int64 top_of_page_cpc_micros = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $top_of_page_cpc_micros = null;
    /**
     * Output only. Estimate of how many clicks per week you might get by
     * changing your keyword bid to the value in first_position_cpc_micros.
     *
     * Generated from protobuf field <code>optional int64 estimated_add_clicks_at_first_position_cpc = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $estimated_add_clicks_at_first_position_cpc = null;
    /**
     * Output only. Estimate of how your cost per week might change when
     * changing your keyword bid to the value in first_position_cpc_micros.
     *
     * Generated from protobuf field <code>optional int64 estimated_add_cost_at_first_position_cpc = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $estimated_add_cost_at_first_position_cpc = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $first_page_cpc_micros
     *           Output only. The estimate of the CPC bid required for ad to be shown on
     *           first page of search results.
     *     @type int|string $first_position_cpc_micros
     *           Output only. The estimate of the CPC bid required for ad to be displayed
     *           in first position, at the top of the first page of search results.
     *     @type int|string $top_of_page_cpc_micros
     *           Output only. The estimate of the CPC bid required for ad to be displayed
     *           at the top of the first page of search results.
     *     @type int|string $estimated_add_clicks_at_first_position_cpc
     *           Output only. Estimate of how many clicks per week you might get by
     *           changing your keyword bid to the value in first_position_cpc_micros.
     *     @type int|string $estimated_add_cost_at_first_position_cpc
     *           Output only. Estimate of how your cost per week might change when
     *           changing your keyword bid to the value in first_position_cpc_micros.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Resources\AdGroupCriterion::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The estimate of the CPC bid required for ad to be shown on
     * first page of search results.
     *
     * Generated from protobuf field <code>optional int64 first_page_cpc_micros = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getFirstPageCpcMicros()
    {
        return isset($this->first_page_cpc_micros) ? $this->first_page_cpc_micros : 0;
    }

    public function hasFirstPageCpcMicros()
    {
        return isset($this->first_page_cpc_micros);
    }

    public function clearFirstPageCpcMicros()
    {
        unset($this->first_page_cpc_micros);
    }

    /**
     * Output only. The estimate of the CPC bid required for ad to be shown on
     * first page of search results.
     *
     * Generated from protobuf field <code>optional int64 first_page_cpc_micros = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setFirstPageCpcMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->first_page_cpc_micros = $var;

        return $this;
    }

    /**
     * Output only. The estimate of the CPC bid required for ad to be displayed
     * in first position, at the top of the first page of search results.
     *
     * Generated from protobuf field <code>optional int64 first_position_cpc_micros = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getFirstPositionCpcMicros()
    {
        return isset($this->first_position_cpc_micros) ? $this->first_position_cpc_micros : 0;
    }

    public function hasFirstPositionCpcMicros()
    {
        return isset($this->first_position_cpc_micros);
    }

    public function clearFirstPositionCpcMicros()
    {
        unset($this->first_position_cpc_micros);
    }

    /**
     * Output only. The estimate of the CPC bid required for ad to be displayed
     * in first position, at the top of the first page of search results.
     *
     * Generated from protobuf field <code>optional int64 first_position_cpc_micros = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setFirstPositionCpcMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->first_position_cpc_micros = $var;

        return $this;
    }

    /**
     * Output only. The estimate of the CPC bid required for ad to be displayed
     * at the top of the first page of search results.
     *
     * Generated from protobuf field <code>optional int64 top_of_page_cpc_micros = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getTopOfPageCpcMicros()
    {
        return isset($this->top_of_page_cpc_micros) ? $this->top_of_page_cpc_micros : 0;
    }

    public function hasTopOfPageCpcMicros()
    {
        return isset($this->top_of_page_cpc_micros);
    }

    public function clearTopOfPageCpcMicros()
    {
        unset($this->top_of_page_cpc_micros);
    }

    /**
     * Output only. The estimate of the CPC bid required for ad to be displayed
     * at the top of the first page of search results.
     *
     * Generated from protobuf field <code>optional int64 top_of_page_cpc_micros = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTopOfPageCpcMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->top_of_page_cpc_micros = $var;

        return $this;
    }

    /**
     * Output only. Estimate of how many clicks per week you might get by
     * changing your keyword bid to the value in first_position_cpc_micros.
     *
     * Generated from protobuf field <code>optional int64 estimated_add_clicks_at_first_position_cpc = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getEstimatedAddClicksAtFirstPositionCpc()
    {
        return isset($this->estimated_add_clicks_at_first_position_cpc) ? $this->estimated_add_clicks_at_first_position_cpc : 0;
    }

    public function hasEstimatedAddClicksAtFirstPositionCpc()
    {
        return isset($this->estimated_add_clicks_at_first_position_cpc);
    }

    public function clearEstimatedAddClicksAtFirstPositionCpc()
    {
        unset($this->estimated_add_clicks_at_first_position_cpc);
    }

    /**
     * Output only. Estimate of how many clicks per week you might get by
     * changing your keyword bid to the value in first_position_cpc_micros.
     *
     * Generated from protobuf field <code>optional int64 estimated_add_clicks_at_first_position_cpc = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setEstimatedAddClicksAtFirstPositionCpc($var)
    {
        GPBUtil::checkInt64($var);
        $this->estimated_add_clicks_at_first_position_cpc = $var;

        return $this;
    }

    /**
     * Output only. Estimate of how your cost per week might change when
     * changing your keyword bid to the value in first_position_cpc_micros.
     *
     * Generated from protobuf field <code>optional int64 estimated_add_cost_at_first_position_cpc = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getEstimatedAddCostAtFirstPositionCpc()
    {
        return isset($this->estimated_add_cost_at_first_position_cpc) ? $this->estimated_add_cost_at_first_position_cpc : 0;
    }

    public function hasEstimatedAddCostAtFirstPositionCpc()
    {
        return isset($this->estimated_add_cost_at_first_position_cpc);
    }

    public function clearEstimatedAddCostAtFirstPositionCpc()
    {
        unset($this->estimated_add_cost_at_first_position_cpc);
    }

    /**
     * Output only. Estimate of how your cost per week might change when
     * changing your keyword bid to the value in first_position_cpc_micros.
     *
     * Generated from protobuf field <code>optional int64 estimated_add_cost_at_first_position_cpc = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setEstimatedAddCostAtFirstPositionCpc($var)
    {
        GPBUtil::checkInt64($var);
        $this->estimated_add_cost_at_first_position_cpc = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PositionEstimates::class, \Google\Ads\GoogleAds\V14\Resources\AdGroupCriterion_PositionEstimates::class);

