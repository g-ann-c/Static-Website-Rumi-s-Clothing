<?php
require("./components/insertion.php");
require("./components/header.php");
require("./components/navbar.php");
?>

<!-- MAIN CONTENT -->
<!-- HOME -->
<section id="home">
    <div class="container">    
        <div class="row align-items-center">
            <div class="show-contain col-md-6">
                <img src="./assets/main-showcase.png" alt="Home page dress showcase" class="home-showcase">
            </div>

            <div class="welcome-container col-md-6 d-flex justify-content-center">
                <div class="welcome-text text-center">
                    <h1>Rumi’s Clothing</h1>
                    
                    <p>
                        <br> Welcome to Rumi’s Clothing store! <br>
                        Feel free to check out several cutesy clothing for our lovelies!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES -->
<section id="services">
    <h2>Services</h2>
    <div class="services-contain">
        <div class="services-box">
            <h1 class="services-text">Rumi's Clothing provides several services:</h1>
        
            <div>
                <h2>Custom Tailoring</h2>
                <p class="services-text-in">Rumi's Clothing provides our dear customers custom tailoring. Creating or altering garmets to fit an individual's unique body measurements.</p>
            </div>
                
            <div>
                <h2>Rental Services</h2>
                <p class="services-text-in">Rumi's Clothing provides our beloved customers rental services. Short-rentals for our blouses, skirts, and dresses are provided.</p>
            </div>
        </div>
    </div>
</section>


<!-- PRODUCTS -->
<section id="products">
    <h2>Products</h2>
    <div class="card-contain">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="./assets/skirt.png" class="card-img-top" alt="skirt showcase">
                    <div class="card-body">
                        <p class="card-text">Rumi's Skirts</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="./assets/blouse.png" class="card-img-top" alt="blouse showcase">
                    <div class="card-body">
                        <p class="card-text">Rumi's Blouse</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="./assets/dress.png" class="card-img-top" alt="dress showcase">
                    <div class="card-body">
                        <p class="card-text">Rumi's Dresses</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT US -->
<section id="aboutUs">
    <h2>About Us</h2>
    <div class="aboutUs-contain">
        <div class="img-contain">
            <img src="./assets/about-us.jpg" alt="" class="aboutUs-img">
        </div>
        <p class="about-text">Here in Rumi's Clothing we aim to provide individuals who are interested in feminine clothing regardless of their gender.</p>
    </div>
</section>

<!-- CONTACT US -->
<section id="contactUs">
    <h2>Contact Us</h2>
    <div class="form-contain">
        <form action="#contactUs" method="post">
            <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" id="floatingInputName" placeholder="" required autocomplete="off">
                <label for="floatingInputName">Name</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" name="email" class="form-control" id="floatingInputEmail" placeholder="" required autocomplete="off">
                <label for="floatingInputEmail">Email address</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" name="phone_number" class="form-control" id="floatingInputNum" placeholder="">
                <label for="floatingInputNum">Phone Number</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" name="subject" class="form-control" id="floatingInputSubject" placeholder="" required>
                <label for="floatingInputSubject">Subject</label>
            </div>

            <div class="form-floating mb-3">
                <textarea type="text" name="concerns" class="form-control" placeholder="" id="floatingTextarea" style="height: 100px" required></textarea>
                <label for="floatingTextarea">How can we help you?</label>
            </div>
            <button type="submit" class="buttonContainer btn btn-primary" name="btnSubmit">Submit</button>
        </form>
    </div>
</section>

<?php 
require("./components/footer.php");
?>