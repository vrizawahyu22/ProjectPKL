<div class="ui two column centered grid">
<div class="column">
	<div class="ui segment" style="border-radius: 1.285714rem">
		<canvas id="myChart"></canvas>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Semantic-UI/semantic.min.css'); ?>">
          <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Semantic-UI/data-paginate.css'); ?>">
          <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/pagination.min.css'); ?>">
        <link rel="icon" type="image/png" href= "<?php echo base_url('assets/images/icons/favicon.ico'); ?> "/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>

        $.getJSON('<?php echo site_url("admin/jranking") ?>', function(data) {
            // alert(data[0]['nama']);
            var nama = [];
            var hasilV = [];
            for (var i = 0; i < data.length; i++) {
                nama[i] = data[i]['nama'];
                hasilV[i] = data[i]['hasilV'];
            }

        var chartpic = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(chartpic, {
            type: 'line',
            data: {
                labels: nama,
                datasets: [{
                    label: 'Nilai PIC',
                    data: hasilV,
                    // backgroundColor: [
                    //     'rgba(255, 99, 132, 0.2)',
                    //     'rgba(54, 162, 235, 0.2)',
                    //     'rgba(255, 206, 86, 0.2)',
                    //     'rgba(75, 192, 192, 0.2)',
                    //     'rgba(153, 102, 255, 0.2)',
                    //     'rgba(255, 159, 64, 0.2)'
                    // ],
                    borderColor: [
                        'blue'
                        // 'rgba(54, 162, 235, 1)',
                        // 'rgba(255, 206, 86, 1)',
                        // 'rgba(75, 192, 192, 1)',
                        // 'rgba(153, 102, 255, 1)',
                        // 'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                },
                title: {
                	display: true,
                	text:'Ranking PIC',
                    fontSize: 20,
                    fontColor: '#000'
                }
            },
        });

        });
        </script>
        <br>
        <form method="POST" action="<?php echo site_url('admin/penjadwalan'); ?>">
            <div class="ui input left icon">
                <i class="calendar icon"></i>
                <input type="date" value="<?php echo date('20y-m-d'); ?>" name="date0">
            </div>
            -
            <div class="ui input left icon">
                <i class="calendar icon"></i>
                <input type="date" value="<?php echo date('20y-m-d'); ?>" name="date1">
            </div>
            <button class="ui small green button">Jadwalkan Sekarang! </button>
        </form>
        <?php for ($i=0; $i < count($alert); $i++) { ?>
            <?php if ($alert[$i]['hasil'] == 'gagal') { ?>
                <div class="ui negative message">
                  <i class="close icon"></i>
                  <div class="header">
                    Tanggal <?php echo $alert[$i]['tanggal']; ?> Gagal Dijadwalkan!
                  </div>
                  <p>Silahkan lihat absensi PIC yang bertugas.</p>
                </div>
            <?php } else if($alert[$i]['hasil'] == 'benar'){ ?>
                <div class="ui success message">
                  <i class="close icon"></i>
                  <div class="header">
                    Tanggal <?php echo $alert[$i]['tanggal']; ?> Sukses Dijadwalkan.
                  </div>
                  <p>Anda bisa melihat jadwal checklist pada tanggal ini.</p>
                </div>
            <?php } else if($alert[$i]['hasil'] == 'kosong'){ ?>
                <div class="ui negative message">
                  <i class="close icon"></i>
                  <div class="header">
                    Tanggal yang anda masukkan tidak valid !
                  </div>
                  <p>Silahkan isi tanggal yang benar.</p>
                </div>
            <?php } ?>
        <?php } ?> 
        </div>
</div>
</div>
</div>










