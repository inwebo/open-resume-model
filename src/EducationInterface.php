<?php

declare(strict_types=1);

namespace Inwebo\OpenResumeModel;

interface EducationInterface
{
    /**
     * @return string e.g., Massachusetts Institute of Technology
     */
    public function getInstitution(): string;

    /**
     * @return string e.g., http://facebook.example.com
     */
    public function getUrl(): string;

    /**
     * @return string e.g., Arts
     */
    public function getArea(): string;

    /**
     * @return string e.g. Bachelor
     */
    public function getStudyType(): string;

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
     * @return string grade point average, e.g. 3.67/4.0
     */
    public function getScore(): string;

    /**
     * List notable courses/subjects.
     *
     * @return array<int, string> e.g., H1302 - Introduction to American history
     */
    public function getCourses(): array;
}
