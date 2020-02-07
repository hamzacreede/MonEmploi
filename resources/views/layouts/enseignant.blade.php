
@extends('layouts.navside')

@section('content1')



<link rel="stylesheet" type="text/css" href="{{ asset('css/enseignants.css') }}">



<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<div class="wrap">
  

           @yield('tables')



<script>


(function($) {

  var tabs =  $(".tabs li a");
  
  tabs.click(function() {
    var content = this.hash.replace('/','');
    tabs.removeClass("active");
    $(this).addClass("active");
    $("#content").find('p').hide();
    $(content).fadeIn(200);
  });

})(jQuery);



</script>


@endsection