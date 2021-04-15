<?php
    include 'scripts/db.php'; //connection to the database
    // If upload button is clicked 
    if (isset($_POST['upload'])) { 

        //Get variables from upload
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        #$image = $_FILES['image']['name'];
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $owner = mysqli_real_escape_string($conn, $_POST['owner']);

        $sql = "INSERT INTO posts (title, owner, description) VALUES ('$title','$owner','$description')"; 
        // execute query
        mysqli_query($conn, $sql);

        // image file directory
        #$image_id = mysql_insert_id()
        #$target = "images/".($image_id);

        $msg = "Posted successfully! Return to Home?";

        // if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        //     $msg = "Image uploaded successfully! Return to Home?";
        // }else{
        //     $msg = "Failed to upload image, please try again.";
        // }
    }
    $conn->close(); 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Adopt a Frog</title>
        <?php include 'scripts/head.php' ?> <!-- head links -->
    </head>

    <body>
        <div class="fh">

        <?php include 'scripts/nav.php'; ?> <!-- the nav bar -->

            <div class="container text-center">
                <h1 class="scribble">Adoption</h1>
                <h3><a href="index.php"><?php echo $msg ?></a></h3> <!--starts as empty-->
            </div>

            <div class="container">
                <form method="POST" action="upload.php" enctype="multipart/form-data">
                    <!--Title-->
                    <div class="form-group">
                        <label for="title">Name your frog</label>
                        <input type="text" id="title" name="title" class="form-control">
                    </div>

                    <!--owner (use for image credit/owner)-->
                    <div class="form-group">
                        <label for="owner">Your name</label>
                        <input type="text" id="owner" name="owner" class="form-control">
                    </div>

                    <!--Post description-->
                    <div class="form-group">
                        <label for="desc">About your frog</label>
                        <textarea rows="4" id="description" name="description" class="form-control"></textarea>
                    </div>
                    
                    <div>
                        <button type="submit" name="upload" class="btn btn-primary">ADOPT</button>
                    </div>
                </form>
            </div>

            <div class="container">
                <h1 class="text-center scribble"><a href="index.php">Back to Home</a></h1> 
            </div>

            <div class="push"></div>
        </div>

        <?php include 'scripts/footer.php' ?> <!-- the footer-->
    </body>
</html>