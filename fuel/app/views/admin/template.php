<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <title>BBDO</title>

  <?= Asset::css('admin.css'); ?>

  <style type="text/css">
    body {
    }

    .sidebar-nav {
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

  <div class="navbar">
    <div class="container">
      <a class="navbar-brand" href="<?= Uri::create('admin'); ?>">Dashboard</a>
      <ul class="nav navbar-nav pull-right">
        <li><a href="<?= Uri::create('admin/logout'); ?>" title="Log Out">Log out</a></li>
      </ul>

      <ul class="nav navbar-nav">
        <li><a href="<?= Uri::create('admin/'); ?>">Something</a> </li>
      </ul>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <?php if (Session::get_flash('success')): ?>
          <div class="alert alert-success">
            <p> <?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?> </p>
          </div>
        <?php endif; ?>

        <?php if (Session::get_flash('error')): ?>
          <div class="alert alert-error">
            <p><?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?></p>
            <?php foreach ($errors as $error) : ?>
            <p><?php echo $error; ?></p>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
			</div>
    </div>

    <?= $content; ?>

    <hr>

    <footer>
      <p>&copy; BBDO 2013</p>
      <small>Version: <?= e(Fuel::VERSION); ?></small>
      <br />
      <small>Environment: <?= e(Fuel::$env); ?></small>
    </footer>
  </div>

  <?= Asset::js(array(
    'vendor/jquery.min.js',
    'vendor/bootstrap.js',
  )); ?>

  <script type="text/javascript">
    (function($) {
      $('a[data-method]').each(function() {
        var $link = $(this);

        if($link.data('method') === 'POST') {
          $link.on('click', function(e) {
            e.preventDefault();

            if(confirm("Are you sure you want to delete this?")) {
              $.ajax({
                type: "POST",
                url: $link.attr('href'),
                data: { id: $link.data('id') }
              }).done(function() {
                document.location.reload(true);
              });
            }

            return false;
          });
        }
      });
    })($);
  </script>
</body>
</html>
