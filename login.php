<?php include('./partial/header.php'); ?>
<div class="login-form-container">
    <h1>Login to your space</h1>
    <form action="./database/auth.php" method="post">
        <div class="form-group">
            <input name="username" type="text" class="form-control" placeholder="Enter username">
        </div>
        <div class="form-group">
            <input name="password" type="password" class="form-control" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>
<?php include('./partial/footer.php'); ?>

