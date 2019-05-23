@extends('layout')

@section('content')
	<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Content
================================================== -->

<!-- Map Container -->
<div class="contact-map margin-bottom-55">

	<!-- Google Maps -->
	<div class="google-map-container">
		<div class="mapouter"><div class="gmap_canvas"><iframe width="900" height="420" id="gmap_canvas" src="https://maps.google.com/maps?q=investica%20global&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.emojilib.com"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:800px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:855px !important;}</style></div>
	</div>
	<!-- Google Maps / End -->

	<!-- Office -->
	<div class="address-box-container">
		<div class="address-container" data-background-image="{{ asset("plugins/images/our-office.jpg") }}">
			<div class="office-address">
				<h3>Our Office</h3>
				<ul>
					<li>Workers House 6th Floor, South Wing </li>
					<li>Kampala, Uganda</li>
					<li>Phone +256 772678989 <br>&nbsp; +256 752 336363 </li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Office / End -->

</div>
<div class="clearfix"></div>
<!-- Map Container / End -->


<!-- Container / Start -->
<div class="container">

	<div class="row">

		<!-- Contact Details -->
		<div class="col-md-4">

			<h4 class="headline margin-bottom-30">Find Us There</h4>

			<!-- Contact Details -->
			<div class="sidebar-textbox">
				<p>Plot 1 Pilkington Road,Workers House 6th floor, South wing, P.O. Box 6524, Kampala, Uganda</p>

				<ul class="contact-details">
					<li><i class="im im-icon-Phone-2"></i> <strong>Tel:</strong> <span>(+256) 312800670 </span></li>
					<li><i class="im im-icon-Phone-2"></i> <strong>Mob:</strong> <span>(+256) 752336363 </span></li>
					<li><i class="im im-icon-Globe"></i> <strong>Web:</strong> <span><a href="http://www.investicaglobal.com" target="_blank">http://www.investicaglobal.com</a></span></li>
					<li><i class="im im-icon-Envelope"></i> <strong>E-Mail:</strong> <span><a href="mailto:info@investicaglobal.com"><span class="__cf_email__">info@investicaglobal.com</span></a></span></li>
				</ul>
			</div>

		</div>

		<!-- Contact Form -->
		<div class="col-md-8">

			<section id="contact">
				<h4 class="headline margin-bottom-35">Contact Form</h4>

				<div id="contact-message"></div> 

					<form method="post" action="http://www.vasterad.com/themes/findeo/contact.php" name="contactform" id="contactform" autocomplete="on">

					<div class="row">
						<div class="col-md-6">
							<div>
								<input name="name" type="text" id="name" placeholder="Your Name" required="required" />
							</div>
						</div>

						<div class="col-md-6">
							<div>
								<input name="email" type="email" id="email" placeholder="Email Address" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" />
							</div>
						</div>
					</div>

					<div>
						<input name="subject" type="text" id="subject" placeholder="Subject" required="required" />
					</div>

					<div>
						<textarea name="comments" cols="40" rows="3" id="comments" placeholder="Message" spellcheck="true" required="required"></textarea>
					</div>

					<input type="submit" class="submit button" id="submit" value="Submit Message" />

					</form>
			</section>
		</div>
		<!-- Contact Form / End -->

	</div>

</div>
<!-- Container / End -->
@endsection