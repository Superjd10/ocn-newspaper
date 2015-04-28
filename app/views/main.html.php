    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url() ?>"><?php echo config('blog.title') ?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active">
                      <a href="<?php echo site_url() ?>">Home - Inicio</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url() ?>about">About - Información</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


  <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Newspapers - Periódicos
                    <small>English - Spanish</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
<?php foreach($posts as $p):?>
            <div class="col-md-6">
                <div class="thumbnail">
                    <a href="<?php echo $p->url ?>"><img src="<?php echo $p->image ?>" alt=""></a>
                    <div class="caption">
                        <h3><?php echo $p->title ?></h3>
                        <p><?php echo $p->short ?></p>
                        <p><a href="<?php echo $p->url ?>" class="btn btn-primary" role="button">Read more - Seguir leyendo</a></p>
                    </div>
                </div>
            </div>
<?php endforeach;?>
        </div>
        <!-- /.row -->

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">

                <!-- Pager -->
                <ul class="pager">
<?php if ($has_pagination['next']):?>
                    <li class="previous">
                        <a href="?page=<?php echo $page+1?>"><span aria-hidden="true">&larr;</span>Previous posts - Publicaciones más antiguas</a>
                    </li>
<?php endif;?>
<?php if ($has_pagination['prev']):?>
                    <li class="next">
                        <a href="?page=<?php echo $page-1?>">Recent posts - Publicaciones más recientes <span aria-hidden="true">&rarr;</span></a></a>
                    </li>
<?php endif;?>
                </ul>
            </div>
        </div>

      <hr>
      
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; <a href="http://superjd10.com">Superjd10</a> 2015</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>