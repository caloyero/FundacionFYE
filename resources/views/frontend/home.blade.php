@extends('frontend.plantilla')
@section('header')
    
@endsection

@section('body')
<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            @foreach ( $data['slices'] as $slice )
            <li style="background-image: url(imagenes/{{$slice->imagen}});">
                <div class="container">
                    <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <h2 style="color:#FFC436;"></h2>
                            <p><a href="#" class="btn btn-primary btn-lg">¡Unete!</a></p>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
           
           
      </div>
</aside>

{{-- testimonio --}}

<div id="fh5co-why-us" class="animate-box">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2 >Testimonios</h2>
            </div>
            @foreach ($data['testimonios'] as $testimonio )
                <div class="col-md-4 text-center item-block">
                    <span class="icon"><img src="imagenes/{{$testimonio->imagen}}" alt="Free HTML5 Templates" class="img-responsive"></span>
                    <h3>{{$testimonio->titulo}}</h3>
                    <p>{{$testimonio->leyenda}}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
{{-- fin testimonio --}}
{{-- Eventos --}}
<div class="fh5co-section-with-image">
    
    <img src="images/img6.jpeg" alt="" class="img-responsive">
    <div class="fh5co-box animate-box">
        <h2>Eventos</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
        <p><a href="#" class="btn btn-primary btn-outline with-arrow">Get started <i class="icon-arrow-right"></i></a></p>
    </div>
    {{-- fin Eventos --}}

    {{-- Entrega de Ayudas --}}

    <div id="fh5co-grid-products" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Entrega de Ayudas</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
			</div>
		</div>

		
		<div class="col-1">
			<a href="#" class="item-grid one" style="background-image: url(images/img8.jpeg)">
				<div class="v-align">
					<div class="v-align-middle">
						<span class="icon"><img src="images/img8.jpeg" alt="Free HTML5 Templates" class="img-responsive"></span>
						<h3 class="title">Geographical App</h3>
						<h5 class="category">Web Application</h5>
					</div>
				</div>
			</a>
			<a href="#" class="item-grid three" style="background-image: url(images/img7.jpeg)">
				<div class="v-align">
					<div class="v-align-middle">
						<span class="icon"><img src="images/img7.jpeg" alt="Free HTML5 Templates" class="img-responsive"></span>
						<h3 class="title">Communication App</h3>
						<h5 class="category">Web Application</h5>
					</div>
				</div>
			</a>
		</div>
		<div class="col-2">
			<a href="#" class="item-grid two" style="background-image: url(images/img9.jpeg)">
				<div class="v-align">
					<div class="v-align-middle">
						<span class="icon"><img src="images/img9.jpeg" alt="Free HTML5 Templates" class="img-responsive"></span>
						<h3 class="title">Golf Club Tracker</h3>
						<h5 class="category">Web Application</h5>
					</div>
				</div>
			</a>
			
		</div>
	</div>
    {{--  fin Entrega de Ayudas --}}
    
</div>

    
@endsection
@section('footer')
    
@endsection