<?php
include APP_PATH."/api/rapidapi.php";

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title><?= $site_name ?></title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   </head>
   <body>

     <div class="container">

       <div class="row">
         <div class="col">
           <h1>News Search API Integration</h1>
         </div>
       </div>

       <form action="" method="get">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Type in your search</label>
          <input type="text" class="form-control" name="query" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" name="search" class="btn btn-primary">Search</button>
      </form><br><br><br>

      <h2>Your Search Result...</h2>
      <div class="list-group">
        <?php if(isset($news)): ?>
          <?php foreach ($news as $post): ?>
            <a href="<?= $post['url'] ?>" target="_blank" class="list-group-item list-group-item-action" aria-current="true">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><?= $post['title'] ?></h5>
                <!-- <small></small> -->
              </div>
              <p class="mb-1"><?= shortenText($post['body']); ?></p>
              <small><?= $post['datePublished'] ?></small>
            </a>
          <?php endforeach; ?>
        <?php endif ?>
        <!-- <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">List group item heading</h5>
            <small class="text-muted">3 days ago</small>
          </div>
          <p class="mb-1">Some placeholder content in a paragraph.</p>
          <small class="text-muted">And some muted small print.</small>
        </a> -->

      </div>

     </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   </body>
 </html>
