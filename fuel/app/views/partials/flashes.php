<?php if(isset($error)): ?>
  <div class="alert alert-error">
    <?= $error; ?>
    <ul>
      <?php if(isset($errors)) : foreach($errors as $field => $error) : ?>
      <li><?= $error ?></li>
      <?php endforeach; endif; ?>
    </ul>
  </div>
<?php endif; ?>

<?php if(Session::get_flash('success')): ?>
  <div class="alert alert-success">
    <?= Session::get_flash('success'); ?>
  </div>
<?php endif; ?>
