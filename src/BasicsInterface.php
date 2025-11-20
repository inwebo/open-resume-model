<?php

declare(strict_types=1);

namespace Inwebo\OpenResumeModel;

interface BasicsInterface
{
    public function getName(): string;

    /**
     * @return string e.g., Web Developer
     */
    public function getLabel(): string;

    /**
     * @return string URL (as per RFC 3986) to an image in JPEG or PNG format
     *
     * @see https://www.rfc-editor.org/rfc/rfc3986
     */
    public function getImage(): string;

    /**
     * @return string e.g. jacques.chirac@gmail.com
     */
    public function getEmail(): string;

    /**
     * @return string Phone numbers are stored as string, so use any format you like, e.g., 712-117-2923
     */
    public function getPhone(): string;

    /**
     * @return string URL (as per RFC 3986) to your website, e.g., personal homepage
     *
     * @see https://www.rfc-editor.org/rfc/rfc3986
     */
    public function getUrl(): string;

    /**
     * @return string Write a short 2-3 sentences biography about yourself
     */
    public function getSummary(): string;

    /**
     * @see LocationInterface
     */
    public function getLocation(): LocationInterface;

    /**
     * @return iterable<ProfileInterface>
     */
    public function getProfiles(): iterable;

    /**
     * @return iterable<WorkInterface>
     */
    public function getWork(): iterable;

    /**
     * @return iterable<VolunteerInterface>
     */
    public function getVolunteer(): iterable;

    /**
     * @return iterable<EducationInterface>
     */
    public function getEducation(): iterable;

    /**
     * @return iterable<AwardInterface>
     */
    public function getAwards(): iterable;

    /**
     * @return iterable<CertificateInterface>
     */
    public function getCertificates(): iterable;

    /**
     * @return iterable<PublicationInterface>
     */
    public function getPublications(): iterable;

    /**
     * @return iterable<SkillInterface>
     */
    public function getSkills(): iterable;

    /**
     * @return iterable<LanguageInterface>
     */
    public function getLanguages(): iterable;

    /**
     * @return iterable<InterestInterface>
     */
    public function getInterests(): iterable;

    /**
     * @return iterable<ReferenceInterface>
     */
    public function getReferences(): iterable;

    /**
     * @return iterable<ProjectInterface>
     */
    public function getProjects(): iterable;
}
