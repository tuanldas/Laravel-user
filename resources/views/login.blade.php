@extends('layout.master')

@section('content')
    <div class="title m-b-md">
        Laravel Session
    </div>

    <div class="links">
        <a href="{{ route('userLogin') }}">
            <button type="button" class="btn btn-outline-primary">Đăng Nhập</button>
        </a>
    </div>
@endsection