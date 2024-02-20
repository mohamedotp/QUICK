@include('admin.layout.head')
	<body class="hold-transition sidebar-mini">
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