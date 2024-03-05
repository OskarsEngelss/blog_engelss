<?php
class Database {
    private $pdo;

    //Savienojamies ar datu bāzi tikai vienreiz
    public function __construct($config) {
        $connection_string = "mysql:" . http_build_query($config, "", ";");
        // $connection_string = "mysql:host=" . $config["host"] . ";dbname=" . $config["dbname"] . ";user=" . $config["user"] . ";password=" . $config["password"] . ";charset=" . $config["charset"] . "";
        $this->pdo = new PDO($connection_string);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
    //Iegūst datus
    public function execute($query_string, $params) {
        $query = $this->pdo->prepare($query_string);
        $query->execute($params);

        return $query;
    }
}
?>