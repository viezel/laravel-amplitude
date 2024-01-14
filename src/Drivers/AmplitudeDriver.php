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

    public function init(string $apiKey, ?string $userId = null): self
    {
        $this->instance->init($apiKey, $userId);

        return $this;
    }

    public function setUserId(string $userId): self
    {
        $this->instance->setUserId($userId);

        return $this;
    }

    public function setOptions(array $options): self
    {
        $this->instance->setOptions($options);

        return $this;
    }

    public function setUserProperties(array $userProperties): self
    {
        $this->instance->setUserProperties($userProperties);

        return $this;
    }

    public function sendEvent(string $name, array $properties = []): self
    {
        $this->instance->logEvent(
            $name,
            $properties
        );

        return $this;
    }

    public function queueEvent(string $name, array $properties = []): self
    {
        $this->instance->queueEvent($name, $properties);

        return $this;
    }

    public function sendQueuedEvents(): self
    {
        $this->instance->logQueuedEvents();

        return $this;
    }

    public function getDriverName(): string
    {
        return 'amplitude';
    }
}
