	@extends('layouts.site')

	@section('content')
	
	<div class="container">
		<div class="row section">
			<h3 align="center">Sobre</h3>
			<div class="divider"></div>
		</div>
		<div class="row section">
			<div class="col s12 m6">
<<<<<<< HEAD
				<img class="responsive-img" src="{{asset($pagina->imagem)}}">
=======
				<img class="responsive-img" src="{{asset('imagens/sanduiche-natural.jpg')}}">
>>>>>>> cbf467440a79771a5b34b0694878ed3602a40777
			</div>
			<div class="col s12 m6">
				<h4>Empresa</h4>
				<blockquote>
					Descrição breve sobre a empresa.
				</blockquote>
				<p>
					Texto sobre a empresa.
				</p>
			</div>
		</div>
	</div>
	@endsection
