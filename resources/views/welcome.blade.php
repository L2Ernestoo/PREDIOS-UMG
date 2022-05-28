<html>
<head>
    <title> @yield('title')</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>
<body style="background-color:#071f7c;">
    <div class="container mt-5">

        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">


       <div class="card bg-light">
        <form method="post">
            @csrf
            <div class="card-header text-center text-white bg-primary">BIENVENIDO</div>
            <div class="card-body">

                <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                 </div>
                 <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                 </div>

                <div id="emailHelp" class="form-text"> Nota: Si usted no tiene una cuenta comunicarse con gerencia!</div>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn btn-primary  ">Aceptar  <i class="fas fa-sign-in-alt"></i></button>
            </div>


        </form>
        </div>

    </div>
    </div>
    </div>

</body>
</html>
