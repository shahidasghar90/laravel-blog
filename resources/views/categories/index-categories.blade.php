

@extends('layout')


@section('main')
<h1>Categories List</h1>
@include('includes.flash-message')
    @foreach ($categories as $category)
        
    <div class="categories-list">

        <div class="item">
            <p>{{ $category->name }}</p>
        <div>
            <a href="{{ route('categories.edit', $category) }}">Edit</a>
        </div>
        <form action="{{ route('categories.destroy', $category) }}" method="post">
            @method('delete')
            @csrf
            <input type="submit" value="Delete">
        </form>
        </div>
        @endforeach
        <div class="index-categories">
            <a href="{{ route('categories.create') }}">Create Category<span>&#8594;</span></a>
        </div>
    </div>


@endsection