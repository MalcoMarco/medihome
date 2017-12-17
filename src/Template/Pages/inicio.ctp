<?php $this->layout='App';?>

<main>
<div class="container">
	<?= $this->element('inicio/carrousel')?>

	<div class="row justify-content-between">
		<div class="col-12 card text-white bg-info mt-3 mb-3">
				<div class="card-header">
					<h5>NUESTRAS ESPECIALIDADES 
						<small>Pide tu cita en cualquiera de nuestras especialidades</small>
					</h5>
				</div>
		</div>
      	<div class="col-sm-12 col-md-6 col-xl-3">
			<div class="card text-white bg-info mb-3" >
				<a href="/pages/reservas?IDsearchE=0" class="sin-r"> 
				  <div class="card-header">Medicina General</div>
				  <div class="card-body">
				    <img src="/imagenes/especialidades/mg.jpg" class="img-fluid">
				  </div>
				</a>
			</div>
      	</div>
      	<div class="col-sm-12 col-md-6 col-xl-3">
			<div class="card text-white bg-info mb-3" >
				  	<a href="/pages/reservas?IDsearchE=1" class="sin-r">
				  		<div class="card-header">Pediatría</div>
					  	<div class="card-body">
					    	<img src="/imagenes/especialidades/pediatria.jpg" class="img-fluid">
					  	</div>
					</a>
			</div>
      	</div>
      <div class="col-sm-12 col-md-6 col-xl-3">
			<div class="card text-white bg-info mb-3">
			  	<a href="#/pages/reservas?IDsearchE=2" class="sin-r">
			  	<div class="card-header">Cirugía General</div>			  		
				  	<div class="card-body">
				    <img src="/imagenes/especialidades/cg2.jpg" class="img-fluid">
				  </div>
				</a>

			</div>
      </div>

      <div class="col-sm-12 col-md-6 col-xl-3">
			<div class="card text-white bg-info mb-3" >			  
			  	<a href="/pages/reservas?IDsearchE=4" class="sin-r">
			  		<div class="card-header">Ginecología Y Obstetricia</div>
				  	<div class="card-body">
				    <img src="/imagenes/especialidades/ginec.jpg" class="img-fluid">
				  </div>
				</a>
			</div>
      </div>
    </div>
    <p>
	  	<a href="#" class="btn btn-outline-info" role="button" data-toggle="collapse" data-target="#specialidades" aria-expanded="false" aria-controls="specialidades" > Todas nuestras especialidades <i class="fa fa-sort-desc" aria-hidden="true"></i>  </a> 
	</p>

	<div class="collapse" id="specialidades">
	  <div class="card card-body">
	  		<div class="row justify-content-center">

	      	<div class="col-sm-12 col-md-6 col-xl-3" v-for="(especialidad, index) in ListE">
				<a  v-bind:href="'/pages/reservas?IDsearchE='+index" class="sin-r">
					<div class="card text-white bg-info mb-3">
				  	<div class="card-header">{{especialidad.nombre}} </div>
					</div>
				</a>					
	      	</div>		      
	    </div>	
	  </div>
	</div>
	<hr>
	<div class="row mb-3 txt-c mt-3">
		<div class="col-sm-12 col-md-4">
			<h3>SUSCRIBETE:</h3>
			<p>Entérate de nuestras novedades</p>
		</div>
		<div class="col-sm-12 col-md-8 txt-c">
			<form class="form-inline">
			  <div class="form-group mx-sm-3">
			    <input type="email" class="form-control" id="input2" placeholder="Correo Electronico">
			  </div>
			  <div class="form-group mx-sm-3">
			  	<button type="submit" class="btn btn-primary">Enviar</button>
			  </div>
			</form>
		</div>
	</div>
	<hr>
	<div class="row mb-3 txt-c ">
		<div class="col-sm-12 col-md-8 ">
			<img src="/imagenes/doctores.jpg" class="img-fluid" height="20px">
		</div>
		<div class="col-sm-12 col-md-4 align-self-center">

			<a href="/pages/reservas" class="">
				<h3>Nuestros Especialistas</h3>
				<p>Conoce a Nuestros Expertos De La Salud...</p>
			</a>
		</div>
	</div>
	<hr>
	<?= $this->element('inicio/boletin')?>
</div>
</main>
	
 



