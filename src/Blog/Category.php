<?php declare(strict_types = 1);

// Category
// - id
// - name / titre
// - description
// - image
// - created_at
// - created_by
// - edited_at
// - edited_by
// - deleted_at
// - deleted_by

namespace App\Blog;

use App\Blog\NamedObject; //optional
use App\Blog\Article;

class Category extends NamedObject
{
    private $articles;

    public function __construct(int $id, string $name, ?string $description, array $articles = [])
    {
        parent:: __construct($id, $name, $description);
        $this->articles = $articles;

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
     * Get the value of articles
     */ 
    public function getArticles(): array
    {
        return $this->articles;
    }

    /**
     * Set the value of articles
     *
     * @return  self
     */ 
    public function setArticles(array $articles): self
    {
        $this->articles = $articles;

        return $this;
    }

    public function addArticle(Article $article): self
    {
        if (!in_array($article, $this->articles)) {
            $this->articles[] = $article;
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        $index = array_search($article, $this->articles);

        if ($index !== false) {
            array_splice($this->articles, $index, 1);
        }

        return $this;
    }
}
