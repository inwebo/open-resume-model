<?php

declare(strict_types=1);

namespace Inwebo\OpenResumeModel;

/**
 * List out your professional skill-set.
 */
interface SkillInterface
{
    /**
     * @return string e.g., Web Development
     */
    public function getName(): string;

    /**
     * @return string e.g., Master
     */
    public function getLevel(): string;

    /**
     * List some keywords pertaining to this skill.
     *
     * @return iterable<int, string> e.g., PHP, JavaScript
     */
    public function getKeywords(): iterable;
}
