@extends('layout.body')

@section('titel',"Home")

@section('body')
<div class="container text-center">
    <h1 >Welcome to our home page</h1>
    <div class="card ">
        <div class="card-header">Articals</div>
        @foreach ($articals as $Artical)
        <div class="card-body col-8 m-auto table-bordered">
            <h2 class="card-title"> {{$Artical->supject}} </h2>
            <p class="card-text">{{$Artical->content}}</p>
        <button class="btn btn-success"><a class="text-white" href="{{ route("Artical.show",$Artical->id) }}">View</a></button>
        <form action="{{route("Artical.destroy",$Artical->id)}}" method="post">
            @csrf
            {{method_field('DELETE')}}
        <button type="submit"class="btn btn-danger">Delete</button>
        </form>
        </div>
        @endforeach
    </div>
</div>

@endsection
    
