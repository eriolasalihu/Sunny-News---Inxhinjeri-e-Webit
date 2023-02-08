<?php

require_once 'dbh.class.php';

class ArticleMapper extends Dbh
{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getArticleByHeadline($headline)
    {
        $this->query = "select * from articles where headline=:headline";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":headline", $headline);
        $statement->execute();
        return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getArticleByID($id)
    {
        $this->query = "select * from articles where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $id);
        $statement->execute();
        return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getAllArticles()
    {
        $this->query = "select * from articles";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    }


    public function deleteArticle($id)
    {
        $this->query = "delete from articles where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }

    public function incrementByOne($id)
    {
        $this->query = "UPDATE articles SET timesRead=timesRead+1
                WHERE id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }

    public function showTop4MostRead()
    {
        $this->query = "SELECT headline,content,journalists,dateAdded FROM articles
                order by timesRead DESC LIMIT 4";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMostReadArticle()
    {
        $this->query = "SELECT l.headline,count(*) AS MeTeLexuarit FROM articles l
                group by l.headline ASC";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getArticlesByCategory($category){
        $this->query = "select * from articles where category=:category";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":category", $category);
        $statement->execute();
        return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    }


    public function insertArticle(\Article $article)
    {
        $query = "INSERT INTO articles (headline,content,journalists,dateAdded,timesRead,category)
                VALUES(:headline,:content,:journalists,:dateAdded,:timesRead,:category)";
        $statement = $this->conn->prepare($query);

        $headline = $article->getHeadline();
        $content = $article->getContent();
        $journalists = $article->getJournalist();
        $dateAdded = $article->getDateAdded();
        $timesRead = $article->getTimesRead();
        $category = $article->getCategory();

        $statement->bindParam(":headline", $headline);
        $statement->bindParam(":content", $content);
        $statement->bindParam(":journalists", $journalists);
        $statement->bindParam(":dateAdded", $dateAdded);
        $statement->bindParam(":timesRead", $timesRead);
        $statement->bindParam(":category", $category);
        $statement->execute();
    }


    public function editArticle(\Article $article, $id)
    {
        $query = "UPDATE articles SET headline=:headline,content=:content,journalists=:journalists
                    ,dateAdded=:dateAdded,timesRead=:timesRead, category=:category
                    WHERE id=:id";
        var_dump($article);
        $statement = $this->conn->prepare($query);
        $headline = $article->getHeadline();
        $content = $article->getContent();
        $journalists = $article->getJournalist();
        $dateAdded = $article->getDateAdded();
        $timesRead = $article->getTimesRead();
        $category = $article->getCategory();


        $statement->bindParam(":headline", $headline);
        $statement->bindParam(":content", $content);
        $statement->bindParam(":journalists", $journalists);
        $statement->bindParam(":dateAdded", $dateAdded);
        $statement->bindParam(":timesRead", $timesRead);
        $statement->bindParam(":category", $category);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }
}
