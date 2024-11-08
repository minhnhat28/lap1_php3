<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>

    <!-- Thêm CSS trực tiếp vào đây -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        nav {
            background-color: #444;
            padding: 10px 20px;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .product-list {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            padding: 20px;
        }

        .product-item {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
        }

        .product-item img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .product-item h3 {
            margin: 10px 0;
            font-size: 18px;
            color: #333;
        }

        .product-item p {
            font-size: 16px;
            color: #555;
        }

        .product-item a {
            display: block;
            margin-top: 10px;
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

        .product-item a:hover {
            background-color: #0056b3;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

    </style>
</head>
<body>

    <header>
        <h1>Trang chủ - Sách</h1>
    </header>

    <!-- Menu danh mục -->
    <nav>
        <ul>
            @foreach($categories as $category)
                <li>
                    <a href="{{ route('category.books', $category->id) }}">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
    </nav>

    <div class="container">
        <h2>8 Sản phẩm có giá cao nhất</h2>
        <div class="product-list">
            @foreach($highestPriceBooks as $book)
                <div class="product-item">
                    <img src="{{ $book->thumbnail }}" alt="{{ $book->title }}">
                    <h3>{{ $book->title }}</h3>
                    <p>Giá: {{ number_format($book->price) }} VND</p>
                    <a href="{{ route('book.show', $book->id) }}">Xem chi tiết</a>
                </div>
            @endforeach
        </div>

        <h2>8 Sản phẩm có giá thấp nhất</h2>
        <div class="product-list">
            @foreach($lowestPriceBooks as $book)
                <div class="product-item">
                    <img src="{{ $book->thumbnail }}" alt="{{ $book->title }}">
                    <h3>{{ $book->title }}</h3>
                    <p>Giá: {{ number_format($book->price) }} VND</p>
                    <a href="{{ route('book.show', $book->id) }}">Xem chi tiết</a>
                </div>
            @endforeach
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Sách Online</p>
    </footer>

</body>
</html>
