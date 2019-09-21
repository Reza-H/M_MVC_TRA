<?php
  class Post {
      public function __construct()
      {
          $this->db = new Database;
      }

      public function getPosts()
      {
          $this->db->query("SELECT * FROM posts");
          $result = $this->db->resultSet();
          return $result;
      }
  }