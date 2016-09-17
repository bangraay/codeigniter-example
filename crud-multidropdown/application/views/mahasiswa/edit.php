<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ubah Mahasiswa</title>
  </head>
  <body>
    <?php echo form_open('mahasiswa/ubah/'.$id); ?>
          <?php echo form_label('Nama','nama'); ?>
          <?php echo form_error('nama'); ?>
          <?php
              $nama = array(
                                'type' => 'text',
                                'name' => 'nama',
                                'value' => set_value('nama', $nama),
                                'id' => 'nama',
                                'placeholder' => 'Nama Mahasiswa',
                                'required' => 'required',
                                'autofocus' => 'autofocus'
              );
           echo form_input($nama); ?>

           <br><br>

          <?php echo form_label('Jurusan', 'id_jurusan'); ?>
          <?php echo form_error('id_jurusan'); ?>
          <select name="id_jurusan" id="jurusan" onchange="getProdi(this.value)" required>
            <option value="">Silahkan Pilih</option>
            <?php foreach ($dd_jurusan as $row): ?>
              <option value="<?php echo $row->id; ?>"
                <?php if ($row->id == $id_jurusan): ?>
                  selected="selected"
                <?php endif; ?>>
                <?php echo $row->nama_jurusan; ?>
              </option>
            <?php endforeach; ?>
          </select>

          <br><br>

          <?php echo form_label('Prodi', 'id_prodi'); ?>
          <?php echo form_error('id_prodi'); ?>
          <select name="id_prodi" id="prodi" required>
            <option value="">Silahkan Pilih</option>
            <?php foreach ($dd_prodi as $row): ?>
              <option value="<?php echo $row->id; ?>"
                <?php if ($row->id == $id_prodi): ?>
                  selected="selected"
                <?php endif; ?>>
                <?php echo $row->nama_prodi; ?>
              </option>
            <?php endforeach; ?>
          </select>

          <br><br>

          <?php echo form_hidden('id', $id); ?>

          <?php echo anchor(site_url('mahasiswa'),'Kembali'); ?>
          <?php echo form_submit('submit', 'Ubah'); ?>

    <?php echo form_close(); ?>
    <!-- /.form end -->
    <script src="<?php echo base_url('assets/jquery.min.js');?>" charset="utf-8"></script>

    <script>
    /* Ajax Dropdown Jurusan Prodi */
    function getProdi(value) {
      console.log(value);
      $.ajax({
        type: "POST",
        url: "<?php echo site_url('mahasiswa/get_prodi');?>",
        data:"row="+value,
        success: function(data) {
          $("#prodi").html(data);
          console.log(data);
        },

        error:function(XMLHttpRequest){
          alert(XMLHttpRequest.responseText);
        }
      });
    };
    </script>
  </body>
</html>
