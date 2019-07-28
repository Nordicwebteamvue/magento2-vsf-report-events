<?php

namespace Kodbruket\VsfReportEvents\Api;

interface EventManagementInterface
{
    /**
     * POST for report events API
     * 
     * @param int $eventTypeId
     * @param int $objectId
     * @param int|null $subjectId
     * @param int $subtype
     * 
     * @return string
     */
    public function postEvent($eventTypeId, $objectId, $subjectId = null, $subtype = 0);
}
