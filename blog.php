<?php
include './koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" href="#">Subscribe</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="#">Lipstick</a>
          <a class="p-2 text-muted" href="#">Foundation.</a>
          <a class="p-2 text-muted" href="#">Eyeliner</a>
          <a class="p-2 text-muted" href="#">Hair Care</a>
          <a class="p-2 text-muted" href="#">Skin Care</a>
          <a class="p-2 text-muted" href="#">Health Treatment</a>
        </nav>
      </div>

	  			    <?php
                      $news= $koneksi->query("SELECT * FROM news_blog ");
                     while ($n = $news->fetch_array()) {
                  ?>
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
		 <h1 class="display-4 font-italic"><?php echo $n[1]; ?>
		 </h1>
          <p class="lead my-3"><?php echo $n[2]; ?></p>
		  		          <?php
                        }
                   ?>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>

      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">CARA MEMILIH WARNA RAMBUT SESUAI DENGAN WARNA KULITMU</strong>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">Gonta-ganti warna rambut memang gak ada salahnya dan hal ini merupakan sesuatu yang wajar dan paling sering dilakukan oleh para wanita</p>
              <a href="#">Continue reading</a>
            </div>
				
				<img src='img/beautynews-02.jpg'>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">ROM&ND CREAMY LIPSTICK REVIEW AND SWATCHES</strong>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">
				Beberapa belakangan ini, aku super duper bosan dengan yang namanya lipstick matte.</p>
              <a href="#">Continue reading</a>
            </div>
            <img src='img/beautynews-03.jpg'>
          </div>
        </div>
      </div>
    </div>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-12 blog-main">
          <div class="blog-post">
            <h2 class="blog-post-title">Sejarah Maybelline</h2>
            <p class="blog-post-meta">January 1, 2014 by <a href="#">Andrew</a></p>
            <hr>
            <p>Maybelline adalah produk kosmetik internasional yang didirikan pada tahun 1915 oleh T.L. Williams di New York, Amerika Serikat. Nama Maybelline merupakan gabungan dari Maybel (nama saudara perempuan T.L. Williams yang menjadi inspirasi produknya) dan vaseline.</p>
            <blockquote>
              <p>Perusahaan ini diambil alih oleh <b>L'Oreal Group sejak tahun 1996</b>, setelah sebelumnya sempat diambil alih oleh Plough Inc. pada tahun 1967 (yang kemudian berubah nama menjadi Schering-Plough Corporation pada tahun 1971) dan grup investor Wasserstein Perella & Co pada tahun 1990.</p>
            </blockquote>
          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

      </div><!-- /.row -->

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="jquery-slim.min.js"><\/script>')</script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
