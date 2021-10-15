@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('drinks.store') }}">
                        <div class="form-group">
                            @csrf
                            <label class="label">Drink Title: </label>
                            <input type="text" name="drink_name" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label class="label">Drink Ingredients: </label>
                            <textarea name="drink_body_ingredient" rows="10" cols="30" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="label">Drink Steps: </label>
                            <textarea name="drink_body_steps" rows="10" cols="30" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="label">Drink Img Path: </label>
                            <input type="text" name="drink_img" class="form-control"/>
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