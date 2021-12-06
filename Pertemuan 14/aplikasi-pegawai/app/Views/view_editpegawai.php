<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aplikasi CRUD Pegawai</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Aplikasi CRUD Pegawai</a>
  </div>
</nav>

<div class="container mt-3 w-50">
  <h3>Master Data Pegawai - Edit</h3>    
  <a href="" class="btn btn-secondary mb-2"><i class="fas fa-home"></i></a>
  <div class="form-group">
    <label for="namalengkap" class="col-form-label">Nama Lengkap</label>
    <input type="text" class="form-control" id="namalengkap" name="namalengkap">
  </div>
  <div class="form-group">
    <label for="jabatan" class="col-form-label">Jabatan</label>
    <select class="form-control" name="jabatan">
        <option value="">---Pilih---</option>
        <option value="tw">Technical Writter</option>
        <option value="prog">Programmer</option>
        <option value="sa">System Analyst</option>
        <option value="pm">Project Manager</option>
    </select>
  </div>
  <div class="form-group">
    <label for="email" class="col-form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email">
  </div> 
  <button type="submit" class="btn btn-primary mt-3">Update</button>
</div>  
</body>
</html>
