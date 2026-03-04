<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <h2>Danh sách sản phẩm</h2>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product['name'] }}</td>
                    <td style="{{ $product['price'] > 10000000 ? 'color: red;' : '' }}">
                        {{ number_format($product['price']) }} VNĐ
                        {{ $product['price'] > 10000000 ? '(Vip)' : '' }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>