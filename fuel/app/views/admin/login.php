<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <title>Proximity BBDO</title>

  <?php echo Asset::css('admin.css'); ?>
  <style type="text/css">
    body {
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f5f5f5;
    }

    .form-signin {
      max-width: 300px;
      padding: 19px 29px 29px;
      margin: 0 auto 20px;
      background-color: #fff;
      border: 1px solid #e5e5e5;
      -webkit-border-radius: 5px;
         -moz-border-radius: 5px;
              border-radius: 5px;
      -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
         -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
              box-shadow: 0 1px 2px rgba(0,0,0,.05);
    }

    .form-signin .form-signin-heading,
    .form-signin .checkbox {
      margin-bottom: 10px;
    }

    .form-signin input[type="text"],
    .form-signin input[type="password"] {
      font-size: 16px;
      height: auto;
      margin-bottom: 15px;
      padding: 7px 9px;
    }
  </style>

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>

  <div class="container">

    <form class="form-signin" method="POST">
      <h2 class="form-signin-heading">Please sign in</h2>

      <?php echo(View::forge('partials/flashes', array('errors' => $errors))); ?>

      <input type="text" class="input-block-level" name="username" placeholder="Username" value="<?= $username; ?>">
      <input type="password" class="input-block-level" name="password" placeholder="Password">
      <input class="btn btn-large btn-primary" type="submit" value="Sign in">

      <hr>

      <footer>
        <p>&copy; Proximity BBDO 2013</p>
      </footer>
    </form>

  </div>

  <?= Asset::js(array(
    'vendor/jquery.js',
    'vendor/bootstrap.js', 
  )); ?>
</body>
</html>
