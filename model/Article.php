<?php
class Article {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getArticlesByCategory($categorie_id) {
        switch ($categorie_id) {
            case 1:
                $sql = "SELECT * FROM article WHERE id IN (1, 3)";
                break;
            case 2:
                $sql = "SELECT * FROM article WHERE id IN (2, 4)";
                break;
            case 3:
                $sql = "SELECT * FROM article WHERE id = 5";
                break;
            default:
                $sql = $categorie_id > 0 ? "SELECT * FROM article WHERE 1 = 0" : "SELECT * FROM article";
        }
        $result = $this->conn->query($sql);
        return $result;
    }
}
?>
