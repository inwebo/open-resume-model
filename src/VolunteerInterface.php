<?php

declare(strict_types=1);

namespace Inwebo\OpenResumeModel;

interface VolunteerInterface
{
    /**
     * @return string e.g., Facebook
     */
    public function getOrganization(): string;

    /**
     * @return string e.g., Software Engineer
     */
    public function getPosition(): string;

    /**
     * @return string e.g., http://facebook.example.com
     */
    public function getUrl(): string;

    /**
     * @return \DateTimeInterface iso8601 date format
     *
     * @see https://en.wikipedia.org/wiki/ISO_8601
     */
    public function getStartDate(): \DateTimeInterface;

    /**
     * @return \DateTimeInterface iso8601 date format
     *
     * @see https://en.wikipedia.org/wiki/ISO_8601
     */
    public function getEndDate(): \DateTimeInterface;

    /**
     * @return string Give an overview of your responsibilities at the company
     */
    public function getSummary(): string;

    /**
     * Specify accomplishments and achievements.
     *
     * @return iterable<int, string> e.g., Increased profits by 20% from 2011-2012 through viral advertising
     */
    public function getHighlights(): iterable;
}
