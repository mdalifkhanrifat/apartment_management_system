
<!DOCTYPE html>
<head>
    {{--Top Nesessary Link --}}
    @include('backend.layout.head')
</head>

<body>

    <!-- Left Panel bar  -->
    @include('backend.layout.sidebar')
    <!-- Left Panel bar End -->

    <!-- Right Panel bar  -->
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <!-- Header -->
        @include('backend.layout.header')
        <!-- Header End-->

        <!-- Content section -->
                @yield('content')

        <!-- Content section End-->

        <!-- Footer -->
        @include('backend.layout.footer')
        <!-- Footer End-->
    </div>

    <!-- Buttom necessary link-->
    @include('backend.layout.bottom')

</body>
</html>
