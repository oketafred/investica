
<!DOCTYPE html>

<head>

<!-- Basic Page Needs
================================================== -->
<title>Investica Global Limited</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{ asset("plugins/css/style.css") }}">
<link rel="stylesheet" href="{{ asset("plugins/css/colors/main.css") }}" id="colors">
<link rel="stylesheet" href="{{ asset("plugins/parsley/parsley.css") }}">
<link rel="stylesheet" href="{{ asset("plugins/toastr/toastr.min.css") }}">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">


<!-- Header Container
================================================== -->
@include("layouts.navbar")


<div class="content-wrapper">
    @yield('content')
</div>

@include('sweetalert::alert')


<!-- Footer
================================================== -->
@include("layouts.footer")


<!-- Scripts
================================================== -->
<script type="text/javascript" src="{{ asset("plugins/scripts/jquery-2.2.0.min.js") }}"></script>
<script src="{{ asset("plugins/toastr/toastr.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("plugins/scripts/chosen.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("plugins/scripts/magnific-popup.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("plugins/scripts/owl.carousel.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("plugins/scripts/rangeSlider.js") }}"></script>
<script type="text/javascript" src="{{ asset("plugins/scripts/sticky-kit.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("plugins/scripts/slick.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("plugins/scripts/masonry.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("plugins/scripts/mmenu.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("plugins/scripts/tooltips.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("plugins/scripts/custom.js") }}"></script>
{{-- <script type="text/javascript" src="{{ asset("plugins/scripts/dropzone.js") }}"></script> --}}
<script type="text/javascript" src="{{ asset("plugins/parsley/parsley.min.js") }}"></script>

@yield('scripts')

</div>
<!-- Wrapper / End -->

<!---- Toastr ---->
<script>
  @if(Session::has('success'))
    toastr.success({{ Session::get('success') }})
  @endif

  @if(Session::has('error'))
    toastr.success({{ Session::get('error') }})
  @endif
    
</script>

@if(Sentinel::check())
  <script>
  window.intercomSettings = {
    app_id: "toh4y9sn",
    name: "<?php echo Sentinel::getUser()->full_name ?>", // Full name
    email: "<?php echo Sentinel::getUser()->email ?>", // Email address
    created_at: "<?php echo strtotime(Sentinel::getUser()->created_at) ?>" // Signup date as a Unix timestamp
  };
</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/toh4y9sn';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
@endif

</body>

</html>