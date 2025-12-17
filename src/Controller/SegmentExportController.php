<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class SegmentExportController extends FrontendController
{
    #[Route('/api/segments', methods: ['GET'])]
    public function listSegmentsAction(): JsonResponse
    {
        // Example: segments stored as DataObject\Segment, adjust to your model
        $list = new DataObject\Segment\Listing();
        $data = [];

        foreach ($list as $segment) {
            $data[] = [
                'id'          => $segment->getId(),
                'key'         => $segment->getKey(),
                'name'        => $segment->getName(),
                'description' => $segment->getDescription(),
                'type'        => $segment->getType(), // e.g. customer/dealer/prospect
            ];
        }

        return new JsonResponse($data);
    }

    #[Route('/api/segments/{key}/members', methods: ['GET'])]
    public function segmentMembersAction(string $key, Request $request): JsonResponse
    {
        $page     = max(1, (int) $request->query->get('page', 1));
        $pageSize = max(1, min(1000, (int) $request->query->get('pageSize', 500)));

        // Example: segments applied via a field "segments" (multiselect) on your
        // Customers / Dealers / Prospects classes, using the segment key.
        $offset = ($page - 1) * $pageSize;

        $customers = new DataObject\Customer\Listing();
        $customers->setCondition('FIND_IN_SET(?, segments) > 0', [$key]);
        $customers->setLimit($pageSize);
        $customers->setOffset($offset);

        $items = [];
        foreach ($customers as $customer) {
            $items[] = [
                'id'            => $customer->getId(),
                'key'           => $customer->getKey(),
                'type'          => 'customer',
                'name'          => $customer->getName(),
                'email'         => $customer->getEmail(),
                'phone'         => $customer->getPhone(),
                'dealerId'      => $customer->getDealerId(),
                'region'        => $customer->getRegion(),
                'territory'     => $customer->getTerritory(),
                'engagementSource' => $customer->getEngagementSource(),
            ];
        }

        // You can repeat similar blocks for Dealers and Prospects and merge them
        // into $items depending on the segment type needed for each downstream system.

        return new JsonResponse([
            'segmentKey' => $key,
            'page'       => $page,
            'pageSize'   => $pageSize,
            'count'      => count($items),
            'items'      => $items,
        ]);
    }
}
