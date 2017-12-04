<?php $this->layout='App';?>

<div class="container-fluid">
	<div class="row mt-2">
		<div class="d-none d-md-block col-lg-7" style="background-image: url('/imagenes/fondos/login.jpg');">
		</div>
		<div class="col-12 col-md-5">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
			  <li class="nav-item">

			    <a class="nav-link" id="sesion-tab" data-toggle="tab" href="#sesion" role="tab" aria-controls="sesion" aria-selected="true">Iniciar Sesion</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link active" id="registro-tab" data-toggle="tab" href="#registro" role="tab" aria-controls="registro" aria-selected="false">Registrate!!</a>
			  </li>

			</ul>
			<div class="tab-content mt-4 mb-4" id="myTabContent">
			  	<div class="tab-pane fade " id="sesion" role="tabpanel" aria-labelledby="sesion-tab">

					<form>
						<div class="form-group col-md-8">
						    <label for="exampleInputEmail1"> <i class="fa fa-envelope-o prefix" aria-hidden="true"></i> Email address</label>
						    <input type="email" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Enter email">
						    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					    </div>						    						 
					    <div class="form-group col-md-8">
					      <label for="inputPassword4"><i class="fa fa-shield prefix" aria-hidden="true"></i> Password</label>
					      <input type="password" class="form-control" id="inputPassword4" required placeholder="Password">
					    </div>				  
					    <div class="form-group ml-4">
					    	<a href="/recuperar">olvide mi contraseña!</a>
					  	</div>

					  <div class="form-check">
					    <label class="form-check-label">
					      <input type="checkbox" class="form-check-input">
					      Recordar Contaseña
					    </label>
					  </div>

					  

					  <button type="submit" class="btn btn-primary">Enviar</button>
					</form>					
			  	</div>
					<!-- ***************************      ************-->
		  		<div class="tab-pane fade show active" id="registro" role="tabpanel" aria-labelledby="registro-tab">
					<form class="container">
					  	<div class="row">
						    <div class="col-md-6 mb-3">
						      <label for="validationCustom01"><i class="fa fa-user-circle" aria-hidden="true"></i> Nombres</label>
						      <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
						    </div>
						    <div class="col-md-6 mb-3">
						      <label for="validationCustom02">Apellidos</label>
						      <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
						    </div>
					  	</div>
					  <div class="row">
					    <div class="col-md-6 mb-3">
						  <div class="form-group">
						    <label for="exampleFormControlSelect1">Tipo de Documento</label>
						    <select class="form-control" id="exampleFormControlSelect1">
						      <option>DNI</option>
						      <option>Libreta</option>
						      <option>Pasaporte</option>
						    </select>
						  </div>
					    </div>
					    <div class="col-md-6 mb-3">
					      <label for="validationCustom04"># Documento</label>
					      <input type="text" class="form-control" id="validationCustom04" required>
					      <div class="invalid-feedback">
					        Please provide a valid
					      </div>
					    </div>
					    <div class="col-md-6 mb-3">
					      <label for="validationCustom05">Fecha Nacimiento</label>
					      <input type="date" class="form-control" id="validationCustom05" required>
					      <div class="invalid-feedback">
					        Please provide a valid zip.
					      </div>
					    </div>
					  </div>
					  <div class="row">
					    <div class="col-md-6 mb-3">
					      <label for="email">Email</label>
					      <input type="email" class="form-control" id="email" required>
					      <div class="invalid-feedback">
					        Please provide a valid
					      </div>
					    </div>
					    <div class="col-md-6 mb-3">
					      <label for="password">Password</label>
					      <input type="password" class="form-control" id="password" required>
					      <div class="invalid-feedback">
					        Please provide a valid zip.
					      </div>
					    </div>					  	
					  </div>
					  <div class="form-check">
						    <label class="form-check-label">
						      <input type="checkbox" class="form-check-input">
						      Acepto terminos y condiciones
						    </label>
						  </div>

					  <button class="btn btn-primary" type="submit">Submit form</button>
					</form>
			  	</div>
			</div>				
		</div>
	</div>		
</div>