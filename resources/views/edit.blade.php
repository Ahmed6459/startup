@extends('layout.body')
@section('titel',"Edit")
    
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
    <h1 class="text-center">Edit Your Artical</h1>
        <form action=" {{route("Artical.update",$Artical->id)}} " method="post" class="table-bordered">
        @csrf
        @method("PUT")
            {{-- {{method_field('PATCH')}} --}}
        <input type="text" name="supject"
          class="form-control @error("supject") table-danger @enderror "
           placeholder="Subject"
            value="{{$Artical->supject}}">
        @error('supject')
            <p class="text-Danger">this failed is required</p>
        @enderror
        <textarea name="content" id="" cols="30" rows="10" class="form-control" placeholder="Content"> {{$Artical->content}} </textarea>
        <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </form>
</div>
@endsection

