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

				<h2>Submit a New Property</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="{{ route('index') }}">Home</a></li>
						<li>Submit Property</li>
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
			<div class="row">

	<!-- Submit Page -->
	<div class="col-md-12">
		<div class="submit-page">

		@if(session('error'))
			<div class="notification error closeable">
				<p><span>Error!</span> {{ session('error') }}</p>
				<a class="close" href="#"></a>
			</div>
        @endif

        @if(session('success'))
			<div class="notification success closeable">
				<p><span>Success!</span> {{ session('success') }}</p>
				<a class="close" href="#"></a>
			</div>
        @endif

        @if (count($errors) > 0)

            @foreach($errors->all() as $error)

                <div class="notification error closeable">
					<p><span>Error!</span> {{ $error }}</p>
					<a class="close" href="#"></a>
				</div>
            @endforeach

        @endif

		
		<form action="{{ route('store_property') }}" method="POST" enctype="multipart/form-data" data-parsley-validate>

			{{ csrf_field() }}

			<!-- Section -->
			<h3>Basic Information</h3>
			<div class="submit-section">
		
				<!-- Title -->
				<div class="form">
					<h5>Property Title <i class="tip" data-tip-content="Type title that will also contains an unique feature of your property (e.g. renovated, air contidioned)"></i></h5>
					<input class="search-field" name="property_title" type="text" required />
				</div>

				<!-- Row -->
				<div class="row with-forms">

					<!-- Status -->
					<div class="col-md-6">
						<h5>Status</h5>
						<select name="property_status" required>
							<option value="">Select an Option</option>	
							<option value="Bare Land">Bare Land</option>
							<option value="Off Plan">Off Plan</option>
							<option value="Completed">Completed</option>
						</select>
					</div>

					<!-- Type -->
					<div class="col-md-6">
						<h5>Type</h5>
						<select name="property_type" required>
							<option value="">Select an Option</option>		
							<option value="Apartment">Apartment</option>
							<option value="House">House</option>
							<option value="Commercial">Commercial</option>
							<option value="Garage">Garage</option>
							<option value="Lot">Lot</option>
						</select>
					</div>

				</div>
				<!-- Row / End -->

				<!-- Row -->
				<div class="row with-forms">

					<!-- Price -->
					<div class="col-md-4">
						<h5>Price <i class="tip" data-tip-content="Type overall or monthly price if property is for rent"></i></h5>
						<div class="select-input disabled-first-option">
							<input type="text" data-unit="USD" name="property_price" required>
						</div>
					</div>
					
					<!-- Area -->
					<div class="col-md-4">
						<h5>Area <span>(optional)</span></h5>
						<div class="select-input disabled-first-option">
							<input type="text" data-unit="Sq Ft" name="property_area">
						</div>
					</div>

					<!-- Rooms -->			
					<div class="col-md-4">
						<h5>Rooms</h5>
						<select name="property_rooms" required>
							<option value="">Select an Option</option>	
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="More">More than 5</option>
						</select>
					</div>

				</div>
				<!-- Row / End -->

			<!-- Section -->
			<h3>Gallery</h3>
			<div class="submit-section">
				<input type="file" name="property_images[]" multiple class="dropzone dz-clickable" required>
			</div>
			<!-- Section / End -->

			<!-- Section -->
			<h3>Location</h3>
			<div class="submit-section">

				<!-- Row -->
				<div class="row with-forms">

					<!-- Address -->
					<div class="col-md-6">
						<h5>Address</h5>
						<input id="autocomplete" name="property_address" placeholder="Enter your address" onFocus="geolocate()" type="text" required/>
					</div>

					<!-- City -->
					<div class="col-md-6">
						<h5>City</h5>
						<input type="text" name="property_city" id="locality" required />
					</div>

					<!-- City -->
					<div class="col-md-6">
						<h5>State</h5>
						<input type="text" name="property_state" id="administrative_area_level_1" required/>
					</div>

					<!-- Zip-Code -->
					<div class="col-md-6">
						<h5>Country</h5>
						<input type="text" name="property_country" id="country" required/>
					</div>

				</div>
				<!-- Row / End -->

			</div>
			<!-- Section / End -->

			<!-- Section -->
			<h3>Detailed Information</h3>
			<div class="submit-section">

				<!-- Row -->
				<div class="row with-forms">

					<!-- Age of Home -->
					<div class="col-md-4">
						<h5>Building Age <span>(optional)</span></h5>
						<select name="property_age">
							<option value="">Select an Option</option>	
							<option value="btn_0_to_1yrs">0 - 1 Years</option>
							<option value="btn_0_to_5yrs">0 - 5 Years</option>
							<option value="btn_0_to_10yrs">0 - 10 Years</option>
							<option value="btn_0_to_20yrs">0 - 20 Years</option>
							<option value="btn_0_to_50yrs">0 - 50 Years</option>
							<option value="50_plus_yrs">50 + Years</option>
						</select>
					</div>

					<!-- Beds -->
					<div class="col-md-4">
						<h5>Bedrooms</h5>
						<select name="property_bedrooms" required>
							<option value="">Select an Option</option>		
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>

					<!-- Baths -->
					<div class="col-md-4">
						<h5>Bathrooms</h5>
						<select name="property_bathrooms" required>
							<option value="">Select an Option</option>	
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>

				</div>
				<!-- Row / End -->

				<!-- Checkboxes -->
				 <h5 class="margin-top-30">Other Features <span>(optional)</span></h5>
				<div class="checkboxes in-row margin-bottom-20">
			
					<input id="check-2" type="checkbox" name="air_condition">
					<label for="check-2">Air Conditioning</label>

					<input id="check-3" type="checkbox" name="swimming_pool">
					<label for="check-3">Swimming Pool</label>

					<input id="check-4" type="checkbox" name="central_heating" >
					<label for="check-4">Central Heating</label>

					<input id="check-5" type="checkbox" name="laundry_room">
					<label for="check-5">Laundry Room</label>	


					<input id="check-6" type="checkbox" name="gym">
					<label for="check-6">Gym</label>

					<input id="check-7" type="checkbox" name="alarm">
					<label for="check-7">Alarm</label>

					<input id="check-8" type="checkbox" name="window_covering">
					<label for="check-8">Window Covering</label>
			
				</div>
				<!-- Checkboxes / End -->

				</div>
				<!-- Section / End -->


			<!-- Section -->
			<h3>Property Owner's Contact</h3>
			<div class="submit-section">

				<!-- Row -->
				<div class="row with-forms">

					<!-- Name -->
					<div class="col-md-4">
						<h5>Name</h5>
						<input type="text" name="contact_name" required>
					</div>

					<!-- Email -->
					<div class="col-md-4">
						<h5>E-Mail</h5>
						<input type="text" name="contact_email" required>
					</div>

					<!-- Name -->
					<div class="col-md-4">
						<h5>Phone</h5>
						<input type="text" name="contact_number" required>
					</div>

				</div>
				<!-- Row / End -->

			</div>
			<!-- Section / End -->

			<div class="divider"></div>
			<button type="submit" class="button preview margin-top-5">Submit Property <i class="fa fa-arrow-circle-right"></i></button>

		</form>

		<!--Fields being used by Google Place behind the scene-->
        <input class="field" id="street_number" hidden />
        <input class="field" id="route" hidden />
		<input class="field" id="postal_code" hidden />
		<!--/ Fields being used by Google Place behind the scene-->

		</div>
	</div>

