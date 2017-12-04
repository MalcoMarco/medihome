<?php $this->layout='App';?>

<main></main>
<link rel="stylesheet" type="text/css" href="/css/bootstrap-datepicker.min.css">
<div class="horarios" id="horarios">
	<div class="jumbotron jumb0">
		<h1 class="display-6">MediHome!!</h1>
		<p class="lead">Seleccione el Dia y Hora de su Cita</p>
		<hr class="my-4">
		<div class="container">
			<div class="row mt-3" >
				<div class="col">
					<p> <b>Medico: </b> {{medic[0].nombre}} {{medic[0].apaterno}}
					<b> Especialidad: </b> {{medic[0].especialidad.nombre}} </p>
				</div>
				<div class="col">
					<p> <b>Phone: </b> {{medic[0].telefono}} <b>Email: </b> {{medic[0].email}}</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<!--
			SI: ya ha iniciado sesion mostrsr
		-->
		
		<div class="row mt-3 hide" >
			<h4>Paciente:</h4>
			<div class="col-3">
				<p> <b>Paciente: </b> {Paciente.name}
			</div>
			<div class="col-6">
				<p> <b>Phone: </b> {Paciente.telefono} <b>Email: </b> {Paciente.email}</p>
			</div>
		</div>
		<!--
			SI-NO: 
		-->
		<div class="row" id="Formulario">
			<h4>Inicie Sesion</h4>
				<form class="container">
					<div class="row">
				  		<div class="col-md-2">
						  	<div class="form-group">
						    	<label for="Select1">Documento</label>
						    	<select class="form-control" id="Select1">
							      <option>DNI</option>
							      <option>Libreta</option>
							      <option>Pasaporte</option>
						    	</select>
					  		</div>
				    	</div>
					    <div class="col-md-3 mb-3">
					      	<label for="validationCustom04">Num. de </label>
					      	<input type="text" class="form-control" id="validationCustom04" required>
					    </div>
					    <div class="col-md-3 mb-3">
				      		<label for="password">Password</label>
				      		<input type="password" class="form-control" id="password" required>
				    	</div>
				    	<div class="col-md-3 d-flex align-items-center mt-1">
				      		<button class="btn btn-primary"  id="Validar">Iniciar Sesion</button>
				    	</div>
				  	</div>
				  	<div class="form-group ml-4 ">
				    	<a href="/pages/login">Registrarme Ahora!</a>
					</div>				  
				</form>
		</div>
		<!--
			FIN-SI
		-->
		<div class="card border-light bg-light mb-3" >
		  	<div class="card-header center">
		  		<label for="dia"><i class="fa fa-calendar" aria-hidden="true"></i>
		  			Ubica el día que quieres reservar tu cita: </label>
		  			<div class="row d-flex  justify-content-center" >
				  		<div class="col-12 col-md-3 mb-2" >		  			
				  			<input type="date"  class="form-control">
				  		</div>
				  		<div class="col-md-3 d-flex align-items-center">
							<button class="btn btn-primary"  id="horario">Ver Horario</button>
						</div>		  				
		  			</div>
		  	</div>
		  	<div class="card-body">
		  		<div class="row"><label><i class="fa fa-calendar" aria-hidden="true"></i> Elija el turno y la hora</label></div>
			  	<div class="row">			  		
			  		<div class="col-12 col-md-4">
			  			  <div class="card  ">
							    <div class="card-header text-white bg-info" role="tab" id="headingOne">
							      <h5 class="mb-0">
							        <a class="sin-r" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							         Mañana <i class="fa fa-cloud" aria-hidden="true"></i>
							        </a>
							      </h5>
							    </div>

							    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
							      	<div class="card-body">
							  			<table class="table table-striped">
										 	<thead class="bg-info c-w">
											    <tr>
											      <th>Horario</th>
											      <th>{LUNES} {dia}</th>
											    </tr>
											</thead>
										  	<tbody>
										  		<tr v-for="(horario, index) in mañanas" >
										  			<th>{{horario.hora}} </th>
										  			<td>
										  				<a class="btn btn-info btn-sm" href="/pages/reserva_resumen" role="button" v-if="horario.estado=='Disponible'">{{horario.estado}} </a>
										  				<button v-else type="button" class="btn btn-secondary btn-sm" disabled>Ocupado</button>
										  			</td>
										  		</tr>
										  </tbody>
										</table>
							      	</div>
							    </div>
						  	</div>
			  		</div>

			  		<div class="col-12 col-md-4">
		  			  	<div class="card  ">
						    <div class="card-header text-white bg-info" role="tab" id="headingTwo">
						      	<h5 class="mb-0">
						        <a class="sin-r" data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
						         Tarde <i class="fa fa-sun-o" aria-hidden="true"></i>
						        </a>
						      </h5>
					    	</div>
						    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
						      	<div class="card-body">
					  			 	<table class="table table-striped">
									 	<thead class="bg-info c-w">
										    <tr>
										      <th scope="col">Horario</th>
										      <th scope="col">{LUNES} {dia}</th>
										    </tr>
										</thead>
											<tr v-for="(horario, index) in tardes" >
									  			<th>{{horario.hora}} </th>
									  			<td>
									  				<a class="btn btn-info btn-sm" href="#" role="button">{{horario.estado}} </a>
									  			</td>
								  			</tr>
									  	<tbody>
									  </tbody>
									</table>
						      	</div>
						    </div>
					  	</div>
			  		</div>

			  		<div class="col-12 col-md-4">
		  			  	<div class="card  ">
						    <div class="card-header text-white bg-info" role="tab" id="headingTree">
						      	<h5 class="mb-0">
						        <a class="sin-r" data-toggle="collapse" href="#collapseTree" aria-expanded="true" aria-controls="collapseTree">
						         Noche <i class="fa fa-moon-o" aria-hidden="true"></i>
						        </a>
						      </h5>
					    	</div>
						    <div id="collapseTree" class="collapse" role="tabpanel" aria-labelledby="headingTree" data-parent="#accordion">
						      	<div class="card-body">
					  			 	<table class="table table-striped">
									 	<thead class="bg-info c-w">
										    <tr>
										      <th scope="col">Horario</th>
										      <th scope="col">{LUNES} {dia}</th>
										    </tr>
										</thead>
									  	<tbody>
									  		<tr v-for="(horario, index) in noches" >
									  			<th>{{horario.hora}} </th>
									  			<td>
									  				<a class="btn btn-info btn-sm" href="#" role="button">{{horario.estado}} </a>
									  			</td>
								  			</tr>
									  </tbody>
									</table>					  			 	
						      	</div>
						    </div>
					  	</div>
			  		</div>
			  	</div>
		  	</div>
		</div>
	</div>	
</div>
<script type="text/javascript" src="/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
	    $('#sandbox-container input').datepicker({
        format: "dd/mm/yy",
        startDate: "today",
        todayBtn: true
    });
</script>
<script type="text/javascript" src="/js/horariosvue.js"></script>

