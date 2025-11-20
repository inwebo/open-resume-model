<?php

declare(strict_types=1);

namespace Inwebo\OpenResumeModel;

/**
 * Specify any awards you have received throughout your professional career.
 */
interface AwardInterface
{
    /**
     * @return string e.g., One of the 100 greatest minds of the century.
     */
    public function getTitle(): string;

    /**
     * @return \DateTimeInterface iso8601 date format
     *
     * @see https://en.wikipedia.org/wiki/ISO_8601
     */
    public function getDate(): \DateTimeInterface;

    /**
     * @return string e.g., Time Magazine
     */
    public function getAwarder(): string;

    /**
     * @return string e.g., Received for my work with Quantum Physics
     */
    public function getSummary(): string;
}
