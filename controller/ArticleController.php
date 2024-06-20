<?php
include __DIR__ . '/../config/configuration.php';
include __DIR__ . '/../model/Article.php';

class ArticleController {
    private $model;

    public function __construct($db) {
        $this->model = new Article($db);
    }

    public function index() {
        $categorie_id = isset($_GET['categorie']) ? intval($_GET['categorie']) : 0;
        $articles = $this->model->getArticlesByCategory($categorie_id);
        include '../view/index.php';
    }
}

// Initialiser le contrôleur et appeler l'action par défaut
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$controller = new ArticleController($conn);
$controller->index();
?>
