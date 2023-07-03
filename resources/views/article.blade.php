<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>article</title>
</head>

<body>
    <h1>記事の一覧</h1>
    <ul>
        @foreach ($articles as $article)
            <li>
                <div>{{ $article->title }}</div>
                @if ($article->category === ArticleCategoryConst::CATEGORY_ART)
                    <div>{{ ArticleCategoryConst::CATEGORY_ART }}</div>
                @elseif($article->category === ArticleCategoryConst::CATEGORY_HISTORY)
                    <div>{{ ArticleCategoryConst::CATEGORY_SCIENCE }}</div>
                @elseif($article->category === ArticleCategoryConst::CATEGORY_SCIENCE)
                    <div>{{ ArticleCategoryConst::CATEGORY_SCIENCE }}</div>
                @else
                    <div>{{ ArticleCategoryConst::NO_CATEGORY }}</div>
                @endif
            </li>
        @endforeach
    </ul>
</body>

</html>
