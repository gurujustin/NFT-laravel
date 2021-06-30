<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
	<!-- header -->
    @include('layouts.header')
	<!-- end header -->

	@yield('contents')

	<!-- footer -->
    @include('layouts.footer')
	<!-- end footer -->

	<!-- JS -->
    @include('layouts.script')
</body>
</html>
