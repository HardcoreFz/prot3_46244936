<!--Navegacion-->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url('/')?>">
        <img src="<?php echo base_url('assets/img/yorha.png')?>" alt="Logo de nier" width="75" height="50" class="img-fluid">
        <div class="text-center">Home</div>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link" href="quienes_somos">Quienes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acercade">Acerca de</a>
        </li>
        <!--Reemplazo estos dos con el dropdown
        <li class="nav-item">
          <a class="nav-link" href="registro">Registro</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="login">Login</a>
        </li>
-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Login
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="login">Iniciar Sesion</a></li>
            <li><a class="dropdown-item" href="registro">Registrarse</a></li>
            <!--innecesario
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
-->
          </ul>
        </li>
        <!--No necesito esto
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
-->
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!--Navegacion-->