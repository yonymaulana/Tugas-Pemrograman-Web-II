<html>

<head>
  <title>Form Profile Mahasiswa</title>
  <style>
    table {
      font-family: 'Times New Roman', Times, serif, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
</head>
<center>
  <h3>Profile dari</h3>
</center>

<body>
  <form method="POST" action="aksi.php">
    <table>
      <tr>
        <td>Masukkan NIM</td>
        <td>: <input type="number" name="nim"></td>
      </tr>
      <tr>
        <td>Masukkan Nama</td>
        <td>: <input type="text" name="name"></td>
      </tr>
      <tr>
        <td>Masukkan Gender</td>
        <td>: <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
          <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
      </tr>
      <tr>
        <td>Masukkan Status</td>
        <td>:
          <select name="status" id="status">
            <option type="radio" name="status" value="Menikah"> Menikah</option>
            <option type="radio" name="status" value="Belum Menikah"> Belum Menikah</option>
          </select>
      </tr>
      <tr>
        <td>Masukkan No HP</td>
        <td>: <input type="number" name="no_hp"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:
          <textarea cols="20" rows="5" name="alamat"></textarea>
        </td>
      </tr>
    </table>
    <button type="submit">>>Save</button>
  </form>
</body>

</html>