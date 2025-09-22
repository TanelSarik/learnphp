<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <from action="/articles" method="POST">
      <div class="mb-3">
  <label for="title" class="form-label">title</label>
  <input type="text" class="form-control" id="title" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="body" class="form-label">content</label>
  <textarea  name="body" class="form-control" id="body" rows="3" placeholder="Wirte something cool...."></textarea>
</div>
<button clas="btn  btn-primary">create</button>

    </from>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>