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
          Template Absensi
        </h3>
          <?php if ($_SESSION['nama'] == 'admin'): ?>   
            <a class="ui right floated tiny blue icon button" data-tooltip="Tambah Template Absensi" data-inverted="" data-position="top right" style="margin-top: -40px" href="<?php echo site_url('admin/tambahtemplateabsensi'); ?>">
              <i class="add icon"></i>
            </a>
          <?php endif ?>
      </div>

      <div class="ui divider"></div>

      <table class="ui sortable compact celled definition table">
        <thead class="full-width" style="text-align: center; background-color: #dbedff">
          <tr>
            <th class="sorted ascending">NIK</th>
            <th class="">Nama PIC</th>
            <th class="">Shift</th>
            <th class="">Jam</th>
            <th class="">Hari</th>
            
             <?php if ($_SESSION['nama'] == 'admin'): ?>
            <th class="">Edit</th>
            <th class="">Hapus</th>
            <?php endif ?>
          </tr>
        </thead>
<!--         <form method="POST" action="<?php echo site_url('admin/gantiabsensi'); ?>">
 -->          <tbody>
            
          <?php $temp = 0; ?>
            <?php foreach ($template as $template) { ?>
                <tr>
                  <input type="hidden" name="<?php echo 'IDTHarian'.$temp ?>" value="<?php echo $template['IDTHarian']; ?>">
                <td>
                    <?php echo $template['NIK']; ?>
                    
                </td>

                <td>
                  <?php echo $template['NamaPIC']; ?>
                </td>
                <td>
                    <?php echo $template['Shift']; ?>
                    
                </td>
                <td>
                  <?php echo $template['Jam']; ?>
                </td>
                <td>
                    <?php echo $template['Hari']; ?>
                   
                </td>
                
            </tr>
            <?php $temp = $temp + 1;
             } ?>
             <input type="hidden" name="temp" value="<?php echo $temp ?>">

    </tbody>
    <tfoot class="full-width">
      <tr>

        <th colspan="9">

          <button class="ui right floated blue small button" style="margin-top: 5px;">
            <i class="save icon"></i>Simpan
          </button>
          
        </th>

      </tr>
    </tfoot>
  <!-- </form> -->
</table>
<br><br>
</div>



</div>
</div>

<!-- <script>
  jQuery(function() {

    jQuery('.pengganti').hide();
    var d = document.getElementsByClassName("absensi").length;
  // console.log(d);
  for (var i = 0; i < d; i++){
    console.log(i +" = "+ $('.hadir'+i).val());
    if($('.hadir'+i).val() == "Tidak Hadir"){
      jQuery('#select' + $('.hadir'+i).attr('target')).show();
    }


    jQuery('.hadir'+i).change(function() {
      jQuery('#select' + $(this).attr('target')).toggle();
    });
  }

});
</script> -->