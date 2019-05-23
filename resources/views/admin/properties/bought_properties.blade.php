@extends('admin.adminlayout')

@section('content')
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bought Properties
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Bought Properties</li>
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
                  <tr>
                    <td colspan="9" class="text-center">No Bought Property Available.</td>
                  </tr>
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