<!DOCTYPE html> 
<html>
    <head>
        @include('includes.head')
    </head>
    <body id="" class="fixed-header">

        <!-- Left Side Navigation -->
        @include('includes.sidebar')
        <!-- Left Side Navigation -->

        <!-- Header -->
        @include('includes.header')
        <!-- Header -->
       

        <!-- Content -->
        @yield('content')
        <!-- Content -->

        <!-- Scripts -->
        @include('includes.scripts')
        <!-- Scripts -->
    </body>
</html>