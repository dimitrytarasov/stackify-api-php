<?php

namespace Stackify\Log\MessageBuilder;

interface BuilderInterface
{
    /**
     * @return string
     */
    public function getSyslogMessage($logEvent);
}