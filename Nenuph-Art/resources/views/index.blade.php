
@extends('Layouts.master')
@section('content')
	@include('layouts.header')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">



                  @if (session('status'))
                        <div class="alert alert-success">

                            {{ session('status') }}
                        </div>
                    @endif


                </div>
            </div>
        </div>


  @include('layouts.carroussel_index')
	@include('layouts.carroussel_meilleures_ventes_index')
	@include('layouts.catalogue_index')
	@include('layouts.Services_index')

	@include('layouts.contact_index')


<script src="https://use.fontawesome.com/0043df5d7b.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="{{asset('slick/slick.min.js')}}"></script>


<script type="text/javascript">
 $(document).ready(function(){
  $('.your-class').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 4,

    responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 4
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
    ]


  });
});

 function myFunction(){
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav"){
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

</script>

@endsection


