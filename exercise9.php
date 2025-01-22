<?php

/**
 * INSTRUCTIONS:
 * Create a class named Movie with the following properties:
 * - title
 * - genre
 * - ageRestriction
 * Add a method canWatch($viewerAge) that returns true if $viewerAge is
 * greater than or equal to ageRestriction, otherwise false.
 */

class Movies
{
    private $title;
    private $genre;
    private $ageRestriction;

    public function  __construct(string $title, string $genre, int $ageRestriction)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->ageRestriction = $ageRestriction;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of genre
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     */
    public function setGenre($genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get the value of ageRestriction
     */
    public function getAgeRestriction()
    {
        return $this->ageRestriction;
    }

    /**
     * Set the value of ageRestriction
     */
    public function setAgeRestriction($ageRestriction): self
    {
        $this->ageRestriction = $ageRestriction;

        return $this;
    }

    public function canWatch($viewerAge) {
        return $viewerAge 
}
