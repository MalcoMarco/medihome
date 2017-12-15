<?php $this->layout='App';?>


<main>
<div class="jumbotron jumb0">
	<h1 class="display-6">MediHome!</h1>
	<p class="lead">{{ListE[IDsearchE].nombre}}</p>
	<hr class="my-4">
	<div class="container">
		<div class="row justify-content-center" >
			<div class="col">
				<div class="form">
					<div class="row">
					    <div class="col-md-3 mb-3">
					      	<label for="Medico"><i class="fa fa-user-circle" aria-hidden="true"></i> Medico </label>
					      	<input type="text" class="form-control" id="Medico" placeholder="Nombre o Codigo de Medico">
					    </div>
					    <div class="col-md-5 mb-3">
					      	<label for="sel"> Especialidad: {{selectE}}</label><br>
					      	<select class="custom-select" class="form-control" id="sel" v-model="selectE">
					      		<option><---seleccione una opcion---></option>
						  		<option  v-for="(especialidad, index) in ListE" v-bind:value="index" > {{especialidad.nombre}}</option>					  
							</select>					    					    	
					    </div>
					    <div class="col-md-2 d-flex align-items-end mb-3">
							<button v-on:click="Buscar()" class="btn btn-primary">BUSCAR</button>
					    </div>	
				  	</div>
				  
				  	</div>				  
				</div>
			</div>		
		</div>
	</div>
</div>
<div class="container">
	<div id="progressbar" class="progress mb-4">
	  	<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
	</div>
	<hr>
	<div class="row mt-3" v-for="(medic, index) in medics">		
		<div class="col-5 col-md-2">
			<img src="/imagenes/medicos/medico.jpg" alt="..." class="rounded" style="max-height: 100px">				
		</div>
		<div class="col">
			<p> <b>Medico: </b> {{medic.nombre +' ' +medic.apaterno }}</p>
			<p> <b>Especialidad: </b> {{medic.especialidad.nombre}} </p>
		</div>
		<div class="col">
			<p> <b>Phone: </b>{{medic.telefono}}</p>
			<p><b>Email: </b>{{medic.email}}</p>
		</div>
		<div class="col">		
			<a v-bind:href="'/pages/reserva_dia?Mid='+medic.id" role="button" class="btn btn-outline-primary mt-3">Reservar cita</a>		
		</div>
		<hr>
	</div>
	<hr>
	<div class="row d-flex justify-content-center">
		<div class="col -12 col-md-2">
			<nav aria-label="Page navigation example">
			  <ul class="pagination">
			    <li class="page-item">
			      <a class="page-link" href="#" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			        <span class="sr-only">Previous</span>
			      </a>
			    </li>
			    <li class="page-item"><a class="page-link" href="#">1</a></li>
			    <li class="page-item"><a class="page-link" href="#">2</a></li>
			    <li class="page-item"><a class="page-link" href="#">3</a></li>
			    <li class="page-item">
			      <a class="page-link" href="#" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			        <span class="sr-only">Next</span>
			      </a>
			    </li>
			  </ul>
			</nav>			
		</div>
	</div>
</div>

</main>
