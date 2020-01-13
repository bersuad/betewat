@extends('layouts.app')

@section('content')
<main>
        <!-- Models List -->
        <div class="container-fluid sort-models-wrapper models-map-view columns-3 columns">
            <div class="row">
                <div class="col-lg-8 col-xl-7 content-wrapper">
                    <div class="sort-models-header">
                        <header>
                            <div class="filters"> <a href="#" class="filter-item">Top rated</a> <a href="#" class="filter-item">Most View</a> <a href="#" class="filter-item">Newest</a> </div>
                            <p class="filter-label">Filters<i class="fa fa-filter" aria-hidden="true"></i></p>
                        </header>
                        <form id="filter-models">
                            <div class="filter-models-inner">
                                <div class="sort-column">
                                    <p class="title">Height</p>
                                    <div class="sort-properties">
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="height[]" value="up to 170"> <span>Up to 170 cm</span> </label>
                                        </p>
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="height[]" value="171-180"> <span>171 - 180 cm</span> </label>
                                        </p>
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="height[]" value="181-190"> <span>181 - 190 cm</span> </label>
                                        </p>
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="height[]" value="above 191"> <span>Above 191 cm</span> </label>
                                        </p>
                                    </div>
                                </div>
                                <div class="sort-column">
                                    <p class="title">Waist</p>
                                    <div class="sort-properties">
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="waist[]" value="up to 60"> <span>Up to 60 cm</span> </label>
                                        </p>
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="waist[]" value="61-65"> <span>61 - 65 cm</span> </label>
                                        </p>
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="waist[]" value="66-70"> <span>66 - 70 cm</span> </label>
                                        </p>
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="waist[]" value="above 71"> <span>Above 71 cm</span> </label>
                                        </p>
                                    </div>
                                </div>
                                <div class="sort-column">
                                    <p class="title">Bust</p>
                                    <div class="sort-properties">
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="bust" value="a"> <span>A</span> </label>
                                        </p>
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="bust" value="b"> <span>B</span> </label>
                                        </p>
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="bust" value="c"> <span>C</span> </label>
                                        </p>
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="bust" value="d"> <span>D</span> </label>
                                        </p>
                                    </div>
                                </div>
                                <div class="sort-column">
                                    <p class="title">Age</p>
                                    <div class="sort-properties">
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="age[]" value="under 18"> <span>Under 18 years</span> </label>
                                        </p>
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="age[]" value="18-20"> <span>18 - 20 years old</span> </label>
                                        </p>
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="age[]" value="21-24"> <span>21 - 24 years old</span> </label>
                                        </p>
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="age[]" value="over 25"> <span>25 years and over</span> </label>
                                        </p>
                                    </div>
                                </div>
                                <div class="sort-column">
                                    <p class="title">Hair</p>
                                    <div class="sort-properties">
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="hair" value="blonde"> <span>Blonde</span> </label>
                                        </p>
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="hair" value="brunette"> <span>Brunette</span> </label>
                                        </p>
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="hair" value="brown-haired"> <span>Brown-haired</span> </label>
                                        </p>
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="hair" value="natural"> <span>Natural</span> </label>
                                        </p>
                                    </div>
                                </div>
                                <div class="sort-column">
                                    <p class="title">Eyes</p>
                                    <div class="sort-properties">
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="eyes" value="green"> <span>Green</span> </label>
                                        </p>
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="eyes" value="blue"> <span>Blue</span> </label>
                                        </p>
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="eyes" value="brown"> <span>Brown</span> </label>
                                        </p>
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="eyes" value="other"> <span>Other</span> </label>
                                        </p>
                                    </div>
                                </div>
                                <div class="sort-column">
                                    <p class="title">Rating</p>
                                    <div class="sort-properties rating">
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="rating" value="2"> <span> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </span> </label>
                                        </p>
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="rating" value="3"> <span> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </span> </label>
                                        </p>
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="rating" value="4"> <span> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </span> </label>
                                        </p>
                                        <p class="sort-property-item-wr">
                                            <label class="sort-property-item">
                                                <input type="checkbox" name="rating" value="5"> <span> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> </span> </label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="sort-models">
                        <div class="row justify-content-center">
                            <article class="col-sm-6 col-md-4">
                                <a href="05_Model_Profile.html" class="item-wr">
                                    <div class="model-item" style="background-image: url('assets/img/demo/stock_02_575x700.jpg')">
                                        <div class="model-info">
                                            <p>Height: <span>185</span></p>
                                            <p>Bust: <span>85</span></p>
                                            <p>Waist: <span>60</span></p>
                                            <p>Age: <span>17</span></p>
                                            <p>Hair: <span>Red</span></p>
                                            <p>Eyes: <span>Blue</span></p>
                                            <p class="rating"> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> </p>
                                        </div>
                                    </div>
                                    <h3 class="title">Alexis Rane</h3> </a>
                            </article>
                            <article class="col-sm-6 col-md-4">
                                <a href="05_Model_Profile.html" class="item-wr">
                                    <div class="model-item" style="background-image: url('/storage/img/demo/stock_03_575x700.jpg')">
                                        <div class="model-info">
                                            <p>Height: <span>185</span></p>
                                            <p>Bust: <span>85</span></p>
                                            <p>Waist: <span>60</span></p>
                                            <p>Age: <span>17</span></p>
                                            <p>Hair: <span>Red</span></p>
                                            <p>Eyes: <span>Blue</span></p>
                                            <p class="rating"> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> </p>
                                        </div>
                                    </div>
                                    <h3 class="title">Jena Stain</h3> </a>
                            </article>
                            <article class="col-sm-6 col-md-4">
                                <a href="05_Model_Profile.html" class="item-wr">
                                    <div class="model-item" style="background-image: url('assets/img/demo/stock_04_575x700.jpg')">
                                        <div class="model-info">
                                            <p>Height: <span>185</span></p>
                                            <p>Bust: <span>85</span></p>
                                            <p>Waist: <span>60</span></p>
                                            <p>Age: <span>17</span></p>
                                            <p>Hair: <span>Red</span></p>
                                            <p>Eyes: <span>Blue</span></p>
                                            <p class="rating"> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> </p>
                                        </div>
                                    </div>
                                    <h3 class="title">Bella Ring</h3> </a>
                            </article>
                            <article class="col-sm-6 col-md-4">
                                <a href="05_Model_Profile.html" class="item-wr">
                                    <div class="model-item" style="background-image: url('assets/img/demo/stock_05_575x700.jpg')">
                                        <div class="model-info">
                                            <p>Height: <span>185</span></p>
                                            <p>Bust: <span>85</span></p>
                                            <p>Waist: <span>60</span></p>
                                            <p>Age: <span>17</span></p>
                                            <p>Hair: <span>Red</span></p>
                                            <p>Eyes: <span>Blue</span></p>
                                            <p class="rating"> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> </p>
                                        </div>
                                    </div>
                                    <h3 class="title">Amanda Grace</h3> </a>
                            </article>
                            <article class="col-sm-6 col-md-4">
                                <a href="05_Model_Profile.html" class="item-wr">
                                    <div class="model-item" style="background-image: url('assets/img/demo/stock_06_575x700.jpg')">
                                        <div class="model-info">
                                            <p>Height: <span>185</span></p>
                                            <p>Bust: <span>85</span></p>
                                            <p>Waist: <span>60</span></p>
                                            <p>Age: <span>17</span></p>
                                            <p>Hair: <span>Red</span></p>
                                            <p>Eyes: <span>Blue</span></p>
                                            <p class="rating"> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> </p>
                                        </div>
                                    </div>
                                    <h3 class="title">Julia Strill</h3> </a>
                            </article>
                            <article class="col-sm-6 col-md-4">
                                <a href="05_Model_Profile.html" class="item-wr">
                                    <div class="model-item" style="background-image: url('assets/img/demo/stock_07_575x700.jpg')">
                                        <div class="model-info">
                                            <p>Height: <span>185</span></p>
                                            <p>Bust: <span>85</span></p>
                                            <p>Waist: <span>60</span></p>
                                            <p>Age: <span>17</span></p>
                                            <p>Hair: <span>Red</span></p>
                                            <p>Eyes: <span>Blue</span></p>
                                            <p class="rating"> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> </p>
                                        </div>
                                    </div>
                                    <h3 class="title">Roberta Green</h3> </a>
                            </article>
                            <article class="col-sm-6 col-md-4">
                                <a href="05_Model_Profile.html" class="item-wr">
                                    <div class="model-item" style="background-image: url('assets/img/demo/stock_09_575x700.jpg')">
                                        <div class="model-info">
                                            <p>Height: <span>185</span></p>
                                            <p>Bust: <span>85</span></p>
                                            <p>Waist: <span>60</span></p>
                                            <p>Age: <span>17</span></p>
                                            <p>Hair: <span>Red</span></p>
                                            <p>Eyes: <span>Blue</span></p>
                                            <p class="rating"> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> </p>
                                        </div>
                                    </div>
                                    <h3 class="title">Polli Aston</h3> </a>
                            </article>
                            <article class="col-sm-6 col-md-4">
                                <a href="05_Model_Profile.html" class="item-wr">
                                    <div class="model-item" style="background-image: url('assets/img/demo/stock_08_575x700.jpg')">
                                        <div class="model-info">
                                            <p>Height: <span>185</span></p>
                                            <p>Bust: <span>85</span></p>
                                            <p>Waist: <span>60</span></p>
                                            <p>Age: <span>17</span></p>
                                            <p>Hair: <span>Red</span></p>
                                            <p>Eyes: <span>Blue</span></p>
                                            <p class="rating"> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> </p>
                                        </div>
                                    </div>
                                    <h3 class="title">Natali Spencer</h3> </a>
                            </article>
                            <article class="col-sm-6 col-md-4">
                                <a href="05_Model_Profile.html" class="item-wr">
                                    <div class="model-item" style="background-image: url('assets/img/demo/stock_15_575x500.jpg')">
                                        <div class="model-info">
                                            <p>Height: <span>185</span></p>
                                            <p>Bust: <span>85</span></p>
                                            <p>Waist: <span>60</span></p>
                                            <p>Age: <span>17</span></p>
                                            <p>Hair: <span>Red</span></p>
                                            <p>Eyes: <span>Blue</span></p>
                                            <p class="rating"> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> <i class="fa fa-star active" aria-hidden="true"></i> </p>
                                        </div>
                                    </div>
                                    <h3 class="title">Selena Trade</h3> </a>
                            </article>
                        </div>
                        <nav class="pagination"> <a href="#" class="page-numbers current">1</a> <a href="#" class="page-numbers">2</a> <a href="#" class="page-numbers">3</a> <a href="#" class="page-numbers next">»</a> </nav>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-5 map-wrapper">
                    <div id="map" class="models-load-map"></div>
                </div>
            </div>
        </div>
        <!-- End Models List -->
    </main>

@endsection