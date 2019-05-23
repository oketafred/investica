@extends('layout')

@section('title', '')

@section('content')
    <div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Banner
================================================== -->
<div class="parallax" data-background="{{ asset("plugins/images/home-parallax.jpg") }}" data-color="#36383e" data-color-opacity="0.45" data-img-width="2500" data-img-height="1600">
    <div class="parallax-content">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- Main Search Container -->
                    <div class="main-search-container">
                        <h2>Let Investica Find Your Property</h2>

                        <!-- Main Search -->
                    <form action="{{ route('search') }}" method="POST" class="main-search-form">
                    {{ csrf_field() }}
                            <!-- Type -->
                            <div class="search-type">
                                <label class="active"><input class="first-tab" name="tab" type="radio">For Sale</label>
                                <label><input name="tab" disabled type="radio">For Rent</label>
                                <div class="search-type-arrow"></div>
                            </div>


                            <!-- Box -->
                            <div class="main-search-box">

                                <!-- Main Search Input -->
                                <div class="main-search-input larger-input">
                                    <input id="autocomplete" placeholder="Enter your address" onFocus="geolocate()" type="text" class="ico-01" placeholder="Enter Suburb Name" name="address"/>
                                    <button type="submit" class="button">Search</button>
                                </div>

                                <!-- Row -->
                                <div class="row with-forms">

                                    <!-- Property Type -->
                                    <div class="col-md-4">
                                        <select data-placeholder="Any Status" class="chosen-select-no-single" name="status">
                                            <option value="">Status</option>
                                            <option value="Bare Land">Bare Land</option>
                                            <option value="Off Plan">Off Plan</option>
                                            <option value="Completed">Completed</option>
                                        </select>
                                    </div>
                                    <!-- City -->
                                    <div class="col-md-4">
                                        <input type="text" name="city" id="locality" placeholder="City">
                                    </div>

                                    <!-- Country -->
                                    <div class="col-md-4">
                                        <input type="text" name="country" id="country" placeholder="Country">
                                    </div>


                                </div>
                                <!-- Row / End -->

                                <!-- More Search Options -->
                                {{-- <a href="#" class="more-search-options-trigger" data-open-title="More Options" data-close-title="Less Options"></a> --}}

                                <div class="{{-- more-search-options --}}">
                                    <div class="{{-- more-search-options-container --}}">

                                        <!-- Row -->
                                        <div class="row with-forms">

                                            <!-- Min Price -->
                                            <div class="col-md-6">

                                                <!-- Select Input -->
                                                <div class="select-input">
                                                    <input type="text" placeholder="Min Price" data-unit="USD" name="price_min">
                                                </div>
                                                <!-- Select Input / End -->

                                            </div>

                                            <!-- Max Price -->
                                            <div class="col-md-6">

                                                <!-- Select Input -->
                                                <div class="select-input">
                                                    <input type="text" placeholder="Max Price" data-unit="USD" name="price_max">
                                                </div>
                                                <!-- Select Input / End -->

                                            </div>

                                        </div>
                                        <!-- Row / End -->


                                        <!-- Row -->
                                        <div class="row with-forms">

                                            <!-- Min Area -->
                                            <div class="col-md-3">
                                                <select data-placeholder="Bed Rooms" class="chosen-select-no-single" name="bed_rooms" >
                                                    <option value="">Bed Rooms</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>

                                            <!-- Max Area -->
                                            <div class="col-md-3">
                                                <select data-placeholder="Bath Rooms" class="chosen-select-no-single" name="bath_rooms" >
                                                    <option value="">Bath Rooms</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>

                                            <!--MIN AREA-->
                                            <div class="col-md-3">

                                                <!-- Select Input -->
                                                <div class="select-input">
                                                    <input type="text" placeholder="Min Area" data-unit="ft" name="area_min">
                                                </div>
                                                <!-- Select Input / End -->

                                            </div>

                                            <!--MAX AREA-->
                                            <div class="col-md-3">

                                                <!-- Select Input -->
                                                <div class="select-input">
                                                    <input type="text" placeholder="Max Area" data-unit="ft" name="area_max">
                                                </div>
                                                <!-- Select Input / End -->

                                            </div>

                                        </div>
                                        <!-- Row / End -->


                                        <!-- Checkboxes -->
                                        {{-- <div class="checkboxes in-row">

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

                                        </div> --}}
                                        <!-- Checkboxes / End -->

                                    </div>
                                </div>
                                <!-- More Search Options / End -->

                            </div>
                            <!-- Box / End -->

                        </form>
                        <!-- Main Search -->

                    </div>
                    <!-- Main Search Container / End -->

                </div>
            </div>
        </div>

    </div>
</div>


