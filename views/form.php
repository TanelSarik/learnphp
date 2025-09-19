<?php include __DIR__ . '/partials/header.php'; ?>
    <main class="container">
      <?php if(isset($_Get['name']) && isset($_GET['age'])): ?>
      <H1>hELLO <?=$_Get['name']?>you are<?=$_Get['age']?>years old</H1>
      <?php endif; ?>
      <form action="/answer" method="POST">
        <input name="name" placeholder="Name">
        <input name="age" placeholder="age">
        <input type="submit">
        <button>Saada</button>
      </form>
    </main>
  <?php include __DIR__ . '/partials/footer.php'; ?>
  