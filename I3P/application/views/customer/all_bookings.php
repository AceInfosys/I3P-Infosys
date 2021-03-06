        <div class="container">
            <div class="headcenter">Pemesanan Saya</div>
            <!--harusnya generate panel di sini, tergantung backendnya-->
            <!-- tampilan untuk minta konfirmasi-->

            <?php foreach ($data as $booking){ ?>
                <div class="panel panel-default panel-reg">
                    <div class="panel-body">
                        <?php
                            if ($booking->status == "CONFIRMED") {
                        ?>
                        <img class="sudahpesan" src="<?php echo base_url(); ?>public/img/sudahpesan.png">
                        <?php
                            }
                            else if ($booking->status == "CANCELLED") {
                        ?>
                        <img class="batalpesan" src="<?php echo base_url(); ?>public/img/batalpesan.png">
                        <?php
                            }
                        ?>
                        <div class="ntherapy"><b><?php echo $booking->booking_service; ?></b></div> <!-- ini harusnya nama therapy yang diisi oleh user-->
                        <div class="desctherapy">Booking untuk <b><?php echo $booking->booking_datetime; ?></b><br> <!-- ini harusnya tanggal booking dia--> 
                        <!-- <b>5</b> orang<br>  ini harusnya jumlah orang yang booking -->
                        Rp<b>450.000,-</b> <!-- ini harusnya jumlah total uang yang harus dibayar pelanggan-->
                        </div>
                        <?php
                            if ($booking->status != "CONFIRMED" && $booking->status != "CANCELLED") {
                        ?>
                            <div class="konfpemesanan">
                                Konfirmasi&#63;<br>
                                <a href="<?php echo base_url().'index.php/customer/confirm_booking/'.$booking->id; ?>"><img class="konfirmyes" src="<?php echo base_url(); ?>public/img/konfirmyes.png"></a>
                                <a href="<?php echo base_url().'index.php/customer/cancel_booking/'.$booking->id; ?>"><img class="konfirmno" src="<?php echo base_url(); ?>public/img/konfirmno.png"></a>
                            </div>
                        <?php
                            }
                            else if ($booking->status == "CONFIRMED") {
                        ?>
                            <div class="statpemesanan">Pemesanan ini telah dilakukan</div>
                        <?php
                            }
                            else {
                        ?>
                            <div class="statpemesanan">Pemesanan ini <b>batal</b></div>
                        <?php
                            }
                        ?>
                        <div class="datepemesanan">Dibuat pada <?php echo $booking->created_at; ?></div><!-- ini harusnya tanggal dilakukannya pesanan-->
                    </div>
                </div>
            <?php }; ?>

<!-- 
            <div class="panel panel-default panel-reg">
                <div class="panel-body">
                    <div class="ntherapy"><b>Foot Reflexy Therapy 90"</b></div> <!-- ini harusnya nama therapy yang diisi oleh user--
                    <div class="desctherapy">Booking untuk <b>5 April 2016 10:00AM</b><br> <!-- ini harusnya tanggal booking dia--
                    <b>5</b> orang<br> <!-- ini harusnya jumlah orang yang booking--
                    Rp<b>450.000,-</b> <!-- ini harusnya jumlah total uang yang harus dibayar pelanggan--
                    </div>
                    <div class="konfpemesanan">
                        Konfirmasi&#63;<br>
                        <a href="#"><img class="konfirmno" src="<?php echo base_url(); ?>public/img/konfirmno.png"></a>
                        <a href="#"><img class="konfirmyes" src="<?php echo base_url(); ?>public/img/konfirmyes.png"></a>
                    </div>
                    <div class="datepemesanan">Dibuat pada 31 Maret 2016 07:29 PM</div><!-- ini harusnya tanggal dilakukannya pesanan--
                </div>
            </div>
            <!-- ini harusnya kalau udah pernah dilakukan--
            <div class="panel panel-default panel-reg">
                <div class="panel-body">
                <img class="sudahpesan" src="<?php echo base_url(); ?>public/img/sudahpesan.png">
                    <div class="ntherapy"><b>Foot Reflexy Therapy 90"</b></div> <!-- ini harusnya nama therapy yang diisi oleh user--
                    <div class="desctherapy">Booking untuk <b>5 April 2016 10:00AM</b><br> <!-- ini harusnya tanggal booking dia--
                    <b>5</b> orang<br> <!-- ini harusnya jumlah orang yang booking--
                    Rp<b>450.000,-</b> <!-- ini harusnya jumlah total uang yang harus dibayar pelanggan--
                    </div>
                    <div class="statpemesanan">Pemesanan ini telah dilakukan</div>
                    <div class="datepemesanan">Dibuat pada 31 Maret 2016 07:29 PM</div><!-- ini harusnya tanggal dilakukannya pesanan--
                </div>
            </div>
            <!-- ini harusnya kalau dia batal pesan--
            <div class="panel panel-default panel-reg">
                <div class="panel-body">
                <img class="batalpesan" src="<?php echo base_url(); ?>public/img/batalpesan.png">
                    <div class="ntherapy"><b>Foot Reflexy Therapy 90"</b></div> <!-- ini harusnya nama therapy yang diisi oleh user--
                    <div class="desctherapy">Booking untuk <b>5 April 2016 10:00AM</b><br> <!-- ini harusnya tanggal booking dia--
                    <b>5</b> orang<br> <!-- ini harusnya jumlah orang yang booking--
                    Rp<b>450.000,-</b> <!-- ini harusnya jumlah total uang yang harus dibayar pelanggan--
                    </div>
                    <div class="statpemesanan">Pemesanan ini <b>batal</b></div>
                    <div class="datepemesanan">Dibuat pada 31 Maret 2016 07:29 PM</div><!-- ini harusnya tanggal dilakukannya pesanan--
                </div>
            </div>
        </div> -->
        <script type="text/javascript">
            document.getElementById('li_booking').classList.add("active");
        </script>