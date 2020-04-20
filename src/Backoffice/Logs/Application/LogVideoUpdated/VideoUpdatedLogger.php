<?php


namespace CodelyTv\Backoffice\Logs\Application\LogVideoUpdated;


use CodelyTv\Shared\Domain\PublishedLogger;

final class VideoUpdatedLogger
{
    private PublishedLogger $logger;

    public function __construct(PublishedLogger $logger)
    {
        $this->logger = $logger;
    }

    public function __invoke(): void
    {
        $text = '';
        $reference ='';
        $this->logger->log($text, $reference);
    }
}