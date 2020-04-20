<?php


namespace CodelyTv\Shared\Domain;


interface PublishedLogger
{
    /**
     * @param PublishedText $text
     * @param PublishedReference $reference
     */
    public function log(PublishedText $text, PublishedReference $reference): void;
}