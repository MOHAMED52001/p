<?php require_once '../inc/header.php'; ?>
<?php require_once '../../core/connection.php'; ?>
<?php require_once '../../handlers/categories/edit.php'; ?>
<?php session_start() ?>

<h1 class="text-center my-5">Edit Category</h1>

<a href="index.php" class="btn btn-primary my-4">Back</a>

<?php require_once '../inc/messages.php'; ?>


<form method="POST" action="../../handlers/categories/edit.php">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3 form-group">
                <label for="name" class="form-label">Category Name</label>
                <input type="text" name="name" class="form-control" id="name" value="<?php echo $_GET['name'] ?>">
            </div>
            <div class="mb-3 form-group">
                <label for="description" class="form-label">Category Description</label>
                <input type="text" name="description" class="form-control" id="description" value="<?php echo $_GET['description'] ?>">
                <input type="text" name="id" value="<?= $_GET['id'] ?>" hidden>
            </div>
            <button class="btn btn-primary" name="submit">Edit</button>
        </div>
    </div>

</form>


<?php require_once '../inc/footer.php'; ?>