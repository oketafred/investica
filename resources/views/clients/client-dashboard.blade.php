@extends("layout")

@section("content")
	<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>List of Properties</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>List of Properties</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row">


		<!-- Widget -->
		<div class="col-md-4">
			@include('clients/includes/client_sidebar')
		</div>

		<div class="col-md-8">
			<table class="manage-table responsive-table">

				<tr>
					<th><i class="fa fa-file-text"></i> Property</th>
					<th class="expire-date"><i class="fa fa-map-marker"></i> Town/City</th>
					<th></th>
				</tr>

				<!-- Item #1 -->
				@forelse($all_properties as $all_property)
					<tr>


						@php
						$property_image = json_decode($all_property->gallery, true)
						@endphp

						<td class="title-container">
							<img src="{{ asset("properties/" . $property_image[0]) }}" alt="">
							<div class="title">
								<h4><a href="#">{{ $all_property->address }}</a></h4>
								<span> 784367676  </span>
								<span class="table-property-price">USD {{ $all_property->price }}</span>
							</div>
						</td>
						<td class="expire-date">Kampala Uganda</td>
						<td class="action">
							<a href="#"><i class="fa fa-info-circle"></i> Detail</a>
						</td>
					</tr>
				@empty
					<tr>
						<td colspan="3" class="text-center">No Property List Available</td>
					</tr>
				@endforelse

			</table>
		</div>

	</div>
</div>


<!-- Footer
================================================== -->
<div class="margin-top-55"></div>
@endsection