<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
</head>

<body>
    <form method="POST" action="{{ action('App\Http\Controllers\ArticleController@store') }}">
        @csrf
        <div class="example">
            <label for="namelabel">タイトル</label>
            <input type="text" name="title" id="namelabel">
        </div>
        <select name="category">
            <option value="アート">アート</option>
            <option value="歴史">歴史</option>
            <option value="サイエンス">サイエンス</option>
            <option value="なし">なし</option>
        </select>
        <div class="example">
            <input type="submit" value="送信する">
        </div>
    </form>
</body>

</html>
