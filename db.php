<?
$db_url = parse_url(getenv("DATABASE_URL"));

$PDO = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db_url["host"],
    $db_url["port"],
    $db_url["user"],
    $db_url["pass"],
    ltrim($db_url["path"], "/")
));

const DB_DSN="pgsql:host=ec2-54-247-94-127.eu-west-1.compute.amazonaws.com;dbname=de2mknpcc30d5o";
const DB_USER="ywvxfwpsjqweip";
const DB_PASS="9a187c0c365d8f260648f1592bebbf26ca5e153a309a2c849c3e68d18154ba74";
const OPTIONS = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

function getConn() {
    try {
        return new PDO( $PDO, null, null, OPTIONS);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
}

