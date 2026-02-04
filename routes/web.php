<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return 'Chào mừng đến với Laravel';
});

// Yêu cầu 2: Route /about (Bạn thay thông tin của bạn vào nhé)
Route::get('/about', function () {
    return 'Họ tên: Nguyễn Văn A <br> Lớp: CNTT_K18 <br> MSSV: PC01234';
});

// Yêu cầu 3: Route /contact trả về View
Route::get('/contact', function () {
    return view('contact');
});

// Bài 3 - Yêu cầu 1: Tính tổng hai số
Route::get('/tong/{a}/{b}', function ($a, $b) {
    // Ép kiểu sang số (để đảm bảo tính toán đúng)
    $sum = $a + $b;
    return "Tổng của $a và $b là: $sum";
});

// Bài 3 - Yêu cầu 2: Thông tin sinh viên (Tuổi tùy chọn)
Route::get('/sinh-vien/{name}/{age?}', function ($name, $age = 20) {
    return "Thông tin sinh viên: Tên là $name, Năm nay $age tuổi.";
});

// BÀI 4: Route Group & Validation (Thử thách)
// ============================================

// Yêu cầu 1: Nhóm Route Admin
// Mọi đường dẫn bên trong đều sẽ tự động có tiền tố "/admin" ở đầu
Route::prefix('admin')->group(function () {
    
    // Đường dẫn thực tế: /admin/dashboard
    Route::get('/dashboard', function () {
        return 'Chào mừng Admin quay trở lại!';
    });

    // Đường dẫn thực tế: /admin/users
    Route::get('/users', function () {
        return 'Danh sách người dùng hệ thống';
    });
});

// Yêu cầu 2: Route kiểm tra ngày tháng với Ràng buộc (Validation)
// Đường dẫn: /check-date/ngay/thang/nam
Route::get('/check-date/{day}/{month}/{year}', function ($day, $month, $year) {
    return "Bạn vừa nhập ngày: $day/$month/$year (Hợp lệ)";
})->where([
    'day'   => '[0-9]{1,2}', // Chấp nhận 1 hoặc 2 chữ số (VD: 1, 01, 31)
    'month' => '[0-9]{1,2}', // Chấp nhận 1 hoặc 2 chữ số (VD: 1, 12)
    'year'  => '[0-9]{4}'    // Bắt buộc phải 4 chữ số (VD: 2024)
]);