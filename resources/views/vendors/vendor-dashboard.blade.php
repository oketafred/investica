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

				<h2>My Properties</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>My Properties</li>
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
			@include('vendors/includes/vendor_sidebar')
		</div>

		<div class="col-md-8">
			<table class="manage-table responsive-table">

				<tr>
					<th><i class="fa fa-file-text"></i> Property</th>
					<th class="expire-date"><i class="fa fa-map-marker"></i> Town/City</th>
					<th></th>
				</tr>

				<!-- Item #1 -->
				<tr>

					@forelse($properties as $property)
					<tr>

						@php
						$property_image = json_decode($property->gallery, true)
						@endphp

						<td class="title-container">
							<img src="{{ asset("properties/" . $property_image[0]) }}" alt="">
							<div class="title">
								<h4><a href="#">{{ $property->address }}</a></h4>
								<span> 784367676  </span>
								<span class="table-property-price">USD {{ $property->price }}</span>
							</div>
						</td>

		                <td class="expire-date">{{ $property->city }}</td>
	                    <td class="action">
							<a href="#"><i class="fa fa-pencil"></i> Edit</a>
							<a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
							<a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
						</td>
	                </tr>
                  @empty
					
                  @endforelse
					
					
					
				</tr>

			</table>
		</div>

	</div>
</div>


<!-- Footer
================================================== -->
<div class="margin-top-55"></div>
@endsection