<?

require 'db.php';

$route = $_SERVER['REQUEST_URI'];

if (strpos($route, '/index') !== false ) {
    index();
} else if (strpos($route, '/post') !== false ) {
    $id = basename($route);
    post($id);
} else if (strpos($route, '/create') !== false ) {
    create();
} else if (strpos($route, '/save') !== false ) {
    save();
} else if (strpos($route, '/edit') !== false ) {
    $id = basename($route);
    edit($id);
} else if (strpos($route, '/update') !== false ) {
    $id = basename($route);
    update($id);
} else if (strpos($route, '/delete') !== false ) {
    $id = basename($route);
    delete($id);
} else {
    header("Location: /index");
    die();
}


function index()
{
    $conn = getConn();
    $stmt = $conn->query('SELECT * FROM post');
    $posts = $stmt->fetchAll();

    include 'templates/post/index.php';
    return;
}

function post($id)
{
    $conn = getConn();
    $stmt = $conn->prepare('SELECT * FROM post WHERE id = :id');
    $stmt->execute([
        'id' => $id
    ]);
    $post = $stmt->fetch();

    include 'templates/post/post.php';
    return;
}

function create()
{
    include 'templates/post/create.php';
    return;
}

function edit($id)
{
    $conn = getConn();
    $stmt = $conn->prepare('SELECT * FROM post WHERE id = :id');
    $stmt->execute([
        'id' => $id
    ]);
    $post = $stmt->fetch();
    include 'templates/post/edit.php';
    return;
}


function save()
{
    $title = $_POST['title'];
    $content = $_POST['content'];
    $status = 'published';

    $conn = getConn();
    $stmt = $conn->prepare('INSERT INTO post(title,content,status) VALUES(:title,:content,:status)');
    $stmt->execute([
        'title' => $title,
        'content' =>  $content,
        'status' =>  $status
    ]);

    header("location: /index");
    exit();
}

function update($id)
{
    $title = $_POST['title'];
    $content = $_POST['content'];

    $conn = getConn();
    $stmt = $conn->prepare('UPDATE post SET title = :title, content = :content WHERE id = :id');
    $stmt->execute([
        'title' => $title,
        'content' =>  $content,
        'id' => $id
    ]);

    header("location: /post/".$id);
    exit();
}

function delete($id)
{
    $conn = getConn();
    $stmt = $conn->prepare('DELETE FROM post WHERE id = :id');
    $stmt->execute([ 'id' => $id ]
    );

    header("location: /index");
    exit();
}
