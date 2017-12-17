<?php $this->layout='App';?>

<link rel="stylesheet" type="text/css" href="/css/bootstrap-datepicker.min.css">
<main>
	<div class="jumbotron jumb0">
		<h1 class="display-6">MediHome!!</h1>
		<p class="lead">Seleccione el Dia y Hora de su Cita</p>
		<hr class="my-4">
		<div class="container">
			<div class="row mt-3" >
				<div class="col">
					<p> <b>Medico: </b> {{medic[0].nombre}} {{medic[0].apaterno}}
					<b> Especialidad: </b> {{medic[0].especialidad}} </p>
				</div>
				<div class="col">
					<p> <b>Phone: </b> {{medic[0].telefono}} <b>Email: </b> {{medic[0].email}}</p>
				</div>
			</div>
		</div>
	</div>
</main>
	<div class="container" id="horarios">
		<?php if (isset($current_user) and $current_user['role']=='Paciente'): ?>
			<div class="row mt-3" >
				<div class="col-3">
					<p> <b>Paciente: </b> <?=$current_user["tipodoc"]." : ". $current_user["username"] ?>
				</div>
				<div class="col-6">
					<p> <b>Phone: </b> {{Paciente=<?=$current_user["username"] ?>}} <b>Email: </b> {Paciente.email}</p>
				</div>
			</div>

		<?php else: ?>
			<div class="row" id="Formulario">
				<h4>Inicie Sesion</h4>
				{{islogin=''}}
					<form class="container"  method="post"  action="/users/login">
						<input name="_method" value="POST" type="hidden">
						<input name="role" value="Paciente" type="hidden">
						<input name="Mid" v-model="Mid" type="hidden">
						<div class="row">
					  		<div class="col-md-2">
							  	<div class="form-group">
							    	<label for="Select1"><i class="fa fa-id-card-o" aria-hidden="true"></i> Documento</label>
							    	<select class="form-control" id="Select1" name="tipodoc" v-model="loginData.tipodoc">
								      <option value="DNI">DNI</option>
								      <option value="Libreta">Libreta</option>
								      <option value="Pasaporte">Pasaporte</option>
							    	</select>
						  		</div>
					    	</div>
						    <div class="col-md-3 mb-3">
						      	<label for="validationCustom04"><i class="fa fa-hashtag" aria-hidden="true"></i>  {{loginData.tipodoc}} </label>
						      	<input type="text" class="form-control" id="validationCustom04" required name="username" v-model="loginData.username">
						    </div>
						    <div class="col-md-3 mb-3">
					      		<label for="password"><i class="fa fa-shield" aria-hidden="true"></i> Password</label>
					      		<input type="password" class="form-control" id="password" required name="password" v-model="loginData.password">
					    	</div>
					    	<div class="col-md-3 d-flex align-items-center mt-1">
					      		<button class="btn btn-primary"  id="Validar" ><i class="fa fa-paper-plane" aria-hidden="true"></i> Iniciar Sesion</button>
					    	</div>
					  	</div>
					  	<?php if (isset($_GET['errorlogin'])): ?>
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
						  	<strong>error!</strong> username or password does not exist, please try again.
						  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
						  	</button>
						</div>
					<?php endif ?>
					  	<div class="form-group ml-4 ">
					    	<a href="/pages/register">Registrarme Ahora!</a>
						</div>				  
					</form>
					
			</div>

		<?php endif ?>

		<div class="card border-light bg-light mb-3" >
		  	<div class="card-header center">
		  		<label for="dia"><i class="fa fa-calendar" aria-hidden="true"></i>
		  			Ubica el día que quieres reservar tu cita: </label>
		  			<div class="row d-flex  justify-content-center" >
		  				
		  				<div class="col-12 col-md-3 mb-2" >		  			
				  			<input type="text"  class="form-control datepicker" id="fecha1"  v-model='fecha'>
				  		</div>				  		
				  		<div class="col-md-3 d-flex align-items-center mb-2">
							<button class="btn btn-primary"  id="horario" @click='VerHorario()' ><i class="fa fa-search" aria-hidden="true"></i> Ver Horario</button>
						</div>		  				
		  			</div>
		  	</div>
		  	<div class="card-body">
		  		<div class="row"><label><i class="fa fa-calendar" aria-hidden="true"></i> Elija el turno y la hora</label></div>
		  			<div id="progressbar1" class="progress mb-4">
					  	<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
					</div>
			  	<div class="row hide" id="cargahoraria">			  		
			  		<div class="col-12 col-md-4">
			  			  <div class="card  ">
						        <a class="sin-r" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							    <div class="card-header text-white bg-info" role="tab" id="headingOne">
							      <h5 class="mb-0">
							         Mañana <i class="fa fa-cloud" aria-hidden="true"></i>
							      </h5>
							      </a>
							    </div>

							    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
							      	<div class="card-body">
							  			<table class="table table-striped">
										 	<thead class="bg-info c-w">
											    <tr>
											      <th>Horario</th>
											      <th>Estado</th>
											    </tr>
											</thead>
										  	<tbody>
										  		<tr v-for="(horario, index) in mananas" >
										  			<th>{{horario.hora}} </th>
										  			<td >
										  				<button class="btn btn-info btn-sm sin_r" id="hora"  v-if="horario.estado=='Disponible'" v-on:click="IsLogin(horario.hora,Mid)">{{horario.estado}} <i class="fa fa-check" aria-hidden="true"></i></button>
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
		  			  		<a class="sin-r" data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
							    <div class="card-header text-white bg-info" role="tab" id="headingTwo">
							      	<h5 class="mb-0">						        
							         Tarde <i class="fa fa-sun-o" aria-hidden="true"></i>
							      </h5>
						    	</div>
					    	</a>
						    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
						      	<div class="card-body">
					  			 	<table class="table table-striped">
									 	<thead class="bg-info c-w">
										    <tr>
										      <th scope="col">Horario</th>
										      <th scope="col">Estado</th>
										    </tr>
										</thead>
											<tr v-for="(horario, index) in tardes" >
									  			<th>{{horario.hora}} </th>
									  			<td>
									  				<a class="btn btn-info btn-sm" v-bind:href="'/pages/reserva_resumen?horario='+horario.hora+'&Mid='+Mid" role="button" v-if="horario.estado=='Disponible'">{{horario.estado}} <i class="fa fa-check" aria-hidden="true"></i></a>
										  			<button v-else type="button" class="btn btn-secondary btn-sm" disabled>Ocupado</button>
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
		  			  		<a class="sin-r" data-toggle="collapse" href="#collapseTree" aria-expanded="true" aria-controls="collapseTree">
							    <div class="card-header text-white bg-info" role="tab" id="headingTree">
							      	<h5 class="mb-0">						        
							         Noche <i class="fa fa-moon-o" aria-hidden="true"></i>					       
							      </h5>
						    	</div>
					    	</a>
						    <div id="collapseTree" class="collapse" role="tabpanel" aria-labelledby="headingTree" data-parent="#accordion">
						      	<div class="card-body">
					  			 	<table class="table table-striped">
									 	<thead class="bg-info c-w">
										    <tr>
										      <th scope="col">Horario</th>
										      <th scope="col">Estado</th>
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


<script type="text/javascript" src="/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="/js/horariosvue.js"></script>

