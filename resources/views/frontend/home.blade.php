<?php
include "configuracion.php"

?>
@extends('layout.layout')

@section('title', 'Home')

@section('content')


            <!--Servicios banner 3-->
            <div id="Banner_Servicios" class=" jumbotron-fluid-3">
                <div class="container align-items-center center" id="info-id">
                    <p class="display-4 slide info-metro-p-wh"><?php echo $lang['DRIVE WITH US'] ?></p>
                    <p class="slide info-metro-p-2-wh" style="text-align: center;"><?php echo $lang['Receive the benefits of belonging to our community of drivers'] ?> <br> <br> <a href="signup" class="btn btn-outline-secondary btn-sm slide info-metro-btn-drive" role="button" aria-disabled="true"><?php echo $lang[' APPLY NOW '] ?></a> </p>

                </div>
            </div>

            <div class="container">
                <div id="signup-p">
                    <h2 class="text-center margin_top-metro">More than a Transportation,<br>
                        a partner in your healthy-life and care</h2>
                </div>
            </div>

            <div class="container">
            <!-- Services section -->
            <section id="what-we-do">
                    <div class="row mt-5">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="card">
                                <div class="card-block block-1">
                                    <h3 class="card-title">MAKE GREAT <br> MONEY</h3>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pharetra, orci at molestie blandit, ligula nisl facilisis nunc, a egestas nisi turpis vitae risus.</p>
                                    <a href="#" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="card">
                                <div class="card-block block-2">
                                    <h3 class="card-title">SET YOUR OWN <br> SCHEDULE</h3>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pharetra, orci at molestie blandit, ligula nisl facilisis nunc, a egestas nisi turpis vitae risus.</p>
                                    <a href="#" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="card">
                                <div class="card-block block-3">
                                    <h3 class="card-title">EASY TO START <br> EASY TO STAY</h3>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pharetra, orci at molestie blandit, ligula nisl facilisis nunc, a egestas nisi turpis vitae risus.</p>
                                    <a href="#" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- /Services section -->
            </div>



























<script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />




@endsection
