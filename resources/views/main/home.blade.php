@extends('layouts.app')

@section('title', 'Productos')

@section('content')
<section class="header ">
	 <div class="background">&nbsp;</div>
		 <div class="container">
			 <div class="header-text">
				 <img src="img/logo.png" width="10%" height="10%">
				 <h1 >BIENVENIDO A PETMOMENTS</h1>
				 <p >
					 Sistema de seguimiento y actividad GPS en tiempo real
					<br /> Para su amado amigo!
				</p>
				<a href="javascript:void(0)" class="btn btn-raised btn-info">MÁS INFORMACIÓN</a>
				<a href="javascript:void(0)" class="btn btn-raised btn-info">COMPRAR AHORA</a>
			</div>
	</div>
</section>

<div class="container">
	<section class="section-padding">
		<div class="label-primary text-center alert">
			<h1>BIENVENIDO A NUESTRO SITIO</h1>
			<p>
				<h4>Aun no conoces "PETMOMENTS", Que esperas? Conocenos YA!</h4>
			</p>
		</div>
		<div class="jumbotron text-center">
			 <div class="row">
				 <div class="showcase-box col-md-4">
					 <div class="showcase-item">
						 <img src="{{ asset('img/qricon.png') }}" />
						 <p class="text-center">
						 Sistema de encriptamiento QR!
						 </p>
					 </div>
				 </div>
			 <div class="showcase-box col-md-4">
				 <div class="showcase-item">
					 <img src="{{ asset('img/barcodeicon.png') }}" />
					 <p class="text-center">
					 Sistema de Codigo de Barras unico!
					 </p>
				 </div>
			 </div>
			 <div class="showcase-box col-md-4">
				 <div class="showcase-item">
					 <img src="{{ asset('img/gpsicon.png') }}" />
					 <p class="text-center">
					 Dispositivo GPS en tiempo real!
					 </p>
				 </div>
			 </div>
			 </div>
		</div>
 	</section>
 </div>



 <div class="bottom-menu">
	 <div class="container">
		 <div class="row">
			 <div class="col-md-2 navbar-brand">
			 	<a href="/">PETMOMENTS</a>
			 </div>
			 <div class="col-md-10">
				 <ul class="bottom-links">
					 <li><a href="#">Home</a></li>
					 <li><a href="#">Nosotros</a></li>
					 <li><a href="#">Contacto</a></li>
					 <li><a href="#">Productos</a></li>
					 <li><a href="#">Politicas de Privacidad</a></li>
				 </ul>
				 <p>Derechos reservados PetMoments</p>
			 </div>
		 </div>
	 </div>
 </div>


@endsection