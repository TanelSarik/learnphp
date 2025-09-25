<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <form action="/users" method="POST" enctype="multipart/form-data">
     <div class="mb-3">
  <label for="id" class="form-label">id</label>
  <input name="id" type="text" class="form-control" id="name" placeholder="your id">
</div>
    
    <div class="mb-3">
  <label for="name" class="form-label">name</label>
  <input name="name" type="text" class="form-control" id="name" placeholder="your name">
</div>
<div class="mb-3">
  <label for="email" class="form-label">email</label>
  <textarea  name="email" class="form-control" id="email" rows="1" placeholder="some@email.com"></textarea>
</div>
<div class="mb-3">
  <label for="password" class="form-label">password</label>
  <input name="password" type="text" class="form-control" id="password" >
</div>
<button class="btn  btn-primary">create</button>

    </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>