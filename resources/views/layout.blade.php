<html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="{{ asset('css/default.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/fonts.css') }}" rel="stylesheet"/>

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="{{ route('welcome') }}">SimpleWork</a></h1>
			</div>
			<div id="menu">
				<ul>
				<li class="{{ Request::path() === '/' ? 'current_page_item' : ''}}"><a href="{{ route('welcome') }}" accesskey="1" title="">Homepage</a></li>
					<li class="{{ Request::path() === 'clients' ? 'current_page_item' : ''}}"><a href="#" accesskey="2" title="">Our Clients</a></li>
					<li class="{{ Request::path() === 'about' ? 'current_page_item' : ''}}"><a href="{{ route('about') }}" accesskey="3" title="">About Us</a></li>
					<li class="{{ Request::path() === 'articles' ? 'current_page_item' : ''}}"><a href="{{ route('articles.index') }}" accesskey="4" title="">Articles</a></li>
					<li class="{{ Request::path() === 'contact' ? 'current_page_item' : ''}}"><a href="#" accesskey="5" title="">Contact Us</a></li>
					<li class="{{ Request::path() === 'test' ? 'current_page_item' : ''}}"><a href="{{ route('test.index') }}" accesskey="5" title="">test</a></li>
				</ul>
			</div>
		</div>
		@yield('header')
	</div>
	@yield('content')
	<div id="copyright" class="container">
		<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
