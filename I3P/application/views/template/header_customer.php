<!DOCTYPE html>
<html>
    <head>
        <title>I3P - Register</title>
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
                    <a class="navbar-brand" href="index.html"><img class="logonav" src="<?php echo base_url(); ?>public/img/logozen.png"></a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <!-- <a class="textwhite" href="#">Booking</a> -->
                        <?php
                            $attribute = array(
                                    'class' => 'textwhite'
                                );
                            echo anchor('customer/booking', 'Booking', $attribute);
                        ?>
                    </li>
                    <li><a class="textwhite" href="reviewuser.html">Review</a></li>
                    <li><a class="textwhite" href="komplainuser.html">Komplain</a></li>
                    <li class="dropdown"><a class="dropdown-toggle textwhite" data-toggle="dropdown" href="#">Username <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="pemesanansaya.html">Pemesanan Saya</a></li>
                            <li><a href="komplainsaya.html">Komplain Saya</a></li>
                            <li><a href="#">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav> 