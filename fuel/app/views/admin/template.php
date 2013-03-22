<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <title>Proximity BBDO</title>

  <?= Asset::css('admin.css'); ?>

  <style type="text/css">
    body {
      padding-top: 60px;
      padding-bottom: 40px;
    }

    .sidebar-nav {
      padding: 9px 0;
    }

    [class^="icon-"], [class*=" icon-"] {
      width: 24px;
      height: 24px;
    }
  </style>
  <script type="text/javascript"> 
    window.base_url = '<?= Uri::base(); ?>'; 
  </script>
</head>
<body>

  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container-fluid">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="<?= Uri::create('admin'); ?>">Dashboard</a>
        <div class="nav-collapse collapse">
          <ul class="nav pull-right">
            <li><a href="<?= Uri::create('admin/logout'); ?>" title="Log Out">Log out</a></li>
          </ul>

          <ul class="nav">
            <li><a href="<?= Uri::create('admin'); ?>">/</a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <?php if (Session::get_flash('success')): ?>
				<div class="alert-message success">
					<p> <?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?> </p>
				</div>
        <?php endif; ?>

        <?php if (Session::get_flash('error')): ?>
				<div class="alert-message error">
					<p> <?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?> </p>
				</div>
        <?php endif; ?>
			</div>
    </div>

    <?= $content; ?>

    <hr>

    <footer>
      <p>&copy; Proximity BBDO 2013</p>
      <small>Version: <?= e(Fuel::VERSION); ?></small>
      <br />
      <small>Environment: <?= e(Fuel::$env); ?></small>
    </footer>
  </div>

  <?= Asset::js(array(
    'vendor/jquery.js',
    'vendor/bootstrap.js', 
  )); ?>
</body>
</html>
