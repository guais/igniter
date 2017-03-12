<!DOCTYPE html>
<html lang="en">

<head>
   <?php $this->load->view('includes/header');  ?>
</head>

<body>
    <div id="all">
        <header>
            <?php $this->load->view('includes/topo');  ?>
            <?php $this->load->view('includes/navbar');  ?>
        </header>

        <!-- *** LOGIN MODAL ***
_________________________________________________________ -->

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email_modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password_modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

        <!-- *** LOGIN MODAL END *** -->

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Blog listing: Big</h1>
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a>
                            </li>
                            <li>Blog listing: Big</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">
                <div class="row">
                    <!-- *** LEFT COLUMN ***
			 _________________________________________________________ -->

                    <div class="col-md-9" id="blog-listing-big">

                        <section class="post">
                            <h2><a href="post.htmls">Fashion now</a></h2>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="author-category">By <a href="#">John Snow</a> in <a href="blog.html">Webdesign</a>
                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="date-comments">
                                        <a href="blog-post.html"><i class="fa fa-calendar-o"></i> June 20, 2013</a>
                                        <a href="blog-post.html"><i class="fa fa-comment-o"></i> 8 Comments</a>
                                    </p>
                                </div>
                            </div>
                            <div class="image">
                                <a href="blog-post.html">
                                    <img src="<?php echo base_url('assets/img/blog2.jpg') ?>" class="img-responsive" alt="Example blog post alt">
                                </a>
                            </div>
                            <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                                ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                            <p class="read-more"><a href="blog-post.html" class="btn btn-template-main">Continue reading</a>
                            </p>
                        </section>


                        <section class="post">
                            <h2><a href="blog-post.html">Who is who - example blog post</a></h2>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="author-category">By <a href="#">John Snow</a> in <a href="blog.html">Webdesign</a>
                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="date-comments">
                                        <a href="blog-post.html"><i class="fa fa-calendar-o"></i> June 20, 2013</a>
                                        <a href="blog-post.html"><i class="fa fa-comment-o"></i> 8 Comments</a>
                                    </p>
                                </div>
                            </div>
                            <div class="video">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/upZJpGrppJA"></iframe>
                                </div>

                            </div>
                            <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                                ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                            <p class="read-more"><a href="blog-post.html" class="btn btn-template-main">Continue reading</a>
                            </p>
                        </section>

                        <ul class="pager">
                            <li class="previous"><a href="#">&larr; Older</a>
                            </li>
                            <li class="next disabled"><a href="#">Newer &rarr;</a>
                            </li>
                        </ul>


                    </div>
                    <!-- /.col-md-9 -->

                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
			 _________________________________________________________ -->

                   

                        

                        <?php $this->load->view('includes/sidebar');  ?>

                  
                    <!-- /.col-md-3 -->

                    <!-- *** RIGHT COLUMN END *** -->

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** GET IT ***
_________________________________________________________ -->

        <div id="get-it">
            <div class="container">
                <div class="col-md-8 col-sm-12">
                    <h3>Do you want cool website like this one?</h3>
                </div>
                <div class="col-md-4 col-sm-12">
                    <a href="#" class="btn btn-template-transparent-primary">Buy this template now</a>
                </div>
            </div>
        </div>


        <!-- *** GET IT END *** -->


        <!-- *** FOOTER ***
_________________________________________________________ -->

    <?php $this->load->view('includes/footer');  ?>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
_________________________________________________________ -->

       
        <!-- /#copyright -->

        <!-- *** COPYRIGHT END *** -->




    </div>
    <!-- /#all -->


    <!-- #### JAVASCRIPT FILES ### -->

    

    



</body>

</html>