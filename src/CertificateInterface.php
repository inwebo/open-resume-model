<?php

declare(strict_types=1);

namespace Inwebo\OpenResumeModel;

/**
 * Specify any certificates you have received throughout your professional career.
 */
interface CertificateInterface
{
    /**
     * @return string e.g. Certified Kubernetes Administrator
     */
    public function getName(): string;

    /**
     * @return \DateTimeInterface iso8601 date format
     *
     * @see https://en.wikipedia.org/wiki/ISO_8601
     */
    public function getDate(): \DateTimeInterface;

    /**
     * @return string e.g. e.g. http://example.com
     */
    public function getUrl(): string;

    /**
     * @return string e.g. CNCF
     */
    public function getIssuer(): string;
}
