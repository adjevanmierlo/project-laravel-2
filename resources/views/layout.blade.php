<!doctype html>
<html>

<head>
        @include('head')
</head>

<body>
   <header class="container-fluid" id="section1">
       @include('header')
   </header>

   <div id="section1">
        @include('content-home-page')
   </div>

   <div id="section2">
        @include('content-about-page')
   </div>

   <div id="section3">
        @include('content-contact-page')
        @include('footer')
   </div>

   {{-- <div id="section4">
     @include('footer')
  </div> --}}


</div>






<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/canvas.js') }}"></script>
</body>
</html>
