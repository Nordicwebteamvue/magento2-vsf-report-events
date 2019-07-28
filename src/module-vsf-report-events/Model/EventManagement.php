<?php

namespace Kodbruket\VsfReportEvents\Model;

use Magento\Reports\Observer\EventSaver;

class EventManagement
{
    /**
     * @var EventSaver
     */
    private $eventSaver;

    public function __construct(EventSaver $eventSaver)
    {
        $this->eventSaver = $eventSaver;
    }

    /**
     * {@inheritdoc}
     */
    public function postEvent($eventTypeId, $objectId, $subjectId = null, $subtype = 0)
    {
        $this->eventSaver->save($eventTypeId, $objectId, $subjectId, $subtype);
    }
}
