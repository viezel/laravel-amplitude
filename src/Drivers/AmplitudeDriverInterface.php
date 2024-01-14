<?php

namespace LaravelAmplitude\Drivers;

interface AmplitudeDriverInterface
{
    public function init(string $apiKey, ?string $userId = null): self;

    public function setUserId(string $userId): self;

    public function setOptions(array $options): self;

    public function setUserProperties(array $userProperties): self;

    public function sendEvent(string $name, array $properties = []): self;

    public function queueEvent(string $name, array $properties = []): self;

    public function sendQueuedEvents(): self;

    public function getDriverName(): string;
}
