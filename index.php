<?php include 'includes/header.php'; ?>

<!--testing file premissions -->

<body>

    <div class="container-fluid">

        <div class="row"><!--logo header-->
            <div class="col-lg-12">
                <div class="page-header">
                    <img class="img-responsive" src="images/blog.png" alt="this is a picture">
                </div>

            </div>


        </div><!--logo header-->

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <!-- navbar brand here -->
                    <!-- change colors and fonts -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Blog</a></li>

                    </ul>
                </div>

            </div>
        </nav><!-- meun -->
        <div class="well well">
            <section id="portfolio">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-4 portfolio-item text-center">
                            <div class="hovereffect">
                                <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">

                                <h1>Projects</h1>
                                <p>Lorem ipsum .....</p> 

                                <div class="overlay">
                                    <h2>Hover effect 9</h2>
                                    <a class="info" href="#">link here</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 portfolio-item text-center">
                            <div class="hovereffect">
                                <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">


                                <h1>About Me</h1>
                                <p>Lorem ipsum .....</p> 
                                <div class="overlay">
                                    
                                    
                                    <h2>Hover effect 9</h2>
                                    <a class="info" href="#">link here</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 portfolio-item text-center">
                            <div class="hovereffect">
                                <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">


                                <h1>Blog</h1>
                                <p>Lorem ipsum .....</p> 
                                <div class="overlay">
                                    <h2>Hover effect 9</h2>
                                    <a class="info" href="#">link here</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section><!--portfollio-->
        </div>




    </div><!--container div -->








    <?php include 'includes/footer.php'; ?>
    <!-- footer.php-->