<!-- Content
================================================== -->
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <h3 class="headline margin-bottom-25 margin-top-65">Newly Added</h3>
        </div>

        <!-- Carousel -->
        <div class="col-md-12">
            <div class="carousel"


            @forelse($newly_added_properties as $property)

            @php
                $property_image = json_decode($property->gallery, true)
            @endphp

            <!-- Listing Item -->
                <div class="carousel-item">
                    <div class="listing-item">

                        <a href="{{ route('property-detail-info', $property->id) }}" class="listing-img-container">

                            <div class="listing-badges">
                                <span>For Sale</span>
                            </div>

                            <div class="listing-img-content">
                                <span class="listing-price">${{ number_format($property->price, 0) }}</i></span>
                            </div>

                            <img src="{{ asset("properties/" . $property_image[0]) }}" alt="">

                        </a>

                        <div class="listing-content">

                            <div class="listing-title">
                                <h4><a href="{{ route('property-detail-info', $property->id) }}">{{ $property->user->vendor_code }}</a></h4>
                                <a href="{{ route('property-detail-info', $property->id) }}">
                                    <i class="fa fa-map-marker"></i>
                                    {{ substr($property->address, 0, 30) }}

                                </a>
                            </div>

                            <ul class="listing-features">
                                <li>Bedrooms <span>{{ $property->bed_rooms }}</span></li>
                                <li>Bathrooms <span>{{ $property->bath_rooms }}</span></li>
                                <li>Area <span>{{ $property->area == 0 ? 'Unknown' : "$property->area sq ft" }} </span></li>
                            </ul>

                            <div class="listing-footer">
                                <a><i class="fa fa-calendar-o"></i> {{ $property->created_at->diffForHumans() }}</a>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- Listing Item / End -->

            @empty

            @endforelse

            </div>
            </div>
        </div>
        <!-- Carousel / End -->

    </div>
</div>


<!-- Container -->
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <h3 class="headline centered margin-bottom-25 margin-top-65">Most Popular Places <span>Properties In Most Popular Places</span></h3>
        </div>

        <div class="col-md-3">

            <!-- Image Box -->
            <a class="img-box" data-background-image="{{ asset("plugins/images/popular-location-01.jpg") }}">

                <div class="img-box-content visible">
                    <h4>Uganda</h4>
                    <span>{{ $uganda->count() }} Properties</span>
                </div>
            </a>

        </div>

        <div class="col-md-3">

            <!-- Image Box -->
            <a class="img-box" data-background-image="{{ asset("plugins/images/popular-location-01.jpg") }}">

                <div class="img-box-content visible">
                    <h4>Kenya </h4>
                    <span>{{ $kenya->count() }} Properties</span>
                </div>
            </a>

        </div>

        <div class="col-md-3">

            <!-- Image Box -->
            <a class="img-box" data-background-image="{{ asset("plugins/images/popular-location-02.jpg") }}">
                <div class="img-box-content visible">
                    <h4>Tanzania</h4>
                    <span>{{ $tanzania->count() }} Properties</span>
                </div>
            </a>

        </div>

        <div class="col-md-3">

            <!-- Image Box -->
            <a class="img-box" data-background-image="{{ asset("plugins/images/popular-location-01.jpg") }}">

                <div class="img-box-content visible">
                    <h4>DRC </h4>
                    <span>{{ $drc->count() }} Properties</span>
                </div>
            </a>

        </div>

        <div class="col-md-4">

            <!-- Image Box -->
            <a class="img-box" data-background-image="{{ asset("plugins/images/popular-location-03.jpg") }}">
                <div class="img-box-content visible">
                    <h4>Rwanda</h4>
                    <span>{{ $rwanda->count() }} Properties</span>
                </div>
            </a>

        </div>

        <div class="col-md-4">

            <!-- Image Box -->
            <a class="img-box" data-background-image="{{ asset("plugins/images/popular-location-03.jpg") }}">
                <div class="img-box-content visible">
                    <h4>South Sudan</h4>
                    <span>{{ $southsudan->count() }} Properties</span>
                </div>
            </a>

        </div>

        <div class="col-md-4">

            <!-- Image Box -->
            <a class="img-box" data-background-image="{{ asset("plugins/images/popular-location-04.jpg") }}">
                <div class="img-box-content visible">
                    <h4>Burundi</h4>
                    <span>{{ $burundi->count() }} Properties</span>
                </div>
            </a>

        </div>

    </div>
</div>
<!-- Container / End -->

<!-- Flip banner -->
<a href="{{ route('list-of-properties') }}" class="flip-banner parallax" data-background="" data-color="#f0ad4e" data-color-opacity="0.9" data-img-width="2500" data-img-height="1600">
    <div class="flip-banner-content">
        <h2 class="flip-visible">We help people and homes find each other</h2>
        <h2 class="flip-hidden">Browse Properties <i class="sl sl-icon-arrow-right"></i></h2>
    </div>
</a>
<!-- Flip banner / End -->

<!--Fields being used by Google Place behind the scene-->
    <input class="field" id="street_number" hidden />
    <input class="field" id="route" hidden />
    <input class="field" id="postal_code" hidden />
    <input class="field" id="administrative_area_level_1" hidden />
<!--/ Fields being used by Google Place behind the scene-->


<!--Google Maps-->
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
