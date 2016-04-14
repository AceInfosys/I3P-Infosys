<div class="containerbody">
            <img class="logoimg" src="<?php echo base_url(); ?>public/img/logozen.png"></img>
            <div class="textvisi">
                <i>Think <b>Healty</b>, Think <b>Smart</b></i>
            </div>
            <div class="textinvite">
                Ayo mulai bergabung dengan kami <br> untuk mendapatkan spa terbaik
            </div>
            <div class="loginandregister">
                <button type="button" class="btn btn-large btn-orange" data-toggle="modal" data-target="#loginModal">Login</button>
                <a class="btn btn-large btn-orange" href="register.html">Register</a>
            </div>
              <!-- Modal -->
            <div class="modal fade" id="loginModal" role="dialog">
                <div class="modal-dialog"><!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title"><span class="glyphicon glyphicon-lock"></span> Selamat Datang!</h3>
                        </div>
                        <div class="modal-body">
                            <form role="form">
                                <div class="form-group">
                                  <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                                  <input type="text" class="form-control" id="usrname" placeholder="Username">
                                </div>
                                <div class="form-group">
                                  <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                                  <input type="text" class="form-control" id="psw" placeholder="Password">
                                </div>
                                <div class="checkbox">
                                  <label><input type="checkbox" value="" checked>Remember me</label>
                                </div>
                                  <button type="submit" class="btn btnlogin"><span class="glyphicon glyphicon-off"></span> Login</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <a class="left" href="#">Forgot Password?</a>
                            <a class="right" href="register.html">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="copyright">Copyright &copy; 2016 C1-G15</div>
            <div class="registerpegawai"><a href="#">Daftar jadi Pegawai</a></div>
        </footer>