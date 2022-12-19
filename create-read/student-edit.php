<?php
session_start();
require 'php/dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Aanpassen</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Aanpassen recept
                            <a href="index.php" class="btn btn-danger float-end" style="background: lightcoral;">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        
                        
                        if(isset($_GET['id']))
                        {
                            $card_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM cards WHERE id='$card_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $card = mysqli_fetch_array($query_run);
                                var_dump($card_id);
                                ?>
                                <form action="php/code.php" method="POST">
                                    <input type="hidden" name="card_id" value="<?= $card['id']; ?>">

                                    <div class="mb-3">
                                        <label>Recept</label>
                                        <input type="text" name="name" value="<?=$card['name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Uitleg</label>
                                        <input type="text" name="uitleg" value="<?=$card['uitleg'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Foto</label>
                                        <input type="text" name="foto" value="<?=$card['foto'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>IngredientenPage</label>
                                        <input type="text" name="button" value="<?=$card['button'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_card" class="btn btn-primary" style="background: lightgreen; border-color:green;">
                                            Aanpassen
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>