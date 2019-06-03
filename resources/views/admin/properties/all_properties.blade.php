@extends('admin.adminlayout')

@section('content')
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Properties
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Properties</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Property Photo</th>
                    <th>Vendor ID</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  	


{{-- @foreach($all_properties as $property)
	{{ dd(json_decode($property->gallery, true)) }}
	@foreach($property as $images)
		{{ dd($images) }}
	@endforeach
@endforeach
 --}}
                  @forelse($all_properties as $property)
					<tr>

						@php
						$property_image = json_decode($property->gallery, true)
						@endphp
		                    <td><img src="{{ asset("properties/" . $property_image[0]) }}" width="80px" height="50px"></td>
		                    <td>123123456</td>
	                    <td>{{ $property->type }}</td>
	                    <td>{{ number_format($property->price) }} USD</td>
	                    <td>{{ $property->address }}</td>
	                    <td>{{ $property->city }}</td>
	                    <td>{{ $property->state }}</td>
                      @if($property->published)
	                     <td><span class="label label-success">Approved</span></td>
                      @else
                        <td><span class="label label-danger">Unapproved</span></td>
                      @endif
	                    <td><a href="{{ route('property_detail', $property->id) }}" class="btn btn-primary btn-sm">Details</a></td>
	                </tr>
                  @empty
        					<tr>
                    <td colspan="9" class="text-center">No Property Available</td>     
                  </tr>
                  @endforelse


                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row -->
      
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

 

@endsection