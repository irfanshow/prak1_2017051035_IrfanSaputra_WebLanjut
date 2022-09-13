<a href ="/create" type="button" class="btn btn-primary">Tambah</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NPM</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Created_at</th>
    </tr>
  </thead>

  <tbody>
      <?php $no = 1 ; foreach($mahasiswa as $mhs):?>
    <tr>
      <th scope="row"> <?= $no ?> </th>
      <td> <?= $mhs ['npm'] ?> </td>
      <td><?= $mhs ['nama'] ?></td>
      <td><?= $mhs ['alamat'] ?></td>
      <td><?= $mhs ['created_at'] ?></td>
    </tr>
    <?php $no++; endforeach; ?>
    <!-- <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>