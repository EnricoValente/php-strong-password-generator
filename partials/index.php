
<?php
include __DIR__.'/functions.php';
if (isset($_GET['lenght'])) {
    
    $passLenght = intval($_GET['lenght']);
   
    randomPassword($passLenght);
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Password generator</title>
        <!-- BS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row text-center justify-content-center">
                <h1>
                    Password Generator
                </h1>
                <div class="col-3">
                    
                    <form action="" method="GET">
                        <div class="mb-3">
                            <label for="Password lenght" class="form-label">Password lenght</label>
                            <input type="number" id="Password lenght" class="form-control" name="lenght">
                        </div>
                        <button type="submit" class="btn btn-primary">Generate password</button>

                    </form>
                </div>

                <div>
                    <?php echo randomPassword($passLenght);?>
                </div>
            </div>
        </div>
                            

          
        
                    
    </body>
    </html>
    
    