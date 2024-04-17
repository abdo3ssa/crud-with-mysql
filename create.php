<?php session_start() ?>
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
        <div class="row m-5">
            <div class="col-6 mx-auto border rounded p-2">
                <h1>Create Category</h1>
                <a href="index.php" class="btn btn-success">Back Home</a>

                <?php if (isset($_SESSION['success'])) : ?>

                    <div class="alert alert-success" role="alert">
                        <?= $_SESSION['success'] ?>
                    </div>

                <?php
                    unset($_SESSION['success']);
                    endif;
                ?>

                <form method="POST" action="./controllers/createCategoryController.php">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">

                        <select class="form-select" name="type" aria-label="Default select example">
                            <option selected>Select Category Type</option>
                            <option value="1">Main Category</option>
                            <option value="2">Sub Category</option>
                        </select>

                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>