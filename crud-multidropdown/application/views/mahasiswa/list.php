<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>List Mahasiswa</title>
    <style>
      table, th, td {
        border: 1px solid black;
      }
    </style>
  </head>
  <body>
    <a href="<?php echo site_url('mahasiswa/tambah'); ?>">Tambah Mahasiswa</a>
    <br>
    <?php echo $this->session->userdata('message'); ?>
    <table style="width:100%">
      <thead>
        <th>
          No
        </th>
        <th>
          Nama Mahasiswa
        </th>
        <th>
          Jurusan
        </th>
        <th>
          Prodi
        </th>
        <th>
          Aksi
        </th>
      </thead>
      <tbody>
        <?php
        $start = 0;
        foreach ($mahasiswa as $row): ?>
        <tr>
          <td>
            <?php echo ++$start; ?>
          </td>
          <td>
            <a href="<?php echo site_url('mahasiswa/ubah/'.$row->id); ?>"><?php echo $row->nama; ?></a>
          </td>
          <td>
            <?php echo $row->nama_jurusan; ?>
          </td>
          <td>
            <?php echo $row->nama_prodi; ?>
          </td>
          <td>
            <?php
                $hapus = array(
                              'class' => 'btn btn-sm btn-danger',
                              'onclick' => 'javascript: return confirm(\'Kamu Yakin ?\')');
                echo anchor(site_url('mahasiswa/hapus/'.$row->id), 'Hapus', $hapus);
             ?>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </body>
</html>
