<?php 
    include_once './model/db.php';

    class Posts extends DB {
        public function getListPost($params)
        {
            $sql = NULL;
    
            if ($params['keyword']) {
                $search = "%{$params['keyword']}%";
                $sql = $mysqli->prepare("SELECT * FROM posts WHERE post_name LIKE ? OR post_description LIKE ?");
                $sql->bind_param("s", $search);
                // $sql = 'SELECT * FROM posts WHERE post_name LIKE "%'.$params['keyword'].'%"'. ' OR post_description LIKE %"'.$params['keyword'].'%"';
            } else {
                $sql = 'SELECT * FROM posts';
            }
            $posts = $this->select($sql);
    
            return $posts;
        }
    }