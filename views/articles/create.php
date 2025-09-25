<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <form action="/articles" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
  <label for="title" class="form-label">title</label>
  <input type="text" class="form-control" id="title" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="body" class="form-label">content</label>
  <textarea  name="body" class="form-control" id="body" rows="3" placeholder="Wirte something cool...."></textarea>
</div>
<div class="mb-3">
  <label for="image" class="form-label">Image</label>
  <input name="image" type="file" class="form-control" id="image" >
</div>
<button class="btn  btn-primary">create</button>

    </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>