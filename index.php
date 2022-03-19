<?php include('students.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>

    <div class="container">
        
        <div class="row">
            <div class="col-12">

                <?php foreach($students as $student) { ?>
                <!-- start card -->
                <div class="card mb-5">
                    <div class="card-header">
                        <h1><?php echo $student; ?></h1>
                    </div>
                    <div class="card-body">BODY</div>
                    <div class="card-footer">FOOTER</div>
                </div>
                <!-- end card -->
                <?php } ?>

            </div>
        </div>

    </div>

</body>

</html>