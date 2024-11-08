<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $book->title }}</title>
</head>
<body>
    <h1>{{ $book->title }}</h1>
    <img src="{{ asset('storage/' . $book->thumbnail) }}" alt="{{ $book->title }}">
    <p>Tác giả: {{ $book->author }}</p>
    <p>Nhà xuất bản: {{ $book->publisher }}</p>
    <p>Ngày xuất bản: {{ $book->publication }}</p>
    <p>Giá: {{ number_format($book->price) }} VND</p>
    <p>Số lượng: {{ $book->quantity }}</p>
    <a href="{{ url('/') }}">Quay lại</a>
</body>
</html>
