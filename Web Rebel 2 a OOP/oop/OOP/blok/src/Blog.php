<?php

class Blog 
{
     protected $db;  
     
     public function __construct(DB $db)
     {
         $this->db = $db;
     }
     
    //8
     public function getPosts($id)
     {                          //10
         return $this->db->getALL("SELECT * FROM posts ");  // volame query z db class 
     }

     //4
     public function getPost($id)
     {                      //10
         return $this->db->getOne("SELECT * FROM posts WHERE id = :id", [ 'id' => $id]);  // volame query z db class 
     }
        
}