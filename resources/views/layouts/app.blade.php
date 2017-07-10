<!DOCTYPE html>
<html>
<head>
   @include('layouts.head')
</head>

<body>

<header>
    @include('layouts.header')
</header>

<div class="container">
    @yield('content')
</div>

<footer>
    @include('layouts.footer')
</footer>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
@yield('script')
</body>
</html>
