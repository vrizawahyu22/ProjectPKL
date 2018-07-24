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
          <i class="user icon"></i>
          Absensi PIC 
          
        </h3>
        <a class="ui right floated tiny blue icon button" data-tooltip="Tambah Absensi PIC" data-inverted="" data-position="top right" style="margin-top: -40px" href="<?php echo site_url('admin/tambahabsensi'); ?>">
          <i class="add icon"></i>
        </a>
      </div>

      <div class="ui divider"></div>

      <table class="ui sortable compact celled definition table" id="example">
        <thead class="full-width" style="text-align: center; background-color: #dbedff">
          <tr>
            <th class="sorted ascending">NIK</th>
            <th class="">Nama PIC</th>
            <th class="">Shift</th>
            <th class="">Jam</th>
            <th class="">Hari</th>
            <th class="">Kehadiran</th>
            <th class="">Edit</th>
            <th class="">Hapus</th>
          </tr>
        </thead>
        <form method="POST" action="<?php echo site_url('admin/gantiabsensi'); ?>">
          <tbody id="hasil">
            <?php $i = 0; ?>
            <?php $jumlah = count($absensi); ?>
            <input type="hidden" name="jumlahAbsensi" value="<?php echo $jumlah ?>"> 
            <?php foreach ($absensi as $absensi) { ?>
            <?php if ($absensi['Status'] == 'Enabled' ) { ?>
            <input type="hidden" name="<?php echo 'IDHarian'.$i; ?>" value ="<?php echo $absensi['IDHarian']; ?>">
            <tr>
              <td><?php echo $absensi['NIK'] ?></td>
              <td><?php echo $absensi['NamaPIC'] ?></td>
              <td><?php echo $absensi['Shift'] ?></td>
              <td><?php echo $absensi['Jam'] ?></td>
              <td><?php echo $absensi['Hari'] ?></td>
              <td>
               
                <select   name="<?php echo 'Kehadiran'.$i ?>" style="min-width: 10em; cursor: pointer;
                word-wrap: break-word;
                line-height: 1em;
                white-space: normal;
                outline: 0;
                -webkit-transform: rotateZ(0deg);
                transform: rotateZ(0deg);
                min-width: 14em;
                min-height: 2.71428571em;
                background: #FFFFFF;
                display: inline-block;
                padding: 0.78571429em 2.1em 0.78571429em 1em;
                color: rgba(0, 0, 0, 0.87);
                -webkit-box-shadow: none;
                box-shadow: none;
                border: 1px solid rgba(34, 36, 38, 0.15);
                border-radius: 0.28571429rem;
                -webkit-transition: width 0.1s ease, -webkit-box-shadow 0.1s ease;
                transition: width 0.1s ease, -webkit-box-shadow 0.1s ease;
                transition: box-shadow 0.1s ease, width 0.1s ease;
                transition: box-shadow 0.1s ease, width 0.1s ease, -webkit-box-shadow 0.1s ease;">
                <?php if ($absensi['Kehadiran'] == "Hadir") { ?>
                <option value="<?php echo $absensi['Kehadiran']; ?>"><?php echo $absensi['Kehadiran']; ?></option>
                <option value="Tidak Hadir">Tidak Hadir</option>
                <?php } else if ($absensi['Kehadiran'] == "Tidak Hadir") { ?>
                <option value="Tidak Hadir"><?php echo $absensi['Kehadiran']; ?></option>
                <option value="Hadir">Hadir</option>
                <?php } ?>
              </select>
            </td>

            <td>
       <!--  <form method="GET" action="<?php echo base_url('admin/editpic'); ?> ">
            <input type="hidden" name="NIK" value="<?php echo $pic[$i]['NIK'] ?>">
            <button class="ui small blue button">
              <i class="edit icon"></i>Edit
            </button>
          </form> -->
          <?php $edit = 'admin/editabsensi/'.$absensi['IDHarian'] ?>
          <a href="<?php echo site_url($edit) ;?>" class="ui basic small blue button">
            <i class="icon edit"></i>
            Edit
          </a>
        </td>
        <td>
          <a href="<?php echo site_url($edit) ;?>" class="ui basic small red button">
            <i class="icon trash"></i>
            Hapus
          </a>
        </td>
        
      </tr>
      <?php } ?>
      <?php $i = $i+1; ?>
      <?php } ?>
    </tbody>
    <tfoot class="full-width">
      <tr>
        
        <th colspan="8">
          
          <button class="ui right floated blue small button" style="margin-top: 5px;">
            <i class="save icon"></i>Simpan
          </button>
          
        </th>

      </tr>
    </tfoot>
  </form>
</table>
<br><br>
</div>



</div>
</div>