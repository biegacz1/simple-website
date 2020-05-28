<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Posty</title>
</head>
<body>

<div class="container">
    <div class="mt-5 mb-2">
        <h1>Posty</h1>
        <div>
            <? foreach ($posts as $result) { ?>
            <a class="list-group-item list-group-item-action" href="post/<? echo $result['id'] ?>">
                <? echo $result['title'] ?>
                <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </a>
            <? } ?>
        </div>
    </div>

    <div class="row">
        <a class="btn btn-primary btn-lg active" role="button" aria-pressed="true" href="/create">Dodaj nowy</a>
    </div>
</div>


</body>
</html>
