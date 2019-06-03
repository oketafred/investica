@extends('admin.adminlayout')

@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Add a New Vendor
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">New Vendor</li>
	      </ol>
	    </section>

		<section class="content">
	      <div class="row">
		        <div class="col-md-12">
		          <!-- general form elements -->
		          <div class="box box-primary">
		            <div class="box-header with-border">
			            <h3 class="box-title">
			            	<a href="{{ route('all_vendors') }}" class="btn btn-info btn-sm">
			            		<i class="fa fa-backward"></i> List of Vendors 
			            	</a> 
			            </h3>
			            <div class="box-tools pull-right">
			                
			            </div>
			        </div>

	
						@if(session('error'))
							<div class="alert alert-danger alert-dismissible">
							    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							    <i class="icon fa fa-ban"></i>
							    {{ session('error') }}
							</div>
						@endif

						@if(session('success'))
							<div class="alert alert-success alert-dismissible">
							    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							    <i class="icon fa fa-ban"></i>
							    {{ session('success') }}
							</div>
						@endif

						@if (count($errors) > 0)

						    @foreach($errors->all() as $error)

						        <div class="alert alert-danger alert-dismissible">
							    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							    <i class="icon fa fa-ban"></i>
							    {{ $error }}
							</div>
						    @endforeach

						@endif

						<form action="{{ route('add_vendors') }}" method="POST">

							{{ csrf_field() }}

			              <div class="box-body">
			                <div class="row">
			                	<div class="col-md-6">
			                		<div class="form-group">
					                  <label for="fullname">Full Name</label>
					                  <input type="text" class="form-control" name="full_name" placeholder="Enter Full Name">
					                </div>
			                	</div>
			                	<div class="col-md-6">
			                		<div class="form-group">
					                  <label for="email">Email Address</label>
					                  <input type="email" class="form-control" name="email" placeholder="Enter Email Address">
					                </div>
			                	</div>
			                </div>
			                <div class="row">
			                	<div class="col-md-6">
			                		<div class="form-group">
					                  <label for="password">Password</label>
					                  <input type="password" class="form-control" name="password" placeholder="Enter Password">
					                </div>
			                	</div>
			                	<div class="col-md-6">
			                		<div class="form-group">
					                  <label for="district">Confirm Password</label>
					                  <input type="password" class="form-control" name="password" placeholder="Confirm Password">
					                </div>
			                	</div>
			                </div>
			                {{-- <div class="row">
			                	<div class="col-md-6">
			                		<div class="form-group">
					                  <label for="telephone">Telephone Number</label>
					                  <input type="tel" class="form-control" name="telephone" placeholder="Enter email">
					                </div>
			                	</div>
			                	<div class="col-md-6">
			                		<div class="form-group">
					                  <label for="address">Physical Address</label>
					                  <input type="text" class="form-control" name="address" placeholder="Enter email">
					                </div>
			                	</div>
			                </div> --}}

							{{-- <div class="row">
			                	<div class="col-md-6">
			                		<div class="form-group">
					                  <label for="district">District</label>
					                  <input type="file" class="form-control" name="district" placeholder="Enter District">
					                </div>
			                	</div>
			                	<div class="col-md-6">
			                		<div class="form-group">
					                  <label for="password">Password</label>
					                  <input type="password" class="form-control" name="password" placeholder="Enter Password">
					                </div>
			                	</div>
			                </div> --}}


			              </div>
			              <!-- /.box-body -->

			              <div class="box-footer">
			                <button type="submit" class="btn btn-primary">Submit</button>
			              </div>
			            </form>
			       </div>
			    </div>
			</div>
		</section>

	</div>
@endsection


