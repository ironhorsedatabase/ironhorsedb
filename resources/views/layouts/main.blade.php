<!doctype html>
<html lang="en">
	@include('layouts.partials._head')
	<body>
		@include('layouts.partials._nav')
		<div class="container-fluid">
			@yield('content')
		</div>
		@include('layouts.partials._footer')
		@include('layouts.partials._scripts')
	</body>
</html>
