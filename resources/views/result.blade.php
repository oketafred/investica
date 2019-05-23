@extends('layout')

@section('content')
	<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Titlebar
================================================== -->
<div class="parallax titlebar"
	data-background="{{ asset("plugins/images/listings-parallax.jpg") }}"
	data-color="#333333"
	data-color-opacity="0.7"
	data-img-width="800"
	data-img-height="505">

	<div id="titlebar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<h2>{{ $search->count() }} Search results found.</h2>
					
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="{{ route('index') }}">Home</a></li>
							<li>Search Properties</li>
						</ul>
					</nav>

				</div>
			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row sticky-wrapper">

		<div class="col-md-8">			
			<!-- Listings -->
			<div class="listings-container list-layout">

				@if($search->count() > 0)

					@foreach($search as $search_result)
						<div class="listing-item">

						<a href="{{ route('property-detail-info', $search_result->id) }}" class="listing-img-container">

							<div class="listing-badges">
								<span class="featured">Featured</span>
								<span>For Sale</span>
							</div>
							@php
								$property_image = json_decode($search_result->gallery, true)
							@endphp

							<img src="{{ asset("properties/" . $property_image[0]) }}" alt="">

						</a>
						
						<div class="listing-content">

							<div class="listing-title">
								<h4><a href="{{ route('property-detail-info', $search_result->id) }}">{{ $search_result->user->vendor_code }}</a></h4>
								<a>
									<i class="fa fa-map-marker"></i>
									{{ $search_result->address }}, {{ $search_result->city }}
								</a>

								<a href="{{ route('property-detail-info', $search_result->id) }}" class="details button border">Details</a>
							</div>

							<ul class="listing-details">
								<li>{{ $search_result->bed_rooms }} Bedroom</li>
								<li>{{ $search_result->bath_rooms }} Rooms</li>
								<li>{{ $search_result->area == 0 ? 'Unknown' : $search_result->area }} sq ft</li>
							</ul>

							<div class="listing-footer">
								<a><i class="fa fa-calendar-o"></i> {{ $search_result->created_at->diffForHumans() }}</a>
							</div>

						</div>
						<!-- Listing Item / End -->

					</div>
					@endforeach
				@else
					

					<div class="notification error closeable">
						<h1 class="text-center">No search results found.</h1>
					</div>
				@endif


				<!-- Listing Item -->

 
			{{-- @forelse($all_properties as $property)
				<div class="listing-item">

					<a href="{{ route('property-detail-info', $property->id) }}" class="listing-img-container">

						<div class="listing-badges">
							<span class="featured">Featured</span>
							<span>For Sale</span>
						</div>
						@php
							$property_image = json_decode($property->gallery, true)
						@endphp

						<img src="{{ asset("properties/" . $property_image[0]) }}" alt="">

					</a>
					
					<div class="listing-content">

						<div class="listing-title">
							<h4><a href="{{ route('property-detail-info', $property->id) }}">34789379539</a></h4>
							<a>
								<i class="fa fa-map-marker"></i>
								{{ $property->address }}, {{ $property->city }}
							</a>

							<a href="{{ route('property-detail-info', $property->id) }}" class="details button border">Details</a>
						</div>

						<ul class="listing-details">
							<li>{{ $property->bed_rooms }} Bedroom</li>
							<li>{{ $property->bath_rooms }} Rooms</li>
							<li>1450 sq ft</li>
						</ul>

					</div>
					<!-- Listing Item / End -->

				</div>
			@empty
	
  			@endforelse --}}
				<!-- Listing Item / End -->

			</div>
			<!-- Listings Container / End -->

			
			<!-- Pagination -->
			<div class="pagination-container margin-top-20">
				{{ $search->links() }}
			</div>
			<!-- Pagination / End -->

		</div>


		<!-- Sidebar
		================================================== -->
		<div class="col-md-4">
			<div class="sidebar sticky right">

				<!-- Widget -->
				<div class="widget margin-bottom-40">
					<h3 class="margin-top-0 margin-bottom-35">Find New Home</h3>
					
				<form action="{{ route('search') }}" method="POST">
					{{ csrf_field() }}

					<div class="row with-forms">
						<!-- City Name -->
						<div class="col-md-12">
							<input type="text" name="address" class="ico-01" placeholder="Enter Suburb Name"/>
						</div>
					</div>
					<!-- Row -->
					<div class="row with-forms">
						<!-- Status -->
						<div class="col-md-12">
							<select name="status" data-placeholder="Any Status" class="chosen-select-no-single" >
								<option>Any Status</option>	
								<option value="Bare Land">Bare Land</option>
								<option value="Off Plan">Off Plan</option>
								<option value="Completed">Completed</option>
							</select>
						</div>
					</div>
					<!-- Row / End -->


					<!-- Row -->
					<div class="row with-forms">
						<!-- Type -->
						<div class="col-md-12">
							<select data-placeholder="Any Type" class="chosen-select-no-single" >
								<option>Any Type</option>	
								<option>Apartments</option>
								<option>Houses</option>
								<option>Commercial</option>
								<option>Garages</option>
								<option>Lots</option>
							</select>
						</div>
					</div>
					<!-- Row / End -->


					<!-- Row -->
					<div class="row with-forms">
						<!-- States -->
						<div class="col-md-12">
							<select data-placeholder="All States" class="chosen-select" >
								<option>All Countries</option>	
								<option>Uganda</option>
								<option>Kenya</option>
								<option>Rwanda</option>
								<option>Tanzania</option>
							</select>
						</div>
					</div>
					<!-- Row / End -->


					<!-- Row -->
					<div class="row with-forms">
						<!-- Cities -->
						<div class="col-md-12">
							<select data-placeholder="All Cities" class="chosen-select" >
								<option>All Cities</option>
								<option>New York</option>
								<option>Los Angeles</option>
								<option>Chicago</option>
								<option>Brooklyn</option>
								<option>Queens</option>
								<option>Houston</option>
								<option>Manhattan</option>
								<option>Philadelphia</option>
								<option>Phoenix</option>
								<option>San Antonio</option>
								<option>Bronx</option>
								<option>San Diego</option>
								<option>Dallas</option>
								<option>San Jose</option>
							</select>
						</div>
					</div>
					<!-- Row / End -->


					<!-- Row -->
					<div class="row with-forms">

						<!-- Min Area -->
						<div class="col-md-6">
							<select data-placeholder="Beds" class="chosen-select-no-single" >
								<option label="blank"></option>	
								<option>Beds (Any)</option>	
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>

						<!-- Max Area -->
						<div class="col-md-6">
							<select data-placeholder="Baths" class="chosen-select-no-single" >
								<option label="blank"></option>	
								<option>Baths (Any)</option>	
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>

					</div>
					<!-- Row / End -->

					<br>

					<!-- Area Range -->
					<div class="range-slider">
						<label>Area Range</label>
						<div id="area-range" data-min="0" data-max="1500" data-unit="sq ft"></div>
						<div class="clearfix"></div>
					</div>

					<br>
					
					<!-- Price Range -->
					<div class="range-slider">
						<label>Price Range</label>
						<div id="price-range" data-min="0" data-max="400000" data-unit="$"></div>
						<div class="clearfix"></div>
					</div>



					<!-- More Search Options -->
					{{-- <a href="#" class="more-search-options-trigger margin-bottom-10 margin-top-30" data-open-title="Additional Features" data-close-title="Additional Features"></a>

					<div class="more-search-options relative">

						<!-- Checkboxes -->
						<div class="checkboxes one-in-row margin-bottom-10">
					
							<input id="check-2" type="checkbox" name="check">
							<label for="check-2">Air Conditioning</label>

							<input id="check-3" type="checkbox" name="check">
							<label for="check-3">Swimming Pool</label>

							<input id="check-4" type="checkbox" name="check" >
							<label for="check-4">Central Heating</label>

							<input id="check-5" type="checkbox" name="check">
							<label for="check-5">Laundry Room</label>	


							<input id="check-6" type="checkbox" name="check">
							<label for="check-6">Gym</label>

							<input id="check-7" type="checkbox" name="check">
							<label for="check-7">Alarm</label>

							<input id="check-8" type="checkbox" name="check">
							<label for="check-8">Window Covering</label>
					
						</div>
						<!-- Checkboxes / End -->

					</div> --}}
					<!-- More Search Options / End -->

					<button type="submit" class="button fullwidth margin-top-30">Search</button>

				</form>

				</div>
				<!-- Widget / End -->

			</div>
		</div>
		<!-- Sidebar / End -->
	</div>
</div>


<!-- Footer
================================================== -->
<div class="margin-top-55"></div>
@endsection