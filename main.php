
<html>
<html lang="en">

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="college.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="facultymembers.css">
    <title>Chanakya Institute Of Technology</title>
    <style>
        * {
            font-family: 'Lora', serif;
        }

        .containingFacilities {
            position: relative;
            width: 50vh;
        }

        .image {
            opacity: 1;
            display: block;
            width: 50vh;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .containingFacilities:hover .image {
            opacity: 0.3;
        }

        .containingFacilities:hover .middle {
            opacity: 1;
        }

        .text {
            background-color: #f80;
            color: white;
            font-size: 20px;
            padding: 16px 40px;
            text-decoration: none;
        }

        /* For gallery */


        .containImage .mySlides img {
            vertical-align: middle;
            height: 80vh;
        }

        /* Hide the images by default */
        .containImage .mySlides {
            display: none;
        }

        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
            cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 40%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .containImage .mySlides .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: relative;
            top: 0;
        }

        /* Container for image text */
        .containImage .caption-container {
            text-align: center;
            background-color: #222;
            padding: 2px 16px;
            color: white;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Six columns side by side */
        .containImage .row .column {
            float: left;
            width: 16.66%;
        }

        /* Add a transparency effect for thumnbail images */
        .demo {
            opacity: 0.6;
        }

        .active,
        .demo:hover {
            opacity: 1;
        }
    </style>
</head>

<body>
    <nav class="navlist">
        <ul>
            <li>
                <h4>CIT</h4>
            </li>
            <li><a href="#">HOME</a></li>
            <li><a href="">ABOUT US</a></li>
            <li class="dropdown"><button class="dropbtn" onclick="myFunction()"><a class="dropbtn"
                        href="#">COURSES</a></button>
                <div class="dropdown-content" id="myDropdown">
                    <a href="page1.html">B.Tech in C.S.E.</a>
                    <a href="page2.html">B.Tech in C.S.E.(Cybersecurity and Forensic)</a>
                    <a href="page3.html">B.Tech in BioTechnology</a>
                    <a href="page4.html">B.Tech in C.S.E.(Internet of Things)</a>
                    <a href="page5.html">B.Tech in C.S.E.(Machine Learning)</a>
                    <a href="page6.html">B.Tech in C.S.E.(Data Science)</a>
                    <a href="page7.html">B.Tech in Smart Manufacturing</a>
                    <a href="page8.html">B.Tech in BioMedical Engineering</a>
                    <a href="page9.html">B.Tech in Robotics and Automations</a>
                    <a href="page10.html">B.Tech in Mechatronics</a>
                </div>
            </li>
            <li><a href="FAQs.html">FAQs</a></li>
            <li><a href="asprts.html">SPORTS</a></li>
            <li><a href="/login/signup.php">LOGIN</a></li>
        </ul>
    </nav>
    <div class="container">
        <img src="PicsArt_12-16-11.16.31.jpg" alt="">
        <h1>Chanakya Institute of Technology, Bihar</h1>
        <p>Education can beat youth and beauty both!</p>
        <button><a href="">ENROLL NOW</a></button>
    </div>
    <div class="content">
        <h2>FACILITIES</h2>
        <div class="containingFacilities">
            <img src="IMG_20211126_144242.jpg" alt="Avatar" class="image">
            <div class="middle">
                <a href="hostel.html" class="text">Hostel</a>
            </div>
        </div>
        <div class="containingFacilities">
            <img src="IMG_20211126_143950.jpg" alt="Avatar" class="image">
            <div class="middle">
                <a href="cafe.html" class="text">Cafeteria</a>
            </div>
        </div>
        <div class="containingFacilities">
            <img src="IMG_20211126_144134.jpg" alt="Avatar" class="image" style="height: 241px;">
            <div class="middle">
                <a href="spgrnd.html" class="text">Sports_Facilties</a>
            </div>
        </div>
    </div>
    <div class="content">
        <!-- <h2>FACILITIES</h2> -->
        <div class="containingFacilities">
            <img src="IMG_20211126_144152.jpg" alt="Avatar" class="image"
                style="height: 252px;position: relative; top: -1.2em;">
            <div class="middle">
                <a href="#" class="text">Library</a>
            </div>
        </div>
        <div class="containingFacilities">
            <img src="IMG_20211126_170933.jpg" alt="Avatar" class="image"
                style="height: 318px;position: relative;top: -2.4em">
            <div class="middle">
                <a href="indsp.html" class="text">Halls</a>
            </div>
        </div>
    </div>

    <div class="connectingImage">
        <!-- <h2>Slideshow Gallery</h2> -->
        <div class="content" style="width: 10em;position: relative; top: 0em;">
            <h2>SMALL PICTURE GALLLERY</h2>
        </div>
        <div class="containImage">
            <div class="mySlides">
                <div class="numbertext">1 / 6</div>
                <img src="IMG_20211126_143922.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">2 / 6</div>
                <img src="IMG_20211126_170849.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 6</div>
                <img src="IMG_20211126_144134.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">4 / 6</div>
                <img src="IMG_20211126_144152.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">5 / 6</div>
                <img src="IMG_20211126_170933.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">6 / 6</div>
                <img class="lastImg" src="IMG_20211126_172119.jpg" style="width:100%;">
            </div>

            <a class="prev" onclick="plusSlides(-1)"></a>
            <a class="next" onclick="plusSlides(1)"></a>

            <div class="caption-container">
                <p id="caption"></p>
            </div>

            <div class="row">
                <div class="column">
                    <img class="demo cursor" src="IMG_20211126_143922.jpg" style="width:100%" onclick="currentSlide(1)"
                        alt="Lecture Halls">
                </div>
                <div class="column">
                    <img class="demo cursor" src="IMG_20211126_170849.jpg" style="width:100%" onclick="currentSlide(2)"
                        alt="Campus">
                </div>
                <div class="column">
                    <img class="demo cursor" src="IMG_20211126_144134.jpg" style="width:100%" onclick="currentSlide(3)"
                        alt="Lecture Halls">
                </div>
                <div class="column">
                    <img class="demo cursor" src="IMG_20211126_144152.jpg" style="width:100%" onclick="currentSlide(4)"
                        alt="Hostel">
                </div>
                <div class="column">
                    <img class="demo cursor" src="IMG_20211126_170933.jpg" style="width:100%" onclick="currentSlide(5)"
                        alt="Main Bluiding">
                </div>
                <div class="column">
                    <img class="demo cursor" src="IMG_20211126_172119.jpg" style="width:100%" onclick="currentSlide(6)"
                        alt="Hostel">
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="content">
        <h2>HONORABLE FACULTY MEMBERS</h2>
    </div>
    <div class="facultymembers">
        <div class="card">
            <img src="abhilash.jpg" alt="John" class="teacher">
            <h1>Abhilash</h1>
            <h1 class="surname">Jindal</h1>
            <p class="title phd1">Structural Properties of Networks, Algorithms and Data Structures</p>
            <p>Ph.D. (Johns Hopkins University)</p>

            <p><button class="Postbtn">Professor</button></p>
        </div>
        <div class="card">
            <img src="abhijnan.jpg" alt="John" class="teacher">
            <h1>Abhijnan Chakraborty</h1>
            <p class="title title3">Social Computing, Information Retrieval, Machine Learning</p>
            <p class="phd">Ph.D. (IIT Kharagpur)</p>

            <p><button class="Postbtn">Professor</button></p>
        </div>
        <div class="card">
            <img src="anshul.jpg" alt="John" class="teacher">
            <h1>Rahul</h1>
            <h1 class="surname">Garg</h1>
            <p class="title intro1">
                Machine Learning, Big Data Analytics, Neuroimaging, High Performance Computing</p>
            <p class="degree">Ph.D. (IIT Delhi)</p>

            <p><button class="Postbtn">Professor</button></p>
        </div>
        <div class="card">
            <img src="ashish.jpg" alt="John" class="teacher">
            <h1>Sanjeev</h1>
            <h1 class="surname">Roy</h1>
            <p class="title intro">
                High Speed Networks, Graph Theory, Algorithms</p>
            <p class="sanjeev">Ph.D. (University of California)</p>

            <p><button class="Postbtn">Professor</button></p>
        </div>
        <div class="card">
            <img src="keerti.jpg" alt="John" class="teacher">
            <h1>Keerti</h1>
            <h1 class="surname">Chaudhary</h1>
            <p class="title intro2">Fault-Tolerant Algorithms, Extremal Graph Structures, Dynamic Algorithms</p>
            <p class="degree2">Ph.D. (IIT Kanpur, Uttar Pradesh)</p>

            <p><button class="Postbtn">Professor</button></p>
        </div>

    </div>
    <div class="facultymembers">
        <div class="card">
            <img src="abhilash.jpg" alt="John" class="teacher">
            <h1>Abhilash</h1>
            <h1 class="surname">Jindal</h1>
            <p class="title phd1">Structural Properties of Networks, Algorithms and Data Structures</p>
            <p>Ph.D. (Johns Hopkins University)</p>

            <p><button class="Postbtn">Professor</button></p>
        </div>
        <div class="card">
            <img src="abhijnan.jpg" alt="John" class="teacher">
            <h1>Abhijnan Chakraborty</h1>
            <p class="title title3">Social Computing, Information Retrieval, Machine Learning</p>
            <p class="phd">Ph.D. (IIT Kharagpur)</p>

            <p><button class="Postbtn">Professor</button></p>
        </div>
        <div class="card">
            <img src="anshul.jpg" alt="John" class="teacher">
            <h1>Rahul</h1>
            <h1 class="surname">Garg</h1>
            <p class="title intro1">
                Machine Learning, Big Data Analytics, Neuroimaging, High Performance Computing</p>
            <p class="degree">Ph.D. (IIT Delhi)</p>

            <p><button class="Postbtn">Professor</button></p>
        </div>
        <div class="card">
            <img src="ashish.jpg" alt="John" class="teacher">
            <h1>Sanjeev</h1>
            <h1 class="surname">Roy</h1>
            <p class="title intro">
                High Speed Networks, Graph Theory, Algorithms</p>
            <p class="sanjeev">Ph.D. (University of California)</p>

            <p><button class="Postbtn">Professor</button></p>
        </div>
        <div class="card">
            <img src="keerti.jpg" alt="John" class="teacher">
            <h1>Keerti</h1>
            <h1 class="surname">Chaudhary</h1>
            <p class="title intro2">Fault-Tolerant Algorithms, Extremal Graph Structures, Dynamic Algorithms</p>
            <p class="degree2">Ph.D. (IIT Kanpur, Uttar Pradesh)</p>

            <p><button class="Postbtn">Professor</button></p>
        </div>

    </div> -->
    <div class="content" style="margin-bottom: 3em;">
        <h2>Principal Corner</h2>
    </div>
    <div class="principalMsg" style="float: left;position: relative; left: 55px;">
        <img src="WhatsApp Image 2022-01-02 at 1.11.42 PM.jpeg" alt="" style="height: 350px; width: 250px;">
        <h2>Prof. V Ramgopal Rao</h2>
        <h4>Director</h4>
        <h5 style="margin-bottom: 2em;">Chanakya Institute of Technology</h5>
    </div>
    <div class="messaging" style="position: relative; left: 90px; width: 85%;">
        <p style="font-size: medium;">
            Welcome to CIT. You have arrived at one of the finest institutions in India, an institution that is
            ranked among the top 50 in the world for Engineering & Technology in the recent QS world subject rankings.
            CIT is also an institution that has produced over half of all the Unicorn (Billion dollar valued tech
            startups) founders from India. We take pride in the quality of research our faculty do, in the technologies
            that we put out into the society and the world class graduates we produce. Please take your time in browsing
            through the webpage and do not hesitate to contact us if you require any more information. </p><br>
        <p style="font-size: medium;">
            If you are looking for an opportunity to study or work in a world-class institution in India, you have come
            to the right place! Nationality is no bar here. At CIT we have adopted a simple philosophy: Get the
            brilliant minds, create the right atmosphere for them to flourish and then step back and watch them grow
            into confident adults or world-leaders. The first part of this three part formula is ably conducted by my
            colleagues in their respective departments and centres, many of whom you know as prominent researchers in
            their areas, and the third part of this formula is in your hands. As the Head of this great institution, let
            me share our collective vision regarding the second part, the critical link, that takes you from a fresher
            to a confident adult or a new hire to a leader in your field.
        </p><br>
        <p style="font-size: medium;">
            First, let me tell you about the place you will live when you join us: We are located in the vibrant part of
            the national capital that is popularly called Nalanda, Bihar. It is a picturesque 325 acre campus, with some of
            the country???s finest schools, a cr??che on campus and many world class research institutions and hospitals
            within a 2 KM radius. The campus location takes care of most of your worries ??? from infant or school-going
            children to working spouses and old parents.
        </p>
    </div>
    <footer>
        <div class="f-contact" data-aos="zoom-in-up" data-aos-offset="200">
            <div>
                <img src="PicsArt_12-16-11.16.31.jpg" alt="collegeLogo">
                <h1>CIT, Bihar</h1><br>
                <!-- <p>Knowledge beats both youth and beauty</p> -->
                <p>17km Stone, Nh-2, Nalanda,Bihar</p>
                <p>801307(Bihar)</p>
                <p>INDIA</p>
                <h2>Contact us</h2>
                <p>0522-1800-1808, 25056, 45652</p>
                <p>+91-2525252525</p>
                <p>E-mail</p>
                <p>chkytech@gmail.com</p><br>
                <h2 class="helplineno">Admissions Helpline #</h2><br>
                <p>9898989898, 6869656362, 7875747976</p>
            </div>


            <div>
                <h2>Why CIT?</h2><br>
                <p>Ranking</p>
                <p>Faculty</p>
                <p>Alumni</p>
                <p>Infrastructure</p>
                <p>Testimonials</p>
                <p>Academic Ordinance</p><br>
                <h2>Media</h2><br>
                <p>News</p>
                <p>Events</p>
                <p>Workshops</p>
                <p>Convocations</p>
                <p>Photo Gallery</p>
                <p>Video Gallery</p>
                <p>Downloads</p>

            </div>

            <div>
                <h2>Institutes</h2><br>
                <p>Institute of Engineering & Technology</p>
                <p>Institute of Business Management</p>
                <p>Institute of Pharmaceuticals Research</p>
                <p>Institute of Applied Sciences & Humanities</p>
                <p>Institute of Legal Studies and Research</p>
                <p>University Polytechnic</p>
                <p>Faculty of Education</p>
                <br>
                <h2>Others Links</h2>
                <br>
                <p>Examinations & Results</p>
                <p>Careers</p>
                <p>Academic Calendar</p>
                <p>Staff Login</p>
                <p>Student Login</p>
            </div>

            <div>
                <h2>Admissions</h2><br>
                <p>Admission Process-2021</p>
                <p>Graduate Courses</p>
                <p>Post Graduate Courses</p>
                <p>Doctoral Programmes</p>
                <p>Diploma Courses</p>
                <p>Certificates Courses</p>
                <p>FAQs</p>
                <p>How to Apply</p>
                <p>Apply Now</p>
            </div>
        </div>
        <div class="newsletter">
            <div data-aos="fade-up" data-aos-offset="200">
                <h2>Subscribe for latest Updates</h2>
            </div>
            <div class="n-text" data-aos="fade-up-right" data-aos-offset="200">
                <label>
                    <input type="text" name="" placeholder="Enter your email">
                    <button>Subscribe</button>

                </label>
            </div>
        </div>
    </footer>


    <script src="college1.js"></script>
    <script src="gallery.js"></script>


</body>

</html>
