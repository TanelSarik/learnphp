<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <form action="/login" method="POST">
      <div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input name="email" type="email" class="form-control" id="email" placeholder="email">
</div>
<div class="mb-3">
  <label for="password" class="form-label">password</label>
  <input name="password" type="password" class="form-control" id="password" placeholder="password">

<button class="btn  btn-primary">Login</button>

</form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>