@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading homeheading">Welcome {{ Auth::user()->name }}!</div>

				<div class="panel-body">
					<h3 id="homeheader">Search</h3>
                    <input id="dbsearch" type="search" name="dbsearch" placeholder="Search for food that may be toxic to your dog.">
                    <button type="submit" class="btn btn-primary sbutton">Search</button>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
