<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('index')}}">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('products.index')}}">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('clients.index')}}">Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('sales.index')}}">Ventas</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>