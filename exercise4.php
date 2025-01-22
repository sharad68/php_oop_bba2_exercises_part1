<?php

/**
 * INSTRUCTIONS:
 * Create a class named Article with the following properties:
 * title
 * content
 * Implement a method getSummary($maxLength) that returns the first $maxLength
 * characters of the content, followed by "…" if the content is longer than $maxLength.
 */
class Article
{

    private string $title;
    private string $content;

    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content = $content;
    }


    /**
     * Get the value of title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of content
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Set the value of content
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }
    public function getSummary(int $maxLength): string
    {
        if (strlen($this->content) > $maxLength) {
            return substr($this->content, 0, $maxLength) . '...';
        } else {
            return $this->content;
        }
    }
}

$article = new Article("Learning PHP", "PHP is a popular general-purpose scripting language that is especially suited to web development. It is fast, flexible, and pragmatic.");
?>
<h1> <?= $article->getTitle() ?> </h1> <?= $article->getSummary(50) ?>