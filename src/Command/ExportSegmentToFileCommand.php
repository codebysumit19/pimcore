<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Filesystem\Filesystem;

class SegmentExportController extends FrontendController
{
    #[Route('/api/segments/{key}/members', methods: ['GET'])]
    public function segmentMembersAction(string $key, Request $request): JsonResponse
    {
        $page     = max(1, (int) $request->query->get('page', 1));
        $pageSize = max(1, min(1000, (int) $request->query->get('pageSize', 500)));
        $offset   = ($page - 1) * $pageSize;

        $items = [];

        $list = new DataObject\Customer\Listing();
        $list->setCondition('FIND_IN_SET(?, segments) > 0', [$key]);
        $list->setLimit($pageSize);
        $list->setOffset($offset);

        foreach ($list as $customer) {
            $items[] = [
                'type'          => 'customer',
                'id'            => $customer->getId(),
                'key'           => $customer->getKey(),
                'name'          => $customer->getName(),
                'email'         => $customer->getEmail(),
                'phone'         => $customer->getPhone(),
                'dealerId'      => $customer->getDealerId(),
                'region'        => $customer->getRegion(),
                'territory'     => $customer->getTerritory(),
                'engagementSource' => $customer->getEngagementSource(),
                'segments'      => $customer->getSegments(),
            ];
        }

        // write file as well (same var/export folder)
        $fs        = new Filesystem();
        $exportDir = PIMCORE_PROJECT_ROOT . '/var/export';
        if (!$fs->exists($exportDir)) {
            $fs->mkdir($exportDir);
        }
        $filePath = $exportDir . '/segment_' . $key . '.json';
        $fs->dumpFile($filePath, json_encode($items, JSON_PRETTY_PRINT));

        return new JsonResponse([
            'segmentKey' => $key,
            'page'       => $page,
            'pageSize'   => $pageSize,
            'file'       => $filePath,
            'count'      => count($items),
            'items'      => $items,
        ]);
    }
}
