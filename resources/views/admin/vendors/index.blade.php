@extends('admin.adminlayout')

@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        List of all Vendors
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Vendors</li>
	      </ol>
	    </section>
		
		<section class="content">
      <div class="row">
        <div class="col-md-12">
		<div class="box">
            <!-- /.box-header -->
            <div class="box-header with-border">
                  <h3 class="box-title">
                    <a href="{{ route('add_vendors') }}" class="btn btn-info btn-sm">
                      <i class="fa fa-backward"></i> Add a New Vendor 
                    </a> 
                  </h3>
                  <div class="box-tools pull-right">
                      
                  </div>
              </div>
            <div class="box-body no-padding">
              <table id="#example2" class="table table-striped">
                <tr>
                  <th>#</th>
                  {{-- <th>Vendor Photo</th> --}}
                  <th>Full Name</th>
                  <th>Vendor Code</th>
                  {{-- <th>Telephone</th> --}}
                  <th>Email Address</th>
                  <th>Created At</th>
                </tr>
                  @forelse($vendors as $vendor)
                    <tr>
                      <td>{{ $vendor->id }}</td>
                      {{-- <td><img style="width: 60px; height: 60px; border-radius: 50%;" src="{{ asset('adminlte/dist/img/user2-160x160.jpg')}}" alt=""></td> --}}
                      <td>{{ $vendor->full_name }}</td>
                      <td>{{ $vendor->vendor_code }}</td>
                      {{-- <td>+256787584128</td> --}}
                      <td>{{ $vendor->email }}</td>
                      <td>{{ $vendor->created_at }}</td>
                    </tr>
                    <tr>
                  @empty

                  @endforelse

              </table>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
  </div>
</section>

	</div>
@endsection