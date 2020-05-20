<?

const DB_DSN="mysql:host=db;dbname=app";
const DB_USER="root";
const DB_PASS="root";
const OPTIONS = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

function getConn() {
    try {
        return new PDO( DB_DSN, DB_USER, DB_PASS, OPTIONS);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
}

