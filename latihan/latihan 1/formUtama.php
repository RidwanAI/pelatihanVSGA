<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Warung Mama Tata || Gado - gado</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
</head>

<body>
  <?php

  $blok = array("EA", "B", "C", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U");
  sort($blok);

  ?>
  <!-- Pesan -->
  <div id="pesan" style="background-color: greenyellow">
    <div class="container">
      <div class="row mt-5 text-center mb-5">
        <div class="col">
          <h2>Form Pemesanan Makanan</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <form action="" method="post">
            <div class="mb-3">
              <label for="blokRumah" class="form-label">Pilih Blok Rumah</label>
              <select name="blok">
                <option disabled selected>Pilih Blok Rumah :</option>
                <?php

                foreach ($blok as $alamat) {
                  echo "<option value='" . $alamat . "'>" . $alamat . "</option>";
                }

                ?>
              </select>
            </div>
            <div class="mb-3">
              <label for="noLengkap" class="form-label">No Rumah Lengkap</label>
              <input type="text" class="form-control" placeholder="ex : 3 No. 12" name="noLeng" required />
            </div>
            <div class="mb-3 ">
              <label for="noLengkap" class="form-label">Nama Pembeli</label>
              <input type="text" class="form-control" name="nampel" required />
            </div>
            <div class="mb-3 ">
              <label for="noLengkap" class="form-label">Nomor Hp</label>
              <input type="text" class="form-control" name="hp" required />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Form -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>