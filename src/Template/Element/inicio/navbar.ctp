
  <a class="navbar-brand" href="/">
  <img src="/imagenes/logo/blanco.png" width="190" height="45" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav  ml-auto">
      <li class="nav-item active">
        <a class="nav-link"  v-bind:class="{'active-ok':isnav('/pages/inicio')}" href="/pages/inicio"><i class="fa fa-home" aria-hidden="true"></i> INICIO</a> 
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
          <i class="fa fa-hospital-o" aria-hidden="true"></i> Nosotros </a> 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/pages/quienessomos">Quienes Somos?</a>
          <a class="dropdown-item" href="/pages/nuestrosproductos">Nuestros Productos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/pages/alertas">Nuestras Alertas</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" v-bind:class="{'active-ok':isnav('/pages/reservas')}" href="/pages/reservas"><i class="fa fa-medkit" aria-hidden="true"></i> Reserva Tu Cita</a>
      </li>
  
        <li class="nav-item active">
          <a class="nav-link " v-bind:class="{'active-ok':isnav('/pages/login')}" href="/pages/login"><i class="fa fa-user" aria-hidden="true"></i> iniciar</a>
        </li>
    </ul>
  </div> 
