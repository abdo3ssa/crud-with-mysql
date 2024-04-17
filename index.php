<?php
session_start();
require_once './functions/helpers.php';
$categories = getAllCategories();


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <h1>Crud with php and mysql</h1>
                <a href="create.php" class="btn btn-info">Create</a>

                <?php if (isset($_SESSION['success'])) : ?>

                    <div class="alert alert-success" role="alert">
                        <?= $_SESSION['success'] ?>
                    </div>

                <?php
                    unset($_SESSION['success']);
                endif;
                ?>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Type</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $category) : ?>
                            <tr>
                                <th scope="row"><?= $category['id'] ?></th>
                                <td><?= $category['name'] ?></td>
                                <td><?php echo $category['type'] == 1 ? 'main' : 'sub'  ?></td>
                                <td>
                                    <form action="./controllers/deleteCategoryController.php" method="post">

                                        <input type="hidden" name="id" value="<?= $category['id'] ?>">

                                        <button type="submit" class="btn btn-danger">Delete</button>

                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>