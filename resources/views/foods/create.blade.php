@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('foods.store') }}">
                        <div class="form-group">
                            @csrf
                            <label class="label">Food Title: </label>
                            <input type="text" name="food_name" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label class="label">Food Ingredients: </label>
                            <textarea name="food_body_ingredient" rows="10" cols="30" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="label">Food Steps: </label>
                            <textarea name="food_body_steps" rows="10" cols="30" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="label">Food Img Path: </label>
                            <input type="text" name="food_img" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection