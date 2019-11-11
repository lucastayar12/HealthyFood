	@extends('layouts.site')

	@section('content')
	
	<div class="container">
		<div class="row section">
			<h3 align="center">Contato</h3>
			<div class="divider"></div>
		</div>
		<div class="row section">
			<div class="col s12 m7">
				<img class="responsive-img" src="{{asset('imagens/sanduiche-natural.jpg')}}">
			</div>
			<div class="col s12 m5">
				<form class="col s12">
					<div class="imput-field">
						<label>Nome</label>
						<input type="text" name="nome" class="validade">
						
					</div>
					<div class="imput-field">
						<label>Email</label>
						<input type="email" name="email" class="validade">
						
					</div>
					<div class="imput-field">
						<label>Mensagem</label>
						<textarea class="materialize-textarea"></textarea>
					</div>

					<button class="btn blue">Enviar</button>
				</form>
			</div>
		</div>
	</div>
	@endsection
