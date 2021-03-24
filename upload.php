<?php
    include 'scripts/db.php'; //connection to the database
    // If upload button is clicked 
    if (isset($_POST['upload'])) { 
        //Get variables from upload
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $image = $_FILES['image']['name'];
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);

        // image file directory
        $target = "images/".basename($image);

        $sql = "INSERT INTO posts (title, username, description, image) VALUES ('$title','$username','$description', '$image')"; 
        // execute query
        mysqli_query($conn, $sql);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully! Return to Home?";
        }else{
            $msg = "Failed to upload image, please try again.";
        }
    }
    $conn->close(); 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Upload</title>
        <?php include 'scripts/head.php' ?> <!-- head links -->
    </head>

    <body>
        <div class="fh">
            <div class="container text-center">
                <h1 class="scribble">Upload</h1>
                <h3><a href="index.php"><?php echo $msg ?></a></h3> <!--starts as empty-->
            </div>

            <div class="container">
                <form method="POST" action="upload.php" enctype="multipart/form-data">
                    <!--Title-->
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" class="form-control">
                    </div>

                    <!--username (use for image credit/source)-->
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" class="form-control">
                    </div>

                    <!--Post Image-->
                    <div class="form-group">
                        <label>Upload Image </label>
                        <input type="file" name="image" class="form-control-file">
                    </div>

                    <!--Post description-->
                    <div class="form-group">
                        <label for="desc"> Description </label>
                        <textarea rows="4" id="description" name="description" class="form-control"></textarea>
                    </div>
                    
                    <div>
                        <button type="submit" name="upload" class="btn btn-primary">POST</button>
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