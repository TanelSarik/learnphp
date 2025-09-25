<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <a href="/users/create" class="btn btn-primary"> New user</a>
    <table class="table table-striped table-hover">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>password</th>
        </thead>
        <tbody>
            <?php foreach ($users as $users): ?>
                <tr>
                    <td><?= $user->id ?></td>
                    <td><?= $users->name?></td>
                    <td><?= $users->email?></td>
                     <td><?= $users->password?></td>
                    <td>
                        <div class="btn-group">
                            <a href="/users/view?id <?= $users->id ?>" class="btn btn-info">View</a>
                            <a href="/users/edit?id <?= $users->id ?>" class="btn btn-warning">Edit</a>
                            <a href="/users/delete?id <?= $users->id ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>