<?php

namespace RapidWeb\AmazonMwsEnums;

abstract class FeedType
{
    const PRODUCT = '_POST_PRODUCT_DATA_';
    const INVENTORY = '_POST_INVENTORY_AVAILABILITY_DATA_';
    const PRICING = '_POST_PRODUCT_PRICING_DATA_';
    const IMAGES = '_POST_PRODUCT_IMAGE_DATA_';
    const RELATIONSHIPS = '_POST_PRODUCT_RELATIONSHIP_DATA_';
    const OVERRIDES = '_POST_PRODUCT_OVERRIDES_DATA_';
}