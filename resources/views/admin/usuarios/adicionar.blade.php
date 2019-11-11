@extends('layouts.app')

@section('content')
	<div class="container">

		<h2 class="center">Adicionar Usuário</h2>
		<div class="row">
			 <nav>
  				  <div class="nav-wrapper green">
    				  <div class="col s12">
    					    <a href="{{ route('admin.principal') }}" class="breadcrumb">Início</a>
        					<a href="{{ route('admin.usuarios') }}" class="breadcrumb">Lista de Usuários</a>
        					<a  class="breadcrumb">Adicionar Usuários</a>
   					  </div>
   				  </div>
 			 </nav>
		</div>

		<div class="row">
			<form action="{{ route('admin.usuarios.salvar') }}" method="get">
			
			{{ csrf_field() }}
			@include('admin.usuarios._form')

			<button class="btn blue">Adicionar</button>

			</form>
		</div> 

	</div>
	

@endsection