@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16" style="background-color: #fbd5c0; width: 1030px;">
            <nav class="navbar">
                <div class="container" style="margin: 20px;width: 1100px;">
                    <strong class="col-md-4" style="font-size: 50px;">Drink Recipe</strong>
                    <div class="col-md-1" style="margin-left: 50px; padding-right:20px ;">
                        <!-- <form >
                            <div class="form-group"style="width: 200px; height: 20px;">
                                <input type="text" class="form-control typeahead" placeholder="Search">
                            </div>
                        </form> -->
                    </div>
                    <a class="col-md-2" href="/recipe/food"  style="background-color: #fbd5c0; border:#fbd5c0; color: black; text-decoration: none;" >Food Pages</a>
                </div>
            </nav>
            @if(!Auth::guest())
                @if((Auth::user()->id)==1)
                    <a href="{{ route('drinks.create') }}" class="btn btn-success" style="float: right">Create Post</a>
                @endif  
            @endif
            <div class="row" style="background-color: #fbd5c0; width: 1000px; padding-left: 15px; padding-bottom: 30px;">
                @foreach($drinks as $drink)
                    <a href="{{ route('drinks.show', ['id'=>$drink->id])}}" class="container1"  style="margin: 2px;width: 240px; height: 160px;">
                            <img src="/{{$drink->drink_img}}" alt="img-error" width=" 240px" height="160px">
                        <div class="content1" style="word-wrap:break-word;">
                            <h6>{{ $drink->drink_name }}</h6>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection