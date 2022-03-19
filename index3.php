<?php include('students3.php'); ?>
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

                <?php 
                    for ($row = 0; $row < 3; $row++) { 
                        
                ?>
                <!-- start card -->
                <div class="card mt-5">

                    <?php for ($col = 0; $col < 3; $col++) { ?>

                    <div class="card-body">
                        <?php echo $students[$row][$col]; ?>
                    </div>
                    
                    <?php } ?>

                </div>
                <!-- end card -->
                <?php } ?>

            </div>
        </div>

    </div>

</body>

</html>