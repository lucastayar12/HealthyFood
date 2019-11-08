	@extends('layouts.site')

	@section('content')
	
	<div class="container">
		<div class="row section">
			<h3 align="center">Dica</h3>
			<div class="divider"></div>
		</div>
		<div class="row section">
			<div class="col s12 m8">
				<div class="row">
					<div class="slider">
						<ul class="slides">
							<li>
								<img src="{{asset('imagens/kek3.jpg')}}">
							</li>
							<li>
								<img src="{{asset('imagens/kek2.jpg')}}">
							</li>
							<li>
								<img src="{{asset('imagens/kek1.jpg')}}">
							</li>
						</ul>
					</div>
				</div>
				<div class="row" align="center">
					<button onclick="sliderPrev()" class="btn blue">Anterior</button>
					<button onclick="sliderPrev()" class="btn blue">Próxima</button>
				</div>
			</div>
			<div class="col s12 m4">
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
