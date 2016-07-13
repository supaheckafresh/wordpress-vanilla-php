<?php


    class Post {

        /**
         * The constructor function for a Post
         *
         * @param integer $id
         * @param string $title
         * @param string $content
         */
        public function __construct($id, $title = '', $content = '')
        {
            $this->id = $id;
            $this->title = $title;
            $this->content = $content;
        }

        public function get_id()
        {
            echo $this->id;
        }


        /**
         * @param string $before
         * @param string $after
         */
        private function the_title($before = '', $after = '')
        {
            echo $before.$this->title.$after;
        }


        /**
         *  Echos the content for this post instance.
         */
        public function the_content()
        {
            echo $this->content;
        }


        /**
         * Echos the title for this post instance.
         *
         * @param string $before
         * @param string $after
         */
        public function get_the_title($before = '', $after = '')
        {
            $this->the_title($before, $after);
        }


        static public function thingyDoer()
        {
            //
        }
    }


    /**
     * @param null $id
     * @return array
     */
    function get_posts($id = null)
    {
        if (!is_null($id)) {
            $query = 'SELECT * FROM posts WHERE id ='.$id;
        } else {
            $query = 'SELECT * FROM posts';
        }
        $posts = DB::query($query);
        return create_posts($posts);
    }

    /**
     * Create array of Post objects from result array of db query.
     *
     * @param $postArray
     * @return mixed
     */
    function create_posts($postArray)
    {
        foreach($postArray as $index => $post) {
            $postArray[$index] = new Post($post['id'], $post['title'], $post['content']);
        }

        return $postArray;
    }


    /**
     * Tells us whether we are in single page or not
     *
     * @return bool
     */
    function is_single_page()
    {
        return isset($_GET['id']);
    }

    function has_posts($posts)
    {
        return count($posts) > 0;
    }

    function get_comments($postId = null)
    {
        $comments = DB::query(sprintf("SELECT * FROM comments WHERE post_id = %d", $postId));
        return $comments;
    }

    function has_comments($comments)
    {
        return count($comments) > 0;
    }

