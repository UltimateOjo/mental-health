<!--- Navigation -->
<nav class="nav">
<!--button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="toggler-icon"></span-->
<a class="navbar-brand" href="index.php"><img src=""></a> 
    <ul class="nav-list">       
                        <li class="nav-item-1">
                            <a class="nav-link <?php if($page=='home'){echo 'active';}?>" href="index.php">Home</a>
                        </li>
                        <li class="nav-item-2">
                            <a class="nav-link <?php if($page=='about'){echo 'active';}?>" href="about.php">Portfolio</a>
                        </li>
                        <li class="nav-item-3">
                            <a class="nav-link <?php if($page=='author'){echo 'active';}?>" href="author.php">Pricing</a>
                        </li>
                        <li class="nav-item-4">
                            <a class="nav-link <?php if($page=='category'){echo 'active';}?>" href="category.php">Category</a>
                        </li>
                        <li class="nav-item-5">
                            <a class="nav-link <?php if($page=='donate'){echo 'active';}?>" href="donate.php">Donate</a>
                        </li>
                        <li class="nav-item-6">
                            <a class="nav-link <?php if($page=='submission'){echo 'active';}?>" href="submission.php">Submission</a>
                        </li>
                        <li class="nav-item-7">
                        <a class="nav-link <?php if($page=='tag'){echo 'active';}?>" href="tag.php">Tag</a>
                        </li>
            </a>
		</ul>
    <!--/button-->
	</nav>
	<!--- End Navigation -->