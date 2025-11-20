<?php

declare(strict_types=1);

namespace Inwebo\OpenResumeModel;

interface InterestInterface
{
    /**
     * @return string e.g., Philosophy
     */
    public function getName(): string;

    /**
     * @return iterable<int, string> e.g., Friedrich Nietzsche
     */
    public function getKeywords(): iterable;
}
