<html>
    <head>
        <title> @yield('title')</title>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

        <script language="javascript">
            function doSearch()
            {
                const tableReg = document.getElementById('datos');
                const searchText = document.getElementById('searchTerm').value.toLowerCase();
                let total = 0;

                // Recorremos todas las filas con contenido de la tabla
                for (let i = 1; i < tableReg.rows.length; i++) {
                    // Si el td tiene la clase "noSearch" no se busca en su cntenido
                    if (tableReg.rows[i].classList.contains("noSearch")) {
                        continue;
                    }

                    let found = false;
                    const cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
                    // Recorremos todas las celdas
                    for (let j = 0; j < cellsOfRow.length && !found; j++) {
                        const compareWith = cellsOfRow[j].innerHTML.toLowerCase();
                        // Buscamos el texto en el contenido de la celda
                        if (searchText.length == 0 || compareWith.indexOf(searchText) > -1) {
                            found = true;
                            total++;
                        }
                    }
                    if (found) {
                        tableReg.rows[i].style.display = '';
                    } else {
                        // si no ha encontrado ninguna coincidencia, esconde la
                        // fila de la tabla
                        tableReg.rows[i].style.display = 'none';
                    }
                }

                // mostramos las coincidencias
                const lastTR=tableReg.rows[tableReg.rows.length-1];
                const td=lastTR.querySelector("td");
                lastTR.classList.remove("hide", "red");
                if (searchText == "") {
                    lastTR.classList.add("hide");
                } else if (total) {
                    td.innerHTML="Se ha encontrado "+total+" coincidencia"+((total>1)?"s":"");
                } else {
                    lastTR.classList.add("red");
                    td.innerHTML="No se han encontrado coincidencias";
                }
            }
        </script>

    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">

                <a class="navbar-brand" href="/inicio">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">

                        <!--Administrador-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Administrador
                            </a>

                            <ul class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item " href="/usuario">Crear Usuario</a></li>
                                <li><a class="dropdown-item " href="{{route('customer.usuario')}}"> Ver registro Usuario</a></li>
                                <li><a class="dropdown-item " href="{{route('service.index')}}"> Servicio</a></li>
                            </ul>

                        </li>

                        <!--Predio-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Predio
                            </a>
                            <ul class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item " href="{{route('parking.index')}}">Ver Predio</a></li>
                            </ul>
                        </li>

                        <!--Proveedores-->
                        <!--  <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Proveedores
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="{{route('providers.index')}}">Ver Proveedores</a></li>
                          <li><a class="dropdown-item" href="{{route('providers.register')}}">Registrar</a></li>
                            </ul>
                        </li>   -->

                        <!--Clientes-->
                    <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Clientes
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('customer.index')}}">Ver Clientes</a></li>
                                <li><a class="dropdown-item" href="{{route('customer.register')}}">Registrar</a></li>
                                <li><a class="dropdown-item" href="{{route('customer.ver')}}">Modificar</a></li>

                            </ul>
                        </li> -->
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <br>
            @yield('contenido')
        </div>
    </body>
</html>
