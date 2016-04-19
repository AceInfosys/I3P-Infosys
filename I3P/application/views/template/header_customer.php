<!DOCTYPE html>
<html>
    <head>
        <title>
            <?php
                if (isset($title)) {
                    echo $title;
                }
                else {
                    echo 'I3P';
                }
            ?>
        </title>
        <meta name="description" content="Using for Information System task">
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css">
        <script src="<?php echo base_url(); ?>public/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar">
            <div class="container-fluid">
                <div class="container-header">
                    <a class="navbar-brand" href="<?php echo site_url('customer/profile');?>"><img class="logonav" src="<?php echo base_url(); ?>public/img/logozen.png"></a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <!-- <li id="li_all_bookings">
                        <a class="textwhite" href="#">Booking</a>
                        <?php
                            $attribute = array(
                                    'class' => 'textwhite'
                                );
                            echo anchor('customer/all_bookings', 'Semua Booking', $attribute);
                        ?>
                    </li>
                    <li id="li_booking">
                        <a class="textwhite" href="#">Booking</a>
                        <?php
                            $attribute = array(
                                    'class' => 'textwhite'
                                );
                            echo anchor('customer/booking', 'Booking', $attribute);
                        ?>
                    </li> -->

                    <li id="li_booking" class="dropdown">
                        <a class="dropdown-toggle textwhite" data-toggle="dropdown" href="#">Pemesanan <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <?php
                                    echo anchor('customer/all_bookings', 'Pemesanan Saya');
                                ?>
                            </li>
                            <li>
                                <?php
                                    echo anchor('customer/booking', 'Buat Pemesanan Baru');
                                ?>
                            </li>
                        </ul>
                    </li>

                    <!-- <li id="li_rate_review">
                        <a class="textwhite" href="reviewuser.html">Review</a>
                        <?php
                            echo anchor('customer/rate_review', 'Rate and Review', array('class' => 'textwhite'));
                        ?>
                    </li> -->

                    <li id="li_rate_review" class="dropdown">
                        <a class="dropdown-toggle textwhite" data-toggle="dropdown" href="#">Ulasan dan Tanggapan <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <?php
                                    echo anchor('customer/all_rate_reviews', 'Ulasan dan Tanggapan Saya');
                                ?>
                            </li>
                            <li>
                                <?php
                                    echo anchor('customer/rate_review', 'Buat Ulasan dan Tanggapan Baru');
                                ?>
                            </li>
                        </ul>
                    </li>

                    <!-- <li id="li_complaint">
                        <a class="textwhite" href="komplainuser.html">Komplain</a>
                        <?php
                            $attribute = array(
                                    'class' => 'textwhite'
                                );
                            echo anchor('customer/complaint', 'Keluhan', $attribute);
                        ?>
                    </li> -->

                    <li id="li_complaint" class="dropdown">
                        <a class="dropdown-toggle textwhite" data-toggle="dropdown" href="#">Keluhan <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <?php
                                    echo anchor('customer/all_complaints', 'Keluhan Saya');
                                ?>
                            </li>
                            <li>
                                <?php
                                    echo anchor('customer/complaint', 'Buat Keluhan Baru');
                                ?>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown"><a class="dropdown-toggle textwhite" data-toggle="dropdown" href="#"><?php echo $this->session->userdata('logged_in')['username']; ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="komplainsaya.html">Profil Saya</a></li>
                            <li>
                                <?php
                                    echo anchor('user/logout', 'Keluar');
                                ?>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav> 