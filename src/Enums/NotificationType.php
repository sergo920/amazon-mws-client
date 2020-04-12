<?php
/**
 * Created by PhpStorm.
 * User: sergo
 * Date: 4/12/20
 * Time: 5:33 PM
 */

namespace MCS\Enums;


class NotificationType
{
    const REPORT_PROCESSING_FINISHED = 'ReportProcessingFinished';
    const FULFILLMENT_ORDER_STATUS = 'FulfillmentOrderStatus';
    const FEE_PROMOTION = 'FeePromotion';
    const FBA_OUTBOUND_SHIPMENT_STATUS = 'FBAOutboundShipmentStatus';
    const FEED_PROCESSING_FINISHED = 'FeedProcessingFinished';
    const ANY_OFFER_CHANGED = 'AnyOfferChanged';
}
