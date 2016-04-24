@extends('layouts.templateClinica')
@section('content')
	<div style="background-color:gray">
		<h1>Disponibilidade dos Medicos</h1>
		<table class="table table-striped">
			<tr>
				<th>Especialidade</th>
				<th>Segunda-Feira</th>
				<th>Terҫa-Feira</th>
				<th>Quarta-Feira</th>
				<th>Quinta-Feira</th>
				<th>Sexta-Feira</th>
			</tr>
			<tr>
				<td>Ginecologia</td>
				<td>Dr. Luisa; Dr. Diogo</td>
				<td>Dr. Luisa</td>
				<td>Dr. Diogo</td>
				<td>Dr. Luisa; Dr. Diogo</td>
				<td>------</td>
			</tr>
			<tr>
				<td>Ostetricia</td>
				<td>Dr. Jessica; Dr. Maria</td>
				<td>Dr. Maria</td>
				<td>-------</td>
				<td>Dr. Jessica; Dr. Maria</td>
				<td>Dr. Jessica</td>
			</tr>
			<tr>
				<td>Nutricao</td>
				<td>Dr. Fatima; Dr. Luis</td>
				<td>------</td>
				<td>Dr. Fatima</td>
				<td>Dr. Luis</td>
				<td>------</td>
			</tr>
		</table>
	</div>
@endsection