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
<div class="give-back">
    <h1>GIVE BACK TO THE COMMUNITY</h1>
    <p>
        Lorem ipsum dolor sit amet, 
        consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, 
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
        Excepteur sint occaecat cupidatat non proident, 
        sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
</div>

<div class="donation-prices">
    <ul>
        <li class="price-1"><input type="checkbox" id="monthly-donation" name="auto-donation" placeholder="Make this a monthly donation">$20</li>
        <li class="price-1"><input type="checkbox" id="monthly-donation" name="auto-donation" placeholder="Make this a monthly donation">$60</li>
        <li class="price-1"><input type="checkbox" id="monthly-donation" name="auto-donation" placeholder="Make this a monthly donation">$100</li>
        <li class="price-1"><input type="checkbox" id="monthly-donation" name="auto-donation" placeholder="Make this a monthly donation">$200</li>
        <li class="price-1"><input type="checkbox" id="monthly-donation" name="auto-donation" placeholder="Make this a monthly donation">$500</li>
    </ul>
    <input type="checkbox" id="monthly-donation" name="auto-donation" placeholder="Make this a monthly donation">
</div>

<div class="submission-form">
            <form id="submission-form" method="post" action="">
                <input name="first-name" type="text" class="form-control" placeholder="First Name" required>
                <br>
                <input name="last-name" type="text" class="form-control" placeholder="Last Name" required>
                <br>
                <input name="address" type="text" class="form-control" placeholder="Address" required>
                <br>
                <input name="city" type="text" class="form-control" placeholder="City" required>
                <br>
                <input name="state" type="text" class="form-control" placeholder="State" required>
                <br>
                <input name="name-on-card" type="text" class="form-control" placeholder="Name On Card" required>
                <br>
                <input name="number" type="text" class="form-control" placeholder="Number" required>
                <br>
                <input name="cvv" type="text" class="form-control" placeholder="CVV" required>
                <br>
                <input name="exp" type="text" class="form-control" placeholder="Exp" required>
                <br>
                <button class="donate">Donate</button>
            </form>
</div>
<!--Footer-->
<?php $page="home"; include 'includes/footer.php'; ?>
<!--End Footer-->
  </body>
</html>