<?php 
    get_header();
?>

<section class="headerColorProducts">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-5 marginLogo">
                <?php 
                $logo = get_field('header_logo');
                if( !empty($logo) ): ?>
                <img class="img-fluid" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="container headerMargin">
        <div class="row justify-content-center">
            <div class="col-4-lg col-4-md col-4-sm mt-4">
                <?php
                    $title = get_post_meta( get_the_ID(), 'header_title', true);
                    echo "<h1 class='text-center'>".$title."</h1>";
                 ?>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php 
                $header_icon = get_field('header_icon');
                if( !empty($header_icon) ): ?>
                    <img class="img-fluid iconHeader" src="<?php echo $header_icon['url']; ?>"
                    alt="<?php echo $header_icon['alt']; ?>" />
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="my-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-4 text-center">
                <?php
                    $section1_title = get_post_meta( get_the_ID(), 'section1_title', true);
                    echo "<h2>".$section1_title."</h2>";
                    $section1_subtitle = get_post_meta( get_the_ID(), 'section1_subtitle', true);
                    echo "<h3>".$section1_text_area."</h3>";
                 ?>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-4 text-center">
                <?php
                    $section1_text_area = get_post_meta( get_the_ID(), 'section1_text_area', true);
                    echo "<p>".$section1_text_area."</p>";
                 ?>
            </div>
        </div>
    </div>
</section>
<!--end section-->

<section class="mb-3">
    <div>
        <?php
            $section1_img = get_field('section1_img');
            if( !empty($section1_img) ): ?>
        <img class="img-fluid" src="<?php echo $section1_img['url']; ?>" alt="<?php echo $section1_img['alt']; ?>" />
        <?php endif; ?>
    </div>

</section>

