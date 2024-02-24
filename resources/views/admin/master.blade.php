@include('admin.layout.head')
	<body class="{{ app()->getLocale() == 'ar' ?  'sidebar-collapse' : ''}}">
		<!-- Site wrapper -->
		<div class="wrapper">
			<!-- Navbar -->
			@include('admin.layout.main_header')
			<!-- /.navbar -->
			<!-- Main Sidebar Container -->
			@include('admin.layout.main_sidebar')
			<!-- Content Wrapper. Contains page content -->
			
			@yield('content')
			<!-- /.content-wrapper -->
			@include('admin.layout.footer')
			
		</div>
		
		<!-- ./wrapper -->
		
		<!-- jQuery -->
		@include('admin.layout.footer_scripts')
	</body>
</html>