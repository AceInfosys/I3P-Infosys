        <div class="container">
            <div class="panel panel-default panel-reg">
                <div class="panel-body">
                    <div class="panelhead">Profil Saya</div>
                    <!-- <form role="form"> -->
                    <?php echo form_open('register/new_registration'); ?>
                        <div class="form-group">
                            <label class="labelreg" for="namalengkap"> Nama Lengkap</label>
                            <!-- <input type="text" class="form-control" id="namalengkap" placeholder="Nama Lengkap"> -->
                            <?php
                                $data = array(
                                        'class' => 'form-control',
                                        'name' => 'full_name',
                                        'id' => 'full_name',
                                        'maxlength' => '100',
                                        'value' => $profile[0]->full_name,
                                        'disabled' => 'disabled'
                                    );
                                echo form_input($data);
                            ?>
                            <?php echo form_error('full_name'); ?>
                        </div>
                        <div class="form-group">
                            <label class="labelreg" for="usrname"> Username</label>
                            <!-- <input type="text" class="form-control" id="usrname" placeholder="Username"> -->
                            <?php
                                $data = array(
                                        'class' => 'form-control',
                                        'name' => 'username',
                                        'id' => 'username',
                                        'maxlength' => '100',
                                        'value' => $profile[0]->username,
                                        'disabled' => 'disabled'
                                    );
                                echo form_input($data);
                            ?>
                            <?php echo form_error('username'); ?>
                        </div>
                        
                        <div class="form-group">
                            <label class="labelreg" for="email"> Email</label>
                            <!-- <input type="text" class="form-control" id="email" placeholder="Email"> -->
                            <?php
                                $data = array(
                                        'type' => 'email',
                                        'class' => 'form-control',
                                        'name' => 'email',
                                        'id' => 'email',
                                        'maxlength' => '100',
                                        'value' => $profile[0]->email,
                                        'disabled' => 'disabled'
                                    );
                                echo form_input($data);
                            ?>
                            <?php echo form_error('email'); ?>
                        </div>
                        <div class="form-group">
                            <label class="labelreg" for="notelp"> Nomor Telepon</label>
                            <!-- <input type="text" class="form-control" id="notelp" placeholder="Nomor Telepon"> -->
                            <?php
                                $data = array(
                                        'class' => 'form-control',
                                        'name' => 'tel_no',
                                        'id' => 'tel_no',
                                        'maxlength' => '100',
                                        'value' => $profile[0]->tel_no
                                    );
                                echo form_input($data);
                            ?>
                            <?php echo form_error('tel_no'); ?>
                        </div>
                        <!-- <div class="form-group">
                            <label class="labelreg" for="alamat"> Alamat</label>
                            <input type="text" class="form-control" id="alamat" placeholder="Alamat ">
                        </div> -->
                        <div class="form-group">
                            <label class="labelreg" for="type">Tipe Akun</label>
                            <div class="form-control">
                                <input type="radio" name="type" value="1" <?php echo set_radio('type', '1', TRUE); ?> disabled />
                                <span style="padding-left: 5px; padding-right: 18px;">Pelanggan</span>
                            </div>
                        </div>
                        <button type="submit" class="btn btnregister">Register</button>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>