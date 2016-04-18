        <div class="container">
            <div class="panel panel-default panel-reg">
                <div class="panel-body">
                    <div class="panelhead headbooking">Booking Baru</div>
                    <!-- <form role="form" class="form-booking"> -->
                    <?php
                    	echo form_open('customer/new_booking');
                    ?>
                        <div style="overflow:hidden;">
                            <div class="form-group date" id="datetimepicker">
                                <label for="booking_datetime">Tanggal dan Waktu Booking</label>
								<div class="input-group date">
								  <!-- <input type="text" class="form-control"> -->
								  <?php
								  	$data = array(
								  			'class' => 'form-control',
								  			'name' => 'booking_datetime',
								  			'id' => 'booking_datetime'
								  		);
								  	echo form_input($data);
								  ?>
								  <span class="input-group-btn btn-calendar">
								  	<button class="add-on btn btn-default" type="button">
								  		<div class="glyphicon glyphicon-calendar"></div>
								  	</button>
									<!--<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>-->
								  </span>
								</div>
								
								<script type="text/javascript">
								  $('#datetimepicker').datetimepicker({
									format: 'yyyy-MM-dd hh:mm:ss',
									language: 'en'
								  });
								</script>
								
							</div>
		
							<div class="form-group">
								<label for="booking_service">Jenis Layanan</label>
								<!-- <select name="booking_service" class="form-control">
									<option value="spa">Spa</option>
									<option value="reflexy">Reflexy</option>
								</select> -->
								<?php
									$option = array(
											'spa' => 'Spa',
											'reflexy' => 'Reflexy'
										);
									$attribute = array(
											'class' => 'form-control',
											'name' => 'booking_service',
								  			'id' => 'booking_service'
										);
									echo form_dropdown('booking_service', $option, 'spa', $attribute);
								?>
							</div>
							
							<!-- <div class="form-group">
							<label for="jumlahorang">Jumlah Orang</label>
								<select class="form-control" name="jumlahorang">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div> -->
							<!-- </form> -->
							<div class="col-sm-9"></div>
							<div class="col-sm-3" style="padding-top: 20px;">
								<button type="submit" class="btn btnsimpan">Simpan</a>
							</div>
                        </div>
                    <!-- </form> -->
                    <?php
                    	echo form_close();
                    ?>
                </div>
            </div>
        </div>