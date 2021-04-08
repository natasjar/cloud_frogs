<!-- in a seperate file so it can be put in through php include, meaning edits don't need to be repeated-->
<nav class="navbar navbar-inverse bg-2">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button> 
            <a class="navbar-brand scribble" href="index.php">Adopt a frog</a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="upload.php">Adopt</a></li>
            </ul>
    
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <form class="navbar-form" action="search.php" method="GET">
                        <div class="form-group">
                            <input type="text" class="form-control" name="search" placeholder="Search" />
                            <button type="submit" class="btn btn-default glyphicon glyphicon-search"></button>
                        </div>
                    </form>
                </li>
                <li><a href="about.php">About</a></li>
            </ul>
        </div>
    </div>
</nav>
