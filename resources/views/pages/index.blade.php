@extends('layouts.app')

@section('content')

	 <main>
        <section class="hero over-header" style="background-image:url('/storage/img/demo/hero-under-header-bg.jpg')">
            <div class="container">
                <div class="over-header-inner">
                    <h1 class="title">Find Perfect Actor</h1>
                    <form class="searh-model"> 
                    	<span class="select-item" > 
                    		<select name="height" id="height" class="selectpicker" style="color: #222!important;"> 
                    			<option value="0" style="color: #222!important;">Height</option> 
                    			<option value="150">150</option> 
                    			<option value="155">155</option> 
                    			<option value="160">160</option> 
                    		</select> 
                    	</span> 
                    	<span class="select-item"> 
                    		<select name="waist" id="waist" class="selectpicker"> 
                    			<option value="0">Waist</option> 
                    			<option value="50">50</option> 
                    			<option value="55">55</option> 
                    			<option value="60">60</option> 
                    		</select> 
                    	</span> 
                    	<span class="select-item"> 
                    		<select name="bust" id="bust" class="selectpicker"> 
                    			<option value="0">Bust</option> 
                    			<option value="45">45</option> 
                    			<option value="50">50</option> 
                    			<option value="55">55</option> 
                    		</select> 
                    	</span> 
                    	<span class="select-item"> 
                    		<select name="age" id="age" class="selectpicker"> 
                    			<option value="0">Age</option> 
                    			<option value="18">18</option> 
                    			<option value="19">19</option> 
                    			<option value="20">20</option> 
                    		</select> 
                    	</span> 
                    	<span class="select-item"> 
                    		<select name="hair" id="hair" class="selectpicker"> 
                    			<option value="hair">Hair</option> 
                    			<option value="blonde">Blonde</option> 
                    			<option value="black">Black</option> 
                    			<option value="brown">Brown</option> 
                    		</select> 
                    	</span> 
                    	<span class="select-item"> 
                    		<select name="age" id="eyes" class="selectpicker"> 
                    			<option value="0">Eyes</option> 
                    			<option value="blue">Blue</option> 
                    			<option value="green">Green</option> 
                    			<option value="brown">Brown</option> 
                    		</select> 
                    	</span>
                        <input type="submit" value="Search" class="submit"> </form>
                </div>
            </div>
        </section>

        <section class="container categories bigger">
            <h2 class="section-title lines">Categories</h2>
            <div class="row categories-wr">
                <div class="col-sm-6 col-lg-4 categories-item-wr">
                    <a href="07_Models_Load_More_Alternative.html" class="category-models-item" style="background-image: url(/storage/img/demo/stock_14_575x400.jpg)">
                        <footer class="categories-item-footer">
                            <p class="category">Woman</p>
                            <p class="models-count">5 models</p>
                        </footer>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 categories-item-wr">
                    <a href="07_Models_Load_More_Alternative.html" class="category-models-item" style="background-image: url(/storage/img/demo/stock_11_575x400.jpg)">
                        <footer class="categories-item-footer">
                            <p class="category">Trending</p>
                            <p class="models-count">11 models</p>
                        </footer>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 categories-item-wr">
                    <a href="07_Models_Load_More_Alternative.html" class="category-models-item" style="background-image: url(/storage/img/demo/stock_12_575x400.jpg)">
                        <footer class="categories-item-footer">
                            <p class="category">With Video</p>
                            <p class="models-count">4 models</p>
                        </footer>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 categories-item-wr">
                    <a href="07_Models_Load_More_Alternative.html" class="category-models-item" style="background-image: url(/storage/img/demo/stock_13_575x400.jpg)">
                        <footer class="categories-item-footer">
                            <p class="category">Blue Eyes</p>
                            <p class="models-count">7 models</p>
                        </footer>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 categories-item-wr">
                    <a href="07_Models_Load_More_Alternative.html" class="category-models-item" style="background-image: url(assets/img/demo/stock_02_575x450.jpg)">
                        <footer class="categories-item-footer">
                            <p class="category">Blonde</p>
                            <p class="models-count">9 models</p>
                        </footer>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 categories-item-wr">
                    <a href="07_Models_Load_More_Alternative.html" class="category-models-item" style="background-image: url(assets/img/demo/stock_09_575x450.jpg)">
                        <footer class="categories-item-footer">
                            <p class="category">European</p>
                            <p class="models-count">14 models</p>
                        </footer>
                    </a>
                </div>
            </div>
        </section>
        <!-- End Categories List -->
        <!-- Review -->
        <div class="container-fluid full-screen-quote">
            <div class="row">
                <div class="col-md-6">
                    <div class="full-screen-quote-text">
                        <p class="quotes">“</p>
                        <p class="description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit conse quat ipsum, nec sagittis sem nibh id elit duis sed. </p> <address class="author">Jena Stain</address> </div>
                </div>
                <div class="col-md-6 author-img-wr"> <img src="assets/img/demo/full-width-quote-bg.jpg" alt="" class="author-img"> </div>
            </div>
        </div>
        <!-- End Review -->
        <!-- Popular Models List -->
        <section class="container popular-models model-row-wrap">
            <h2 class="section-title lines">Popular Models</h2>
            <article class="model-row">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4 col-xl-2 offset-xl-0">
                        <a href="05_Model_Profile.html" class="img-wr"> <img src="assets/img/demo/stock_03_575x700.jpg" alt=""> </a>
                    </div>
                    <div class="col-xl-6">
                        <div class="row-model-info">
                            <h3 class="title"> <a href="05_Model_Profile.html">Alexis Rane</a> </h3>
                            <div class="model-attr">
                                <p class="attr-item"> <span class="attr-name">Height:</span> <span class="attr-value">185</span> </p>
                                <p class="attr-item"> <span class="attr-name">Bust:</span> <span class="attr-value">85</span> </p>
                                <p class="attr-item"> <span class="attr-name">Waist:</span> <span class="attr-value">60</span> </p>
                                <p class="attr-item"> <span class="attr-name">Age:</span> <span class="attr-value">17</span> </p>
                                <p class="attr-item"> <span class="attr-name">Heir:</span> <span class="attr-value">Red</span> </p>
                                <p class="attr-item"> <span class="attr-name">Eyes:</span> <span class="attr-value">Blue</span> </p>
                            </div>
                            <p class="rating"> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> </p>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <p class="soc-icons-wr"> <a href="#" class="soc-icon"><i class="fa fa-instagram" aria-hidden="true"></i></a> <a href="#" class="soc-icon"><i class="fa fa-twitter" aria-hidden="true"></i></a> </p>
                    </div>
                    <div class="col-xl-2">
                        <p class="soc-icons-wr big"> <a href="#" class="soc-icon"><i class="icon ion-android-favorite"></i></a> <a href="#" class="soc-icon"><i class="icon ion-ios-email-outline"></i></a> </p>
                    </div>
                </div>
            </article>
            <article class="model-row">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4 col-xl-2 offset-xl-0">
                        <a href="05_Model_Profile.html" class="img-wr"> <img src="assets/img/demo/stock_04_575x700.jpg" alt=""> </a>
                    </div>
                    <div class="col-xl-6">
                        <div class="row-model-info">
                            <h3 class="title"> <a href="05_Model_Profile.html">Alexis Rane</a> </h3>
                            <div class="model-attr">
                                <p class="attr-item"> <span class="attr-name">Height:</span> <span class="attr-value">185</span> </p>
                                <p class="attr-item"> <span class="attr-name">Bust:</span> <span class="attr-value">85</span> </p>
                                <p class="attr-item"> <span class="attr-name">Waist:</span> <span class="attr-value">60</span> </p>
                                <p class="attr-item"> <span class="attr-name">Age:</span> <span class="attr-value">17</span> </p>
                                <p class="attr-item"> <span class="attr-name">Heir:</span> <span class="attr-value">Red</span> </p>
                                <p class="attr-item"> <span class="attr-name">Eyes:</span> <span class="attr-value">Blue</span> </p>
                            </div>
                            <p class="rating"> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> </p>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <p class="soc-icons-wr"> <a href="#" class="soc-icon"><i class="fa fa-instagram" aria-hidden="true"></i></a> <a href="#" class="soc-icon"><i class="fa fa-twitter" aria-hidden="true"></i></a> <a href="#" class="soc-icon"><i class="fa fa-facebook" aria-hidden="true"></i></a> </p>
                    </div>
                    <div class="col-xl-2">
                        <p class="soc-icons-wr big"> <a href="#" class="soc-icon"><i class="icon ion-android-favorite"></i></a> <a href="#" class="soc-icon"><i class="icon ion-ios-email-outline"></i></a> </p>
                    </div>
                </div>
            </article>
            <article class="model-row">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4 col-xl-2 offset-xl-0">
                        <a href="05_Model_Profile.html" class="img-wr"> <img src="assets/img/demo/stock_06_575x700.jpg" alt=""> </a>
                    </div>
                    <div class="col-xl-6">
                        <div class="row-model-info">
                            <h3 class="title"> <a href="05_Model_Profile.html">Alexis Rane</a> </h3>
                            <div class="model-attr">
                                <p class="attr-item"> <span class="attr-name">Height:</span> <span class="attr-value">185</span> </p>
                                <p class="attr-item"> <span class="attr-name">Bust:</span> <span class="attr-value">85</span> </p>
                                <p class="attr-item"> <span class="attr-name">Waist:</span> <span class="attr-value">60</span> </p>
                                <p class="attr-item"> <span class="attr-name">Age:</span> <span class="attr-value">17</span> </p>
                                <p class="attr-item"> <span class="attr-name">Heir:</span> <span class="attr-value">Red</span> </p>
                                <p class="attr-item"> <span class="attr-name">Eyes:</span> <span class="attr-value">Blue</span> </p>
                            </div>
                            <p class="rating"> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> </p>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <p class="soc-icons-wr"> <a href="#" class="soc-icon"><i class="fa fa-instagram" aria-hidden="true"></i></a> </p>
                    </div>
                    <div class="col-xl-2">
                        <p class="soc-icons-wr big"> <a href="#" class="soc-icon"><i class="icon ion-android-favorite"></i></a> <a href="#" class="soc-icon"><i class="icon ion-ios-email-outline"></i></a> </p>
                    </div>
                </div>
            </article>
        </section>
        <!-- End Popular Models List -->
        <!-- Last Post List -->
        <section class="container last-posts small">
            <h2 class="section-title lines">Journal</h2>
            <div class="row justify-content-center">
                <article class="col-md-6 col-lg-4 last-post-wr">
                    <a href="13_Blog_Open_Widget.html" class="post-item no-decoration">
                        <figure class="post-image" style="background-image: url('assets/img/demo/stock_18_575x350.jpg')">
                            <div class="info">
                                <p class="post-btn">View post</p>
                                <p class="post-publish"> <span class="publish-date">Dec 25, 2017</span> <span class="separator">·</span> <span class="publish-time">1 Minute</span> </p>
                            </div>
                        </figure>
                        <footer class="post-footer">
                            <p class="post-category">Agency</p>
                            <h3 class="post-title">Perfect Fashion Show</h3> 
                        </footer>
                    </a>
                </article>
                <article class="col-md-6 col-lg-4 last-post-wr">
                    <a href="13_Blog_Open_Widget.html" class="post-item no-decoration">
                        <figure class="post-image" style="background-image: url('assets/img/demo/stock_19_575x350.jpg')">
                            <div class="info">
                                <p class="post-btn">View post</p>
                                <p class="post-publish"> <span class="publish-date">Dec 25, 2017</span> <span class="separator">·</span> <span class="publish-time">1 Minute</span> </p>
                            </div>
                        </figure>
                        <footer class="post-footer">
                            <p class="post-category">Ashion</p>
                            <h3 class="post-title">Changing Style WIth Makeup</h3> 
                        </footer>
                    </a>
                </article>
                <article class="col-md-6 col-lg-4 last-post-wr">
                    <a href="13_Blog_Open_Widget.html" class="post-item no-decoration">
                        <figure class="post-image" style="background-image: url('assets/img/demo/stock_34_570_345.jpg')">
                            <div class="info">
                                <p class="post-btn">View post</p>
                                <p class="post-publish"> <span class="publish-date">Dec 25, 2017</span> <span class="separator">·</span> <span class="publish-time">1 Minute</span> </p>
                            </div>
                        </figure>
                        <footer class="post-footer">
                            <p class="post-category">Agency</p>
                            <h3 class="post-title">Perfect Fashion Show</h3> 
                        </footer>
                    </a>
                </article>
            </div>
        </section>
        <!-- End Last Post List -->
        <hr>
        <br>
        <br>
        <div class="contact-entry container" id="contact-form">
            <div class="row">
                <div class="col-lg-9">
                    <h2 align="center"> Contact Us</h2>
                    <div class="post-content">
                        <label></label>
                    </div>
                    
                    {!! Form::open(['action' => 'ContactController@store', 'method' => 'POST', 'class'=>'form', 'id'=>'rate-form']) !!}
                        <p class="form-message error">Message should not be empty</p>
                        <p class="form-message saccess">Message sent saccessfuly</p>
                        <div class="row-input">
                            <div class="item-wr">
                                <input type="text" name="name" placeholder="Your Name" class="name"> 
                            </div>
                            <div class="item-wr">
                                <input type="email" name="email" placeholder="Your Email" class="email"> 
                            </div>
                        </div>
                        <textarea name="message" placeholder="Message"></textarea>
                        <input type="submit" value="Send message" class="btn-classic">
                    </form>
                </div>
                <aside class="col-lg-3 aside">
                    <a href="#" class="wr-ads">
                        <p>Ads</p>
                        <p>260 x 300</p>
                    </a>
                </aside>
            </div>
        </div>

    </main>
@endsection