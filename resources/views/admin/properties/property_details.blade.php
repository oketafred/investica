@extends('admin.adminlayout')

@section('content')
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Property Detail
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Property Detail</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                @if($property->published)
                  <h3>{{ $property->property_title }}<span class="pull-right">
                    <a href="{{ route('property.unpublished', $property->id)}}" class="btn btn-danger btn-sm">Unapprove</a>
                  </span></h3>
                @else
                  <h3>{{ $property->property_title }}<span class="pull-right">
                    <a href="{{ route('property.published', $property->id) }}" class="btn btn-success btn-sm">Approved</a>
                  </span></h3>

                @endif
                
                <hr>
                <h5>Uploaded by Vendor: <strong>{{ $property->user->full_name }}</strong> Vendor Code <strong>{{ $property->user->vendor_code }}</strong>
                  <span class="mailbox-read-time pull-right">{{ $property->created_at->diffForHumans() }}</span></h5>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
            	@php
				$property = json_decode($property->gallery, true)
				@endphp
              	@foreach($property as $property_image)
	              {{-- {{ dd($property_image) }} --}}
	                <img style="margin: 20px;" width="45%" height="300px" src="{{ asset("properties/" . $property_image) }}">
	            @endforeach
            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

 

@endsection