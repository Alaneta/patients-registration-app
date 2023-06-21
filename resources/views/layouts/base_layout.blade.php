<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Lighit Patient Registration App</title>
    <meta name="description" content="This is patient registration app. The only intention of this app is to complete the challenge provided by Lightit enterprise.">
    <meta name="keywords" content="patient, patients, registration, medical, lightit">
    <meta name="author" content="Camussi Solutions, Alan Camussi">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @include('includes.head_basics')
    @yield('css_custom_files')
    @yield('css_custom_style')
</head>
<body>
<div class="justify-content-center align-items-center" id="loading">
    <span class="spinner-border" role="status"></span>
</div>
@yield('content')
@yield('footer')
</body>
@include('includes.js_basic_files')
@yield('js_custom_files')
@include('includes.js_basic_code')
@stack('scripts')
</html>
