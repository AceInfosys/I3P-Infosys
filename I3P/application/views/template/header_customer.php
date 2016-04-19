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
                    <li id="li_all_bookings">
                        <!-- <a class="textwhite" href="#">Booking</a> -->
                        <?php
                            $attribute = array(
                                    'class' => 'textwhite'
                                );
                            echo anchor('customer/all_bookings', 'Semua Booking', $attribute);
                        ?>
                    </li>
                    <li id="li_booking">
                        <!-- <a class="textwhite" href="#">Booking</a> -->
                        <?php
                            $attribute = array(
                                    'class' => 'textwhite'
                                );
                            echo anchor('customer/booking', 'Booking', $attribute);
                        ?>
                    </li>
                    <li id="li_rate_review">
                        <!-- <a class="textwhite" href="reviewuser.html">Review</a> -->
                        <?php
                            echo anchor('customer/rate_review', 'Rate and Review', array('class' => 'textwhite'));
                        ?>
                    </li>
                    <li id="li_complaint">
                        <!-- <a class="textwhite" href="komplainuser.html">Komplain</a> -->
                        <?php
                            $attribute = array(
                                    'class' => 'textwhite'
                                );
                            echo anchor('customer/complaint', 'Keluhan', $attribute);
                        ?>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle textwhite" data-toggle="dropdown" href="#">Username <span class="caret"></span></a>
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