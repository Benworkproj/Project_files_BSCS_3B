<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/icon.png" />
    <title>Meet N' Eat</title>

    <!-- Link our CSS file -->

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  </head>
  <body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar fixed-top bg-body-tertiary box-shadow">
      <div class="container">
          <img
            src="images/icon.png"
            alt="Restaurant Logo"
            class="img-responsive-logo"
          />
          <a href="index.html">
            <span class="title">Meet N' Eat</span>
          </a>
          <div class="menu text-right selection">
            <div class="bx bx-menu" id="menu-icon"></div>
            <ul class="navbars">
                <li>
                    <a class="navfont" href="#home">Home</a>
                </li>
                <li>
                    <a class="navfont" href="#bestseller" id="bestsell">Best Sellers</a>
                </li>
                <li>
                    <a class="navfont" href="#aboutus" id="aboutuss">About Us</a>
                </li>
            </ul>
        </div>
        </div>
        

      <div class="clearfix"></div>
  </div>
</section>


        <div class="clearfix"></div>
      </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center" id="home">
      <div class="container">
        <form action="food-search.html" method="POST">
          <input
            type="search"
            name="search"
            placeholder="Search for Food.."
            required
          />
          <input
            type="submit"
            name="submit"
            value="Search"
            class="btn btn-primary"
          />
        </form>
      </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
      <div class="container">
        <h2 class="text-c">Explore Foods</h2>

        <div class="center">
          <div class="box-3 image">
            <img class="image__img img-responsive img-curve" src="images/pizza.jpg" alt="Pizza">
            <div class="image__overlay image__overlay--blur">
              <div class="image__title">Pizza</div>
              <p class="image__description desc">
                A delicacy originated from Italia consisting of a flattened disk of bread dough 
                topped with some combination of olive oil, oregano, tomato, olives, and mozzarella.
              </p>
            </div>
          </div>

          <div class="box-3 image">
            <img class="image__img img-responsive img-curve" src="images/burger.jpg" alt="Burger">
            <div class="image__overlay image__overlay--blur">
              <div class="image__title">Burger</div>
              <p class="image__description desc">
                A sandwich consisting of a patty of ground beef served within a split bread roll, 
                with  mustard, mayonnaise, ketchup, and other condiments, 
                along with other garnishes of lettuce, onion, tomato, and sliced cucumber pickle.
              </p>
            </div>
          </div>

          <div class="box-3 image">
            <img class="image__img img-responsive img-curve" src="images/salad.jpg" alt="Salad">
            <div class="image__overlay image__overlay--blur">
              <div class="image__title">Salad</div>
              <p class="image__description desc">
                Traditionally served cold.  A leafy vegetables that can be eaten raw that consists of 
                lettuce, garden cress and watercress, endives, cabbage, spinach, escarole, romaine, arugula, and fresh herbs. 
              </p>
            </div>
          </div>
        </div>

        <div class="clearfix"></div>
      </div>
    </section>
    <!-- Categories Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->

    <section class="food-menu" id="bestseller">
      <div class="container">
        <h2 class="text-c-bs">Best Sellers</h2>

        <div class="onesec">
        <div class="food-menu-box">
          <div class="food-menu-img">
            <img
              src="images/chickenhawaianpizza.jpg"
              alt="Chicken Hawain Pizza"
              class="img-responsive img-curve"
            />
          </div>

          <div class="food-menu-desc">
            <h4>Chicken Hawain Pizza</h4>
            <p class="food-price">₱ 470.00</p>
            <p class="food-detail">
              Made with Italian Sauce, chicken ham & pineapple with a double layer of cheese.
            </p>
            <br />

            <a href="order.html" class="btn btn-primary">Order Now</a>
          </div>
        </div>
      </div>

      <div class="secondsec">
        <div class="food-menu-box">
          <div class="food-menu-img">
            <img
              src="images/smokyburger.jpg"
              alt="Smokey Burger"
              class="img-responsive img-curve"
            />
          </div>

          <div class="food-menu-desc">
            <h4>Smoky Burger</h4>
            <p class="food-price">₱ 320.00</p>
            <p class="food-detail">
              A ground beef patty cooked using indirect heat and smoke.
            </p>
            <br />

            <a href="#" class="btn btn-primary">Order Now</a>
          </div>
        </div>
      </div>

      <div class="onesec">
        <div class="food-menu-box">
          <div class="food-menu-img">
            <img
              src="images/Classic Greek Salad.jpg"
              alt="Classic Greek Salad"
              class="img-responsive img-curve"
            />
          </div>

          <div class="food-menu-desc">
            <h4>Classic Greek Salad</h4>
            <p class="food-price">₱ 550.00</p>
            <p class="food-detail">
              A culinary ode with juicy slices of ripe tomatoes, crisp cucumbers, tangy red onions, and salty feta cheese.
            </p>
            <br />

            <a href="#" class="btn btn-primary">Order Now</a>
          </div>
        </div>
      </div>

      <div class="secondsec">
        <div class="food-menu-box">
          <div class="food-menu-img">
            <img
              src="images/ShrimpSalad.jpg"
              alt="Shrimp Salad"
              class="img-responsive img-curve"
            />
          </div>


          <div class="food-menu-desc">
            <h4>Shrimp Salad</h4>
            <p class="food-price">₱ 800.00</p>
            <p class="food-detail">
              A symphony of fresh flavors, with succulent shrimp complementing juicy tomatoes, and tangy dressing.
            </p>
            <br />

            <a href="#" class="btn btn-primary">Order Now</a>
          </div>
        </div>
      </div>

      <div class="onesec">
        <div class="food-menu-box">
          <div class="food-menu-img">
            <img
              src="images/Supreme Pizza.jpg"
              alt="Supreme Pizza"
              class="img-responsive img-curve"
            />
          </div>

          <div class="food-menu-desc">
            <h4>Supreme Pizza</h4>
            <p class="food-price">₱ 1,000.00</p>
            <p class="food-detail">
              A delectable medley of savory toppings, including chunks of flavorful pepperoni, and zesty bell peppers.
            </p>
            <br />

            <a href="#" class="btn btn-primary">Order Now</a>
          </div>
        </div>
      </div>
      
      <div class="secondsec">
        <div class="food-menu-box">
          <div class="food-menu-img">
            <img
              src="images/Overload Beef Burger.jpg"
              alt="Overload Beef Burger"
              class="img-responsive img-curve"
            />
          </div>

          <div class="food-menu-desc">
            <h4>Overload Beef Burger</h4>
            <p class="food-price">₱ 560.00</p>
            <p class="food-detail">
              A juicy, mouth-watering masterpiece, boasting a succulent, perfectly seasoned beef patty.
            </p>
            <br />

            <a href="#" class="btn btn-primary">Order Now</a>
          </div>
        </div>
      </div>

        <div class="clearfix"></div>
      </div>
    </section>
    <!-- fOOD Menu Section Ends Here -->

    <!-- About Us -->
    <section class="about" id="aboutus">
      <div class="contents">
        <img class="img-curve imgjs" src="images/burger.jpg" alt="Team">
        <div class="texts">
            <h1 class="text-center abouts">About Us</h1>
            <p class="text-center pjs">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
              Ex odio illum illo distinctio possimus fugiat a aliquid. 
              Dolorum corporis voluptas harum, adipisci illum velit placeat quisquam cum maxime 
              consectetur quis?</p>
              <section class="social">
                <div class="container">
                  <h5 class="contactsjs">Contact Us</h5>
                  <div class="text-center heights">
                    <ul class="uls">
                      <li>
                        <a href="#"
                          ><img
                            src="https://img.icons8.com/fluent/50/000000/facebook-new.png"
                            link rel="https://www.facebook.com/Eyseeer"
                            
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img
                            src="https://img.icons8.com/fluent/48/000000/instagram-new.png"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="https://img.icons8.com/fluent/48/000000/twitter.png"
                        /></a>
                      </li>
                    </ul>
                  </div>
              </div>
              </section>
        </div>
      </div>
    </section>

    <!-- social Section Starts Here -->
    
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
      <div class="container text-center">
        <p>All rights reserved.</a></p>
      </div>
    </section>
    <!-- footer Section Ends Here -->
  </body>
  <script>
    ScrollReveal({ 
      reset: false,
      distance: '60px',
      duration: 2500,
      delay:400 });

      ScrollReveal().reveal('.text-c-bs', { delay: 400 });
      ScrollReveal().reveal('.onesec', { delay: 700, origin:'left' });
      ScrollReveal().reveal('.imgjs', { delay: 700, origin:'left' });
      ScrollReveal().reveal('.secondsec', { delay: 700, origin:'right' });
      ScrollReveal().reveal('.abouts', { delay: 400 });
      ScrollReveal().reveal('.contactsjs', { delay: 400});
      ScrollReveal().reveal('.pjs', { delay: 400});
      ScrollReveal().reveal('.uls',{ delay: 400});
  </script>
</html>

