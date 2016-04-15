        <div class="container">
            <div class="panel panel-default panel-reg">
                <div class="panel-body">
                    <div class="panelhead headbooking">Booking</div>
                    <!-- <form role="form" class="form-booking"> -->
                    <?php
                    	echo form_open('')
                    ?>
                        <div style="overflow:hidden;">
                            <div class="form-group date" id="datetimepicker">
                                <label for="booking_datetime">Tanggal dan Waktu Booking</label>
								<div class="input-group date">
								  <input type="text" class="form-control">
								  <span class="input-group-btn btn-calendar">
								  	<button class="add-on btn btn-default" type="button">
								  		<div class="glyphicon glyphicon-calendar"></div>
								  	</button>
									<!--<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>-->
								  </span>
								</div>
								
								<script type="text/javascript">
								  $('#datetimepicker').datetimepicker({
									format: 'dd/MM/yyyy hh:mm:ss',
									language: 'en'
								  });
								</script>
								
							</div>
		
							<div class="form-group">
								<label for="booking_service">Jenis Terapi</label>
								<select name="booking_service" class="form-control">
									<option value="spa">Spa</option>
									<option value="reflexy">Reflexy</option>
								</select>
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
							</form>
							<div class="col-sm-9"></div>
							<div class="col-sm-3" style="padding-top: 20px;">
								<button type="submit" class="btn btnsimpan">Simpan</a>
							</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>