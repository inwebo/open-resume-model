<?php

declare(strict_types=1);

namespace Inwebo\OpenResumeModel;

interface LocationInterface
{
    /**
     * @return string To add multiple address lines, use \n. For example, 1234 Glücklichkeit Straße\nHinterhaus 5. Etage li.
     */
    public function getAddress(): string;

    public function getPostalCode(): string;

    public function getCity(): string;

    /**
     * @return string code as per ISO-3166-1 ALPHA-2, e.g. US, FR, IN
     */
    public function getCountryCode(): string;

    /**
     * @return string The general region where you live. Can be a US state, or a province, for instance.
     */
    public function getRegion(): string;
}
