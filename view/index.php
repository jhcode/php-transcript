<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="<?= site_url(); ?>">
    <title>Elevator - Multipurpose Bootstrap Theme</title>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <!-- Stylesheets -->
    <?= HTML::stylesheet('bootstrap/css/bootstrap.min.css') ?>
    <?= HTML::stylesheet('font-awesome.min.css') ?>
    <?= HTML::stylesheet('animate.css') ?>
    <?= HTML::stylesheet('style.css') ?>

    <!-- Scripts -->
    <?= HTML::script('jquery-2.1.1.min.js'); ?>
    <?= HTML::script('bootstrap/js/bootstrap.min.js'); ?>
    <?= HTML::script('jquery.appear.js'); ?>
    <?= HTML::script('contact_me.js'); ?>
    <?= HTML::script('jqBootstrapValidation.js'); ?>
    <?= HTML::script('modernizr.custom.js'); ?>
    <?= HTML::script('script.js'); ?>

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!-- Start Logo Section -->
<section id="logo-section" class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo text-center">
                    <h1>E-Transcript</h1>
                    <span>Automated Transcript Portal</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Logo Section -->


<!-- Start Main Body Section -->
<div class="mainbody-section text-center">
    <div class="container">
        <div class="row">
            
            <div class="col-md-3">
                
                <div class="menu-item blue">
                    <a href="#feature-modal" data-toggle="modal">
                        <i class="fa fa-magic"></i>
                        <p>Apply for transcript</p>
                    </a>
                </div>
                
                <div class="menu-item green">
                    <a href="#portfolio-modal" data-toggle="modal">
                        <i class="fa fa-file-photo-o"></i>
                        <p>HOD log in</p>
                    </a>
                </div>
                
                <div class="menu-item light-red">
                    <a href="#about-modal" data-toggle="modal">
                        <i class="fa fa-user"></i>
                        <p>About Us</p>
                    </a>
                </div>
                
            </div>
            
            <div class="col-md-6">
                
                <!-- Start Carousel Section -->
                <div class="home-slider">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="padding-bottom: 30px;">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <?= HTML::image('about-03.jpg', '', 'img-responsive'); ?>
                            </div>
                            <div class="item">
                                <?= HTML::image('about-02.jpg', '', 'img-responsive'); ?>
                            </div>
                            <div class="item">
                                <?= HTML::image('about-01.jpg', '', 'img-responsive'); ?>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- Start Carousel Section -->
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="menu-item color responsive">
                            <a href="#registrar-modal" data-toggle="modal">
                                <i class="fa fa-area-chart"></i>
                                <p>Registrar Log in</p>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="menu-item light-orange responsive-2">
                            <a href="#team-modal" data-toggle="modal">
                                <i class="fa fa-users"></i>
                                <p>ABUAD</p>
                            </a>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-md-3">
                
                <div class="menu-item light-red">
                    <a href="#contact-modal" data-toggle="modal">
                        <i class="fa fa-envelope-o"></i>
                        <p>Contact</p>
                    </a>
                </div>
                
                <div class="menu-item color">
                    <a href="#testimonial-modal" data-toggle="modal">
                        <i class="fa fa-comment-o"></i>
                        <p>Testimonial</p>
                    </a>
                </div>
                
                <div class="menu-item blue">
                    <a href="#news-modal" data-toggle="modal">
                        <i class="fa fa-mortar-board"></i>
                        <p>Latest News</p>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- End Main Body Section -->

<!-- Start Copyright Section -->
<div class="copyright text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>Design &amp; Developed by Florish Lawal </a> for ABUAD</div>
            </div>
        </div>
    </div>
</div>
<!-- End Copyright Section -->


<!-- Start Feature Section -->
<div class="section-modal modal fade" id="feature-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>ENTER YOUR STUDENT ID</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form name="sentMessage" method="post" action="<?= url(); ?>/apply" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" name="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" name="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Student ID*" name="campus_id" id="id" required data-validation-required-message="Please enter your Student No">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" name="transApply" class="btn btn-primary">Apply for Transcript</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.row -->
        </div>
        
    </div>
</div>
<!-- End Feature Section -->



<!-- Start Portfolio Section -->
<div class="section-modal modal fade" id="portfolio-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>HOD Log in</h3>
                    <p>Log in to approve transcript request</p>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                    <form name="sentMessage" id="authForm" method="post" action="<?= url(); ?>/auth">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your user name *" id="name" name="user" required data-validation-required-message="Please enter your user name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Your Password *" id="email" name="password" required data-validation-required-message="Please enter your password.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Staff ID*" id="id" name="staff_id" required data-validation-required-message="Please enter your Staff ID">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <input type="hidden" name="source" value="login">
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-primary">Apply for Transcript</button>
                            </div>
                        </div>
                    </form>
                </div>  
            </div><!-- /.row -->
        </div>
