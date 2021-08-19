<?php

declare(strict_types = 1);
// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//// Use this function when you need to need an overview of these variables
function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    echo('<pre>');
    var_dump($_POST);
    echo('</pre>');
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
    echo '<br>';
}

whatIsHappening();


class ArticleController
{
    private DatabaseManager $databaseManager;

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }


    public function index()
    {
        // Load all required data
        $articles = $this->getArticles();

        // Load the view
        require 'View/articles/index.php';
    }

    // Note: this function can also be used in a repository - the choice is yours
    public function getArticles()
    {
        // TODO: prepare the database connection
        // Note: you might want to use a re-usable databaseManager class - the choice is yours
        // TODO: fetch all articles as $rawArticles (as a simple array)
        $sql = "SELECT * FROM articles";
        $result = $this->databaseManager->connection->query($sql)->fetchAll();
        $rawArticles = $result;

        $articles = [];
        foreach ($rawArticles as $rawArticle) {
            // We are converting an article from a "dumb" array to a much more flexible class

            $articles[] = new Article($rawArticle['title'], $rawArticle['description'], $rawArticle['publish_date']);

        }

        return $articles;
    }

    public function show()
    {
        // TODO: this can be used for a detail page
    }
}