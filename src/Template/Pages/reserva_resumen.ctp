<?php $this->layout='App';?>
<main>
	<div class="jumbotron jumb0">
		<h1 class="display-6">MediHome!!</h1>
		<p class="lead">Resumen </p>
		<hr class="my-4">
		<div class="container">
			<div class="row mt-3">
				<div class="col-md-3 d-flex justify-content-start">
					<p> <b>Medico: </b> {{medic[0].nombre}} {{medic[0].apaterno}} <br>
					<b> Especialidad: </b> {{medic[0].especialidad}} </p>
				</div>
				<div class="col-md-3">
					<p> <b>Phone: </b> {{medic[0].telefono}} <br> 
					<b>Email: </b> {{medic[0].email}}</p>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-md-3 d-flex justify-content-start">
					<p> <b>Paciente: </b> {Paciente.name} <br>
				<b>pacirnte </b> {Paciente.ap} </p>
				</div>
				<div class="col-md-3">
					<p> <b>Dia: </b> {dia} <br>
				<b>hora </b> {hora} </p>
				</div>
			</div>
			<div class="form-group col-6">
    <label for="exampleFormControlTextarea1">Motivo de Su Consulta:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="button" class="btn btn-info">Finalizar</button>
		<h2>¡ Muchas Gracias Por Usar Nuestros Servicios!!</h2>
		</div>
	</div>
</main>


</main>