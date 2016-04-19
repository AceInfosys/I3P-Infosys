        <div class="container">
            <div class="headcenter">Komplain Saya</div>
            <!--harusnya generate panel di sini, tergantung backendnya-->
            <?php
                foreach ($data as $complaint) {
                    if ($complaint->status == "OK") {
            ?>
            <div class="panel panel-default panel-reg">
                <div class="panel-body">
                    <div class="desckomplain"><?php echo $complaint->message; ?></div> <!-- ini harusnya isi komplain user-->
                    <div class="row detailkomplain">
                    <div class="col-sm-10">
                        <div class="donekomplain">Komplain ini sudah ditangani</div>
                        <div class="datekomplain">Dibuat pada <?php echo $complaint->created_at; ?></div><!-- ini harusnya tanggal dilakukannya komplain-->
                    </div>
                    <div class="col-sm-2">
                    <img class="iconkomplain" src="<?php echo base_url(); ?>public/img/konfirmyes.png"></div>
                        </div>
                </div>
            </div>
            <?php
                    }
                    else {
            ?>
            <div class="panel panel-default panel-reg">
                <div class="panel-body">
                    <div class="desckomplain"><?php echo $complaint->message; ?></div> <!-- ini harusnya isi komplain user-->
                    <div class="row detailkomplain">
                    <div class="col-sm-10">
                        <div class="waitkomplain">Komplain ini sedang diproses</div>
                        <div class="datekomplain">Dibuat pada <?php echo $complaint->created_at; ?></div><!-- ini harusnya tanggal dilakukannya komplain-->
                    </div>
                    <div class="col-sm-2">
                    <img class="iconkomplain" src="<?php echo base_url(); ?>public/img/waitkomplain.png"></div>
                        </div>
                </div>
            </div>
            <?php
                    }
                }
            ?>

            <!-- TEMPLATE -->
            <!-- tampilan untuk komplain diproses-->
            <!-- <div class="panel panel-default panel-reg">
                <div class="panel-body">
                    <div class="desckomplain">Terdapat kerusakan pada AC di ruang 5 SPA wanita. Jadinya kurang nyaman dan gampang panas selama 1,5 jam. Tolong segera dibaikin dong.</div> --> <!-- ini harusnya isi komplain user-->
                    <!-- <div class="row detailkomplain">
                    <div class="col-sm-10">
                        <div class="waitkomplain">Komplain ini sedang diproses</div>
                        <div class="datekomplain">Dibuat pada 31 Maret 2016 07:29 PM</div> --><!-- ini harusnya tanggal dilakukannya komplain-->
                    <!-- </div>
                    <div class="col-sm-2">
                    <img class="iconkomplain" src="<?php echo base_url(); ?>public/img/waitkomplain.png"></div>
                        </div>
                </div>
            </div> -->
            <!-- ini harusnya kalau komplain udah selesai diproses-->
            <!-- <div class="panel panel-default panel-reg">
                <div class="panel-body">
                    <div class="desckomplain">Terdapat kerusakan pada AC di ruang 5 SPA wanita. Jadinya kurang nyaman dan gampang panas selama 1,5 jam. Tolong segera dibaikin dong.</div -->> <!-- ini harusnya isi komplain user-->
                    <!-- <div class="row detailkomplain">
                    <div class="col-sm-10">
                        <div class="donekomplain">Komplain ini sudah ditangani</div>
                        <div class="datekomplain">Dibuat pada 31 Maret 2016 07:29 PM</div> --><!-- ini harusnya tanggal dilakukannya komplain-->
                    <!-- </div>
                    <div class="col-sm-2">
                    <img class="iconkomplain" src="<?php echo base_url(); ?>public/img/konfirmyes.png"></div>
                        </div>
                </div>
            </div> -->
        </div>
        <script type="text/javascript">
            document.getElementById('li_complaint').classList.add("active");
        </script>