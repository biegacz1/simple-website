<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Posty</title>
</head>
<body>

<div class="container">
    <div class="mt-5">
        <h1>Posty</h1>
        <ul>
            <? foreach ($posts as $result) { ?>
                <li><a href="post/<? echo $result['id'] ?>"><? echo $result['title'] ?></a></li>
            <? } ?>
        </ul>
    </div>
    <div class="row">
        <a href="/create">Dodaj nowy</a>
    </div>
</div>


</body>
</html>
