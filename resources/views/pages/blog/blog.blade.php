@extends('layout1')

@section('content')
    @php
        $meta_desc = "Mô tả của trang blog";
        $meta_keywords = "Từ khóa của trang blog";
        $url_canonnial = "URL canonial của trang blog";
        $meta_title = "Tiêu đề của trang blog";
    @endphp

    <!-- Nội dung của trang blog -->
    <div class="blog py-4 w-100">
        <h1 class="text-center">blog của tôi</h1>
    </div>
@endsection
