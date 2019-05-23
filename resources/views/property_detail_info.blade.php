@extends('layout')

@section('content')
	<!-- Titlebar
================================================== -->
<div id="titlebar" class="property-titlebar margin-bottom-0">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<a href="{{ route('list-of-properties') }}" class="back-to-listings"></a>
				<div class="property-title">
					<h2>{{ $property->property_title }} <span class="property-badge">For Sale</span></h2>
					<span>
						<a href="#location" class="listing-address">
							<i class="fa fa-map-marker"></i>
							{{ $property->address }}
						</a>
					</span>
				</div>

				<div class="property-pricing">
					<div class="property-price">${{ number_format($property->price, 0) }}</div>
					{{-- <div class="sub-price">$770 / sq ft</div> --}}
				</div>


			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row margin-bottom-50">
		<div class="col-md-12">

	@php
		$property_gallery = json_decode($property->gallery, true)
	@endphp
  	
      {{-- {{ dd($property_image) }} --}}
        {{-- <img style="margin: 20px;" width="45%" height="300px" src="{{ asset("properties/" . $property_image) }}"> --}}
    
		
			<!-- Slider -->
			<div class="property-slider default">
				@foreach($property_gallery as $property_image)
				<a href="{{ asset("properties/" . $property_image) }}" data-background-image="{{ asset("properties/" . $property_image) }}" class="item mfp-gallery"></a>
				@endforeach
			</div>

			<!-- Slider Thumbs -->
			<div class="property-slider-nav">

				@foreach($property_gallery as $property_image)
					<div class="item"><img src="{{ asset("properties/" . $property_image) }}" alt=""></div>
				@endforeach
				
			</div>

		</div>
	</div>
</div>


<div class="container">
	<div class="row">

		<!-- Property Description -->
		<div class="col-lg-8 col-md-7">
			<div class="property-description">

				<!-- Main Features -->
				<ul class="property-main-features">
					<li>Bedrooms <span>{{ $property->bed_rooms }}</span></li>
					<li>Bathrooms <span>{{ $property->bath_rooms }}</span></li>
					<li>Area <span>{{ $property->area }} sq ft</span></li>
				</ul>
				
				<!-- Details -->
				<h3 class="desc-headline">Details</h3>
				<ul class="property-features margin-top-0">
					<li>Building Age: <span>2 Years</span></li>
					<li>Parking: <span>Attached Garage</span></li>
					<li>Cooling: <span>Central Cooling</span></li>
					<li>Heating: <span>Forced Air, Gas</span></li>
					<li>Sewer: <span>Public/City</span></li>
					<li>Water: <span>City</span></li>
					<li>Exercise Room: <span>Yes</span></li>
					<li>Storage Room: <span>Yes</span></li>
				</ul>


				<!-- Features -->
				<h3 class="desc-headline">Features</h3>
					<div class="checkboxes in-row margin-bottom-20">
			
					<input type="checkbox" {{ $property->air_condition ? 'checked' : '' }} >
					<label for="check-2">Air Conditioning</label>

					<input type="checkbox" {{ $property->swimming_pool ? 'checked' : '' }} >
					<label for="check-3">Swimming Pool</label>

					<input type="checkbox" {{ $property->central_heating ? 'checked' : '' }} >
					<label for="check-4">Central Heating</label>

					<input type="checkbox" {{ $property->laundry_room ? 'checked' : '' }} >
					<label for="check-5">Laundry Room</label>	


					<input type="checkbox" {{ $property->gym ? 'checked' : '' }} >
					<label for="check-6">Gym</label>

					<input type="checkbox" {{ $property->alarm ? 'checked' : '' }} >
					<label for="check-7">Alarm</label>

					<input type="checkbox" {{ $property->window_covering ? 'checked' : '' }} >
					<label for="check-8">Window Covering</label>
			
				</div>

				<h3 class="desc-headline no-border"></h3>
				

			</div>
		</div>
		<!-- Property Description / End -->


		<!-- Sidebar -->
		<div class="col-lg-4 col-md-5">
			<div class="sidebar sticky right">

				<!-- Widget -->
				<div class="widget margin-bottom-30">
					<button class="widget-button with-tip" data-tip-content="Print"><i class="sl sl-icon-printer"></i></button>
					<button class="widget-button with-tip" data-tip-content="Add to Bookmarks"><i class="fa fa-star-o"></i></button>
					<button class="widget-button with-tip compare-widget-button" data-tip-content="Add to Compare"><i class="icon-compare"></i></button>
					<div class="clearfix"></div>
				</div>
				<!-- Widget / End -->


				<!-- Widget -->
				<div class="widget">

					<!-- Agent Widget -->
					<div class="agent-widget">
						<div class="agent-title">
							<div class="agent-photo"><img src="{{ asset("plugins//images/agent-avatar.jpg") }}" alt="" /></div>
							<div class="agent-details">
								<h4><a href="#">Jennie Wilson</a></h4>
								<span><i class="sl sl-icon-call-in"></i>(123) 123-456</span>
							</div>
							<div class="clearfix"></div>
						</div>

						<input type="text" placeholder="Your Email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$">
						<input type="text" placeholder="Your Phone">
						<textarea>I'm interested in this property [ID 123456] and I'd like to know more details.</textarea>
						<button class="button fullwidth margin-top-5">Send Message</button>
					</div>
					<!-- Agent Widget / End -->

				</div>
				<!-- Widget / End -->

			</div>
		</div>
		<!-- Sidebar / End -->

	</div>
</div>

@endsection