<!-- End Portfolio Section -->

<!-- Start Portfolio Section -->
<div class="section-modal modal fade" id="registrar-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>Registrar Log in</h3>
                    <p>Log in to approve transcript request</p>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                    <form name="sentMessage" id="registrarForm" method="post" action="<?= url(); ?>/auth">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your user name *" id="name" name="user" required data-validation-required-message="Please enter your user name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Your Password *" id="email" name="password" required data-validation-required-message="Please enter your password.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Staff ID*" id="id" name="staff_id" required data-validation-required-message="Please enter your Staff ID">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <input type="hidden" name="source" value="login">
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-primary">Apply for Transcript</button>
                            </div>
                        </div>
                    </form>
                </div>  
            </div><!-- /.row -->
        </div>
<!-- End Portfolio Section -->

<!-- Start About Us Section -->
<div class="section-modal modal fade" id="about-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>About Us</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="about-text">
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident. It has roots in a piece of classical Latin literature from 45 BC</p>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <ul>
                                    <li><i class="fa fa-check-square"></i>Sed ut perspiciatis unde omnis iste natus</li>
                                    <li><i class="fa fa-check-square"></i>Nor again is there anyone who loves</li>
                                    <li><i class="fa fa-check-square-o"></i>At vero eos et accusamus et iusto odio</li>
                                    <li><i class="fa fa-check-square-o"></i>Et harum quidem rerum facilis</li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <ul>
                                    <li><i class="fa fa-check-square"></i>Nor again is there anyone who loves</li>
                                    <li><i class="fa fa-check-square"></i>Nor again is there anyone who loves</li>
                                    <li><i class="fa fa-check-square-o"></i>Et harum quidem rerum facilis</li>
                                    <li><i class="fa fa-check-square-o"></i>At vero eos et accusamus et iusto odio</li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <ul>
                                    <li><i class="fa fa-check-square"></i>Nor again is there anyone who loves</li>
                                    <li><i class="fa fa-check-square"></i>Nor again is there anyone who loves</li>
                                    <li><i class="fa fa-check-square-o"></i>Et harum quidem rerum facilis</li>
                                    <li><i class="fa fa-check-square-o"></i>At vero eos et accusamus et iusto odio</li>
                                </ul>
                            </div>
                        </div><!-- /.row -->
                    </div>
                </div>
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="skill-shortcode">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-tab">
                
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li class="active"><a href="#tab-1" role="tab" data-toggle="tab">Our Mission</a></li>
                            <li><a href="#tab-2" role="tab" data-toggle="tab">Our Vission</a></li>
                            <li><a href="#tab-3" role="tab" data-toggle="tab">Company History</a></li>
                        </ul>

                        <div class="tab-content">

                            <div class="tab-pane active" id="tab-1">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                             </div>


                            <div class="tab-pane" id="tab-2">
                                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                            </div>


                            <div class="tab-pane" id="tab-3">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                            </div>

                        </div><!-- /.tab-content -->

                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- End About Us Section -->


