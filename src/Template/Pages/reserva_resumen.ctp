<?php $this->layout='App';?>
<main>
<div class="jumbotron jumb0">
	<h1 class="display-6">MediHome!!</h1>
	<p class="lead">Resumen de Reserva</p>
	<hr class="my-4">
	<div class="container">
		<div class="row mt-3" >
			<div class="col">
				<p> <b>Medico: </b> {medic.name}
				<b>Especialidad_id: </b> {medic.especialidad} </p>
			</div>
			<div class="col">
				<p> <b>Paciente: </b> {Paciente.name}
				<b>pacirnte </b> {Paciente.especialidad} </p>
			</div>
		</div>
		<div class="row mt-3" >
			<div class="col">
				<p> <b>Dia: </b> {Paciente.name}
				<b>hora </b> {Paciente.especialidad} </p>
			</div>			
		</div>
		  <div class="form-group col-6">
    <label for="exampleFormControlTextarea1">Motivo de Su Consulta:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
		<h2>¡ Muchas Gracias Por Usar Nuestros Servicios!!</h2>
	</div>
</div>
</main>