<?php

Use App\Blog\Article;
Use App\Blog\Category;
use App\Blog\Tag;

require __DIR__.'/vendor/autoload.php';

$categories = [
    new Category(1, 'Foo', null),
    new Category(2, 'Bar', null),
    new Category(3, 'Baz', null),
];
dump($categories);

$tags = [
    new Tag(1, 'HTML', null),
    new Tag(2, 'CSS', null),
    new Tag(3, 'JS', null),
];

$articles = [
    new Article(1, 'Lorem', 'Lorem lorem', $categories[0]),
    new Article(2, 'Ipsum', 'Ipsum ipsum', $categories[1]),
    new Article(3, 'Sit', 'Sit sit', $categories[1]),
];
dump($articles);

foreach ($articles as $article) {
    echo "title: {$article->getTitle()}";
    echo '<br>';

    // echo "category: {$article->getCategory()->getName()}";
    // echo '<br>';

    // fait la même chose que la ligne 24
    $category = $article->getCategory();
    echo "category: {$category->getName()}";
    echo '<br>';

    foreach ($category->getArticles() as $article) {
        echo "same category title: {$article->getTitle()}";
        echo '<br>';
    }
}
