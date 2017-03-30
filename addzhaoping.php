
<html lang="en">
  <head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Company-HTML Bootstrap theme</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/animate.css">
<link href="css/prettyPhoto.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" />
  </head>
  <body>
    <div class="container">
      <form>
        <div class="form-group row">
          <label for="user13" class="col-sm-2 col-form-label">用户名</label>
          <div class="col-sm-10">
            <input type="user" class="form-control" id="user13" placeholder="Email">
          </div>
        </div>
        <div class="form-group row">
          <label for="pass13" class="col-sm-2 col-form-label">密码 </label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="pass13" placeholder="Password">
          </div>
        </div>

        <div class="form-group row">
          <div class="offset-sm-2 col-sm-10">
            <button type="submit" onclick="login()" class="btn btn-primary">Sign in</button>
          </div>
        </div>
      </form>
    </div>
<script src="js/databasefunction.js"></script>
  </body>
  </html>
