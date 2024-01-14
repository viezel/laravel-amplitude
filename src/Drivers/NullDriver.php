<?php

namespace LaravelAmplitude\Drivers;

class NullDriver implements AmplitudeDriverInterface
{
    public function init(string $apiKey, ?string $userId = null): self
    {
        return $this;
    }

    public function setUserId(string $userId): self
    {
        return $this;
    }

    public function setOptions(array $options): self
    {
        return $this;
    }

    public function setUserProperties(array $userProperties): self
    {
        return $this;
    }

    public function sendEvent(string $name, array $properties = []): self
    {
        return $this;
    }

    public function queueEvent(string $name, array $properties = []): self
    {
        return $this;
    }

    public function sendQueuedEvents(): self
    {
        return $this;
    }

    public function getDriverName(): string
    {
        return 'null';
    }
}
