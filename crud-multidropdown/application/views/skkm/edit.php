<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tambah SKKM</title>
  </head>
  <body>
    <?php echo form_open('skkm/ubah/'.$id); ?>
        <?php echo form_label('Nama Kegiatan','nama_kegiatan'); ?>
        <?php echo form_error('nama_kegiatan'); ?>
        <?php
            $data = array(
                            'type' => 'text',
                            'name' => 'nama_kegiatan',
                            'value' => set_value('nama_kegiatan', $nama_kegiatan),
                            'id' => 'nama_kegiatan',
                            'placeholder' => 'Nama Kegiatan',
                            'required' => 'required',
                            'autofocus' => 'autofocus'
            );
            echo form_input($data);
        ?>

        <br><br>

        <?php echo form_label('Jenis Kegiatan', 'id_jenis'); ?>
        <?php echo form_error('id_jenis'); ?>
        <select class="form-control" name="id_jenis" id="jenis" onchange="getTingkat(this.value)" required>
          <option value="">Silahkan Pilih</option>
            <?php foreach ($dd_jenis as $row): ?>
              <option value="<?php echo $row['id_jenis'] ?>"
                <?php if ($row['id_jenis'] == $id_jenis): ?>
                  selected="selected"
                <?php endif; ?>>
                <?php echo $row['jenis'] ?>
              </option>
            <?php endforeach; ?>
        </select>

        <br><br>

        <?php echo form_label('Tingkat Kegiatan', 'id_tingkat'); ?>
        <?php echo form_error('id_tingkat'); ?>
        <select name="id_tingkat" id="tingkat" onchange="getPrestasi(this.value)" required>
          <option value="">Silahkan Pilih</option>
          <?php foreach ($dd_tingkat as $row): ?>
            <option value="<?php echo $row['id_tingkat'] ?>"
              <?php if ($row['id_tingkat'] == $id_tingkat): ?>
                selected="selected"
              <?php endif; ?>>
              <?php echo $row['tingkat']; ?>
            </option>
          <?php endforeach; ?>
        </select>

        <br><br>

        <?php echo form_label('Prestasi', 'id_prestasi'); ?>
        <?php echo form_error('id_prestasi'); ?>
        <select name="id_prestasi" id="prestasi" class="form-control" onchange="getNilai(this.value)" required>
          <option value="">Silahkan Pilih</option>
          <?php foreach ($dd_prestasi as $row): ?>
            <option value="<?php echo $row['id_prestasi'] ?>"
              <?php if ($row['id_prestasi'] == $id_prestasi): ?>
                selected="selected"
              <?php endif; ?>>
              <?php echo $row['prestasi']; ?>
            </option>
          <?php endforeach; ?>
        </select>

        <br><br>

        <?php echo form_label('Nilai','nilai'); ?>
        <?php echo form_error('nilai'); ?>
        <?php
            $extra = array(
                            'type' => 'number',
                            'name' => 'nilai',
                            'value' => set_value('nilai', $nilai),
                            'id' => 'nilai',
                            'placeholder' => 'Nilai',
                            'required' => 'required',
                            'readonly' => 'readonly'
            );
            echo form_input($extra);
        ?>

        <br><br>
      <?php echo form_hidden('id', set_value('id', $id)); ?>
      <?php echo anchor(site_url('skkm'), 'Kembali'); ?>
      <?php echo form_submit('submit', 'Ubah'); ?>

    <?php echo form_close(); ?>

    <script src="<?php echo base_url('assets/jquery.min.js'); ?>" charset="utf-8"></script>
    <script>
    /* Ajax Dropdown Jenis Tingkat */
    function getTingkat(value) {
      $.ajax({
        type: "POST",
        url: "<?php echo site_url('skkm/get_tingkat');?>",
        data:"value="+value,
        success: function(data) {
          $("#prestasi option:gt(0)").remove();
          $("#tingkat").html(data);
          $("#nilai").val("");
        },

        error:function(XMLHttpRequest){
          alert(XMLHttpRequest.responseText);
        }
      });
    };

    /* Ajax Dropdown Tingkat Prestasi */
    function getPrestasi(value) {
      $.ajax({
        type: "POST",
        url: "<?php echo site_url('skkm/get_prestasi');?>",
        data:"value="+value,
        success: function(data) {
          $("#prestasi").html(data);
          $("#nilai").val("");
        },

        error:function(XMLHttpRequest){
          alert(XMLHttpRequest.responseText);
        }
      });
    }

    /* Ajax Dropdown Prestasi Nilai */
    function getNilai(value) {
      $.ajax({
        type: "POST",
        url: "<?php echo site_url('skkm/get_nilai');?>",
        data:"value="+value,
        success: function(data) {
          document.getElementById('nilai').value = data;
        },

        error:function(XMLHttpRequest){
          alert(XMLHttpRequest.responseText);
        }
      });
    }
    </script>
  </body>
</html>
