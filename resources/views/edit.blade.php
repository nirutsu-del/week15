@extends('layouts.app')

@section('title', 'แก้ไขบทความ')

@section('content')
    <h2 class="text text-center py-3">แก้ไขบทความ</h2>
    <form method="POST" action="{{route ('update', $blog ->id)}}">
        @csrf 
        <div class="form-group">
            <label for ="title">ชื่อบทความ</label>
            <input type="text" name="title" class="form-control" value="{{ $blog->title }}">
        </div>
        @error('title')
            <p class="text-danger">{{ $message}}</p>
        @enderror
        <div class="form-group">
            <label for ="title">เนื้อหา</label>
            <textarea name="content" id="content" cols="30" rows="5" class="form-control">{{ $blog->content }}</textarea>
        </div>
        @error('content')
            <p class="text-danger">{{ $message}}</p>
        @enderror
        <input type="submit" value="บันทึก" class="btn btn-primary mt-3">
        <a href="/author/blogs" class="btn btn-secondary mt-3">บทความทั้งหมด</a>
    </form>
@endsection
