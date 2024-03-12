<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <?php include "header.php" ?>
    <form action="" method="post">
        <div class="card mt-4">
            <h5 class="card-header">Sign In</h5>
            <div class="card-body">
                <h5 class="card-title">Welcome to our market "Sumber Berkah"</h5>
        <div class="row">
            <div class="col-3">
                <label class="form-label">Email:</label><br>
                <label class="form-label">Password:</label>
            </div>
            <div class="col-9">
                <input class="form-input" type="email" name="email"><br>
                <input class="form-input" type="password" name="pass">
            </div>
        </div>
        <input type="submit" class="btn btn-primary" onclick="redirect()">
        </div>
        </div>
    </form>
    <?php
        echo '<meta http-equiv="Refresh" content="5; URL=transaksi.php">';
    ?>
    <script>
        function redirect(){
            alert("waittt");
        }
    </script>
    <?php include "footer.php" ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@523distjsbootstrapbundleminjs" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    
</body>
</html>