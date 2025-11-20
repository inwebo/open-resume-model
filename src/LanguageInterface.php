<?php

declare(strict_types=1);

namespace Inwebo\OpenResumeModel;

/**
 * List any other languages you speak.
 */
interface LanguageInterface
{
    /**
     * @return string e.g., English, Spanish
     */
    public function getLanguage(): string;

    /**
     * @return string e.g., Fluent, Beginner
     */
    public function getFluency(): string;
}
