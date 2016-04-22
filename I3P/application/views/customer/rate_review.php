        <div class="container">
            <div class="panel panel-default panel-reg">
                <div class="panel-body">
                    <div class="panelhead">Ulasan dan Tanggapan Saya</div> <!-- username harus diganti dengan user saat ini-->
                    <div class="descques">Bagaimana pendapat anda tentang pelayanan kami?</div>
                    <!-- <form role="form"> -->
                    <?php echo form_open('customer/new_rate_review'); ?>
                        <div class="form-group">
                            <textarea name="review" type="text" class="form-control descrvw" placeholder="Deskripsikan seluruh pendapat anda tentang pelayanan yang diberikan oleh therapist kami"></textarea>
                        </div>
                        <div class="form-group">
                            <span class="loverating">
                                  <input id="rating5" type="radio" name="rating" value="5">
                                  <label for="rating5">5</label>
                                  <input id="rating4" type="radio" name="rating" value="4">
                                  <label for="rating4">4</label>
                                  <input id="rating3" type="radio" name="rating" value="3">
                                  <label for="rating3">3</label>
                                  <input id="rating2" type="radio" name="rating" value="2">
                                  <label for="rating2">2</label>
                                  <input id="rating1" type="radio" name="rating" value="1">
                                  <label for="rating1">1</label>
                            </span>
                        </div>
                        <div class="form-group rvwbtn">
                            <a href="booking.html" class="btn btnbatal" role="button"> BATAL</a>
                            <button type="submit" class="btn btnkirim"> KIRIM</button>
                        </div>
                    <!-- </form> -->
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            document.getElementById('li_rate_review').classList.add("active");
        </script>