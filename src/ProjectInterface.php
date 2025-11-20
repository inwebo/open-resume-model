<?php

declare(strict_types=1);

namespace Inwebo\OpenResumeModel;

/**
 * Specify career projects.
 */
interface ProjectInterface
{
    /**
     * @return string e.g., The World Wide Web
     */
    public function getName(): string;

    /**
     * @return string Short summary of project. e.g. Collated works of 2017.
     */
    public function getDescription(): string;

    /**
     * Specify multiple features.
     *
     * @return iterable<int, string> e.g., Directs you close but not quite there
     */
    public function getHighlights(): iterable;

    /**
     * Specify special elements involved.
     *
     * @return iterable<int, string> e.g., AngularJS
     */
    public function getKeywords(): iterable;

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
     * @return string e.g. http://www.computer.org/csdl/mags/co/1996/10/rx069-abs.html
     */
    public function getUrl(): string;

    /**
     * Specify your role on this project or in a company.
     *
     * @return iterable<int, string> e.g. Lead Developer
     */
    public function getRoles(): iterable;

    /**
     * @return string Specify the relevant company/entity affiliations e.g. 'greenpeace', 'corporationXYZ'
     */
    public function getEntity(): string;

    /**
     * @return string e.g. 'volunteering', 'presentation', 'talk', 'application', 'conference'
     */
    public function getType(): string;
}
