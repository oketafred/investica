@extends('admin.adminlayout')

@section('content')
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Unapproved Properties
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Unapproved Properties</li>
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

                  @forelse($unApprovedProperties as $unApprovedProperty)

                  @php
                    $property_image = json_decode($unApprovedProperty->gallery, true)
                  @endphp

                    <tr>
                      <td><img src="{{ asset("properties/" . $property_image[0]) }}" width="80px" height="50px"></td>
                      <td>123123456</td>
                      <td>Apartment</td>
                      <td>12000 USD</td>
                      <td>Muyenga</td>
                      <td>Kampala</td>
                      <td>Uganda</td>
                      <td><span class="label label-danger">Unapproved</span></td>
                      <td><a href="{{ route('property_detail', $unApprovedProperty->id) }}" class="btn btn-primary btn-sm">Details</a></td>
                    </tr>
                  @empty
                    <tr class="text-center">
                      <td colspan="9">No Unapproved Property Available</td>
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