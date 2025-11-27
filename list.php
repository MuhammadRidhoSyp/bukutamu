 <h1>List data buku tamu</h1>
 <a href="index.php?page=create" class="btn btn-primary my-1">Input Buku Tamu</a>
 <table class="table">
     <thead>
         <tr>
             <th scope="col">No</th>
             <th scope="col">Nama</th>
             <th scope="col">Email</th>
             <th scope="col">Komentar</th>
             <th scope="col">Waktu</th>
             <th scope="col"Aksi</th>
         </tr>
     </thead>
     <tbody>
         <?php
            require 'koneksi.php';
            $tampil = $koneksi->query("SELECT * FROM tamu");

            $i = 1;

            //looping data tamu
            while ($data = mysqli_fetch_assoc($tampil)) {
            ?>
             <tr>
                 <th scope="row"><?= $i++ ?></th>
                 <td><?= $data['nama']; ?></td>
                 <td><?= $data['email']; ?></td>
                 <td><?= $data['komentar']; ?></td>
                 <td><?= $data['date_created']; ?></td>
                 <td>
                     <a href="index.php?id=<?= $data['id'] ?>&page=edit" class="btn btn-warning btn-sm">Edit</a>
                     <a href="proses.php?id=<?= $data['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini?')">Delete</a>
                 </td>
             </tr>
         <?php } ?>
     </tbody>
 </table>
