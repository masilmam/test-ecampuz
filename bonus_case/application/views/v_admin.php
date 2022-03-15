<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <div class="container mt-3">
      <h1>Admin</h1> 
      <a class="btn btn-primary" href="<?= base_url('Admin/add'); ?>" role="button">Tambah Data</a>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Aksi</th>
              <th scope="col">Instansi</th>
              <th scope="col">Deksripsi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach($instansi as $i) { 
            ?>
            <tr>
              <td><?= $no++; ?></td>
              <td></td>
              <td><?= $i->nama_instansi; ?></td>
              <td><?= $i->deskripsi; ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <a class="btn btn-danger btn-sm" href="<?= base_url('Login/logout'); ?>" role="button">Logout</a>
    </div>
  
  </body>
</html>