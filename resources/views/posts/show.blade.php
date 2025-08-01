<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>投稿詳細</title>
</head>
<body>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <ul>
        <li>ID: {{ $post->id }}</li>
        <li>作成日: {{ $post->created_at }}</li>
        <li>更新日: {{ $post->updated_at }}</li>
    </ul>
    <a href="{{ url('/posts') }}">← 一覧に戻る</a>
</body>
</html>