<?php
require_once 'inc/functions.php'; // Include necessary functions

if (isset($_POST['category'])) {
    $category = $_POST['category'];
    $posts = $category ? showPostsByCategory($category) : showAllPost('0,30');

    foreach ($posts as $post) { ?>
        <div class="column">
            <div class="post-card">
                <a href="single.php?id=<?php echo $post['id']; ?>">
                    <div class="cover-img" style="background-image: url(./backend/assets/img/<?php echo $post['img']; ?>);">
                    </div>
                </a>
                <div class="txt-cont">
                    <a href="single.php?id=<?php echo $post['id']; ?>">
                        <p class="category"><?php echo $post['category']; ?></p>
                        <h6 class="title"><?php echo $post['title']; ?></h6>
                        <p class="desc"><?php echo substr($post['content'], 0, 50); ?></p>
                        <p class="author">AUTHOR: <span><?php echo $post['author']; ?></span>
                            <br><?php echo $post['date_issue']; ?>
                        </p>
                    </a>
                </div>
            </div>
        </div>
    <?php }
}
?>