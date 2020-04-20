<?php

namespace CodelyTv\Tests\Backoffice\Logs\Application\LogVideoUpdated;

use CodelyTv\Backoffice\Logs\Application\LogVideoUpdated\VideoUpdatedLogger;
use CodelyTv\Tests\Backoffice\Logs\LogsModuleUnitTestCase;

class VideoUpdatedLoggerTest extends LogsModuleUnitTestCase
{
    private $videoPublishedLogger;

    public function setUp(): void
    {
        $this->videoPublishedLogger = new VideoUpdatedLogger($this->publishedLogger());
    }

    /** @test */
    public function should_log_when_a_video_is_updated(): void
    {
        $this->shouldLog();
        $this->videoPublishedLogger->__invoke();
    }
}