<!-- Start Service Section -->
<div class="section-modal modal fade" id="service-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>Our Services</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                </div>
            </div>
            <div class="row">
                
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="feature-2">
                        <div class="media">
                            <i class="fa fa-magic pull-left"></i>
                            <div class="media-body">
                                <h4 class="media-heading">Web Design</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="feature-2">
                        <div class="media">
                            <i class="fa fa-css3 pull-left"></i>
                            <div class="media-body">
                                <h4 class="media-heading">HTML5 &amp; CSS3</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="feature-2">
                        <div class="media">
                            <i class="fa fa-wordpress pull-left"></i>
                            <div class="media-body">
                                <h4 class="media-heading">Wordpress Theme</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="feature-2">
                        <div class="media">
                            <i class="fa fa-plug pull-left"></i>
                            <div class="media-body">
                                <h4 class="media-heading">Wordpress Plugin</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="feature-2">
                        <div class="media">
                            <i class="fa fa-joomla pull-left"></i>
                            <div class="media-body">
                                <h4 class="media-heading">Joomla Template</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="feature-2">
                        <div class="media">
                            <i class="fa fa-cube pull-left"></i>
                            <div class="media-body">
                                <h4 class="media-heading">Joomla Extension</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-4 -->
                
            </div><!-- /.row -->
        </div>
        
        <div class="pricing-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-table">
                            <div class="plan-name">
                                <h3>Free</h3>
                            </div>
                            <div class="plan-price">
                                <div class="price-value">$49<span>.00</span></div>
                                <div class="interval">per month</div>
                            </div>
                            <div class="plan-list">
                                <ul>
                                    <li>40 GB Storage</li>
                                    <li>40GB Transfer</li>
                                    <li>10 Domains</li>
                                    <li>20 Projects</li>
                                    <li>Free installation</li>
                                </ul>
                            </div>
                            <div class="plan-signup">
                                <a href="#" class="btn-system btn-small">Sign Up Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-table">
                            <div class="plan-name">
                                <h3>Standard</h3>
                            </div>
                            <div class="plan-price">
                                <div class="price-value">$49<span>.00</span></div>
                                <div class="interval">per month</div>
                            </div>
                            <div class="plan-list">
                                <ul>
                                    <li>40 GB Storage</li>
                                    <li>40GB Transfer</li>
                                    <li>10 Domains</li>
                                    <li>20 Projects</li>
                                    <li>Free installation</li>
                                </ul>
                            </div>
                            <div class="plan-signup">
                                <a href="#" class="btn-system btn-small">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-table">
                            <div class="plan-name">
                                <h3>Premium</h3>
                            </div>
                            <div class="plan-price">
                                <div class="price-value">$49<span>.00</span></div>
                                <div class="interval">per month</div>
                            </div>
                            <div class="plan-list">
                                <ul>
                                    <li>40 GB Storage</li>
                                    <li>40GB Transfer</li>
                                    <li>10 Domains</li>
                                    <li>20 Projects</li>
                                    <li>Free installation</li>
                                </ul>
                            </div>
                            <div class="plan-signup">
                                <a href="#" class="btn-system btn-small">Sign Up Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-table">
                            <div class="plan-name">
                                <h3>Professional</h3>
                            </div>
                            <div class="plan-price">
                                <div class="price-value">$49<span>.00</span></div>
                                <div class="interval">per month</div>
                            </div>
                            <div class="plan-list">
                                <ul>
                                    <li>40 GB Storage</li>
                                    <li>40GB Transfer</li>
                                    <li>10 Domains</li>
                                    <li>20 Projects</li>
                                    <li>Free installation</li>
                                </ul>
                            </div>
                            <div class="plan-signup">
                                <a href="#" class="btn-system btn-small">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- End Service Section -->


<!-- Start Team Member Section -->
<div class="section-modal modal fade" id="team-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>Our Expert Team</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                </div>
            </div>
            <div class="row">
                
                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <?= HTML::image('team/manage-1.png', '', 'img-responsive'); ?>
                        <div class="team-details">
                            <h4>John Doe</h4>
                            <div class="designation">Senior Web Developer</div>
                            <ul style="text-align: center;">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <?= HTML::image('team/manage-2.png', '', 'img-responsive'); ?>
                        <div class="team-details">
                            <h4>John Doe</h4>
                            <div class="designation">Senior Web Developer</div>
                            <ul style="text-align: center;">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <?= HTML::image('team/manage-3.png', '', 'img-responsive'); ?>
                        <div class="team-details">
                            <h4>John Doe</h4>
                            <div class="designation">Senior Web Developer</div>
                            <ul style="text-align: center;">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <?= HTML::image('team/manage-4.png', '', 'img-responsive'); ?>
                        <div class="team-details">
                            <h4>John Doe</h4>
                            <div class="designation">Senior Web Developer</div>
                            <ul style="text-align: center;">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <?= HTML::image('team/team-1.jpg', '', 'img-responsive'); ?>
                        <div class="team-details">
                            <h4>John Doe</h4>
                            <div class="designation">Senior Web Developer</div>
                            <ul style="text-align: center;">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <?= HTML::image('team/team-2.jpg', '', 'img-responsive'); ?>
                        <div class="team-details">
                            <h4>John Doe</h4>
                            <div class="designation">Senior Web Developer</div>
                            <ul style="text-align: center;">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <?= HTML::image('team/team-3.jpg', '', 'img-responsive'); ?>
                        <div class="team-details">
                            <h4>John Doe</h4>
                            <div class="designation">Senior Web Developer</div>
                            <ul style="text-align: center;">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <?= HTML::image('team/team-4.jpg', '', 'img-responsive'); ?>
                        <div class="team-details">
                            <h4>John Doe</h4>
                            <div class="designation">Senior Web Developer</div>
                            <ul style="text-align: center;">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div><!-- /.row -->
        </div>
        
    </div>
