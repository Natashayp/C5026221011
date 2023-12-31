<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Blanche Bistro Website</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,800;0,9..40,1000;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,800;1,9..40,1000&family=Playfair+Display&family=Poppins:wght@100;300;500&display=swap" rel="stylesheet">

    <!-- font awsome -->
    <script src="https://kit.fontawesome.com/0cd2e44115.js" crossorigin="anonymous"></script>

    <!-- CSS File -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <!-- Javavscript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


    <script src="main.js"></script>

</head>
<body >
    <!-- NAVBAR -->
    <div id="navbar" class="navbar">
        <nav class="navbar navbar-toogleable-md navbar-expand-sm fixed-top">

            <ul class="navbar-nav">
                <a class="navbar-brand" href="#">
                    <img class="logo" src="Assets/Image/logo.jpg" alt="blanche logo">
                </a>
            </ul>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"><i class="fa-solid fa-bars" style="color: #ffffff;"></i></span>
            </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#menu" class="nav-link">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="#event" class="nav-link">Event</a>
                    </li>
                    <li class="nav-item">
                        <a href="#booking" class="nav-link">Reservation</a>
                    </li>
            </ul>
        </div>

        </nav>
    </div>



    <!-- HOME -->
    <section id="home" class="d-flex align-items-center">
    <div class="container position-relative text-center ">
        <h1>Welcome to Blanche Bistro!</h1>
        <h2>Cozy place in your neighbourhood</h2>
       <a href="https://linktr.ee/BlancheBistro"><button type="button" class="order-btn"  >Order</button></a>
    </div>
    </section>


    <!-- About -->
    <section id="about" class="d-flex align-items-center">
        <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-text">
                <h1>About Our Bistro</h1>
                <p>Welcome to Blanche Bistro, when culinary excellence meets warm ambience. Our bistro caters to diverse tastes with a menu that fuses Western and Asian culinary delights. Not only that, our warm and welcoming ambiance, makes us the ideal spot to get productive and a cozy haven for work or study sessions. Lastly, no visit is complete without savoring a cup of our exceptional coffee. Visit us for a culinary adventure, a productive escape, and the best brew in town. </p>
                </div>
            </div>
            <div class="col-lg-6">
              <div class="about-vid">
                <div class="embed-responsive embed-responsive-4by3" >
                    <iframe class="embed-responsive-item" src="Assets/Video/blanche video.mp4"></iframe>
                </div>
              </div>
            </div>
        </div>


        </div>
    </section>


    <!-- Menu -->
    <section id="menu" class=" menu d-flex">
        <div class="container">

            <div class="menu-title">
                <h1>Our Menu Specialties</h1>
                <h5>Indulge in culinary delights</h5>

            </div>

        <div class="row menu-list">

            <div class="col-lg-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="Assets/Image/Menu/waffle.jpg" alt="Waffle" style="object-fit: cover; width: 300px; height: 200px;">
                      </div>
                      <div class="flip-card-back">
                        <h3>Waffle</h3>
                        <p>Classic Waffle: A perfect blend of crispy and fluffy, served with your favorite toppings.</p>
                      </div>
                    </div>
                  </div>
            </div>

            <div class="col-lg-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="Assets/Image/Menu/carbonara.jpg" alt="Carbonara" style="object-fit: cover; width: 300px; height: 200px;">
                      </div>
                      <div class="flip-card-back">
                        <h3>Carbonara</h3>
                        <p>Al dente spaghetti delicately tossed in a rich, velvety sauce with crispy bacon, Parmesan, and a hint of black pepper</p>
                      </div>
                    </div>
                  </div>
            </div>

            <div class="col-lg-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="Assets/Image/Menu/capuccino.jpg" alt="Capuccino" style="object-fit: cover; width: 300px; height: 200px;">
                      </div>
                      <div class="flip-card-back">
                        <h3>Capuccino</h3>
                        <p>A harmonious blend of bold espresso, steamed milk, and a velvety foam, crowned with a sprinkle of cocoa or cinnamon.</p>
                      </div>
                    </div>
                  </div>
            </div>

        </div>

        <div class="row menu-list pb-lg-5">

            <div class="col-lg-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="Assets/Image/Menu/croffle.jpg" alt="Croffle" style="object-fit: cover; width: 300px; height: 200px;">
                      </div>
                      <div class="flip-card-back">
                        <h3>Croffle</h3>
                        <p> a crispy, buttery croissant-waffle fusion, served warm and perfect for both sweet and savory cravings</p>
                      </div>
                    </div>
                  </div>
            </div>

            <div class="col-lg-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="Assets/Image/Menu/nasi-bebek.jpg" alt="bebek" style="object-fit: cover; width: 300px; height: 200px;">
                      </div>
                      <div class="flip-card-back">
                        <h3>Fried Duck</h3>
                        <p>Crispy and succulent duck paired with rice, a delightful combination of textures and flavors</p>
                      </div>
                    </div>
                  </div>
            </div>

            <div class="col-lg-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="Assets/Image/Menu/mojito.jpg" alt="mojito" style="object-fit: cover; width: 300px; height: 200px;">
                      </div>
                      <div class="flip-card-back">
                        <h3>Virgin Mojito</h3>
                        <p>A refreshing and zesty non-alcoholic blend of lime, mint, and a hint of sweetness. Perfect for a revitalizing sip.</p>
                      </div>
                    </div>
                  </div>
            </div>

        </div>

    </section>


    <!-- Event -->
    <section id="event">
        <div class="event-title">
            <h1>Event</h1>
            <h5>Book ours or organize your own event at Blanche Bistro</h5>
        </div>

        <div class="row">

            <div class="col-sm-6">
              <div class="cooking-carousel">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                      <li data-target="#demo" data-slide-to="0" class="active"></li>
                      <li data-target="#demo" data-slide-to="1"></li>
                      <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <video autoplay loop muted src="Assets/Video/vid-cupcake1.mp4" alt="Los Angeles">
                      </div>
                      <div class="carousel-item">
                        <video autoplay loop muted src="Assets/Video/vid-cupcake2.mp4" alt="Chicago">
                      </div>
                      <div class="carousel-item">
                        <video autoplay loop muted src="Assets/Video/vid-cupcake3.mp4" alt="New York">
                      </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                      <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                      <span class="carousel-control-next-icon"></span>
                    </a>

                  </div>
                </div>
            </div>

            <div class="col-sm-6">
              <div class="cooking-text">
                <h4>Kids Cooking Class</h4>
                <h5>85k/pax</h5>
                <p>Calling all young bakers and budding artists! Our kids' cupcakes decorating class is a sweet adventure in creativity. Kids will have a blast learning to decorate cupcakes with vibrant colors, edible glitter, and fun toppings. It's a hands-on, fun-filled experience that will leave them with both a happy heart and a delicious treat to take home. Let your child's imagination run wild at our cupcakes decorating class designed just for them!</p>
                <a href="https://wa.me/6287774591739"><button class="event-btn">Book</button></a>
              </div>
            </div>

        </div>

        <div class="row">

          <div class="col-sm-6 ">
            <div class="meeting-text">
              <h4>Private Gathering</h4>
              <h5>750k/10 pax</h5>
              <p>Indulge in a memorable and exclusive private gathering with our tailored package. Whether it's a family reunion, intimate celebration, or corporate event, our package offers a perfect blend of convenience and luxury. Enjoy a carefully curated menu, impeccable service, and a stylish venue to host your event. With personalized touches and attention to detail, we ensure your gathering is a resounding success. From decor to dining, we take care of it all, allowing you to focus on making unforgettable memories with your loved ones or colleagues. Book now to create cherished moments in a private setting that's all your own.</p>
              <a href="https://wa.me/6287774591739"><button class="event-btn">Book</button></a>
            </div>
          </div>

          <div class="col-sm-6">

            <div id="demo2" class="carousel slide" data-ride="carousel">
              <div class="meeting-carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo2" data-slide-to="0" class="active"></li>
                  <li data-target="#demo2" data-slide-to="1"></li>
                  <li data-target="#demo2" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <video autoplay loop muted src="Assets/Video/vid-gathering1.mp4" alt="Los Angeles">
                  </div>
                  <div class="carousel-item">
                    <video autoplay loop muted src="Assets/Video/vid-gathering2.mp4" alt="Chicago">
                  </div>
                  <div class="carousel-item">
                    <video autoplay loop muted src="Assets/Video/vid-gathering3.mp4" alt="New York">
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo2" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo2" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>

            </div>


          </div>



        </div>



    </section>

    <!-- RESERVATION -->
    <section id="booking" class="booking ">
      <h1>Reservation</h1>
      <div class="row">

        <form name="myForm" action="https://google.com" onsubmit="return validateForm()" method="post">
          <div class="form-input">
            <input type="text" id="fname" name="fname" class="form-control" placeholder="Your Name" required>
          </div>
          <div class="form-input">
            <input type="text" id="email" name="email" class="form-control" placeholder="Your E-Mail" required>
          </div>
          <div class="form-input">
            <input type="text" id="phone" name="phone" class="form-control" placeholder="Your Phone" required>
          </div>
          <div class="form-input">
            <input type="text" id="date" name="date" class="form-control" placeholder="Date (dd-mm-yyyy)" required>
          </div>
          <div class="form-input">
            <input type="text" id="time" name="time" class="form-control" placeholder="Time" required>
          </div>
          <div class="form-input">
          <input type="number" id="numOfPeep" name="numOfPeep" class="form-control" placeholder="Number of People" required>
          </div>
          <div class="form-input">
          <input type="text" id="msg" name="msg" class="form-control" placeholder="Message" required>
          </div>
          <div class="form-input">
          <input type="submit" value="Book a Table" class="btn">
          </div>

        </form>

      </div>
    </section>

    <!-- FOOTER -->
    <section id="footer">

        <!-- <h1>Contact & Visit Us</h1> -->
        <div clas="row">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15862.616686334093!2d106.6975744!3d-6.3090832!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e527b3be32f9%3A0x5c84da93eaa1b521!2sBlanche%20Bistro!5e0!3m2!1sen!2sid!4v1697925157259!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <img class="footer-logo" src="Assets/Image/logo.jpg" alt="logo">
                <div class="logo-text">
                    <h4>Cozy place in your neighbourhood</h4>
                    <p>Ruko Savia blok C1 no 1 BSD, Ciater, Kec. Serpong, Kota Tangerang Selatan, Banten 15310</p>
                </div>
            </div>
            <div class="col-lg-3 d-block m-auto">
                <div class="contact-us">
                    <div>
                        <h4>Contact Us</h4>
                    </div>
                    <div style="margin-top: 10px;">
                            <p>Phone: +6287774591739</p>
                    </div>
                    <div style="margin-top: -15px;">
                            <p>E-mail: blanchebistro@gmail.com</p>
                    </div>
                    <div class="socmed">
                      <a href="https://www.facebook.com/p/Blanche-Bistro-100088481582569/" class="facebook" styl><i class="fa-brands fa-facebook"></i></a>
                      <a href="https://www.instagram.com/blanchebistro.id/?hl=en" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                      <a href="https://www.tiktok.com/@blanchebistro.id" class="Tiktok "><i class="fa-brands fa-tiktok"></i></a>
                    </div>
                    <div class="hours">
                      <h4>Open Hours</h4>
                      <div>
                        <p>Tuesday-Sunday:</p>
                        <p style="margin-top: -15px;">07:00AM-21:00AM</p>
                      </div>
                    </div>
              </div>
            </div>

            <div class="col-lg-5">
              <div class="message ml-4">
              <div>
                <h4>Leave us a message</h4>
              </div>
              <form action="/action_page.php">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Enter email" id="email" required>
                </div>
                <div>
                  <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                </div>
                <button type="submit" class="btn-message btn-primary">Send</button>
              </form>
              </div>
            </div>
        </div>

    </section>

    <section id="add">
        <ul>
            <li><a href="http://127.0.0.1:8000/Linktree">Tugas 1: Linktree</a></li>
            <li><a href="http://127.0.0.1:8000/textColors">Tugas 2: Kastemisasi</a></li>
            <li><a href="http://127.0.0.1:8000/layout">Tugas 3: Layout</a></li>
            <li><a href="http://127.0.0.1:8000/js1">JS 1</a></li>
            <li><a href="http://127.0.0.1:8000/js2">JS 2</a></li>
            <li><a href="http://127.0.0.1:8000/css">css</a></li>
            <li><a href="http://127.0.0.1:8000/responsive">responsive1</a></li>
            <li><a href="http://127.0.0.1:8000/responsive2">responsive2</a></li>
            <li><a href="http://127.0.0.1:8000/link">link</a></li>
            <li><a href="http://127.0.0.1:8000/diva">hello</a></li>

        </ul>



    </section>

</body>
</html>
