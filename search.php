<?php 
    include 'scripts/db.php'; //connection to the database

    $tag = $_GET['search'];
    $tag = htmlspecialchars($tag); // changes characters used in html to their equivalents, for example: < to &gt;
    $tag = mysqli_real_escape_string($conn, $tag); // makes sure nobody uses SQL injection
        
    $sql = "SELECT * FROM posts WHERE (description  LIKE '%".$tag."%') OR (title LIKE '%".$tag."%')" or die(mysql_error());
    $result = $conn->query($sql);  
    
    $conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Search - <?php echo $tag ?></title>
        <?php include 'scripts/head.php'; ?> <!-- head links -->
    </head>

    <body>
        <div class="fh">
            <?php include 'scripts/nav.php'; ?> <!-- the navigation bar -->
            
            <div class="padding"></div>

            <div class="container text-center scribble">
                <h1>Results for "<?php echo $tag ?>"</h1>
            </div>
            
            <?php include 'scripts/posts.php'; ?>

            <div class="push"></div>
        </div>

        <?php include 'scripts/footer.php'; ?> <!-- the footer -->

    </body>
</html>

