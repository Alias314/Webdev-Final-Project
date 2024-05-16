<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="adopt.css">
    <link rel="icon" href="images\website_logo.png">
    <title>FurPamilya</title>
</head>

    <?php 
        include('db.php');
        // include('process.php'); 
    ?>

<body>
    <header>
        <a id="homepage-website-link" href="index.php">
            <div id="homepage-logo">
                <img src="images/website_logo.png">
                <h1><span style="color: #000000;">FUR</span><span style="color: #5F737B;">PAMILYA</span></h1>
            </div>
        </a>
        
        <div id="homepage-navigation-buttons">
            <div class="vertical-divider"></div>
            <button id="about">About</button>
            <a href="adopt.php">
                <button>Adopt</button>
            </a>
            <button id="sign-in">Login</button>
        </div>
    </header>

    <div id="about-modal" class="modal">
        <div class="about-modal-content">
            <span id="close-about" class="close">&times;</span>
            <h1>About</h1>
            <p>
                <strong>FurPamilya</strong> is a dedicated platform that brings together pet lovers and furry friends in need of a loving home. Our mission is to make the process of pet adoption as simple and convenient as possible, eliminating the need for potential adopters to visit multiple shelters or compounds.<br><br>
            
                At <strong> FurPamilya, </strong> we believe that every cat and dog deserves a loving home and a family that cherishes them. We provide detailed information about each pet, including their breed, age, health status, and personality traits, to help you find your perfect match.<br><br>
            
                Our user-friendly website allows you to browse through a wide variety of cats and dogs from the comfort of your home. Once you've found a pet you're interested in, you can easily go through the adoption process online.<br><br>
            
                By choosing to adopt a pet through <strong> FurPamilya, </strong> you're not just gaining a new family member; you're giving a second chance to a deserving animal and making a stand against puppy mills and animal cruelty.<br><br>
            
                Join us in our mission to make pet adoption easier and more accessible for everyone. Together, we can create a world where every pet has a loving home. <br><br><br>

                <strong> Developed by:  </strong> Lance Cerenio, Shawn Mayol, Carl Omega, and Klyde Perante
            </p>
        </div>
    </div>

    <div id="signin-modal" class="modal">
        <div class="modal-content">
            <span id="close-signin" class="close">&times;</span>
            <form>
                <h1>Login</h1>
                <input type="email" id="email" name="email", placeholder="Email"><br>
                <input type="password" id="password" name="password" placeholder="Password"><br>
                <input type="submit" value="Log In" id="login-button">
                <a href="">Need an account?</a>
                <a href="">Forgot Password?</a>
            </form><hr>
            <div id="social-media-buttons">
                <a href="">
                    <img id="facebook-favicon" src="images/facebook-favicon.png">
                </a>
                <a href="">
                    <img id="gmail-favicon" src="images/gmail-favicon.png">
                </a>
            </div>
        </div>
    </div>

    <main>
        <div id="sidebar">
            <h2>Refine Search</h2>

            <label>Breed</label>
            <select name="cars" class="dog-options">
                <option value="" disabled selected>Any</option>
                <option value="volvo">Aspin</option>
                <option value="saab">Golden Retriever</option>
                <option value="mercedes">German Shepherd</option>
                <option value="audi">Bulldog</option>
                <option value="audi">Poodle</option>
                <option value="audi">Chihuahua</option>
            </select>

            <label>Gender</label>
            <select name="cars" class="dog-options">
                <option value="" disabled selected>Any</option>
                <option value="volvo">Male</option>
                <option value="saab">Female</option>
            </select>

            <label>Size</label>
            <select name="cars" class="dog-options">
                <option value="" disabled selected>Any</option>
                <option value="volvo">Small</option>
                <option value="saab">Medium</option>
                <option value="mercedes">Large</option>
                <option value="audi">X-Large</option>
            </select>

            <label>Age</label>
            <select name="cars" class="dog-options">
                <option value="" disabled selected>Any</option>
                <option value="volvo">0-1 years</option>
                <option value="saab">1-3 years</option>
                <option value="mercedes">3-8 years</option>
                <option value="audi">8+ years</option>
            </select>

            <input type="button" value="Apply" id="apply-button">
        </div>

        <div id="adopt-dog-menu">
            <div id="dog-location-sort">
                <h1>3 Pets Found Near Your Location</h1>

                <select name="cars" id="sort-by-button">
                    <option value="" disabled selected>Sort by: Nearest</option>
                    <option value="volvo">Sort by: Nearest</option>
                    <option value="mercedes">Sort by: A-Z</option>
                    <option value="mercedes">Sort by: Z-A</option>
                </select>
            </div>

            <div id="dog-information">
                <div class="dog-adopt-me">
                    <img src="images/dog-adopt-me2.jpg">

                    <div class="dog-adopt-me-container">
                        <h1>Jake the Dog</h1>

                        <div class="dog-adopt-me-information">
                            <div class="doggy-woof-grrrr">
                                <p>Breed: Aspin</p>
                                <p>Gender: Male</p>
                                <p>Size: Small</p>
                                <p>Age: 1</p>
                            </div>

                            <div class="dog-adopt-me-information-right">
                                <div>
                                    <h2>About Jake the Dog:</h2><br>
                                    <p>A small sized puppy but with a big personality. He is full of energy, and looking for his forever home where he can shower you with love and snuggles</p>
                                </div>

                                <div class="dog-adopt-me-information-right-buttons">
                                    <button class="favoriteButton">Add to favorites</button>
                                    <button>MEET THIS PET</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dog-adopt-me">
                    <img src="https://res.cloudinary.com/petrescue/image/upload/b_auto:predominant,f_auto,c_pad,h_638,w_638/v1650977162/jknpvhn9xyanrei2llfx.jpg">

                    <div class="dog-adopt-me-container">
                        <h1>Mr. Tinkles</h1>

                        <div class="dog-adopt-me-information">
                            <div class="doggy-woof-grrrr">
                                <p>Breed: Persian</p>
                                <p>Gender: Male</p>
                                <p>Size: Small</p>
                                <p>Age: 2</p>
                            </div>

                            <div class="dog-adopt-me-information-right">
                                <div>
                                    <h2>About Mr. Tinkles:</h2><br>
                                    <p>A mystery wrapped in fluff. With his curious eyes and playful antics, he's always up to something, making every day an adventure.</p>
                                </div>

                                <div class="dog-adopt-me-information-right-buttons">
                                    <button class="favoriteButton">Add to favorites</button>
                                    <button>MEET THIS PET</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dog-adopt-me">
                    <img src="https://img.buzzfeed.com/buzzfeed-static/static/2018-04/5/15/asset/buzzfeed-prod-web-02/sub-buzz-6810-1522956555-5.png?output-quality=auto&output-format=auto&downsize=640:*">

                    <div class="dog-adopt-me-container">
                        <h1>Megamind</h1>

                        <div class="dog-adopt-me-information">
                            <div class="doggy-woof-grrrr">
                                <p>Breed: Sphynx</p>
                                <p>Gender: Female</p>
                                <p>Size: Small</p>
                                <p>Age: 4</p>
                            </div>

                            <div class="dog-adopt-me-information-right">
                                <div>
                                    <h2>About Megamind:</h2><br>
                                    <p>Might seem grumpy at first glance, but don't let her tough exterior fool you. She's got a soft spot for cuddles and makes every moment purr-fectly delightful.</p>
                                </div>

                                <div class="dog-adopt-me-information-right-buttons">
                                    <button class="favoriteButton">Add to favorites</button>
                                    <button>MEET THIS PET</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="script.js"></script>
</body>
</html>