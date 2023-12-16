<?php

namespace LaravelAmplitude\Drivers;

class NullDriver implements AmplitudeDriverInterface
{
    public function init(string $apiKey, ?string $apiUrl = null)
    {

    }

    public function setUserId(string $userId)
    {

    }

    public function setUserProperties(array $userProperties)
    {

    }

    public function sendEvent(string $name, array $properties = [])
    {

    }

    public function queueEvent(string $name, array $properties = [])
    {

    }

    public function sendQueuedEvents(): void
    {

    }

    public function getDriverName(): string
    {
        return 'null';
    }
}
