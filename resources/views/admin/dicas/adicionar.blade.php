@extends('layouts.app')

@section('content')
	<div class="container">

		<h2 class="center">Adicionar Dica</h2>
		<div class="row">
			 <nav>
  				  <div class="nav-wrapper green">
    				  <div class="col s12">
    					    <a href="{{ route('admin.principal') }}" class="breadcrumb">Início</a>
        					<a href="{{ route('admin.dicas') }}" class="breadcrumb">Lista de Dicas</a>
        					<a  class="breadcrumb">Adicionar Dica</a>
   					  </div>
   				  </div>
 			 </nav>
		</div>

		<div class="row">
			<form action="{{ route('admin.dicas.salvar') }}" method="get" enctype="multipart/form-data">
			
			{{ csrf_field() }}
			@include('admin.dicas._form')

			<button class="btn blue">Adicionar</button>

			</form>
		</div> 

	</div>
	

@endsection