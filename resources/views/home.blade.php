@extends('layouts.app')


@section('content')
    
    @include('inc.showcase')            
    <div class="container row" >
        <div class="col-md-4" style="font-weight:700;text-align: left; padding-top: 30px;padding-right: 40px;">
            @include('inc.leftbar')  
        </div>
        <div class="col-md-5" style="text-align: left; padding: 30px ; padding-left: 5px;">
            <div class="container" style="padding: 10px; background-color: #fbd5c0; height: 400px;">
                <div style="padding-left: 5px; height: 400px;">
                    <h3>Top Trendings</h3>
                    @foreach($drinks as $drink)
                        @if(($drink->id)==4)
                            <a class="container1" href="{{ route('drinks.show', ['id'=>$drink->id])}}" style="bottom: 0;">
                                <img src="{{$drink->drink_img}}" alt="img-error" width="444" height="296">
                            </a>
                        @endif
                    @endforeach
                    <h6>Mau yang seger-seger mas? -AAD</h6>
                </div>
            </div>    
        </div>
        <div class="col-md-3" style="text-align: left; padding: 30px" >
            @include('inc.sidebar')    
        </div>
    </div>
@endsection
