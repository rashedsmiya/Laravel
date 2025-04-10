<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Update Profile</title>
</head>

<body>
    <section class="users py-5 my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div>
                        <ul>
                            <?php
                            $errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
                            foreach ($errors as $error): ?>
                                <li><span class="text-danger"><?= $error ?></span></li>
                            <?php endforeach;
                            unset($_SESSION['errors']);
                            ?>
                        </ul>
                        <?php if (isset($_SESSION['success'])): ?>
                            <div class="alert alert-success"><?= $_SESSION['success'] ?></div>
                        <?php endif;
                        if (isset($_SESSION['error'])): ?>
                            <div class="alert alert-danger"><?= $_SESSION['error'] ?></div>
                        <?php endif;
                        unset($_SESSION['success']);
                        unset($_SESSION['error']);
                        ?>

                    </div>
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h2>Profile Update</h2>
                            <a href="/dashboard" class="btn btn-sm btn-primary">Back</a>
                        </div>
                        <div class="card-body">
                            <form action="/user/profile/update" method="post" enctype="multipart/form-data">
                                <div class="form-group mb-3">
                                    <label>Name</label>
                                    <input type="text" value="<?= $user['name'] ?>" name="name" placeholder="Enter name" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control" accept="image/*">
                                </div>

                                <?php if (file_exists('public/' . $user['image'])): ?>
                                    <img src="<?= 'public/' . $user['image'] ?>" alt="<?= $user['name'] ?>" style="width: 150px; aspect-ratio: 16/9; object-fit: cover">
                                <?php else: ?>
                                    <p>Image not found.</p>
                                <?php endif; ?>

                                <div class="form-group mb-3">
                                    <label>Email</label>
                                    <input type="email" value="<?= $user['email'] ?>" name="email" placeholder="Enter email" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label>Designation</label>
                                    <input type="text" value="<?= $user['designation'] ?>" name="designation" placeholder="Enter designation" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label>Bio</label>
                                    <textarea name="bio" class="form-control" placeholder="Enter Bio" row="8"><?= $user['bio']  ?></textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label>Present Address</label>
                                    <textarea name="present_address" class="form-control" placeholder="Enter pressent address" row="8"><?= $user['present_address']  ?></textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label>Permanent Address</label>
                                    <textarea name="permanent_address" class="form-control" placeholder="Enter permanent address" row="8"><?= $user['permanent_address']  ?></textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <input type="submit" name="submit" value="Update" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>