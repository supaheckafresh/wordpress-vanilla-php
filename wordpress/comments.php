<form action="comment.php" method="POST">
    <div class="panel panel-default">
        <div class="panel-heading">We'd Love to Hear From You!</div>
        <div class="panel-body">
                    <textarea name="comment" class="form-control"
                              id="comment" cols="30" rows="10"></textarea>
        </div>
        <div class="panel-footer">
            <button type="submit" class="btn btn-block btn-primary">Send Comment</button>
        </div>
    </div>

    <input type="hidden" name="post_id" value="<?php $post->get_id() ?>">
</form>
