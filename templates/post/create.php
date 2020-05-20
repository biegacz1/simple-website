<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="card mt-5">
        <form action="/save" method="post">
            <div class="card-header">
                <h2>
                    <input type="text" name="title" class="form-control">
                </h2>
            </div>
            <div class="card-body">
                <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
                <button class="btn btn-success  mt-2">Zapisz</button>
            </div>

            <div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
