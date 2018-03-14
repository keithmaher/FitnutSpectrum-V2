  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">FitNut Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['admin_name']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="admin.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                         <a data-toggle="collapse" data-target="#post"><i class="fa fa-fw fa-arrows-v"></i> Blog <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="post" class="collapse">
                            <li>
                                <a href="./blog.php">View All Blogs</a>
                            </li>
                            <li>
                                <a href="./blog.php?source=add_blog">Add Blog</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="view_message.php"><i class="fa fa-fw fa-edit"></i> Messages</a>
                    </li>
                    <li>
                        <a href="comments.php"><i class="fa fa-fw fa-desktop"></i> Comments</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
