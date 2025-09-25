<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <table class="table table-striped table-hover">
      <tbody>
        <tr>
          <th>id</th>
          <td><?= $user->id ?></td>
        </tr>
        <tr>
          <th>Name</th>
          <td><?= $user->name ?></td>
        </tr>
        <tr>
          <th>Email</th>
          <td><?= $user->email ?></td>
        </tr>
        <tr>
          <th>Password</th>
          <td><?= $user->password ?></td>
        </tr>
      </tbody>
    </table>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
