<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url()?>/login/logout">Logout (<?= session()->get('namadepan') ?>)</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-3">
  <h3>HALAMAN DASHBOARD</h3>
  <p>Halo <?= session()->get('namadepan') ?>, Selamat datang dihalaman dashboard</p>
</div>

</body>
</html>
