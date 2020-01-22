<?php
    // Variables store personal information
    $name = "Thanh Tung Le";
    $email = "let7@nku.edu";
    $major = "Senior, Computer Science major";
    $bio = "I am from Vietnam and I've spent my last four years studying in the U.S.
            <br> It's been a great time studying and working here.
            <br> I like programming and have much fun learning here.";
    $pic = "https://online.jwu.edu/sites/default/files/styles/article_feature_page/public/field/image/BS%20Computer%20Science%20Degree%20A%20Closer%20Look.jpg?itok=ljcfRgAe";
    $reason = "I enrolled in this class because I want to learn more about web programming. There are lots of things <br> we can do with web application nowadays, so I hope I can learn and apply what I learn from this course. <br> By the end of the course, I expect to be able to accomplish some projects and improve my coding skill.";
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>My first PHP page</title>
  </head>
  <body>
    <div class="jumbotron">
        <h2 class="display-4"><?= $name ?></h2>
        <div class="col-5"><small class="text-muted float-right"><?= $major ?></small></div>
        <p class="lead"></p>
        <hr class="my-4">
        <p><?= $bio?></p>
        <img src="<?= $pic; ?>" alt="CS Image" class="img-thumbnail">
        <br>
        <p class=""><?= $reason ?></p>
        <a class="btn btn-primary btn-lg float-bottom" href="mailto:"><?= "send me an email to " . $email ?></a>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>