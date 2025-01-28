<?php

    include_once 'C:\xampp\htdocs\Sunny-News---Inxhinjeri-e-Webit\backend\SuperClass\ArticleClass.php';
    include_once 'C:\xampp\htdocs\Sunny-News---Inxhinjeri-e-Webit\backend\Mapper\articleMapper.php';

        session_start();

        if (isset($_POST['submitBtn'])) {
            $article=new ArticleLogic($_POST);
            $article->insertData();
        }

        class ArticleLogic{
            private $headline;
            private $content;
            private $journalists;
            private $dateAdded;
            private $timesRead;
            private $category;

                function __construct($formData)
                {   
                    $this->headline=$formData['headline'];
                    $this->content=$formData['content'];
                    $this->journalists=$formData['journalists'];
                    $this->dateAdded=$formData['dateAdded'];
                    $this->timesRead=$formData['timesRead'];
                    $this->category=$formData['category'];
                }

                public function insertData(){
                    $article=new Article($this->headline,$this->content,$this->journalists,$this->dateAdded,$this->timesRead,$this->category);
                    $mapper=new ArticleMapper();
                    $mapper->insertArticle($article);

                    sleep(3);

                    header('Location:../../HTMLfiles/NewsEditor.php?success=articlePosted');
                }
        }