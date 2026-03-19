<?php include 'views/header.php'; ?>
<div class="container">
    <div class="banner">
        <h2><?= $_SESSION['firstname']." ".$_SESSION['lastname']; ?></h2>
        <div class="profile_pic">
            
        </div>
      </div>
        <div class="post-container">
            <form class="post-form" action="models/add_post.php" method="POST">
                <textarea id="post_area" name="post_area" placeholder="What's on your mind?" ></textarea>
                <input type="submit" id="post-btn" value="POST"/>
            </form>
            
            <div class="user_posts">
                <?php 
                    include 'models/load_user_posts.php';
                ?>
            </div>
    </div>
</div>
<?php 
include 'views/footer.php'; 


