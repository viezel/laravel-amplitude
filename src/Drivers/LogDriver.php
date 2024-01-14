<?php

namespace LaravelAmplitude\Drivers;

use Illuminate\Log\LogManager;

class LogDriver implements AmplitudeDriverInterface
{
    private LogManager $logger;

    public function __construct(LogManager $logger)
    {
        $this->logger = $logger;
    }

    public function init(string $apiKey, ?string $userId = null): self
    {
        $this->logger->info('Laravel Amplitude - Initialized with API Key: '.$apiKey);

        return $this;
    }

    public function setUserId(string $userId): self
    {
        $this->logger->info('Laravel Amplitude - Set User ID: '.$userId);

        return $this;
    }

    public function setOptions(array $options): self
    {
        $this->logger->info('Laravel Amplitude - Set Options: '.json_encode($options));

        return $this;
    }

    public function setUserProperties(array $userProperties): self
    {
        $this->logger->info('Laravel Amplitude - Set User Properties: '.json_encode($userProperties));

        return $this;
    }

    public function sendEvent(string $name, array $properties = []): self
    {
        $this->logger->info(sprintf(
            'Laravel Amplitude - Event Sent - %s - Properties: %s',
            $name,
            json_encode($properties)
        ));

        return $this;
    }

    public function queueEvent(string $name, array $properties = []): self
    {
        $this->logger->info(sprintf(
            'Laravel Amplitude - Event Queued - %s - Properties: %s',
            $name,
            json_encode($properties)
        ));

        return $this;
    }

    public function sendQueuedEvents(): self
    {
        $this->logger->info('Laravel Amplitude - Sent all previously queued events');

        return $this;
    }

    public function getDriverName(): string
    {
        return 'log';
    }
}