</div>
<!-- End Team Member Section -->


<!-- Start Latest News Section -->
<div class="section-modal modal fade" id="news-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>Exclusive News</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="latest-post">
                        <?= HTML::image('blog-01.jpg', '', 'img-responsive'); ?>
                        <h4><a href="#">Standard Post with Image</a></h4>
                        <div class="post-details">
                            <ul>
                                <li><i class="fa fa-user"></i> Auther : iThemesLab</li>
                                <li><i class="fa fa-calendar"></i> 07 Aug, 2014</li>
                                <li><i class="fa fa-tag"></i> Music</li>
                            </ul>
                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                        
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="latest-post">
                        <?= HTML::image('blog-02.jpg', '', 'img-responsive'); ?>
                        <h4><a href="#">Standard Post with Image</a></h4>
                        <div class="post-details">
                            <ul>
                                <li><i class="fa fa-user"></i> Auther : iThemesLab</li>
                                <li><i class="fa fa-calendar"></i> 07 Aug, 2014</li>
                                <li><i class="fa fa-tag"></i> Music</li>
                            </ul>
                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                        
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="latest-post">
                        <?= HTML::image('blog-03.jpg', '', 'img-responsive'); ?>
                        <h4><a href="#">Standard Post with Image</a></h4>
                        <div class="post-details">
                            <ul>
                                <li><i class="fa fa-user"></i> Auther : iThemesLab</li>
                                <li><i class="fa fa-calendar"></i> 07 Aug, 2014</li>
                                <li><i class="fa fa-tag"></i> Music</li>
                            </ul>
                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                        
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="latest-post">
                        <?= HTML::image('blog-04.jpg', '', 'img-responsive'); ?>
                        <h4><a href="#">Standard Post with Image</a></h4>
                        <div class="post-details">
                            <ul>
                                <li><i class="fa fa-user"></i> Auther : iThemesLab</li>
                                <li><i class="fa fa-calendar"></i> 07 Aug, 2014</li>
                                <li><i class="fa fa-tag"></i> Music</li>
                            </ul>
                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                        
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
</div>
<!-- End Latest News Section -->



<!-- Start Contact Section -->
<div class="section-modal modal fade contact" id="contact-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>Contact With Us</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                </div>
            </div>
            <div class="row">
                
                <div class="col-md-4">
                    <div class="footer-contact-info">
                        <h4>Contact info</h4>
                        <ul>
                            <li><strong>E-mail :</strong> your-email@mail.com</li>
                            <li><strong>Phone :</strong> +8801-6778776</li>
                            <li><strong>Mobile :</strong> +8801-45565378</li>
                            <li><strong>Web :</strong> yourdomain.com</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-social text-center">
                        <ul>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-contact-info">
                        <h4>Working Hours</h4>
                        <ul>
                            <li><strong>Mon-Wed :</strong> 9 am to 5 pm</li>
                            <li><strong>Thurs-Fri :</strong> 12 pm to 10 pm</li>
                            <li><strong>Sat :</strong> 9 am to 3 pm</li>
                            <li><strong>Sunday :</strong> Closed</li>
                        </ul>
                    </div>
                </div>
                
            </div><!--/.row -->
            <div class="row" style="padding-top: 80px;">
                <div class="col-md-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- End Contact Section -->


 <!-- Start Testimonial Section -->
<div class="section-modal modal fade contact" id="testimonial-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>Client's Speech About Us</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                </div>
            </div>
            <div class="row">
                
                <div class="col-md-6">
                    <div class="testimonial">
                        <?= HTML::image('team/manage-1.png', '', 'img-responsive'); ?>
                        <h4>John Doe</h4>
                        <div class="speech">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="testimonial">
                        <?= HTML::image('team/manage-2.png', '', 'img-responsive'); ?>
                        <h4>John Doe</h4>
                        <div class="speech">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="testimonial">
                        <?= HTML::image('team/manage-3.png', '', 'img-responsive'); ?>
                        <h4>John Doe</h4>
                        <div class="speech">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="testimonial">
                        <?= HTML::image('team/manage-4.png', '', 'img-responsive'); ?>
                        <h4>John Doe</h4>
                        <div class="speech">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                </div>
                
            </div><!--/.row -->
            
        </div>
        
    </div>
</div>
<!-- End Testimonial Section -->
</body>

</html>
