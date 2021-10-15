@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card" style="background-color: #fbd5c0;">
                <div class="card-body">
                    <br/>
                    <h2>{{ $food->food_name }}</h2>
                    <hr />
                    <img src="/{{$food->food_img}}" alt="img-error" width="450px" height="300">
                    <h5>Ingredients</h5>
                    <h6>{!! html_entity_decode($food->food_body_ingredient) !!}</h6>
                    <h5>Steps</h5>
                    <h6>{!! html_entity_decode($food->food_body_steps) !!}</h6>
                    <br>
                    <h4>Display Comments</h4>
                    <hr />

                    @if(!Auth::guest())
                        @if((Auth::user()->id)==1)
                            @foreach($comments as $comment)
                                @if(($comment->food_id)==($food->id))
                                    @foreach($users as $user)
                                        @if(($user->id)==($comment->user_id))
                                            <nav class="navbar">
                                                <h5 style="padding-top: 10px;">{{ $user->name}}</h5>
                                                <a href='/delete_cf/{{$comment->id}}'>
                                                    <img src="/img/extra/remove.png" alt="img error" width="20px" height="20px">
                                                </a>
                                            </nav>
                                            <h6 style="padding-left: 10px;">{{ $comment->body}}</h6>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach 
                        @else
                            @foreach($comments as $comment)
                                @if(($comment->food_id)==($food->id))
                                    @foreach($users as $user)
                                        @if(($user->id)==($comment->user_id))
                                            <h5 style="padding-top: 10px;">{{ $user->name}}</h5>
                                            <h6 style="padding-left: 10px;">{{ $comment->body}}</h6>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach 
                        @endif
                    @else
                        @foreach($comments as $comment)
                            @if(($comment->food_id)==($food->id))
                                @foreach($users as $user)
                                    @if(($user->id)==($comment->user_id))
                                        <h5 style="padding-top: 10px;">{{ $user->name}}</h5>
                                        <h6 style="padding-left: 10px;">{{ $comment->body}}</h6>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach 
                    @endif
   
                    <hr />
                    @if(!Auth::guest())
                        <h4>Add comment</h4>
                        <form method="post" action="{{ route('comments_food.store' ) }}">
                            @csrf
                            <div class="form-group">
                                <textarea class="form-control" name="body"></textarea>
                                <input class="form-control" type="hidden" name="food_id" value="{{ $food->id }}" />
                                <input class="form-control" type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                            </div>
                            
                            <div class="form-group">
                                <button name="add comment" type="submit" class="btn btn-primary" >Add Comment</button>
                                <!-- <input name="add comment" type="submit" class="btn" value="Add Comment" /> -->
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection