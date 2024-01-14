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

    public function init(string $apiKey, ?string $userId = null): AmplitudeDriverInterface
    {
        return $this->driver->init($apiKey, $userId);
    }

    public function setUserId(string $userId): AmplitudeDriverInterface
    {
        return $this->driver->setUserId($userId);
    }

    public function setOptions(array $options): AmplitudeDriverInterface
    {
        return $this->driver->setOptions($options);
    }

    public function setUserProperties(array $userProperties): AmplitudeDriverInterface
    {
        return $this->driver->setUserProperties($userProperties);
    }

    public function sendEvent(string $name, array $properties = []): AmplitudeDriverInterface
    {
        return $this->driver->sendEvent($name, $properties);
    }

    public function queueEvent(string $name, array $properties = []): AmplitudeDriverInterface
    {
        return $this->driver->queueEvent($name, $properties);
    }

    public function sendQueuedEvents(): AmplitudeDriverInterface
    {
        return $this->driver->sendQueuedEvents();
    }

    public function getDriverName(): string
    {
        return $this->driver->getDriverName();
    }
}
