<?php

declare(strict_types=1);

namespace Inwebo\OpenResumeModel;

/**
 * Specify any number of social networks that you participate in.
 */
interface ProfileInterface
{
    /**
     * @return string e.g., Facebook or Twitter
     */
    public function getNetwork(): string;

    /**
     * @return string e.g., neutralthoughts
     */
    public function getUserName(): string;

    /**
     * @return string e.g., http://twitter.example.com/neutralthoughts
     */
    public function getUrl(): string;
}
