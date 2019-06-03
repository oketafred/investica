@extends('admin.adminlayout')

@section('content')
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Approved Properties
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Approved Properties</li>
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

                  @forelse($approvedProperties as $approvedProperty)

                  @php
                    $property_image = json_decode($approvedProperty->gallery, true)
                  @endphp
                    <tr>
                      <td><img src="{{ asset("properties/" . $property_image[0]) }}" width="80px" height="50px"></td>
                      <td>123123456</td>
                      <td>{{ $approvedProperty->type }}</td>
                      <td>{{ number_format(approvedProperty->price) }}</td>
                      <td>{{ $approvedProperty->address }}</td>
                      <td>{{ $approvedProperty->city }}</td>
                      <td>{{ $approvedProperty->state }}</td>
                      <td><span class="label label-success">Approved</span></td>
                      <td><a href="{{ route('property_detail', $approvedProperty->id) }}" class="btn btn-primary btn-sm">Details</a></td>
                    </tr>
                  @empty
                    <tr class="text-center">
                      <td colspan="9">No Approved Property Available</td>
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