<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
    <link rel="stylesheet"
          href="../../style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>
                <? echo $post["title"] ?>
                <a href="/edit/<? echo $post["id"] ?>"
                   class="btn btn-primary float-right">Edytuj</a>
            </h2>
        </div>
        <div class="card-body">
            <p><? echo $post["content"] ?></p>
            <small class="blockquote-footer"><? echo $post["created_at"] ?></small>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h2></h2>
            <p></p>
            <small></small>
        </div>
    </div>
</div>
</body>
</html>