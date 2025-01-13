<?php
session_start();
if (!isset($_SESSION["login"])) {
	header("location: login.php");
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Mugi Resto</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <ul>
        	<div class="menu-items">
            	<li><a href="#beverages">Beverages</a></li>
            	<li><a href="#appetizer">Appetizer</a></li>
            	<li><a href="#main-course">Main Course</a></li>
            	<li><a href="#side-dish">Side Dish</a></li>
            	<li><a href="#dessert">Dessert</a></li>
            	<li><a href="#specialty-dish">Specialty Dish</a></li>
		<li><a> | </a></li>
		<li><a href="https://maps.app.goo.gl/eEYLrJMvTRPC4ddC9" target="_blank">Our Location</a></li>
        	
		</div>
        	<li class="feedback-link"><a href="#feedback">Feedback</a></li>
		<li class="feedback-link"><a href="logout.php">Log Out</a></li>
    	   </ul>
        </nav>
    </header>
	<div id="menu" class="container">
		<img src="logom.png" alt="image" height="245" width="315">
    		<h1>THE MUGI RESTO</h1>
		  <div class="welcome-statement">
    		    <p>Welcome to <b>The Mugi Resto</b>, <i>where flavors come alive! Explore our curated menu, featuring a blend of traditional and modern dishes crafted to delight your palate. We’re committed to offering an unforgettable dining experience with fresh ingredients and exceptional service.</i> Enjoy your meal!</p>
		  </div><br>
		<h2><b>OUR MENU :</b></h2>
	</div>
    <main>
        <section id="beverages" class="menu-section">
            <h2>Beverages</h2>
            <p>Refreshing drinks to start your meal.</p>
            <ul>
		<img src="beverages.jpg" alt="image" height="400" width="600">
                <li>Coffee <span class="price">IDR 22K</span></li>
                <li>Tea <span class="price">IDR 18K</span></li>
                <li>Fresh Juice <span class="price">IDR 23K</span></li>
                <li>Smoothies <span class="price">IDR 30K</span></li>
            </ul>
        </section>

        <section id="appetizer" class="menu-section">
            <h2>Appetizer</h2>
            <p>Start your meal with a delightful appetizer.</p>
            <ul>	
		<img src="garlicbread.jpg" alt="image" height="400" width="600">
                <li>Garlic Bread <span class="price">IDR 24K</span></li>
                <li>Bruschetta <span class="price">IDR 28K</span></li>
                <li>Cheese Sticks <span class="price">IDR 35K</span></li>
                <li>Spring Rolls <span class="price">IDR 33K</span></li>
            </ul>
        </section>

        <section id="main-course" class="menu-section">
            <h2>Main Course</h2>
            <p>Satisfy your hunger with our delicious main dishes.</p>
            <ul>
		<img src="carbonara.jpg" alt="image" height="400" width="600">
                <li>Grilled Steak <span class="price">IDR 150K</span></li>
                <li>Spaghetti Carbonara <span class="price">IDR 130K</span></li>
                <li>Chicken Alfredo <span class="price">IDR 125K</span></li>
                <li>Vegetarian Pizza <span class="price">IDR 105K</span></li>
            </ul>
        </section>

        <section id="side-dish" class="menu-section">
            <h2>Side Dish</h2>
            <p>Add a little extra to your meal with our side dishes.</p>
            <ul>
		<img src="frenchfries.png" alt="image" height="400" width="600">
                <li>French Fries <span class="price">IDR 22K</span></li>
                <li>Garden Salad <span class="price">IDR 35K</span></li>
                <li>Mashed Potatoes <span class="price">IDR 30K</span></li>
                <li>Coleslaw <span class="price">IDR 25K</span></li>
            </ul>
        </section>

        <section id="dessert" class="menu-section">
            <h2>Dessert</h2>
            <p>End your meal with a sweet treat.</p>
            <ul>
		<img src="icecream.jpg" alt="image" height="400" width="600">
                <li>Chocolate Cake <span class="price">IDR 50K</span></li>
                <li>Cheesecake <span class="price">IDR 40K</span></li>
                <li>Ice Cream <span class="price">IDR 30K</span></li>
                <li>Fruit Tart <span class="price">IDR 32K</span></li>
            </ul>
        </section>

        <section id="specialty-dish" class="menu-section">
            <h2>Specialty Dish</h2>
            <p>Try our chef's specialty dishes for an unforgettable experience.</p>
            <ul>
		<img src="beefwellington.jpg" alt="image" height="400" width="600">
                <li>Beef Wellington <span class="price">IDR 299K</span></li>
                <li>Lobster Thermidor <span class="price">IDR 379K</span></li>
                <li>Duck à l'Orange <span class="price">IDR 249K</span></li>
                <li>Paella Valenciana <span class="price">IDR 199K</span></li>
            </ul>
        </section>

	<section id="feedback" class="feedback-section">
    		<h2>Feedback</h2>
    		<p>We value your feedback! Please share your thoughts with us.</p>
    		<form action="save_feedback.php" method="POST">
        		<label for="name">Name:</label>
        		<input type="text" id="name" name="name" required>
        
		        <label for="email">Email:</label>
		        <input type="email" id="email" name="email" required>
        
		        <label for="comments">Comments or Suggestions:</label>
		        <textarea id="comments" name="comments" rows="4" required></textarea>
        
		        <button type="submit">Submit</button>
		        <button type="button" onclick="window.location.href='komen.php'">View Feedback</button>
		    </form>
	</section>



    </main>
	<footer class="footer">
        <p>Created by <b>Mugi Mabruri</b></p>
	<p><b>2024</b></p>
    	</footer>
</body>
</html>
