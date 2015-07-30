@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default search-panel">
                    <div class="panel-heading homeheading"></div>

                    <div class="panel-body search-body">

                        <div class="searchbox">
                            {!! Form::open(['method' => 'GET']) !!}

                            {!! Form::input('search','q', null, ['placeholder' => 'Search to see what human food is toxic to your dog']) !!}

                            {!! Form::submit('Search', array('class' => 'searchbtn', 'style' => 'color:#ffffff; font-size:18px; width:50%; background-color:#4284B0')) !!}

                            {!! Form::close() !!}
                        </div>
                        <div class="results">
                                @if(isset($search))
                                @foreach($search as $searches)

                                    <h2 class="foodname">{!! $searches->foodName !!}</h2>
                                    <div class="searchimg">{!! Html::image($searches->image, '', array('class' => 'image')); !!}</div>
                                    <p class="edible">{!! $searches->foodName !!} is {!! $searches->edible !!} for your furry loved one!</p>
                                @endforeach
                                 @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
