<?php

namespace LaravelAmplitude;

use LaravelAmplitude\Drivers\AmplitudeDriverInterface;

class Amplitude
{
    private AmplitudeDriverInterface $driver;

    public function __construct(AmplitudeDriverInterface $driver)
    {
        $this->driver = $driver;
    }

    public function init(string $apiKey, ?string $apiUrl = null): void
    {
        $this->driver->init($apiKey, $apiUrl);
    }

    public function setUserId(string $userId): void
    {
        $this->driver->setUserId($userId);
    }

    public function setUserProperties(array $userProperties): void
    {
        $this->driver->setUserProperties($userProperties);
    }

    public function sendEvent(string $name, array $properties = []): void
    {
        $this->driver->sendEvent($name, $properties);
    }

    public function queueEvent(string $name, array $properties = []): void
    {
        $this->driver->queueEvent($name, $properties);
    }

    public function sendQueuedEvents(): void
    {
        $this->driver->sendQueuedEvents();
    }
}
