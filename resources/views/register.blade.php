<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('login.css') }}" rel="stylesheet">

    <title>Login</title>
  </head>
  <body class="img js-fullheight" style="background-image: url(images/walpaper.jpg);">
      <a class="login-trigger" href="#" data-target="#register" data-toggle="modal">Daftar</a>
<div id="register" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-body">
        <button data-dismiss="modal" class="close">&times;</button>
        <h4>Daftar</h4>
        <form action="/registeruser" method="POST">
            @csrf
          <input type="text" name="name" class="username form-control" placeholder="Masukkan Nama Anda"/>

          <input type="email" name="email" class="username form-control" placeholder="Masukkan Email Anda"/>

          <input type="password" name="password" class="password form-control" placeholder="Masukkan Sandi Anda"/>

          <input class="btn login" type="submit" value="Daftar" />
        </form>
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
