<?php
include "function.php";
$db = include "database/start.php";

$id = $_GET['id'];
$users = $db->getOne('nevatrip', $id);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="update.php" method="post">
                <input type="hidden" value="<?php echo $users['id'];?>" name="id">
                <div class="form-group">
                    <label for="">event_id</label>
                    <input type="text" name="event_id" class="form-control" value="<?php echo $users['event_id']?>">
                </div>
                <div class="form-group">
                    <label for="">event_date</label>
                    <input type="text" name="event_date" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">ticket_adult_price</label>
                    <input type="text" name="ticket_adult_price" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">ticket_adult_quantity</label>
                    <input type="text" name="ticket_adult_quantity" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">ticket_kid_price</label>
                    <input type="text" name="ticket_kid_price" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">ticket_kid_quantity</label>
                    <input type="text" name="ticket_kid_quantity" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-warning">Edit Post</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
