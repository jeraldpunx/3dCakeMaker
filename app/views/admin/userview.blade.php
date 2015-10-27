@extends('admin.layout')

@section('nav')
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">Cakeology</a>
		</div>
		<div class="navbar-collapse collapse" id="navbar">
			<ul class="nav navbar-nav">
				<li><a href="{{ URL::route('admin/reports') }}"><span class="fa fa-search"></span> Reports</a></li>
				<li class="active"><a href="{{ URL::route('admin/users') }}"><span class="fa fa-users"></span> Users</a></li>
				<li><a href="{{ URL::route('admin/cakes') }}"><span class="fa fa-birthday-cake"></span> Cakes</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>
@endsection

@section('content')
	<div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="{{ $user->image }}" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						{{ $user->name }}
					</div>
					<div class="profile-usertitle-job">
						Buyer
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-danger btn-sm">Delete this user?</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   Some user related content goes here...
            </div>
		</div>
	</div>
@endsection

@section('script')
<script type="text/javascript">

</script>
@endsection