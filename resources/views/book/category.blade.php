<!-- resources/views/category.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sách theo loại</title>
</head>
<body>

    <h1>Sách theo loại</h1>

    <ul class="product-list">
        @foreach ($booksByCategory as $book)
            <li>
                <h3>{{ $book->title }}</h3>
                <p>{{ number_format($book->price) }} VND</p>
            </li>
        @endforeach
    </ul>

</body>
</html>
