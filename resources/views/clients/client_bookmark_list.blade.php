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

				<h2>My Bookmark List</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>My Bookmark List</li>
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
			<table class="manage-table bookmarks-table responsive-table">

				<tr>
					<th><i class="fa fa-file-text"></i> Property</th>
					<th></th>
				</tr>

				<!-- Item #1 -->
				<tr>
					<td class="title-container">
						<img src="{{ asset("plugins/images/listing-05.jpg") }}" alt="">
						<div class="title">
							<h4><a href="#">24652647</a></h4>
							<span> Lugogo Kampala </span>
							<span class="table-property-price">$535,000</span>
						</div>
					</td>
					<td class="action">
						<a href="#" class="delete"><i class="fa fa-remove"></i> Remove</a>
					</td>
				</tr>


				<!-- Item #2 -->
				<tr>
					<td class="title-container">
						<img src="{{ asset("plugins/images/listing-06.jpg") }}" alt="">
						<div class="title">
							<h4><a href="#">6265623567</a></h4>
							<span> Bukoto Kampala  </span>
							<span class="table-property-price">$420,000</span>
						</div>
					</td>
					<td class="action">
						<a href="#" class="delete"><i class="fa fa-remove"></i> Remove</a>
					</td>
				</tr>

				<!-- Item #3 -->
				<tr>
					<td class="title-container">
						<img src="{{ asset("plugins/images/listing-02.jpg") }}" alt="">
						<div class="title">
							<h4><a href="#">6565656673</a></h4>
							<span>Ntinda Kampala</span>
							<span class="table-property-price">$900 / monthly</span>
						</div>
					</td>
					<td class="action">
						<a href="#" class="delete"><i class="fa fa-remove"></i> Remove</a>
					</td>
				</tr>


				<!-- Item #4 -->
				<tr>
					<td class="title-container">
						<img src="{{ asset("plugins/images/listing-04.jpg") }}" alt="">
						<div class="title">
							<h4><a href="#">454545455</a></h4>
							<span>Kireka Kampala</span>
							<span class="table-property-price">$420,000</span>
						</div>
					</td>
					<td class="action">
						<a href="#" class="delete"><i class="fa fa-remove"></i> Remove</a>
					</td>
				</tr>

			</table>
		</div>

	</div>
</div>


<!-- Footer
================================================== -->
<div class="margin-top-55"></div>
@endsection