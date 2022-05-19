@extends('layouts.admin')

@section('pageTitle', 'Show')

@section('pageContent')
    <div class="container">
        <div class="container">
            <div class="d-flex">
                <div class="cont-img">
                    {{-- <img class="img-responsive m-2" src="{{ $post->thumb }}" alt="{{ $post->title }}"> --}}
                </div>
                <div class="cont-info">
                    <h1>{{ $post->title }}</h1>
                </div>
                <div class="cont-info">
                    <h1>{{ $post->content }}</h1>
                </div>
            </div>
            <div class="d-flex justify-content-center gap-2">
                <a href="{{ route('admin.posts.edit', $post->slug) }}" class="btn btn-primary">Modifica post</a>
    
                <form class="d-inline" action="{{ route('admin.posts.destroy' , $post->slug) }}" onclick="return confirm('Sei sicuro di voler cancellare questo Albo?')" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete this post</button>
                </form>
    
                <a class="btn btn-white" href="{{ url()->previous() }}">Indietro</a>
            </div>

        </div>
@endsection