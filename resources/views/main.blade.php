<!DOCTYPE html>
<html>
@include('layout._head')
@yield('extra_style')
<style type="text/css">
.select2-dropdown {
  z-index: 9001;
}
</style>
<body class="body-loading body-cpanel">

		<div class="div-loading animated fadeIn">

	        <div class="spiner-example">
	            <div class="sk-spinner sk-spinner-wandering-cubes">
	                <div class="sk-cube1"></div>
	                <div class="sk-cube2"></div>
	            </div>
	        </div>
			
		</div>

		<div class="ajax-loading animated fadeIn">
			<div class="spiner-example">
                <div class="sk-spinner sk-spinner-wave">
                    <div class="sk-rect1"></div>
                    <div class="sk-rect2"></div>
                    <div class="sk-rect3"></div>
                    <div class="sk-rect4"></div>
                    <div class="sk-rect5"></div>
                </div>
            </div>
		</div>	

        <div id="page-wrapper" class="gray-bg dashbard-1">
			
			@include('layout._navbar')

			@yield('content')

			@include('layout._footer')
		</div>
	@include('layout._script')
	@yield('extra_script')
</body>
</html>