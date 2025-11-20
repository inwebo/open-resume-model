<?php

declare(strict_types=1);

namespace Inwebo\OpenResumeModel;

/**
 * List references you have received.
 */
interface ReferenceInterface
{
    /**
     * @return string e.g., Timothy Cook
     */
    public function getName(): string;

    /**
     * @return string e.g., Joe blogs was a great employee, who turned up to work at least once a week. He exceeded my expectations when it came to doing nothing.
     */
    public function getReference(): string;
}