</div>
		</div>

	</div>
</div>


<!-- Footer
================================================== -->
<div class="margin-top-55"></div>

<!--Google API Link Scripts for Auto-Place-->




	 <script>
	// This sample uses the Autocomplete widget to help the user select a
	// place, then it retrieves the address components associated with that
	// place, and then it populates the form fields with those details.
	// This sample requires the Places library. Include the libraries=places
	// parameter when you first load the API. For example:
	// <script
	// src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

	var placeSearch, autocomplete;

	var componentForm = {
	  street_number: 'short_name',
	  route: 'long_name',
	  locality: 'long_name',
	  administrative_area_level_1: 'short_name',
	  country: 'long_name',
	  postal_code: 'short_name'
	};

	function initAutocomplete() {
	  // Create the autocomplete object, restricting the search predictions to
	  // geographical location types.
	  autocomplete = new google.maps.places.Autocomplete(
	      document.getElementById('autocomplete'), {types: ['geocode']});

	  // Avoid paying for data that you don't need by restricting the set of
	  // place fields that are returned to just the address components.
	  autocomplete.setFields(['address_component']);

	  // When the user selects an address from the drop-down, populate the
	  // address fields in the form.
	  autocomplete.addListener('place_changed', fillInAddress);
	}

	function fillInAddress() {
	  // Get the place details from the autocomplete object.
	  var place = autocomplete.getPlace();

	  for (var component in componentForm) {
	    document.getElementById(component).value = '';
	    document.getElementById(component).disabled = false;
	  }

	  // Get each component of the address from the place details,
	  // and then fill-in the corresponding field on the form.
	  for (var i = 0; i < place.address_components.length; i++) {
	    var addressType = place.address_components[i].types[0];
	    if (componentForm[addressType]) {
	      var val = place.address_components[i][componentForm[addressType]];
	      document.getElementById(addressType).value = val;
	    }
	  }
	}

	// Bias the autocomplete object to the user's geographical location,
	// as supplied by the browser's 'navigator.geolocation' object.
	function geolocate() {
	  if (navigator.geolocation) {
	    navigator.geolocation.getCurrentPosition(function(position) {
	      var geolocation = {
	        lat: position.coords.latitude,
	        lng: position.coords.longitude
	      };
	      var circle = new google.maps.Circle(
	          {center: geolocation, radius: position.coords.accuracy});
	      autocomplete.setBounds(circle.getBounds());
	    });
	  }
	}
	    </script>
	    
	    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADK4e9hANkW_9perAja8dvUKtZ7U5F4to&libraries=places&callback=initAutocomplete"
	        async defer></script>

@endsection