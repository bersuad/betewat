@extends('layouts.app')
@section('content')
<main>
        <!-- Breadcrumbs -->
        <div class="container">
            <div class="wrapper-breadcrumbs">
                <div id="breadcrumbs"> <a href="#">Home</a> <i class="icon ion-android-arrow-forward separator"></i> <span class="breadcrumb-last">About Us</span> </div>
                <div class="soc-icons"> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook-f"></i></a> <a href="#"><i class="fa fa-instagram"></i></a> </div>
            </div>
        </div>
        <!-- End Breadcrumbs -->
        <!-- Aboout As -->
        <div class="about-us-entry">
            <!-- We Are Section -->
            <section class="container">
                <h1 class="section-title text-center lines">We Are Style</h1>
                <div class="row post-content entry-text">
                    <div class="col-md-6">
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam.</p>
                    </div>
                </div>
            </section>
            <!-- End We Are Section -->
            <!-- Services List -->
            <section class="services">
                <div class="container">
                    <h2 class="section-title lines">Services</h2>
                    <div class="row">
                        <div class="col-md-4 services-item-wr">
                            <p class="icon-wr"><i class="icon ion-ios-chatboxes-outline"></i></p>
                            <p class="description">Duis sed odio sit amet vulputate cursusit
                                <br>amet mauris. Morbi accumsan ipsum velit am nec tellusa odio tincidunt auctor a augue. </p>
                        </div>
                        <div class="col-md-4 services-item-wr">
                            <p class="icon-wr"><i class="ion-ios-bookmarks-outline"></i></p>
                            <p class="description">Duis sed odio sit amet vulputate cursusit
                                <br>amet mauris. Morbi accumsan ipsum velit am nec tellusa odio tincidunt auctor a augue. </p>
                        </div>
                        <div class="col-md-4 services-item-wr">
                            <p class="icon-wr"><i class="ion-ios-chatboxes-outline"></i></p>
                            <p class="description">Duis sed odio sit amet vulputate cursusit
                                <br>amet mauris. Morbi accumsan ipsum velit am nec tellusa odio tincidunt auctor a augue. </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Services List -->
            <!-- Team -->
            <section class="team">
                <div class="container">
                    <h2 class="section-title lines">Professional Team</h2>
                    <div class="row team-items-wr">
                        <div class="col-sm-6 col-lg-3 team-item-wr">
                            <div class="team-item">
                                <div class="img-holder" style="background-image: url(assets/img/demo/stock_17_575x500.jpg)"> <a href="#" class="soc-icon"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#" class="soc-icon"><i class="fa fa-twitter" aria-hidden="true"></i></a> </div>
                                <h3 class="title">King Lopez</h3>
                                <p class="role">Co-founder</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 team-item-wr">
                            <div class="team-item">
                                <div class="img-holder" style="background-image: url(assets/img/demo/stock_16_575x500.jpg)"> <a href="#" class="soc-icon"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#" class="soc-icon"><i class="fa fa-twitter" aria-hidden="true"></i></a> </div>
                                <h3 class="title">King Lopez</h3>
                                <p class="role">Co-founder</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 team-item-wr">
                            <div class="team-item">
                                <div class="img-holder" style="background-image: url(assets/img/demo/stock_12_575x500.jpg)"> <a href="#" class="soc-icon"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#" class="soc-icon"><i class="fa fa-twitter" aria-hidden="true"></i></a> </div>
                                <h3 class="title">King Lopez</h3>
                                <p class="role">Co-founder</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 team-item-wr">
                            <div class="team-item">
                                <div class="img-holder" style="background-image: url(assets/img/demo/stock_03_575x500.jpg)"> <a href="#" class="soc-icon"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#" class="soc-icon"><i class="fa fa-twitter" aria-hidden="true"></i></a> </div>
                                <h3 class="title">King Lopez</h3>
                                <p class="role">Co-founder</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </section>
            <!-- End Team -->
        </div>
        <!-- About Us -->
    </main>
    @endsection