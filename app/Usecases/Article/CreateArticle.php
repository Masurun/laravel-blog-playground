<?php

namespace App\UseCases\Article;

use App\Models\Article;


class CreateArticle
{
    protected Article $article;
    /**
     * Instantiate CreateArticle.
     *
     * @return void
     */
    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    /**
     * Handle CreateArticle.
     */
    public function __invoke(string $title, string $category)
    {
        $this->article->create([
            'title' => $title,
            'category' => $category,
        ]);
    }
}
