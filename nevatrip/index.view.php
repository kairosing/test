<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">My Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/">MainPage</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <a href="create.php" class="btn btn-success">Add Post</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">event_id</th>
                    <th scope="col">event_date</th>
                    <th scope="col">ticket_adult_price</th>
                    <th scope="col">ticket_adult_quantity</th>
                    <th scope="col">ticket_kid_price</th>
                    <th scope="col">ticket_kid_quantity</th>
                    <th scope="col">barcode</th>
                    <th scope="col">equal_price</th>
                    <th scope="col">created</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($users as $user):?>
                    <tr>
                        <th scope="row"><?php echo $user['id'];?></th>
                        <td><a href="show.php?id=<?php echo $user['id'];?>"><?php echo $user['event_id'];?></a></td>
                        <td><?php echo $user['event_date'];?></td>
                        <td><?php echo $user['ticket_adult_price'];?></td>
                        <td><?php echo $user['ticket_adult_quantity'];?></td>
                        <td><?php echo $user['ticket_kid_price'];?></td>
                        <td><?php echo $user['ticket_kid_quantity'];?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $user['id'];?>" class="btn btn-warning">Edit</a>
                            <a href="delete.php?id=<?php echo $user['id'];?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>


