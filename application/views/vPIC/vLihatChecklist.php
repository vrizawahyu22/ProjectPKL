<div class="ui two column centered grid">
  <div class="column" style="width: auto;">
  <div class="ui segment" style="border-radius: 1.285714rem">

    <div class="segment">
      <div class="ui icon input" style="margin-left: 0px">
        <input type="text" placeholder="Search..." id="pencarian">
        <i class="circular search link icon"></i>
      </div>
      <h3 style="text-align: center; margin-top: -30px;">
      <div class="ui icon">
        <i class="tasks icon"></i>
      Daftar Checklist 
      </h3>
      
      </div>

  <div class="ui divider"></div>

  <div class="field" style="margin-left: 600px">
  <select class="ui right selection tiny dropdown item" id="Hari">        
      <option value="Senin">Senin</option>
      <option value="Selasa">Selasa</option>
      <option value="Rabu">Rabu</option>
      <option value="Kamis">Kamis</option>
      <option value="Jumat">Jumat</option>
      <option value="Sabtu">Sabtu</option>
      <option value="Minggu">Minggu</option>
    </select>
  </div>

  <table class="ui sortable celled table" id="example" class="display">
    <thead>
      <tr style="text-align: center">
        <th class="sorted ascending">No</th>
        <th>Hari</th>
        <th >Jadwal</th>
        <th>Batas Pengecekan</th>
        <th >Nama Checklist</th>
        <th>Nama PIC</th>
        <th >Info Checklist</th>
        <th >Keterangan</th>
        
      </tr>
    </thead>
    <tbody id="hasil">
      <?php $temp = 0; $no = 1; ?>
      <?php foreach ($checklist as $checklist) { ?>
      <?php if ($checklist['Status'] == $status) { ?>
      <?php if ($checklist['NamaPIC'] == $_SESSION['NamaPIC']) { ?>
        <tr style="background-color: #95f080;">
      <?php } else { ?>
        <tr>
      <?php } ?>
        <td><?php echo $no; $no = $no+1; ?></td>
         <td><?php echo $checklist['Hari']; ?></td>
        <td><?php echo $checklist['Jam']; ?></td>
        <td><?php echo $checklist['BatasPengecekan'] ?> Menit</td>
        <td><?php echo $checklist['NamaChecklist']; ?></td>
        <td><?php echo $checklist['NamaPIC'] ?> </td> 
        <td>
          <?php 
            $nInfo = NULL;
            $k = 0;
            $fh = fopen($checklist['Info'], 'r');
            while(!feof($fh)){
             $nInfo[$k] = fgets($fh);
             $k = $k +1;
            }
            
          ?>

          <a href="#" data-featherlight=" <?php echo '#bio-name'.$temp ?>">Lihat</a>
            <div style="display:none;">
              <div id="<?php echo 'bio-name'.$temp ?>">
                <h3>Info Checklist</h3>
                <div class="ui segment">
                 <?php foreach ($nInfo as $info) {
                    echo '<p>'.$info.'</p>';
                  } ?> 
                </div>
              </div>
            </div>
        </td>
        <?php if ($checklist['NamaPIC'] == $_SESSION['NamaPIC']) {?>
          <td>
          <a href="#" data-featherlight="#bio-name">Check</a>
            <div style="display:none;">
              <div id="bio-name">

              <form method="POST" action="<?php echo site_url('pic/docheck'); ?>">  
              <input type="hidden" name="NamaPIC" value="<?php echo $checklist['NamaPIC'] ?>">
              <input type="hidden" name="NamaChecklist" value="<?php echo $checklist['NamaChecklist'] ?>">
              <input type="hidden" name="NamaChecklistSebenarnya" value="<?php echo $_SESSION['NamaPIC'] ?>">
              <input type="hidden" name="Jam" value="<?php echo $checklist['Jam'] ?>">
              <input type="hidden" name="Info" value="<?php echo $checklist['Info'] ?>">
              <input type="hidden" name="Hari" value="<?php echo $checklist['Hari'] ?>">
                <h3>Status</h3>
                <div class="ui form">
                <select name="Status">
                  <option value="OK">OK</option>
                  <option value="Bad">Bad</option>
                </select>
                </div>
                <h3>Keterangan</h3>
                  <div class="ui form">
                    <div class="field">
                       <textarea name="Keterangan"></textarea>
                    </div>
                  </div>
                  <br>
                  <button class="ui right floated blue small button" >
                    <i class="save icon"></i>Simpan
                  </button>
                </form>
              </div>
            </div>
          </td>
        <?php } else{?>
          <td>
          <a href="#" data-featherlight="#bio-namez">Check</a>
            <div style="display:none;">
              <div id="bio-namez">

              <form method="POST" action="<?php echo site_url('pic/docheck'); ?>">  
              <input type="hidden" name="NamaPIC" value="<?php echo $checklist['NamaPIC'] ?>">
              <input type="hidden" name="NamaChecklist" value="<?php echo $checklist['NamaChecklist'] ?>">
              <input type="hidden" name="NamaChecklistSebenarnya" value="<?php echo $_SESSION['NamaPIC'] ?>">
              <input type="hidden" name="Jam" value="<?php echo $checklist['Jam'] ?>">
              <input type="hidden" name="Info" value="<?php echo $checklist['Info'] ?>">
              <input type="hidden" name="Hari" value="<?php echo $checklist['Hari'] ?>">
                <h3>Status</h3>
                <div class="ui form">
                <select name="Status">
                  <option value="OK">OK</option>
                  <option value="Bad">Bad</option>
                </select>
                </div>
                <h3>Keterangan</h3>
                  <div class="ui form">
                    <div class="field">
                       <textarea name="Keterangan"></textarea>
                    </div>
                  </div>
                  <br>
                  <button class="ui right floated blue small button" onClick="return confirm('Perhatian!!! Bukan Jadwal Anda Untuk Mengecek !!! Apakah Anda Ingin Melanjutkan??');">
                    <i class="save icon"></i>Simpan
                  </button>
                </form>
              </div>
            </div>
          </td>
        <?php } ?>
      </tr> 
      <?php $temp = $temp + 1; ?>
      <?php } ?>
      <?php } ?>
    </tbody>
    <tfoot>
        <th colspan="8">

        </th>
    </tfoot>
  </table>
  <br>
  <br>
  </div>
  </div>
</div>



    
