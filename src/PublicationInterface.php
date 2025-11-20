<?php

declare(strict_types=1);

namespace Inwebo\OpenResumeModel;

/**
 * Specify your publications through your career.
 */
interface PublicationInterface
{
    /**
     * @return string e.g., The World Wide Web
     */
    public function getName(): string;

    /**
     * @return string e.g., IEEE, Computer Magazine
     */
    public function getPublisher(): string;

    /**
     * @return \DateTimeInterface iso8601 date format
     *
     * @see https://en.wikipedia.org/wiki/ISO_8601
     */
    public function getReleaseDate(): \DateTimeInterface;

    /**
     * @return string e.g., http://www.computer.org.example.com/csdl/mags/co/1996/10/rx069-abs.html
     */
    public function getUrl(): string;

    /**
     * @return string Short summary of publication. E.g., Discussion of the World Wide Web, HTTP, HTML.
     */
    public function getSummary(): string;
}
