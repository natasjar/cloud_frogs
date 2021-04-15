<?php 
    include 'scripts/db.php'; //connection to the database 

    $sql = "SELECT * FROM posts ORDER BY date_posted DESC"; //get all the posts posted
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Adopt a frog</title>
        <?php include 'scripts/head.php'; ?>
    </head>

    <body>
        <div class="fh">
            <?php include 'scripts/nav.php'; ?> <!-- the nav bar -->

            <div class="banner jumbotron text-center" style="margin-bottom:0"> <!--sticks to the top -->
                <h1>Welcome to the pond</h1>
                <p class="scribble">Post and search pictures of beautiful frogs. Toads also welcome</p> 
            </div>

            <!--bucket image!!! -->
                <img class="img-fluid" src="images/fwogBop.gif" alt="" height="100" width="100">            
        
            <div class="padding"></div> <!-- div of just padding -->

            <div class="container text-center scribble">
                <h1>All Posts</h1>
            </div>

            <?php include 'scripts/posts.php'; ?>

            <div class="push"></div>
        </div>

        <?php include 'scripts/footer.php'; ?>

    </body>
</html>

