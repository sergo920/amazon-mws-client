<?php

namespace MCS;

use Exception;

class MWSEndPoint
{
    const FINANCES_API_PATH = '/Finances/2015-05-01';

    const SUBSCRIPTIONS_API_PATH = '/Subscriptions/2013-07-01';

    const REPORTS_API_PATH = '/Reports/2009-01-01';

    public static $endpoints = [
        /** Subscriptions API section */
        'RegisterDestination' => [
            'method' => 'POST',
            'action' => 'RegisterDestination',
            'path' => self::SUBSCRIPTIONS_API_PATH,
            'date' => '2013-07-01'
        ],
        'GetSubscriptions' => [
            'method' => 'POST',
            'action' => 'ListSubscriptions',
            'path' => self::SUBSCRIPTIONS_API_PATH,
            'date' => '2013-07-01'
        ],
        'GetDestinations' => [
            'method' => 'POST',
            'action' => 'ListRegisteredDestinations',
            'path' => self::SUBSCRIPTIONS_API_PATH,
            'date' => '2013-07-01'
        ],
        'DeregisterDestination' => [
            'method' => 'POST',
            'action' => 'DeregisterDestination',
            'path' => self::SUBSCRIPTIONS_API_PATH,
            'date' => '2013-07-01'
        ],
        'DeleteSubscription' => [
            'method' => 'POST',
            'action' => 'DeleteSubscription',
            'path' => self::SUBSCRIPTIONS_API_PATH,
            'date' => '2013-07-01'
        ],
        'CreateSubscription' => [
            'method' => 'POST',
            'action' => 'CreateSubscription',
            'path' => self::SUBSCRIPTIONS_API_PATH,
            'date' => '2013-07-01'
        ],
        /** end Subscriptions API section */
        'ListRecommendations' => [
            'method' => 'POST',
            'action' => 'ListRecommendations',
            'path' => '/Recommendations/2013-04-01',
            'date' => '2013-04-01'
        ],
        'ListMarketplaceParticipations' => [
            'method' => 'POST',
            'action' => 'ListMarketplaceParticipations',
            'path' => '/Sellers/2011-07-01',
            'date' => '2011-07-01'
        ],
        'GetMyPriceForSKU' => [
            'method' => 'POST',
            'action' => 'GetMyPriceForSKU',
            'path' => '/Products/2011-10-01',
            'date' => '2011-10-01'
        ],
        'GetMyPriceForASIN' => [
            'method' => 'POST',
            'action' => 'GetMyPriceForASIN',
            'path' => '/Products/2011-10-01',
            'date' => '2011-10-01'
        ],
        'GetProductCategoriesForSKU' => [
            'method' => 'POST',
            'action' => 'GetProductCategoriesForSKU',
            'path' => '/Products/2011-10-01',
            'date' => '2011-10-01'
        ],
        'GetProductCategoriesForASIN' => [
            'method' => 'POST',
            'action' => 'GetProductCategoriesForASIN',
            'path' => '/Products/2011-10-01',
            'date' => '2011-10-01'
        ],
        'GetCompetitivePricingForSKU' => [
            'method' => 'POST',
            'action' => 'GetCompetitivePricingForSKU',
            'path' => '/Products/2011-10-01',
            'date' => '2011-10-01'
        ],
        'GetFeedSubmissionResult' => [
            'method' => 'POST',
            'action' => 'GetFeedSubmissionResult',
            'path' => '/',
            'date' => '2009-01-01'
        ],
        /**  Reports API section **/
        'GetReportScheduleList' => [
            'method' => 'POST',
            'action' => 'GetReportScheduleList',
            'path' => self::REPORTS_API_PATH,
            'date' => '2009-01-01'
        ],
        'ManageReportSchedule' => [
            'method' => 'POST',
            'action' => 'ManageReportSchedule',
            'path' => self::REPORTS_API_PATH,
            'date' => '2009-01-01'
        ],
        'GetReportList' => [
            'method' => 'POST',
            'action' => 'GetReportList',
            'path' => self::REPORTS_API_PATH,
            'date' => '2009-01-01'
        ],
        'GetReportListByNextToken' => [
            'method' => 'POST',
            'action' => 'GetReportListByNextToken',
            'path' => self::REPORTS_API_PATH,
            'date' => '2009-01-01'
        ],
        'GetReportRequestList' => [
            'method' => 'POST',
            'action' => 'GetReportRequestList',
            'path' => self::REPORTS_API_PATH,
            'date' => '2009-01-01'
        ],
        'GetReport' => [
            'method' => 'POST',
            'action' => 'GetReport',
            'path' => self::REPORTS_API_PATH,
            'date' => '2009-01-01'
        ],
        'RequestReport' => [
            'method' => 'POST',
            'action' => 'RequestReport',
            'path' => self::REPORTS_API_PATH,
            'date' => '2009-01-01'
        ],
        /**  Inventory API section **/
        'ListInventorySupply' => [
            'method' => 'POST',
            'action' => 'ListInventorySupply',
            'path' => '/FulfillmentInventory',
            'date' => '2010-10-01'
        ],
        'ListOrders' => [
            'method' => 'POST',
            'action' => 'ListOrders',
            'path' => '/Orders/2013-09-01',
            'date' => '2013-09-01'
        ],
        'ListOrdersByNextToken' => [
            'method' => 'POST',
            'action' => 'ListOrdersByNextToken',
            'path' => '/Orders/2013-09-01',
            'date' => '2013-09-01'
        ],
        'ListOrderItems' => [
            'method' => 'POST',
            'action' => 'ListOrderItems',
            'path' => '/Orders/2013-09-01',
            'date' => '2013-09-01'
        ],
        'GetOrder' => [
            'method' => 'POST',
            'action' => 'GetOrder',
            'path' => '/Orders/2013-09-01',
            'date' => '2013-09-01'
        ],
        'SubmitFeed' => [
            'method' => 'POST',
            'action' => 'SubmitFeed',
            'path' => '/',
            'date' => '2009-01-01'
        ],
        'GetMatchingProductForId' => [
            'method' => 'POST',
            'action' => 'GetMatchingProductForId',
            'path' => '/Products/2011-10-01',
            'date' => '2011-10-01'
        ],
        'ListMatchingProducts' => [
            'method' => 'POST',
            'action' => 'ListMatchingProducts',
            'path' => '/Products/2011-10-01',
            'date' => '2011-10-01'
        ],
        'GetCompetitivePricingForASIN' => [
            'method' => 'POST',
            'action' => 'GetCompetitivePricingForASIN',
            'path' => '/Products/2011-10-01',
            'date' => '2011-10-01'
        ],
        'GetLowestOfferListingsForASIN' => [
            'method' => 'POST',
            'action' => 'GetLowestOfferListingsForASIN',
            'path' => '/Products/2011-10-01',
            'date' => '2011-10-01'
        ],
        'GetLowestPricedOffersForASIN' => [
            'method' => 'POST',
            'action' => 'GetLowestPricedOffersForASIN',
            'path' => '/Products/2011-10-01',
            'date' => '2011-10-01'
        ],
        /**  Finances API section **/
        'ListFinancialEvents' => [
            'method' => 'POST',
            'action' => 'ListFinancialEvents',
            'path' => self::FINANCES_API_PATH,
            'date' => '2015-05-01'
        ],
        'ListFinancialEventsByNextToken' => [
            'method' => 'POST',
            'action' => 'ListFinancialEventsByNextToken',
            'path' => self::FINANCES_API_PATH,
            'date' => '2015-05-01'
        ]
    ];

    public static function get($key)
    {
        if (isset(self::$endpoints[$key])) {
            return self::$endpoints[$key];
        } else {
            throw new Exception('Call to undefined endpoint ' . $key);
        }
    }
}
