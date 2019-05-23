@extends('admin.adminlayout')

@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        List of all Buyers
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Vendors</li>
	      </ol>
	    </section>
		
		<section class="content">
      <div class="row">
        <div class="col-md-12">
		<div class="box box-primary">
			<div class="box-body">
        		<table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Full Name</th>
                  <th>Email Address</th>
                  <th>Last Login</th>
                  <th>Created At</th>
                </tr>
                </thead>
                <tbody>
	                @forelse($clients as $client)
						<tr>
		                  <td>{{ $client->id }}</td>
		                  <td>{{ $client->full_name }}</td>
		                  <td>{{ $client->email }}</td>
		                  <td>{{ $client->last_login }}</td>
		                  <td>{{ $client->created_at->diffForHumans() }}</td>
		                </tr>
	                @empty
						<tr>
							<td colspan="5" class="text-center">No Buyers Available</td>
						</tr>
	                @endforelse
                </tbody>
              </table>    
        	</div>
        </div>
      </div>
  </div>
</section>

	</div>
@endsection