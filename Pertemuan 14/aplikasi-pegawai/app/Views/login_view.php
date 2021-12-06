<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-3">
  <h2>Login User</h2>
  <p>Masukkan username dan password pada formulir di bawah ini:</p>
  <?php if (!empty(session()->getFlashdata('error'))): ?>
    <div class="alert alert-warning alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <?= session()->getFlashdata('error');?>
    </div>
  <?php endif; ?>
  <form action="<?= base_url() ?>/login/submitLogin" method="POST">
    <div class="form-floating mb-3 mt-3">
      <input type="text" class="form-control" id="username" placeholder="Masukkan username" name="username">
      <label for="email">Username</label>
    </div>
    <div class="form-floating mt-3 mb-3">
      <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password">
      <label for="password">Password</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>