<section class="my-4">
    <div class="container">
        <div class="row justify-content-center menuProducts">
            <div class="col-lg-8 col-md-8 col-sm-4">
                <ul class="nav nav-pills my-2" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab"
                            aria-controls="pills-home" aria-selected="true">all</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-water-tab" data-toggle="pill" href="#pills-water" role="tab"
                            aria-controls="pills-home" aria-selected="true">water base</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-cones-tab" data-toggle="pill" href="#pills-cones" role="tab"
                            aria-controls="pills-home" aria-selected="true">cones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-popsicles-tab" data-toggle="pill" href="#pills-popsicles"
                            role="tab" aria-controls="pills-home" aria-selected="true">popsicles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-specials-tab" data-toggle="pill" href="#pills-specials" role="tab"
                            aria-controls="pills-home" aria-selected="true">specials</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--end nav-pills-->

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                <div class="row justify-content-center mt-4">
                    <div class="card-deck col-lg-8 col-md-8 col-sm-4">
                        <div class="card">
                            <?php
                                $card01_img = get_field('card01_img');
                            if( !empty($card01_img) ): ?>
                            <div class="view overlay">
                                <img class="card-img-top img-fluid rounded-circle"
                                    src="<?php echo $card01_img['url']; ?>" alt="<?php echo $card01_img['alt']; ?>" />
                                <a data-toggle="modal" data-target="#card01_img">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                                <?php endif; ?>
                            </div>
                            <!--text-->
                            <div class="card-body text-center">
                                <?php
                                    $card01_title = get_post_meta( get_the_ID(), 'card01_title', true);
                                    echo "<h5 class='card-title'>".$card01_title."</h5>";
                                    $card01_description = get_post_meta( get_the_ID(), 'card01_description', true);
                                    echo "<p class='card-text'>".$card01_description."</p>";
                                 ?>
                            </div>
                        </div>
                        <div class="card">
                            <?php
                            $card02_img = get_field('card02_img');
                            if( !empty($card02_img) ): ?>
                            <div class="view overlay">
                                <img class="card-img-top img-fluid rounded-circle"
                                    src="<?php echo $card02_img['url']; ?>" alt="<?php echo $card02_img['alt']; ?>" />
                                <a data-toggle="modal" data-target="#card02_img">
                                    <div class="mask rgba-white-slight"></div>
                                </a>                                
                            </div> 
                            <?php endif; ?>                           
                            <!--text-->
                            <div class="card-body text-center">
                                <?php
                                    $card02_title = get_post_meta( get_the_ID(), 'card02_title', true);
                                    echo "<h5 class='card-title'>".$card02_title."</h5>";
                                    $card02_description = get_post_meta( get_the_ID(), 'card02_description', true);
                                    echo "<p class='card-text'>".$card02_description."</p>";
                                 ?>
                            </div>
                        </div>
                    </div>
                    <!--end card-deck-->
                </div>
                <!--end row-->
                <!--part 2-->
                <div class="row justify-content-center mt-3">
                    <div class="card-deck col-lg-8 col-md-8 col-sm-4">
                        <div class="card">
                            <?php
                                $card03_img = get_field('card03_img');
                                if( !empty($card03_img) ): ?>
                                <div class="view overlay">
                                    <img class="card-img-top img-fluid rounded-circle"
                                        src="<?php echo $card03_img['url']; ?>" alt="<?php echo $card03_img['alt']; ?>" />
                                    <a data-toggle="modal" data-target="#card03_img">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>                                
                                </div> 
                            <?php endif; ?>
                            <!--text-->
                            <div class="card-body text-center">
                                <?php
                                    $card03_title = get_post_meta( get_the_ID(), 'card03_title', true);
                                    echo "<h5 class='card-title'>".$card03_title."</h5>";
                                    $card03_description = get_post_meta( get_the_ID(), 'card03_description', true);
                                    echo "<p class='card-text'>".$card03_description."</p>";
                                 ?>
                            </div>
                        </div>
                        <!--end-->
                        <div class="card">
                            <?php
                            $card04_img = get_field('card04_img');
                            if( !empty($card04_img) ): ?>
                            <div class="view overlay">
                                <img class="card-img-top img-fluid rounded-circle"
                                    src="<?php echo $card04_img['url']; ?>" alt="<?php echo $card04_img['alt']; ?>" />
                                <a data-toggle="modal" data-target="#card04_img">
                                    <div class="mask rgba-white-slight"></div>
                                </a>                                
                            </div> 
                            <?php endif; ?>                           
                            <!--text-->
                            <div class="card-body text-center">
                                <?php
                                    $card04_title = get_post_meta( get_the_ID(), 'card04_title', true);
                                    echo "<h5 class='card-title'>".$card04_title."</h5>";
                                    $card04_description = get_post_meta( get_the_ID(), 'card04_description', true);
                                    echo "<p class='card-text'>".$card04_description."</p>";
                                 ?>
                            </div>
                        </div>
                    </div>
                    <!--end card-deck-->
                </div>
                <!--end row-->

                <!--part 3-->
                <div class="row justify-content-center mt-3">
                    <div class="card-deck col-lg-8 col-md-8 col-sm-4">
                        <div class="card">
                            <?php
                            $card05_img = get_field('card05_img');
                            if( !empty($card05_img) ): ?>
                            <div class="view overlay">
                                <img class="card-img-top img-fluid rounded-circle"
                                    src="<?php echo $card05_img['url']; ?>" alt="<?php echo $card05_img['alt']; ?>" />
                                <a data-toggle="modal" data-target="#card05_img">
                                    <div class="mask rgba-white-slight"></div>
                                </a>                                
                            </div> 
                            <?php endif; ?>                           
                            <!--text-->
                            <div class="card-body text-center">
                                <?php
                                    $card05_title = get_post_meta( get_the_ID(), 'card05_title', true);
                                    echo "<h5 class='card-title'>".$card05_title."</h5>";
                                    $card05_description = get_post_meta( get_the_ID(), 'card05_description', true);
                                    echo "<p class='card-text'>".$card05_description."</p>";
                                 ?>
                            </div>
                        </div>
                        <div class="card">
                            <?php
                            $card06_img = get_field('card06_img');
                            if( !empty($card06_img) ): ?>
                            <div class="view overlay">
                                <img class="card-img-top img-fluid rounded-circle"
                                    src="<?php echo $card06_img['url']; ?>" alt="<?php echo $card06_img['alt']; ?>" />
                                <a data-toggle="modal" data-target="#card06_img">
                                    <div class="mask rgba-white-slight"></div>
                                </a>                                
                            </div> 
                            <?php endif; ?>                           
                            <!--text-->
                            <div class="card-body text-center">
                                <?php
                                    $card06_title = get_post_meta( get_the_ID(), 'card06_title', true);
                                    echo "<h5 class='card-title'>".$card06_title."</h5>";
                                    $card06_description = get_post_meta( get_the_ID(), 'card06_description', true);
                                    echo "<p class='card-text'>".$card06_description."</p>";
                                 ?>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end card-deck-->
                </div>
                <!--end row-->

                <!--part 4-->
                <div class="row justify-content-center mt-3">
                    <div class="card-deck col-lg-8 col-md-8 col-sm-4">
                        <div class="card">
                            <?php
                            $card07_img = get_field('card07_img');
                            if( !empty($card07_img) ): ?>
                            <div class="view overlay">
                                <img class="card-img-top img-fluid rounded-circle"
                                    src="<?php echo $card07_img['url']; ?>" alt="<?php echo $card07_img['alt']; ?>" />
                                <a data-toggle="modal" data-target="#card07_img">
                                    <div class="mask rgba-white-slight"></div>
                                </a>                                
                            </div> 
                            <?php endif; ?>                           
                            <!--text-->
                            <div class="card-body text-center">
                                <?php
                                    $card07_title = get_post_meta( get_the_ID(), 'card07_title', true);
                                    echo "<h5 class='card-title'>".$card07_title."</h5>";
                                    $card07_description = get_post_meta( get_the_ID(), 'card07_description', true);
                                    echo "<p class='card-text'>".$card07_description."</p>";
                                 ?>
                            </div>
                        </div>
                        <div class="card">
                            <?php
                            $card08_img = get_field('card08_img');
                            if( !empty($card08_img) ): ?>
                            <div class="view overlay">
                                <img class="card-img-top img-fluid rounded-circle"
                                    src="<?php echo $card08_img['url']; ?>" alt="<?php echo $card08_img['alt']; ?>" />
                                <a data-toggle="modal" data-target="#card08_img">
                                    <div class="mask rgba-white-slight"></div>
                                </a>                                
                            </div> 
                            <?php endif; ?>                           
                            <!--text-->
                            <div class="card-body text-center">
                                <?php
                                    $card08_title = get_post_meta( get_the_ID(), 'card08_title', true);
                                    echo "<h5 class='card-title'>".$card08_title."</h5>";
                                    $card08_description = get_post_meta( get_the_ID(), 'card08_description', true);
                                    echo "<p class='card-text'>".$card08_description."</p>";
                                 ?>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end card-deck-->
                </div>
                <!--end row-->
            </div>
            <!--end tab-all-->

            <!--tab-water-->
            <div class="tab-pane fade" id="pills-water" role="tabpanel" aria-labelledby="pills-water-tab">
                <div class="row justify-content-center mt-3">
                    <div class="card-deck col-lg-8 col-md-8 col-sm-4">
                        <div class="card">
                            <?php
                                $card05_img = get_field('card05_img');
                                if( !empty($card05_img) ): ?>
                                <div class="view overlay">
                                    <img class="card-img-top img-fluid rounded-circle"
                                        src="<?php echo $card05_img['url']; ?>" alt="<?php echo $card05_img['alt']; ?>" />
                                    <a data-toggle="modal" data-target="#card05_img">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>                                
                                </div> 
                            <?php endif; ?>                           
                            <!--text-->
                            <div class="card-body text-center">
                                <?php
                                    $card05_title = get_post_meta( get_the_ID(), 'card05_title', true);
                                    echo "<h5 class='card-title'>".$card05_title."</h5>";
                                    $card05_description = get_post_meta( get_the_ID(), 'card05_description', true);
                                    echo "<p class='card-text'>".$card05_description."</p>";
                                 ?>
                            </div>
                        </div>
                        <div class="card">
                            <?php
                                $card06_img = get_field('card06_img');
                                if( !empty($card06_img) ): ?>
                                <div class="view overlay">
                                    <img class="card-img-top img-fluid rounded-circle"
                                        src="<?php echo $card06_img['url']; ?>" alt="<?php echo $card06_img['alt']; ?>" />
                                    <a data-toggle="modal" data-target="#card06_img">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>                                
                                </div> 
                            <?php endif; ?>
                            <!--text-->
                            <div class="card-body text-center">
                                <?php
                                    $card06_title = get_post_meta( get_the_ID(), 'card06_title', true);
                                    echo "<h5 class='card-title'>".$card06_title."</h5>";
                                    $card06_description = get_post_meta( get_the_ID(), 'card06_description', true);
                                    echo "<p class='card-text'>".$card06_description."</p>";
                                 ?>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end card-deck-->
                </div>
                <!--end row-->
            </div>
            <!--end tab-water-->

            <div class="tab-pane fade" id="pills-cones" role="tabpanel" aria-labelledby="pills-cones-tab">
                <div class="row justify-content-center mt-3">
                    <div class="card-deck col-lg-8 col-md-8 col-sm-4">
                        <div class="card">
                            <?php
                                $card04_img = get_field('card04_img');
                                if( !empty($card04_img) ): ?>
                                <div class="view overlay">
                                    <img class="card-img-top img-fluid rounded-circle"
                                        src="<?php echo $card04_img['url']; ?>" alt="<?php echo $card04_img['alt']; ?>" />
                                    <a data-toggle="modal" data-target="#card04_img">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>                                
                                </div> 
                            <?php endif; ?>
                            <!--text-->
                            <div class="card-body text-center">
                                <?php
                                    $card04_title = get_post_meta( get_the_ID(), 'card04_title', true);
                                    echo "<h5 class='card-title'>".$card04_title."</h5>";
                                    $card04_description = get_post_meta( get_the_ID(), 'card04_description', true);
                                    echo "<p class='card-text'>".$card04_description."</p>";
                                 ?>
                            </div>
                        </div>
                        <div class="card">
                            <?php
                                $card06_img = get_field('card06_img');
                                if( !empty($card06_img) ): ?>
                                <div class="view overlay">
                                    <img class="card-img-top img-fluid rounded-circle"
                                        src="<?php echo $card06_img['url']; ?>" alt="<?php echo $card06_img['alt']; ?>" />
                                    <a data-toggle="modal" data-target="#card06_img">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>                                
                                </div> 
                            <?php endif; ?>
                            <!--text-->
                            <div class="card-body text-center">
                                <?php
                                    $card06_title = get_post_meta( get_the_ID(), 'card06_title', true);
                                    echo "<h5 class='card-title'>".$card06_title."</h5>";
                                    $card06_description = get_post_meta( get_the_ID(), 'card06_description', true);
                                    echo "<p class='card-text'>".$card06_description."</p>";
                                 ?>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end card-deck-->
                </div>
                <!--end row-->
            </div>
            <!--end tab-cones-->

            <div class="tab-pane fade" id="pills-popsicles" role="tabpanel" aria-labelledby="pills-popsicles-tab">
                <div class="row justify-content-center mt-3">
                    <div class="card-deck col-lg-4 col-md-4 col-sm-4">
                        <div class="card">
                            <?php
                                $card05_img = get_field('card05_img');
                                if( !empty($card05_img) ): ?>
                                <div class="view overlay">
                                    <img class="card-img-top img-fluid rounded-circle"
                                        src="<?php echo $card05_img['url']; ?>" alt="<?php echo $card05_img['alt']; ?>" />
                                    <a data-toggle="modal" data-target="#card05_img">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>                                
                                </div> 
                            <?php endif; ?>
                            <!--text-->
                            <div class="card-body text-center">
                                <?php
                                    $card05_title = get_post_meta( get_the_ID(), 'card05_title', true);
                                    echo "<h5 class='card-title'>".$card05_title."</h5>";
                                    $card05_description = get_post_meta( get_the_ID(), 'card05_description', true);
                                    echo "<p class='card-text'>".$card05_description."</p>";
                                 ?>
                            </div>
                        </div>
                    </div>
                    <!--end card-deck-->
                </div>
                <!--end row-->
            </div>
            <!--end tab-popsicles-->

            <div class="tab-pane fade" id="pills-specials" role="tabpanel" aria-labelledby="pills-specials-tab">
                <div class="row justify-content-center mt-4">
                    <div class="card-deck col-lg-8 col-md-8 col-sm-4">
                        <div class="card">
                            <?php
                                $card01_img = get_field('card01_img');
                                if( !empty($card01_img) ): ?>
                                <div class="view overlay">
                                    <img class="card-img-top img-fluid rounded-circle"
                                        src="<?php echo $card01_img['url']; ?>" alt="<?php echo $card01_img['alt']; ?>" />
                                    <a data-toggle="modal" data-target="#card01_img">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>                                
                                </div> 
                            <?php endif; ?>
                            <!--text-->
                            <div class="card-body text-center">
                                <?php
                                    $card01_title = get_post_meta( get_the_ID(), 'card01_title', true);
                                    echo "<h5 class='card-title'>".$card01_title."</h5>";
                                    $card01_description = get_post_meta( get_the_ID(), 'card01_description', true);
                                    echo "<p class='card-text'>".$card01_description."</p>";
                                 ?>
                            </div>
                        </div>
                        <div class="card">
                            <?php
                                $card02_img = get_field('card02_img');
                                if( !empty($card02_img) ): ?>
                                <div class="view overlay">
                                    <img class="card-img-top img-fluid rounded-circle"
                                        src="<?php echo $card02_img['url']; ?>" alt="<?php echo $card02_img['alt']; ?>" />
                                    <a data-toggle="modal" data-target="#card02_img">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>                                
                                </div> 
                            <?php endif; ?>
                            <!--text-->
                            <div class="card-body text-center">
                                <?php
                                    $card02_title = get_post_meta( get_the_ID(), 'card02_title', true);
                                    echo "<h5 class='card-title'>".$card02_title."</h5>";
                                    $card02_description = get_post_meta( get_the_ID(), 'card02_description', true);
                                    echo "<p class='card-text'>".$card02_description."</p>";
                                 ?>
                            </div>
                        </div>
                    </div>
                    <!--end card-deck-->
                </div>
                <!--end row-->

                <div class="row justify-content-center mt-3">
                    <div class="card-deck col-lg-8 col-md-8 col-sm-4">
                        <div class="card">
                            <?php
                                $card07_img = get_field('card07_img');
                                if( !empty($card07_img) ): ?>
                                <div class="view overlay">
                                    <img class="card-img-top img-fluid rounded-circle"
                                        src="<?php echo $card07_img['url']; ?>" alt="<?php echo $card07_img['alt']; ?>" />
                                    <a data-toggle="modal" data-target="#card07_img">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>                                
                                </div> 
                            <?php endif; ?>
                            <!--text-->
                            <div class="card-body text-center">
                                <?php
                                    $card07_title = get_post_meta( get_the_ID(), 'card07_title', true);
                                    echo "<h5 class='card-title'>".$card07_title."</h5>";
                                    $card07_description = get_post_meta( get_the_ID(), 'card07_description', true);
                                    echo "<p class='card-text'>".$card07_description."</p>";
                                 ?>
                            </div>
                        </div>
                        <div class="card">
                            <?php
                                $card08_img = get_field('card08_img');
                                if( !empty($card08_img) ): ?>
                                <div class="view overlay">
                                    <img class="card-img-top img-fluid rounded-circle"
                                        src="<?php echo $card08_img['url']; ?>" alt="<?php echo $card08_img['alt']; ?>" />
                                    <a data-toggle="modal" data-target="#card08_img">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>                                
                                </div> 
                            <?php endif; ?>
                            <!--text-->
                            <div class="card-body text-center">
                                <?php
                                    $card08_title = get_post_meta( get_the_ID(), 'card08_title', true);
                                    echo "<h5 class='card-title'>".$card08_title."</h5>";
                                    $card08_description = get_post_meta( get_the_ID(), 'card08_description', true);
                                    echo "<p class='card-text'>".$card08_description."</p>";
                                 ?>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end card-deck-->
                </div>
                <!--end row-->

                <div class="row justify-content-center mt-3">
                    <div class="card-deck col-lg-4 col-md-4 col-sm-4">
                        <div class="card">
                            <?php
                                $card03_img = get_field('card03_img');
                                if( !empty($card03_img) ): ?>
                            <img class="card-img-top img-fluid rounded-circle" src="<?php echo $card03_img['url']; ?>"
                                alt="<?php echo $card03_img['alt']; ?>" />
                            <?php endif; ?>
                            <div class="card-body text-center">
                                <?php
                                    $card03_title = get_post_meta( get_the_ID(), 'card03_title', true);
                                    echo "<h5 class='card-title'>".$card03_title."</h5>";
                                    $card03_description = get_post_meta( get_the_ID(), 'card03_description', true);
                                    echo "<p class='card-text'>".$card03_description."</p>";
                                 ?>
                            </div>
                        </div>
                        <!--end-->
                    </div>
                    <!--end card-deck-->
                </div>
                <!--end row-->

            </div>
            <!--end tab-specials-->

        </div>
        <!--end tab-content-->

        <!-- Modal card01_img -->
        <div class="modal fade" id="card01_img" tabindex="-1" role="dialog" aria-labelledby="card01_imgLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-header bg-white">
                    <h5><?php the_field('card01_title')?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-content">
                    <div class="modal-body">
                        <?php
                                            $card01_img = get_field('card01_img');
                                            if( !empty($card01_img) ): ?>
                        <img class="card-img-top img-fluid" src="<?php echo $card01_img['url']; ?>"
                            alt="<?php echo $card01_img['alt']; ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal card02_img -->
        <div class="modal fade" id="card02_img" tabindex="-1" role="dialog" aria-labelledby="card02_imgLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-header bg-white">
                    <h5><?php the_field('card02_title')?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-content">
                    <div class="modal-body">
                        <?php
                            $card02_img = get_field('card02_img');
                            if( !empty($card02_img) ): ?>
                            <img class="card-img-top img-fluid" src="<?php echo $card02_img['url']; ?>"
                            alt="<?php echo $card02_img['alt']; ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal card03_img -->
        <div class="modal fade" id="card03_img" tabindex="-1" role="dialog" aria-labelledby="card03_imgLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-header bg-white">
                    <h5><?php the_field('card03_title')?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-content">
                    <div class="modal-body">
                        <?php
                            $card03_img = get_field('card03_img');
                            if( !empty($card03_img) ): ?>
                            <img class="card-img-top img-fluid" src="<?php echo $card03_img['url']; ?>"
                            alt="<?php echo $card03_img['alt']; ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal card04_img -->
        <div class="modal fade" id="card04_img" tabindex="-1" role="dialog" aria-labelledby="card04_imgLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-header bg-white">
                    <h5><?php the_field('card04_title')?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-content">
                    <div class="modal-body">
                        <?php
                            $card04_img = get_field('card04_img');
                            if( !empty($card04_img) ): ?>
                            <img class="card-img-top img-fluid" src="<?php echo $card04_img['url']; ?>"
                            alt="<?php echo $card04_img['alt']; ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal card05_img -->
        <div class="modal fade" id="card05_img" tabindex="-1" role="dialog" aria-labelledby="card05_imgLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-header bg-white">
                    <h5><?php the_field('card05_title')?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-content">
                    <div class="modal-body">
                        <?php
                            $card05_img = get_field('card05_img');
                            if( !empty($card05_img) ): ?>
                            <img class="card-img-top img-fluid" src="<?php echo $card05_img['url']; ?>"
                            alt="<?php echo $card05_img['alt']; ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal card06_img -->
        <div class="modal fade" id="card06_img" tabindex="-1" role="dialog" aria-labelledby="card06_imgLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-header bg-white">
                    <h5><?php the_field('card06_title')?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-content">
                    <div class="modal-body">
                        <?php
                            $card06_img = get_field('card06_img');
                            if( !empty($card06_img) ): ?>
                            <img class="card-img-top img-fluid" src="<?php echo $card06_img['url']; ?>"
                            alt="<?php echo $card06_img['alt']; ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal card07_img -->
        <div class="modal fade" id="card07_img" tabindex="-1" role="dialog" aria-labelledby="card07_imgLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-header bg-white">
                    <h5><?php the_field('card07_title')?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-content">
                    <div class="modal-body">
                        <?php
                            $card07_img = get_field('card07_img');
                            if( !empty($card07_img) ): ?>
                            <img class="card-img-top img-fluid" src="<?php echo $card07_img['url']; ?>"
                            alt="<?php echo $card07_img['alt']; ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal card08_img -->
        <div class="modal fade" id="card08_img" tabindex="-1" role="dialog" aria-labelledby="card08_imgLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-header bg-white">
                    <h5><?php the_field('card08_title')?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-content">
                    <div class="modal-body">
                        <?php
                            $card08_img = get_field('card08_img');
                            if( !empty($card08_img) ): ?>
                            <img class="card-img-top img-fluid" src="<?php echo $card08_img['url']; ?>"
                            alt="<?php echo $card08_img['alt']; ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php 
    get_footer();
?>