@extends("layout")

@section("content")

<div class="parallax titlebar"
	data-background="{{ asset("plugins/images/listings-parallax.jpg") }}"
	data-color="#333333"
	data-color-opacity="0.7"
	data-img-width="800"
	data-img-height="505">
	<!-- Titlebar
================================================== -->
<div id="titlebar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <h2>FAQ</h2>
        
        <!-- Breadcrumbs -->
        <nav id="breadcrumbs">
          <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li>FAQ</li>
          </ul>
        </nav>

      </div>
    </div>
  </div>
</div>

</div>

<!-- Content
================================================== -->

<!-- Container -->
<div class="container">

  <div class="row"> 

    <!-- Accordions -->
    <div class="col-md-12">

      <h4 class="headline margin-top-0 margin-bottom-20">List of Frequently Asked Questions</h4>
      <div class="style-2">
        <div class="accordion">

          <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> What is Investica Global?</h3>
          <div>
            <p>Mauris mauris ante, blandit et, ultrices a, susceros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate aliquam egestas litora torquent conubia.</p>
          </div>

          <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> How do i become a vendor of Investica Global?</h3>
          <div>
            <p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. Nullam laoreet, velit ut taciti sociosqu condimentum feugiat.</p>
          </div>

          <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> How can i benefit as a vendor??</h3>
          <div>
            <p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper.</p>
          </div>

          <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> Third Accordion</h3>
          <div>
            <p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper.</p>
          </div>

          <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> Fourth Question</h3>
          <div>
            <p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper.</p>
          </div>

          <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> Fifth Question</h3>
          <div>
            <p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper.</p>
          </div>

          <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> Sixth Question</h3>
          <div>
            <p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper.</p>
          </div>

          <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> Seventh Question</h3>
          <div>
            <p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper.</p>
          </div>

        </div>
      </div>
    </div>

  </div>

</div>
<!-- Container / End -->
@endsection

