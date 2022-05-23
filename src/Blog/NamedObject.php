<?php declare(strict_types = 1);

namespace App\Blog;

Abstract class NamedObject
{
    protected $id;
    protected $name;
    protected $description;

    public function __construct(int $id, string $name, ?string $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;

        // if ($articles) {
        //     $this->articles = $articles;
        // } else {
        //     $this->articles = [];
        // }

        // fait la même chose que la ligne 30
        // $this->articles = $articles ? $articles : [];

        // fait la même chose que la ligne 37
        //$this->articles = $articles ?? [];
    }

    /**
     * Get the value of id
     */ 
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}