<?php
$title = 'us news';
  $posts = [
    [ 'title' => 'us news 1', 'author' => 'Pets', 'published'=>'11s.09.2025', 'body ' => 'some world news 1 body'],
    [ 'title' => 'us news 2', 'author' => 'anns', 'published'=>'12.09.2025', 'body ' => 'some world news 2 body'],
    [ 'title' => 'us news 3', 'author' => 'maalis', 'published'=>'10.09.2025', 'body ' => 'some world news 3 body'],
    [ 'title' => 'us news 4', 'author' => 'mats', 'published'=>'13.09.2025', 'body ' => 'some world news 4 body'],
  ];
?>


<?php include 'partials/header.php'; ?>
    <main class="container">
     
      <div class="row g-5">
        <div class="col-md-8">
          <?php include 'partials/posts.php'; ?>
        </div>
        <div class="col-md-4">
         <?php include 'partials/sidebar.php'; ?>
        </div>
      </div>
    </main>
  <?php include 'partials/footer.php'; ?>
  