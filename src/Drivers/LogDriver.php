<?php

namespace LaravelAmplitude\Drivers;

use Illuminate\Log\LogManager;

class LogDriver implements AmplitudeDriverInterface
{
    /** @var LogManager */
    private $logger;

    public function __construct(LogManager $logger)
    {
        $this->logger = $logger;
    }

    public function init(string $apiKey, ?string $apiUrl = null)
    {
        $this->logger->info('Laravel Amplitude - Initialized with API Key: '.$apiKey);
    }

    public function setUserId(string $userId)
    {
        $this->logger->info('Laravel Amplitude - Set User ID: '.$userId);
    }

    public function setUserProperties(array $userProperties)
    {
        $this->logger->info('Laravel Amplitude - Set User Properties: '.json_encode($userProperties));
    }

    public function sendEvent(string $name, array $properties = [])
    {
        $this->logger->info(sprintf(
            'Laravel Amplitude - Event Sent - %s - Properties: %s',
            $name,
            json_encode($properties)
        ));
    }

    public function queueEvent(string $name, array $properties = [])
    {
        $this->logger->info(sprintf(
            'Laravel Amplitude - Event Queued - %s - Properties: %s',
            $name,
            json_encode($properties)
        ));
    }

    public function sendQueuedEvents(): void
    {
        $this->logger->info('Laravel Amplitude - Sent all previously queued events');
    }

    public function getDriverName(): string
    {
        return 'log';
    }
}
