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
use App\Blog\Traits\Articlable;

class Tag extends NamedObject
{
    use Articlable;
    
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
}
