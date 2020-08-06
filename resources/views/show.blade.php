@extends('layout.body')

@section('titel')
    artical-{{$Artical->id}}
@endsection

@section('body')
    <div class="card">
        <h1 class="card-heaer text-center">
            {{$Artical->supject}}
        </h1>
    </div>
    <div class="card-body col-8 m-auto">
    <div class="card-text"><small class="text-muted">Created at {{$Artical->created_at}}</small></div>
    <p class="card-text"> {{$Artical->content}} </p>

    @foreach ($Artical->tags as $tag) {{--calling tags metod from the Artical model and loob it--}}
        <a href="" class="badge badge-secondary"> {{$tag->name}} </a>
    @endforeach

    <button type="submit"><a href=" {{route("Artical.edit",$Artical->id)}} ">Edit</a></button>
    </div>
@endsection