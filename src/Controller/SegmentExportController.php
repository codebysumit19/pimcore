<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class SegmentExportController extends FrontendController
{
    /**
     * GET /api/segments
     * Returns list of available segments (keys) that can be exported.
     */
    #[Route('/api/segments', name: 'api_segments_list', methods: ['GET'])]
    public function listSegmentsAction(): JsonResponse
    {
        // Example: segment keys are just distinct values stored in
        // the "segments" multiselect field of Customer/Dealer/Prospects.
        // For a real project you might store segments in a separate class.

        $keys = [];

        // Collect from Customers
        $customers = new DataObject\Customer\Listing();
        foreach ($customers as $customer) {
            foreach ((array) $customer->getSegments() as $seg) {
                $keys[$seg] = true;
            }
        }

        // Collect from Dealers
        $dealers = new DataObject\Dealer\Listing();
        foreach ($dealers as $dealer) {
            foreach ((array) $dealer->getSegments() as $seg) {
                $keys[$seg] = true;
            }
        }

        // Collect from Prospects
        $prospects = new DataObject\Prospects\Listing();
        foreach ($prospects as $prospect) {
            foreach ((array) $prospect->getSegments() as $seg) {
                $keys[$seg] = true;
            }
        }

        $segmentKeys = array_keys($keys);
        sort($segmentKeys);

        return new JsonResponse([
            'segments' => $segmentKeys,
        ]);
    }

    /**
     * GET /api/segments/{key}/members
     * Returns paginated members (customers, dealers, prospects) of a segment.
     *
     * Example:
     *   /api/segments/HighValueCustomers/members?page=1&pageSize=200
     */
    #[Route(
        '/api/segments/{key}/members',
        name: 'api_segment_members',
        methods: ['GET']
    )]
    public function segmentMembersAction(string $key, Request $request): JsonResponse
    {
        $page     = max(1, (int) $request->query->get('page', 1));
        $pageSize = max(1, min(1000, (int) $request->query->get('pageSize', 500)));
        $offset   = ($page - 1) * $pageSize;

        $items = [];

        // 1) Customers in this segment
        $customerList = new DataObject\Customer\Listing();
        $customerList->setCondition('FIND_IN_SET(?, segments) > 0', [$key]);
        $customerList->setLimit($pageSize);
        $customerList->setOffset($offset);

        foreach ($customerList as $customer) {
            $items[] = [
                'type'              => 'customer',
                'id'                => $customer->getId(),
                'key'               => $customer->getKey(),
                'name'              => $customer->getName(),
                'email'             => $customer->getEmail(),
                'phone'             => $customer->getPhone(),
                'dealerId'         => $customer->getDealer_id(),
                'region'           => $customer->getRegion(),
                'territory'        => $customer->getTerritory(),
                'engagementSource' => $customer->getEngagementsource(),
                'segments'         => $customer->getSegments(),

            ];
        }

        // 2) Dealers in this segment
        $dealerList = new DataObject\Dealer\Listing();
        $dealerList->setCondition('FIND_IN_SET(?, segments) > 0', [$key]);
        $dealerList->setLimit($pageSize);
        $dealerList->setOffset($offset);

        foreach ($dealerList as $dealer) {
            $items[] = [
                'type'      => 'dealer',
                'id'        => $dealer->getId(),
                'key'       => $dealer->getKey(),
                'name'      => $dealer->getName(),
                'region'    => $dealer->getRegion(),
                'territory' => $dealer->getTerritory(),
                'segments'  => $dealer->getSegments(),
            ];
        }

        // 3) Prospects in this segment
        $prospectList = new DataObject\Prospects\Listing();
        $prospectList->setCondition('FIND_IN_SET(?, segments) > 0', [$key]);
        $prospectList->setLimit($pageSize);
        $prospectList->setOffset($offset);

        foreach ($prospectList as $prospect) {
            $items[] = [
                'type'              => 'prospect',
                'id'                => $prospect->getId(),
                'key'               => $prospect->getKey(),
                'name'              => $prospect->getName(),
                'email'             => $prospect->getEmail(),
                'phone'             => $prospect->getPhone(),
                'campaignCode'     => $prospect->getCampaignCode(),      // if field is 'campaignCode'
                'engagementSource' => $prospect->getEngagementSource(),  // only if class field is camelCase
                'segments'         => $prospect->getSegments(),

            ];
        }

        return new JsonResponse([
            'segmentKey' => $key,
            'page'       => $page,
            'pageSize'   => $pageSize,
            'count'      => count($items),
            'items'      => $items,
        ]);
    }
}
