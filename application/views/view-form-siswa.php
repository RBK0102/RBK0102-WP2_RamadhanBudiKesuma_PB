<html>
<head>
 <title>Form Input Data Siswa</title>
</head>
<body>
  <?php echo validation_errors(); ?>
 <center>
 <form action="<?= base_url('siswa/cetak'); ?>"
method="post">
 <table>
 <tr>
 <th colspan="3">
 Form Input Data Siswa
 </th>
 </tr>
 <tr>
  <td colspan="3">
  <hr>
  </td>
  </tr>
  <tr>
  <th>Nama Siswa</th>
  <td>:</td>
  <td>
  <input type="text" name="nama" id="nama">
  </td>
  </tr>
  <tr>
  <th>NIS</th>
  <td>:</td>
  <td>
  <input type="text" name="nis" id="nis">
  </td>
  </tr>
  <tr>
  <th>Kelas</th>
  <td>:</td>
  <td>
  <input type="text" name="kelas" id="kelas">
  </td>
  </tr>
  <tr>
  <th>Tanggal Lahir</th>
  <td>:</td>
  <td>
  <input type="text" name="tgllahir" id="tgllahir">
  </td>
  </tr>
  <tr>
  <th>Tempat Lahir</th>
  <td>:</td>
  <td>
  <input type="text" name="tptlahir" id="tptlahir">
  </td>
  </tr>
  <tr>
  <th>Alamat</th>
  <td>:</td>
  <td>
  <input type="text" name="alamat" id="alamat">
  </td>
  </tr>
  <tr>
  <th>Jenis Kelamin</th>
  <td>:</td>
  <td>
  <input type="radio" name="jk" id="jk" value="Laki-Laki">Laki-Laki<br>
  <input type="radio" name="jk" id="jk" value="Perempuan">Perempuan
  </td>
  </tr>
  <tr>
  <th>SKS</th>
  <td>:</td>
  <td>
  <select name="agama" id="agama">
  <option value="">Pilih agama</option>
  <option value="Islam">Islam</option>
  <option value="Kristen">Kristen</option>
  <option value="Katolik">Katolik</option>
  <option value="Protestan">Protestan</option>
  <option value="Hindu">Hindu</option>
  <option value="Budha">Budha</option>
  <option value="Khonghucu">Khonghucu</option>
  </select>
  </td>
  </tr>
  <tr>
  <td colspan="3" align="center">
  <input type="submit" value="Submit">
  </td>
  </tr>
  </table>
  </form>
  </center>
 </body>
 </html>
