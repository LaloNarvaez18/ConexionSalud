@include('partials.head')
<header>
    @yield('navbar')
    @yield('header-content')
</header>
@yield('content')
@include('partials.footer')