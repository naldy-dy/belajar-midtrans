<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   <div class="card" style="width: 18rem;">
  <img src="https://png.pngtree.com/png-clipart/20201209/original/pngtree-durian-png-image_5625977.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Durian</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

    <form action="" method="post">
        @csrf
        <div class="form-group">
            <span>Jumlah Pesanan</span>
            <input type="number"  min="1" value="1" class="form-control" name="jumlah">
        </div>

         <div class="form-group">
            <span>Nama Pelanggan</span>
            <input type="text" class="form-control" name="nama_pelanggan">
        </div>

         <div class="form-group">
            <span>No. Tlp</span>
            <input type="text" class="form-control" name="notlp">
        </div>

         <div class="form-group">
            <span>Alamat</span>
            <textarea name="alamat" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
    </form>


  </div>
</div>
  </body>
</html>