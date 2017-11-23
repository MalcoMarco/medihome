<?php $this->layout='App';?>
<div class="jumbotron">
	<h1 class="display-6">MediHome!!</h1>
	<p class="lead">Seleccione el Dia y Hora de su Cita</p>
	<hr class="my-4">
	<div class="container">
		<div class="row mt-3" >
			<div class="col">
				<p> <b>Medico: </b> {medic.name}
				<b>Especialidad_id: </b> {medic.especialidad} </p>
			</div>
			<div class="col">
				<p> <b>Phone: </b> {medic.telefono} <b>Email: </b> {medic.email}</p>
			</div>
			<hr>
		</div>
	</div>
{{hoy}}
<div class="container">
	<div class="card  bg-light mb-3">
	  <div class="card-header">
	  		<div class="col-12 col-md-4">
	  			<label for="dia"><i class="fa fa-user-circle" aria-hidden="true"></i> Ubica el día que quieres reservar tu cita: </label>
	  			<input type="date" name="x"  id="dia" class="form-control">
	  		</div> 	

	  </div>
		  <div class="card-body">
		  	<div class="row">
		  		<div class="col-12 col-md-4">
		  			<h3>Mañana <i class="fa fa-cloud" aria-hidden="true"></i></h3> 
		  			 <table class="table">
				 	<thead>
					    <tr>
					      <th>Horario</th>
					      <th>{LUNES} {dia}</th>
					    </tr>
					</thead>
				  	<tbody>
				    	<tr>
					      <th>8:00</th>
					      <td><a class="btn btn-info" href="#" role="button">Disponible</a></td>
					    </tr>
				    	<tr>
					      <th>8:20</th>
					      <td><button type="button" class="btn  btn-secondary" disabled>No Disponible</button></td>					  
					    </tr>
					    <tr>
					      <th>8:40</th>
					      <td></td>
					    </tr>
					    <tr>
					      <th>9:00</th>
					      <td></td>
					    </tr><tr>
					      <th>9:20</th>
					      <td></td>
					    </tr><tr>
					      <th>9:40</th>
					      <td></td>
					    </tr><tr>
					      <th>10:00</th>
					      <td></td>
					    </tr><tr>
					      <th>10:20</th>
					      <td></td>
					    </tr><tr>
					      <th>10:40</th>
					      <td></td>
					    </tr><tr>
					      <th>11:00</th>
					      <td></td>
					    </tr><tr>
					      <th>11:20</th>
					      <td></td>
					    </tr><tr>
					      <th>11:40</th>
					      <td></td>
					    </tr><tr>
					      <th>12:00</th>
					      <td></td>
					    </tr><tr>
					      <th>12:20</th>
					      <td></td>
					    </tr><tr>
					      <th>12:40</th>
					      <td></td>
					      <tr>						    
				  </tbody>
				</table>
		  		</div>

		  		<div class="col-12 col-md-4 ">
		  			<h3> Tarde <i class="fa fa-sun-o" aria-hidden="true"></i></h3>
		  			 <table class="table">
					 	<thead>
						    <tr>
						      <th scope="col">Horario</th>
						      <th scope="col">{LUNES} {dia}</th>
						    </tr>
						</thead>
					  	<tbody>
					    	<tr>
						      <th>1:00</th>
						      <td><a class="btn btn-info" href="#" role="button">Disponible</a></td>
						    </tr>
					    	<tr>
						      <th>1:20</th>
						      <td><button type="button" class="btn  btn-secondary" disabled>No Disponible</button></td>					  
						    </tr>
						    <tr>
						      <th>1:40</th>
						      <td></td>
						    </tr>
						    <tr>
						      <th>2:00</th>
						      <td></td>
						    </tr><tr>
						      <th>2:20</th>
						      <td></td>
						    </tr><tr>
						      <th>2:40</th>
						      <td></td>
						    </tr><tr>
						      <th>3:00</th>
						      <td></td>
						    </tr><tr>
						      <th>3:20</th>
						      <td></td>
						    </tr><tr>
						      <th>3:40</th>
						      <td></td>
						    </tr><tr>
						      <th>4:00</th>
						      <td></td>
						    </tr><tr>
						      <th>4:20</th>
						      <td></td>
						    </tr><tr>
						      <th>4:40</th>
						      <td></td>
						    </tr><tr>
						      <th>5:00</th>
						      <td></td>
						    </tr><tr>
						      <th>5:20</th>
						      <td></td>
						    </tr><tr>
						      <th>5:40</th>
						      <td></td>
						    </tr>
					  </tbody>
					</table>
		  		</div>
		  		<div class="col-12 col-md-4 ">
		  			<h3> Noche <i class="fa fa-moon-o" aria-hidden="true"></i></h3>
		  			 <table class="table">
					 	<thead>
						    <tr>
						      <th scope="col">Horario</th>
						      <th scope="col">{LUNES} {dia}</th>
						    </tr>
						</thead>
					  	<tbody>
					    	<tr>
						      <th>6:00</th>
						      <td><a class="btn btn-info" href="#" role="button">Disponible</a></td>
						    </tr>
					    	<tr>
						      <th>6:20</th>
						      <td><button type="button" class="btn  btn-secondary" disabled>No Disponible</button></td>					  
						    </tr>
						    <tr>
						      <th>6:40</th>
						      <td></td>
						    </tr>
						    <tr>
						      <th>7:00</th>
						      <td></td>
						    </tr><tr>
						      <th>7:20</th>
						      <td></td>
						    </tr><tr>
						      <th>7:40</th>
						      <td></td>
						    </tr><tr>
						      <th>8:00</th>
						      <td></td>
						    </tr><tr>
						      <th>8:20</th>
						      <td></td>
						    </tr><tr>
						      <th>8:40</th>
						      <td></td>
						    </tr><tr>
						      <th>9:00</th>
						      <td></td>
						    </tr><tr>
						      <th>10:20</th>
						      <td></td>
						    </tr><tr>
						      <th>10:40</th>
						      <td></td>
						    </tr>
					  </tbody>
					</table>
		  		</div>
		  	</div>
	   

	  </div>
	</div>
</div>
</div>