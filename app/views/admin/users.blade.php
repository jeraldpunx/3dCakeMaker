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
				<li class="active"><a href="#"><span class="fa fa-users"></span> Users</a></li>
				<li><a href="{{ URL::route('admin/cakes') }}"><span class="fa fa-birthday-cake"></span> Cakes</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>
@endsection

@section('content')
	<table id="users" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Facebook ID</th>
                <th>Name</th>
                <th>Controls</th>
            </tr>
        </thead>
 
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->fbId }}</td>
                <td><img style="max-width:30px; margin-top: -7px; border: 1px solid gray" src="{{ $user->image }}" /> {{ $user->name }}</td>
                <td>
                    <a href="{{ URL::route('admin/user', [$user->id] ) }}" class="btn btn-primary btn-xs"><span class="fa fa-eye"></span> View</a>
                    <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-remove"></span> Delete</a>

                    <!-- <a href="" class="btn btn-success"><span class="fa fa-eye"></span> View</a>  -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('script')
<script type="text/javascript">

    $('#users').DataTable({
        "order": [[ 1, "asc" ]],
        "columnDefs": [
          { "searchable": false, "orderable": false, "width": "18%", "targets": 2 },
          { "width": "20%", "targets": 0 },
        ]
    });

    $('#users')
        .removeClass( 'display' )
        .addClass('table table-bordered');

</script>
@endsection