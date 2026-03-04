<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header style="background-color: #f8f9fa; padding: 20px; text-align: center;">
        <h2>Menu Header</h2>
        <a href="/home">Trang chủ</a> | 
        <a href="/contact">Liên hệ</a> |
        <a href="/products">Sản phẩm</a>
    </header>

    <main style="padding: 20px; min-height: 400px;">
        @yield('content')
    </main>

    <footer style="background-color: #343a40; color: white; padding: 10px; text-align: center;">
        <p>&copy; 2026 Bản quyền thuộc về Cấn Đức Điệp</p>
    </footer>
</body>
</html>