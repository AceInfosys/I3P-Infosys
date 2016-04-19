        <div class="container">
            <div class="panel panel-default panel-reg">
                <div class="panel-body">
                    <div class="panelhead">Bukti Pemesanan</div>
                    <div class="dtlbukti">
                        <label class="labelreg">Nama Pemesan</label><br>
                        <div class="databukti"><?php echo $full_name; ?><br></div><!-- nama pemesan dari basis data masukin di sini-->
                        <label class="labelreg">Tanggal dan Waktu Booking</label><br>
                        <div class="databukti"><?php echo $booking_datetime; ?><br></div><!-- tanggal booking dari user-->
                        <label class="labelreg">Jenis Terapi</label><br>
                        <div class="databukti"><?php echo $booking_service; ?><br></div><!-- jenis terapi yang dipilih-->

                        
                        <!-- <label class="labelreg">Jumlah Orang</label><br>
                        <div class="databukti">5 orang<br></div> --><!-- jumlah orang masukin di sini-->


                        <!-- <label class="labelreg">Total Dana</label><br>
                        <div class="databukti">Rp450.000,-<br></div> -->
                        <!-- nama pemesan dari basis data masukin di sini-->
                    </div>
                    <div class="rmbrbukti">Konfirmasi paling lambat<br>30 menit sebelum terapi dilakukan</div>
                    <div class="row">
                        <div class="col-sm-3">
                            <button role="button" class="btn btnbukti">Cetak</button>
                        </div>
                        <div class="col-sm-6"></div>
                        <div class="col-sm-3">
                            <a href="pemesanansaya.html" role="button" class="btn btnbukti">Konfirmasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>