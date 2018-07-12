<div class="ui two column centered grid">
<div class="column">
	<div class="ui segment" style="border-radius: 1.285714rem">
		<h3 style="text-align: center;">
			<div class="ui icon">
	  		<i class="user icon"></i>
			Tambah PIC</div></h3>
			<div class="ui divider"></div>

		<form class="ui form" method="POST" action="<?php echo site_url('admin/validasitambahpic'); ?>">
		  <div class="field">
		    <label>Nomor Induk Karyawan</label>
		    <input type="text" name="NIK" placeholder="Nomor Induk Karyawan">
		  </div>
		  <div class="field">
		    <label>Nama PIC</label>
		    <input type="text" name="NamaPIC" placeholder="Nama PIC">
		  </div>
		  <div class="field">
		    <label>Password</label>
		    <input type="password" name="Password" placeholder="Password">
		  </div>
		  <div class="field">
		    <label>Divisi</label>
		    <input type="text" name="Divisi" placeholder="Divisi">
		</div>
		    <div class="field">
		    <label>Jabatan</label>
		    <input type="text" name="Jabatan" placeholder="Jabatan">
		  </div>
		  <div class="field">
		    <label>Tahun Masuk PIC</label>
		    <input type="text" name="TahunMasuk" placeholder="Tahun Masuk PIC">
		  </div>
		  
	
		<div class="ui center aligned basic segment">
		  <button class="ui right vertical blue button" tabindex="0">
		  	<i class="plus icon"></i>
			  Tambah
			</button>
			</div>
		</form>


</div>
</div>
</div>










