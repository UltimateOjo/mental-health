<!DOCTYPE html>
<html lang="en">
<head>
<!--index.php = Landing Page-->
<?php $page="home"; include 'includes/header.php'; ?>
</head>
<body>
<!--- Navigation -->
	<?php include 'includes/nav.php'; ?>
<!--- End Navigation -->    
<div class="guidelines">
    <img src="img/Rectangle.png" alt="" width="1300" height="500">
    <h1>SUBMISSION GUIDELINES</h1>

    <section class="guideline-1">
    <h2>Heading</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
        Excepteur sint occaecat cupidatat non proident, 
        sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </section>

    <section class="guideline-2">
    <h2>Heading</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
        Excepteur sint occaecat cupidatat non proident, 
        sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </section>
</div>

<div class="submission-form">
            <form id="submission-form" method="post" action="">
                <input name="first-name" type="text" class="form-control" placeholder="First Name" required>
                <br>
                <input name="last-name" type="text" class="form-control" placeholder="Last Name" required>
                <br>
                <input name="email" type="text" class="form-control" placeholder="Email" required>
                <br>
                <input name="organization-role" type="text" class="form-control" placeholder="Organization/Role" required>
                <br>
                <input name="category-for-submission" type="text" class="form-control" placeholder="Category for Submission" required>
                <br>
                <textarea name="message" rows="4" class="form-control" placeholder="Please provide us a 1-2 sentence summary for your submission"></textarea>
                <br>
                <input type="submit" class="form-control" value="UPLOAD">
            </form>
</div>

        <div class="questions">
            <h1>Questions About Submissions</h1>
            <p>Lorem ipsum dolor sit amet, 
                consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
<!--Footer-->
<?php $page="home"; include 'includes/footer.php'; ?>
<!--End Footer-->
  </body>
</html>