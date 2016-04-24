@extends('layouts.templateClinica')
@section('content')

		<div style="background-color:gray; width:950px" class="container">	
		<h1 style="text-align:center">Minhas consultas</h1>	</br>		
		<table class="table">
			<tr>
				<th>Nome</th>
				<th>Especialidade</th>
				<th> Data </th>
				<th> Hora </th>
			</tr>

			@foreach($consultas as $consulta)
			<tr>
				<td>{{$consulta->nomePaciente}}</td>
				<td>{{$consulta->especialidadeConsulta}}</td>
				<td> {{$consulta->dataConsulta}} </td>
				<td> {{$consulta->horaConsulta}}</td>
			</tr>
			@endforeach			
		</table>
	</div>

	<div style="height:25px"></div>

	<div style="background-color:gray; width:950px" class="container" >
		<h1 style="text-align:center"> Marcar consulta</h1></br>
		<form method="POST" action={{url('consultas')}} class="form-horizontal" role="form">
			
			<div class="form-group">
						<label class="control-label col-sm-2"> Nome: </label>
						<div class="col-sm-8">
						<input type="text" class="form-control" name="nomePaciente"></input>
						</div>
			</div>

			<div class="form-group">
						<label class="control-label col-sm-2"> Apelido: </label>
						<div class="col-sm-8">
						<input type="text" class="form-control" name="apelidoPaciente"></input>
					</div>
			</div>

			<div class="form-group">
						<label class="control-label col-sm-2"> Data de Nascimento: </label>
						<div class="col-sm-8">
						<input type="date" class="form-control" name="dataNascimento"></input>
					</div>
			</div>

			<div class="form-group">
						<label class="control-label col-sm-2"> Telefone: </label>
						<div class="col-sm-8">
						<input type="numer" class="form-control" name="telefone"></input>
					</div> 
			</div>


			<div class="form-group">
						<label class="control-label col-sm-2"> E-mail: </label>
						<div class="col-sm-8">
						<input type="email" class="form-control" name="email"></input>
					</div>
			</div>

			<div class="form-group">
						<label class="control-label col-sm-2"> Especialidade: </label>
						<div class="col-sm-8">
						<select class="form-control" name="especialidade">
							<option value="ginecologia"> Ginecologia </option>
							<option value="obstetricia"> Obstetricia </option>
							<option value="nutricao"> Nutricao </option>
							<option value="estetica"> Estetica </option>
						</select>
					</div>
			</div>

			<div class="form-group">
						<label class="control-label col-sm-2"> Data da consulta: </label>
						<div class="col-sm-8">
						<input type="date" class="form-control" name="dataConsulta"></input>
					</div>
			</div>

			<div class="form-group">
						<label class="control-label col-sm-2"> Hora da consulta: </label>
						<div class="col-sm-8">
						<input type="time" class="form-control" name="horaConsulta"></input>
					</div>
			</div>


			<div class="form-group">
						<label class="control-label col-sm-2"> Medico: </label>
						<div class="col-sm-8">
						<input type="text" class="form-control" name="nomeMedico"></input>
					</div>
			</div>

			<div class="form-group" style="align:left">
						<button type="submit" class="btn btn-default">Marcar</button>
			</div>

		</form>
	</div>

	

@endsection