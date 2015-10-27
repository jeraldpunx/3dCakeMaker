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
				<li class="active"><a href="#"><span class="fa fa-search"></span> Reports</a></li>
				<li><a href="{{ URL::route('admin/users') }}"><span class="fa fa-users"></span> Users</a></li>
				<li><a href="{{ URL::route('admin/cakes') }}"><span class="fa fa-birthday-cake"></span> Cakes</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>
@endsection

@section('content')
<table id="example" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>
@endsection

@section('script')
<script type="text/javascript">
    $('#example').DataTable();

    // For demo to fit into DataTables site builder...
    $('#example')
        .removeClass( 'display' )
        .addClass('table table-striped table-bordered');

</script>
@endsection