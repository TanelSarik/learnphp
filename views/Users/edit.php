<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <form action="/users/edit?id=<?= $user->id ?>" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">id</label>
            <input 
                type="email" 
                name="email" 
                class="form-control" 
                id="email" 
                value="<?= htmlspecialchars($user->id) ?>" 
                placeholder="Enter email"
                required
            >
        </div>
    
    <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input 
                type="text" 
                name="name" 
                class="form-control" 
                id="name" 
                value="<?= htmlspecialchars($user->name) ?>" 
                placeholder="Enter name"
                required
            >
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input 
                type="email" 
                name="email" 
                class="form-control" 
                id="email" 
                value="<?= htmlspecialchars($user->email) ?>" 
                placeholder="Enter email"
                required
            >
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password (leave blank to keep current)</label>
            <input 
                type="password" 
                name="password" 
                class="form-control" 
                id="password" 
                placeholder="New password"
            >
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
