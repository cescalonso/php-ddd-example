<?php


namespace CodelyTv\Tests\Backoffice\Logs;


use CodelyTv\Shared\Domain\PublishedLogger;
use CodelyTv\Tests\Shared\Infrastructure\PhpUnit\UnitTestCase;
use Mockery\MockInterface;

abstract class LogsModuleUnitTestCase extends UnitTestCase
{
    private $publishedLogger;

    /** @return PublishedLogger|MockInterface */
    protected function publishedLogger(): MockInterface
    {
        return $this->publishedLogger = $this->publishedLogger ?: $this->mock(PublishedLogger::class);
    }

    public function shouldLog(){

    }

}