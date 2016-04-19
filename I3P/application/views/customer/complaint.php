        <div class="container">
            <div class="panel panel-default panel-reg">
                <div class="panel-body">
                    <div class="panelhead">Keluhan terhadap ZEN</div>
                    <div class="descques">Kurang puas dengan fasilitas di ZEN? Beritahu kami</div>
                    <!-- <form role="form"> -->
                    <?php echo form_open('customer/new_complaint'); ?>
                        <div class="form-group">
                            <textarea type="text" class="form-control descrvw" placeholder="Apa saja yang membuat Anda kurang puas dengan fasilitas di ZEN? Berikan saran terbaik Anda." id="message" name="message"></textarea>
                        </div>
                        <div class="form-group rvwbtn">
                            <!-- <a href="booking.html" class="btn btnbatal" role="button"> BATAL</a> -->
                            <button type="submit" class="btn btnkirim"> KIRIM</button>
                        </div>
                    <!-- </form> -->
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            document.getElementById('li_complaint').classList.add("active");
        </script>