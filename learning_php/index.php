<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Learning PHP</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body>


  <?php
  $a = strtotime("tomorrow");
  $date = date("Y-m-d", $a);
  ?>

  <div class="card m-5 p-5">
    <h2 class="card-title">Form</h2>
    <div class="card-body">
      <form action="backend/form.php" method="POST">
        <input type="text" name="name" id="" class="form-control" placeholder="Your name">
        <br>
        <input type="email" name="email" id="" class="form-control" placeholder="Your email">
        <hr>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>

  <h1 class="text-center">Today's date is <span class="text-primary"><?php echo $date; ?></span></h1>

  <footer>
    <h3 class="text-center">All right reserved @<span class="text-primary"><?php echo date('Y'); ?></span></h3>
  </footer>
  <script>
    console.log("Hello World");
  </script>
</body>

</html>