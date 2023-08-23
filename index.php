<?php
    function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!£$%/*';
        $pass = array(); 
        $alphaLength = strlen($alphabet) - 1; 
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }
    echo randomPassword();
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
                            <input type="number" class="form-control" name="">
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>

                    </form>
                </div>
                            

                    
            </div>
        </div>
    </body>
</html>