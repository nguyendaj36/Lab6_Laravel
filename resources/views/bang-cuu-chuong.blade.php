@extends('layouts.master')

@section('title', 'Bảng cửu chương')

@section('content')
    <h2>Bảng cửu chương của {{ $n }}</h2>

    @if(!$isNumber)
        <div class="alert alert-danger" role="alert">
            Lỗi: Giá trị "{{ $n }}" không hợp lệ. Vui lòng nhập một số!
        </div>
    @else
        <ul class="list-group" style="max-width: 300px;">
            @for ($i = 1; $i <= 10; $i++)
                <li class="list-group-item">
                    {{ $n }} x {{ $i }} = {{ $n * $i }}
                </li>
            @endfor
        </ul>
    @endif
@endsection