@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
            <h3 class="welcome">Welcome {{ Auth::user()->name }}!</h3>
			<div class="panel panel-default pup">
				<div class="panel-heading homeheading"><h3 class="breed">{!! $pups->breed !!} is our cute pup of the day!</h3></div>

				<div class="panel-body">

                    <div class="cute">

                       <div class="cp"> {!! Html::image($pups->dogImage, '', array('class' => 'cute-image')); !!}</div>

                    </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
