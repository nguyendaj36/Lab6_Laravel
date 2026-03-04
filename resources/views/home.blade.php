@extends('layouts.master')

@section('title', 'Trang chủ')

@section('content')
    <h1>Đây là nội dung trang chủ</h1>
    <p>Nội dung này được chèn vào @yield('content') của master layout.</p>
@endsection