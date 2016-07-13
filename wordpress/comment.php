
<?php

include "db.php";

if (!isset($_POST['post_id'])) {
    die('You can only comment on an existing post.');
}

$sql = sprintf("INSERT INTO comments (post_id, comment) VALUES ('%d', '%s')", $_POST['post_id'], $_POST['comment']);

DB::insert($sql);