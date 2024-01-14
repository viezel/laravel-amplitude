<?php

namespace LaravelAmplitude\Drivers;

use Viezel\Amplitude\Amplitude;

class AmplitudeDriver implements AmplitudeDriverInterface
{
    private Amplitude $instance;

    public function __construct(Amplitude $instance)
    {
        $this->instance = $instance;
    }

    public function init(string $apiKey, ?string $apiUrl = null)
    {
        $this->instance->init($apiKey, null, $apiUrl);
    }

    public function setUserId(string $userId): void
    {
        $this->instance->setUserId($userId);
    }

    public function setUserProperties(array $userProperties): void
    {
        $this->instance->setUserProperties($userProperties);
    }

    public function sendEvent(string $name, array $properties = []): void
    {
        $this->instance->logEvent(
            $name,
            $properties
        );
    }

    public function queueEvent(string $name, array $properties = []): void
    {
        $this->instance->queueEvent($name, $properties);
    }

    public function sendQueuedEvents(): void
    {
        $this->instance->logQueuedEvents();
    }

    public function getDriverName(): string
    {
        return 'amplitude';
    }
}
