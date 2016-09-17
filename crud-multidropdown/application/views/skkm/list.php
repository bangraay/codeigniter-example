<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>List Skkm</title>
    <style>
      table, th, td {
        border: 1px solid black;
      }
    </style>
  </head>
  <body>
    <a href="<?php echo site_url('skkm/tambah'); ?>">Tambah Skkm</a>
    <br>
    <?php echo $this->session->userdata('message'); ?>
    <table style="width:100%">
      <thead>
        <th>
          No
        </th>
        <th>
          Nama Kegiatan
        </th>
        <th>
          Jenis
        </th>
        <th>
          Tingkat
        </th>
        <th>
          Prestasi
        </th>
        <th>
          Nilai
        </th>
        <th>
          Aksi
        </th>
      </thead>
      <tbody>
        <?php
        $start = 0;
        foreach ($skkm as $row): ?>
        <tr>
          <td>
            <?php echo ++$start; ?>
          </td>
          <td>
            <a href="<?php echo site_url('skkm/ubah/'.$row->id); ?>"><?php echo $row->nama_kegiatan; ?></a>
          </td>
          <td>
            <?php echo $row->jenis; ?>
          </td>
          <td>
            <?php echo $row->tingkat; ?>
          </td>
          <td>
            <?php echo $row->prestasi; ?>
          </td>
          <td>
            <?php echo $row->nilai; ?>
          </td>
          <td>
            <?php
                $hapus = array(
                              'class' => 'btn btn-sm btn-danger',
                              'onclick' => 'javascript: return confirm(\'Kamu Yakin ?\')');
                echo anchor(site_url('skkm/hapus/'.$row->id), 'Hapus', $hapus);
             ?>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </body>
</html>
