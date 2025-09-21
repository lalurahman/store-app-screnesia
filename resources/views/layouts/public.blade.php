<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <title>
        @yield('title')
    </title>

    @include('layouts.partials.styles')
</head>

<body>
    @include('layouts.partials.navbar')

    @yield('content')

    <!-- footer -->
    @include('layouts.partials.footer')



    <!-- script -->
    @include('layouts.partials.scripts')
</body>

</html>
