
 <!-- latest jquery-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <!-- Bootstrap js-->
<script src="{{asset('back/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
<!-- feather icon js-->
<script src="{{asset('back/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('back/js/icons/feather-icon/feather-icon.js')}}"></script>
<!-- scrollbar js-->
<script src="{{asset('back/js/scrollbar/simplebar.js')}}"></script>
<script src="{{asset('back/js/scrollbar/custom.js')}}"></script>
<!-- Sidebar jquery-->
<script src="{{asset('back/js/config.js')}}"></script>
<!-- Plugins JS start-->
<script src="{{ asset('back/js/chart/apex-chart/apex-chart.js') }}"></script>
<script src="{{ asset('back/js/chart/apex-chart/stock-prices.js') }}"></script>
<script id="menu" src="{{asset('back/js/sidebar-menu.js')}}"></script>
<script src="{{ asset('back/js/slick/slick.min.js') }}"></script>
<script src="{{ asset('back/js/slick/slick.js') }}"></script>
<script src="{{ asset('back/js/header-slick.js') }}"></script>
@yield('script')

@if(Route::current()->getName() != 'popover') 
	<script src="{{asset('back/js/tooltip-init.js')}}"></script>
@endif

<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{asset('back/js/script.js')}}"></script>
<script src="{{asset('back/js/theme-customizer/customizer.js')}}"></script>


{{-- @if(Route::current()->getName() == 'index') 
	<script src="{{asset('back/js/layout-change.js')}}"></script>
@endif --}}

@if(Route::currentRouteName() == 'index')
<script>
	new WOW().init();
</script>
@endif
