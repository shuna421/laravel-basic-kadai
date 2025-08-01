<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>投稿作成フォーム</title>
</head>
<body>
    <h1>新しい投稿を作成</h1>

    {{-- エラーメッセージの表示 --}}
    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ url('/posts/store') }}" method="POST">
        @csrf

        <div>
            <label>タイトル（20文字以内）:</label><br>
            <input type="text" name="title" value="{{ old('title') }}">
        </div>
        <br>
        <div>
            <label>本文（200文字以内）:</label><br>
            <textarea name="content" rows="6">{{ old('content') }}</textarea>
        </div>
        <br>
        <button type="submit">投稿する</button>
    </form>

    <br>
    <a href="{{ url('/posts') }}">← 投稿一覧へ戻る</a>
</body>
</html>