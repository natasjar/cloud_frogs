<?php while($row = $result->fetch_assoc()) { //iterates over below html for as many posts as there are sql results
                $img = $row['image_id'];?>
                <div class="container post bg-3">                
                    <div class="container-fluid">
                        <h1 class="scribble"><a href="#"><?php echo $row["title"]?></a></h1>
                        <p><b>Owner:</b> <?php echo $row["owner"]?></p>
                    </div>
                    
                    <div class="container-fluid">
                        <img src=<?php echo "images/$img.png" ?> class="img-responsive w-50">
                    </div>

                    <div class="padding"></div>

                    <div class="container-fluid">
                        <p class="lead"><?php echo $row["description"]?></p>
                        <p><b>Date adopted:</b> <?php echo $row["date_posted"]?></p>
                    </div>
                </div>
            <?php } ?> <!-- this repeats for all posts -->