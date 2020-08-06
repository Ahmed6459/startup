@extends('layout.body')
@section('titel',"create")
    
@section('body')
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show">
            <ul class="list-group">
                @foreach ($errors->all() as $error)
                    <li class="list-group-item">
                        {{$error}}
                    </li>
                @endforeach
            </ul>
    </div>
@endif
    <h1 class="text-center">Create Your Artical</h1>
<form action=" {{route("Artical.store")}} " method="post" class="table-bordered" >
@csrf
<input type="text" name="supject" id="" class="form-control @error("supject") table-danger @enderror" placeholder="Supject" value="{{old("supject")}}">
        {{--old functhon remember the text is any error it will remmber the value--}}
        @error('supject')
            <p class="text-danger">this failed is required</p>
        @enderror
<textarea name="content" id="" cols="30" rows="10" class="form-control @error("content") table-danger @enderror" placeholder="Content">{{old("content")}}</textarea>
@error('content')
<p class="text-danger">this failed is required</p>
@enderror
<button type="submit" class="btn btn-primary">submit</button>
</div>
</form>
@endsection

