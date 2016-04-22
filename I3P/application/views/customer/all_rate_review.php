        <div class="container">
            <div class="headcenter">Ulasan dan Tanggapan Saya</div>
            <!--harusnya generate panel di sini, tergantung backendnya-->

            <?php foreach ($data as $rate_review) { ?>
            <div class="panel panel-default panel-reg">
                <div class="panel-body">
                    <div class="descreview">
                        <?php
                            echo $rate_review->review;
                        ?>
                    </div> <!-- ini harusnya isi review user-->
                    <div class="row detailreview">
                        <div class="col-sm-7">
                            <div class="datereview"><?php echo $rate_review->created_at; ?></div><!-- ini harusnya tanggal dilakukannya review-->
                        </div>
                        <div class="col-sm-5">
                            <!-- di sini harusnya ngegenerate jumlah love yang ada dari user-->
                            <?php
                                for ($i = 0; $i < $rate_review->rating; $i++) {
                                    echo '<img class="rate" src="'.base_url().'public/img/favorite.png"> ';
                                }
                                for ($i = 5 - $rate_review->rating; $i > 0; $i--) {
                                    echo '<img class="rate" src="'.base_url().'public/img/favoriteoff.png"> ';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>