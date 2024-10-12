<link rel="stylesheet" href="assets/styles.css">
<?php
include 'components/header.php';



$featured_query = "SELECT * FROM posts WHERE is_featured=1";
$featured_result = mysqli_query($connection, $featured_query);


if (!$featured_result) {
    die('Query Failed: ' . mysqli_error($connection)); 
}
?>


<?php if(mysqli_num_rows($featured_result) > 0) : ?>
    
    <section class="featured">
    <h2 class="featured_heading" 
    style="text-align: center; font-size: 2.5em; font-weight: bold; color: #ff6347; 
           text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); 
           margin-bottom: 20px; 
           padding: 10px; 
           border-bottom: 2px solid #ff6347;">
    Featured Posts
</h2>

        <div class="container_featured_container">
            
            <?php while($featured = mysqli_fetch_assoc($featured_result)) : ?>
                <div class="post_thumbnail">
                    <img src="./posts/thumbs/<?= $featured['thumbnail'] ?>"> 
                </div>
                <div class="post_info">
                    <?php
                    
                    $category_id = $featured['category_id'];
                    $category_query = "SELECT * FROM categories WHERE id=$category_id";
                    $category_result = mysqli_query($connection, $category_query);
                    $category = mysqli_fetch_assoc($category_result);
                    ?>
                    <a href="<?= ROOT_URL ?>/category_posts.php?id=<?= $category['id'] ?>" class="category_button"><?= $category['title'] ?></a>
                    <h2 class="post_title"><a href="<?= ROOT_URL ?>/posts/post.php?id=<?= $featured['id'] ?>"><?= $featured['title'] ?></a></h2>
                    <p class="post_body"><?= substr($featured['body'], 0, 200) ?>...</p>
                    <div class="post_author">
                        <?php
                        
                        $author_id = $featured['author_id'];
                        $author_query = "SELECT * FROM users WHERE id=$author_id";
                        $author_result = mysqli_query($connection, $author_query);
                        $author = mysqli_fetch_assoc($author_result);
                        ?>
                        <div class="post_author-avatar">
                        <img src="<?= ROOT_URL ?>/user/propic/smiling-young-man-illustration_1308-173524.jpg" alt="Avatar" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; border: 2px solid #ddd;">


                        </div>
                        <div class="post_author-info">
                            <h4>By: <?= $author['username'] ?></h4>
                            <small><?= date("M d, Y - H:i", strtotime($featured['date_time'])) ?></small>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>
<?php
include 'components/footer.php';
?>
