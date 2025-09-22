<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <from action="/articles/edit?id=<?=$article->id?>" method="POST">
      <div class="mb-3">
  <label for="title" class="form-label">title</label>
  <input value="<?=$article->title?>" type="text" class="form-control" id="title" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="body" class="form-label">content</label>
  <textarea  name="body" class="form-control" id="body" rows="3" placeholder="Wirte something cool...."><?=$article->body?></textarea>
</div>
<button clas="btn  btn-primary">Update</button>

    </from>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>