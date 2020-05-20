<?
function getConn() {
    try {
        $db_url = parse_url(getenv("DATABASE_URL"));

        const OPTIONS = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        return new PDO("pgsql:" . sprintf(
            "host=%s;port=%s;user=%s;password=%s;dbname=%s",
            $db_url["host"],
            $db_url["port"],
            $db_url["user"],
            $db_url["pass"],
            ltrim($db_url["path"], "/"), null, null, $OPTIONS
        ));
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
}

