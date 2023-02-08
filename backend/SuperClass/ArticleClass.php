<?php

    class Article{
        

        private $headline;
        private $content;
        private $journalist;
        private $dateAdded;
        private $timesRead;
        private $category;

            public function __construct($headline,$content,$journalist,$dateAdded,$timesRead,$category)
            {
                $this->headline=$headline;
                $this->content=$content;
                $this->journalist=$journalist;
                $this->dateAdded=$dateAdded;
                $this->timesRead=$timesRead;
                $this->category=$category;
            }

        public function getHeadline(){
            return $this->headline;
        }

        public function getContent(){
            return $this->content;
        }

        public function getJournalist(){
            return $this->journalist;
        }

        public function getDateAdded(){
            return $this->dateAdded;
        }

        public function getTimesRead(){
            return $this->timesRead;
        }

        public function getCategory(){
            return $this->category;
        }

    }