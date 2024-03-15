<!DOCTYPE html>
<html lang="en">

<head>
    @include('Admin.layout.common-head')
</head>

<body class="g-sidenav-show  bg-gray-200">

    @include('Admin.layout.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('Admin.layout.header')

        @section('main-content')
        @show
        @include('Admin.layout.footer')

        @include('Admin.layout.common-end')
        @stack('custom-scripts')
</body>

</html>