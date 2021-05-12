<!DOCTYPE html>
<?php


  $Message_sent =false;

  if(isset($_POST['email']) && $_POST['email'] != ''){

   if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){

     //submit the form
       $userName = $_POST['name'];
       $userEmail = $_POST['email'];
       $Subject = $_POST['Subject'];
       $Message = $_POST['message'];


       $to = "elsheikh.ammar@gmail.com";
       $body = "";

       $body .="From: ".$userName. "\r\n";
       $body .="Email: ".$userEmail. "\r\n";
       $body .="Subject: ".$$Subject. "\r\n";
       $body .="Message: ".$Message. "\r\n";

        mail($to, $Subject, $body);
        $Message_sent = true;

   }
else{
  $invalid_class_name = "form-invalid";
}
  }

 ?>



<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Elsheikh-Portfolio</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="icon" href="img/logo-pic.png">
  <!-- font awesome -->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <!-- main css -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <link rel="stylesheet" type="text/css" href="css/style-switcher.css">
  <link rel="stylesheet" type="text/css" class="alternate-style" title="color-1" href="css/skins/color-1.css">
  <link rel="stylesheet" type="text/css" class="alternate-style" title="color-2" href="css/skins/color-2.css" disabled>
  <link rel="stylesheet" type="text/css" class="alternate-style" title="color-3" href="css/skins/color-3.css" disabled>
  <link rel="stylesheet" type="text/css" class="alternate-style" title="color-4" href="css/skins/color-4.css" disabled>
  <link rel="stylesheet" type="text/css" class="alternate-style" title="color-5" href="css/skins/color-5.css" disabled>

</head>

<body>

<?php
if($Message_sent);
?>
<h3> thanks, we'll be in touch</h3>

<?php
else:

?>
  <!--header start-->
  <header class="header">
    <div class="container">
      <div class="row justify-content-between">
        <div class="logo">
          <a href="index.html">AR</a>
        </div>
        <div class="hamburger-btn outer-shadow hover-in-shadow">
          <span></span>
        </div>
      </div>
    </div>
  </header>
  <!--header end -->
  <!-- navigation menu start -->
  <nav class="nav-menu">
    <div class="close-nav-menu outer-shadow hover-in-shadow">&times;</div>
    <div class="nav-menu-inner">
      <ul>
        <li><a class="link-items inner-shadow active" href="#Home">Home</a></li>
        <li><a class="link-items outer-shadow hover-in-shadow" href="#about">About</a></li>
        <li><a class="link-items outer-shadow hover-in-shadow" href="#Services">Services</a></li>
        <li><a class="link-items outer-shadow hover-in-shadow" href="#">Portfolio</a></li>
        <li><a class="link-items outer-shadow hover-in-shadow" href="#contact">Contact</a></li>
      </ul>
    </div>
    <!-- copyright-->
    <p class="copyright-text">&copy; 2021 Elsheikh</p>
  </nav>
  <div class="fade-out-effect">
  </div>
  <!-- navigation menu end -->

  <!--home section start-->
  <section class="home-section section active" id="Home">
    <!--effect wrap start-->
    <div class="effect-wrap">
      <div class="effect effect-1">
      </div>
      <div class="effect effect-2">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div>
        </div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
      <div class="effect effect-3">
      </div>
      <div class="effect effect-4">
      </div>
      <div class="effect effect-5">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <!--effect wrap end-->
    <div class="container">
      <div class="row full-screen align-items-center">
        <div class="home-text">
          <p>Hello</p>
          <div class="word">
          <h2 style="margin-bottom: 30px;">
            <span>I</span>
            <span>'</span>
            <span>m</span>&nbsp;
            <span>A</span>
            <span>m</span>
            <span>m</span>
            <span>a</span>
            <span>r</span>
&nbsp;
            <span>E</span>
            <span>l</span>
            <span>s</span>
            <span>h</span>
            <span>e</span>
            <span>i</span>
            <span>h</span>
            <span>k</span></h2></div>
          <h1 id="demo"class="typing" style="font-size: 2rem; font-weight: 500; color: var(--skin-color);" ></h1>

          <a href="#about" class="link-items btn-1 outer-shadow hover-in-shadow">More About Me</a>
        </div>
        <div class="home-img">
          <div class="img-box">
            <img src="img/profile-picture.png" class="outer-shadow" alt="profile-picture">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--home section end-->
  <!--About section start-->
  <section class="about-section section" id="about">
    <div class="container">
      <div class="row">
        <div class="section-title">
          <h2 data-heading="main info">About Me</h2>
        </div>
      </div>
      <div class="row">
        <div class="about-img">
          <div class="img-box inner-shadow">
            <img src="img/profile-picture.png" class="outer-shadow" alt="profile-picture">
          </div>
          <!--social  media start-->
          <div class="social-links">
            <a href="https://www.instagram.com/ammar_elsheikh/" class="outer-shadow hover-in-shadow"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/ammar-elsheikh-8721a6201/" target="_blank" class="outer-shadow hover-in-shadow"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <!--social  media End-->
        </div>
        <div class="about-info">
          <div class="about-info">
            <p><span>I am a fresh graduated of computer science studies, majoring in software Engineering at University Malaysia Pahang. I have managed projects in several programing languages such as C, C++, php, Html5, CSS3, JAVASCRIPT and Java, and have undertaken both web
                and mobile based applications projects.</span></p>
            <p><span>With my engineering coursework and projects experience, my innovative mindset and affinity for problem solving, and my history of successful team projects, I believe I am a strong candidate for this role.</span></p>
            <!--<p>- Knowledge of HTML5, CSS, and JavaScript.</p>
             <p>- A passion for the web and an eagerness to learn.</p>
             <p>- Superb written and verbal communication skills.</p>
             <p>- An ability to work autonomously and manage your workload and deadlines effectively.</p>
             <p>- Excellent organizational skills.</p>-->
            <a href="certificate/my-cv.pdf" target="_blank" class="btn-1 outer-shadow hover-in-shadow">Download My CV </a>
            <a href="#contact" class="link-items btn-1 outer-shadow hover-in-shadow">Hir Me </a>
          </div>
        </div>
      </div>
      <!--about tabs start-->
      <div class="row">
        <div class="about-tabs">
          <span class="tab-items outer-shadow active" data-target=".skills">Skills</span>
          <span class="tab-items" data-target=".experience">Experience</span>
          <span class="tab-items" data-target=".education">Education</span>
          <span class="tab-items" data-target=".certificate">certificates</span>
        </div>
      </div>
      <!--about tabs End-->

      <!--Skills tabs start-->
      <div class="row">
        <div class="skills tab-content active">
          <div class="row">
            <!-- skill item start-->
            <div class="skill-items">
              <p>Html</p>
              <div class="prograss inner-shadow">
                <div class="prograss-bar" style="width: calc(40% - 14px)">
                  <span>40%</span>
                </div>
              </div>
            </div>
            <!-- skill item End-->
            <!-- skill item start-->
            <div class="skill-items">
              <p>CSS</p>
              <div class="prograss inner-shadow">
                <div class="prograss-bar" style="width: calc(40% - 14px)">
                  <span>40%</span>
                </div>
              </div>
            </div>
            <!-- skill item End-->
            <!-- skill item start-->
            <div class="skill-items">
              <p>Java Script</p>
              <div class="prograss inner-shadow">
                <div class="prograss-bar" style="width: calc(40% - 14px)">
                  <span>40%</span>
                </div>
              </div>
            </div>
            <!-- skill item End-->
            <!-- skill item start-->
            <div class="skill-items">
              <p>WordPress</p>
              <div class="prograss inner-shadow">
                <div class="prograss-bar" style="width: calc(40% - 14px)">
                  <span>40%</span>
                </div>
              </div>
            </div>
            <!-- skill item End-->
            <!-- skill item start-->
            <div class="skill-items">
              <p>Git</p>
              <div class="prograss inner-shadow">
                <div class="prograss-bar" style="width: calc(40% - 14px)">
                  <span>40%</span>
                </div>
              </div>
            </div>
            <!-- skill item End-->
            <!-- skill item start-->
            <div class="skill-items">
              <p>GitHub</p>
              <div class="prograss inner-shadow">
                <div class="prograss-bar" style="width: calc(40% - 14px)">
                  <span>40%</span>
                </div>
              </div>
            </div>
            <!-- skill item End-->
            <!-- skill item start-->
            <div class="skill-items">
              <p>Time Managment</p>
              <div class="prograss inner-shadow">
                <div class="prograss-bar" style="width: calc(40% - 14px)">
                  <span>40%</span>
                </div>
              </div>
            </div>
            <!-- skill item End-->
            <!-- skill item start-->
            <div class="skill-items">
              <p>Problem Solvoing</p>
              <div class="prograss inner-shadow">
                <div class="prograss-bar" style="width: calc(40% - 14px)">
                  <span>40%</span>
                </div>
              </div>
            </div>
            <!-- skill item End-->
            <!-- skill item start-->
            <div class="skill-items">
              <p>Team Work</p>
              <div class="prograss inner-shadow">
                <div class="prograss-bar" style="width: calc(40% - 14px)">
                  <span>40%</span>
                </div>
              </div>
            </div>
            <!-- skill item End-->
          </div>
        </div>
      </div>
      <!--Skills tabs End-->
      <!--experience tabs start-->
      <div class="row">
        <div class="experience tab-content">
          <div class="row">
            <div class="timeline">
              <div class="row">
                  <!--timeline items start-->
                <div class="timeline-items">
                  <div class="timeline-items-inner outer-shadow">
                    <i class="fas fa-briefcase icon"></i>
                    <span>March, 2021-present</span>
                    <h3>BikeBear</h3>
                    <h4>Feont-End web Development (Internship)</h4>
                  <a href="https://www.bikebear.com.my/" target="_blank" class="btn-1 outer-shadow hover-in-shadow">View</a>
                  </div>
                </div>
                <!--timeline items end-->
                <!--timeline items start-->
                <div class="timeline-items">
                  <div class="timeline-items-inner outer-shadow">
                    <i class="fas fa-briefcase icon"></i>
                    <span>2020-2021</span>
                    <h3>JAVASCRIPT, JAVATYPE, HTML and CSS FINAL YEAR PROJECT</h3>
                    <h4>Fitness Mobile and Web based</h4>
                    <a href="https://fitday-8341c.web.app/" target="_blank" class="btn-1 outer-shadow hover-in-shadow">View</a>
                    <!--   <p>llama is the eCommerce platform in Saudi Arabia.
                                            the website specializing in the latest fashion for women.</p>-->
                  </div>
                </div>
                <!--timeline items end-->
                <!--timeline items start-->
                <div class="timeline-items">
                  <div class="timeline-items-inner outer-shadow">
                    <i class="fas fa-briefcase icon"></i>
                    <span>2019-2020</span>
                    <h3>EX-CO of Academic Egyptian Students in University Malaysia Pahang</h3>
                    <h4>Responsible for 45 Egyptian Students</h4>
                    <!--  <a href="https://fitday-8341c.web.app/" target="_blank" class="btn-1 outer-shadow hover-in-shadow">View</a>-->
                  </div>
                </div>
                <!--timeline items end-->
                <!--timeline items start-->
                <div class="timeline-items">
                  <div class="timeline-items-inner outer-shadow">
                    <i class="fas fa-briefcase icon"></i>
                    <span>2018-2019</span>
                    <h3>HTML, PHP, CSS and JAVASCRIPT Project</h3>
                    <h4>Car Rental System</h4>
                    <!--  <a href="https://fitday-8341c.web.app/" target="_blank" class="btn-1 outer-shadow hover-in-shadow">View</a>-->
                  </div>
                </div>
                <!--timeline items End-->
                <!--timeline items start-->
                <div class="timeline-items">
                  <div class="timeline-items-inner outer-shadow">
                    <i class="fas fa-briefcase icon"></i>
                    <span>2017-2018</span>
                    <h3>C Language Project</h3>
                    <h4>Shopping System</h4>
                    <!--  <a href="https://fitday-8341c.web.app/" target="_blank" class="btn-1 outer-shadow hover-in-shadow">View</a>-->
                  </div>
                </div>
                <!--timeline items End-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--experience tabs End-->
      <!--education tabs start-->
      <div class="row">
        <div class="education tab-content">
          <div class="row">
            <div class="timeline">
              <div class="row">
                <!--timeline items start-->
                <div class="timeline-items">
                  <div class="timeline-items-inner outer-shadow">
                    <i class="fas fa-graduation-cap icon"></i>
                    <span>2016-2021</span>
                    <h3>University Malaysia Pahang</h3>
                    <h4>Bachelor of Computer Science (Software Engineering) With Honors</h4>
                  </div>
                </div>
                <!--timeline items End-->
                <!--timeline items start-->
                <div class="timeline-items">
                  <div class="timeline-items-inner outer-shadow">
                    <i class="fas fa-graduation-cap icon"></i>
                    <span>22011-2014</span>
                    <h3>Nasser Secondary School</h3>
                    <h4>High School Certificate</h4>
                  </div>
                </div>
                <!--timeline items End-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--education tabs End-->
      <!--certificate tabs start-->
      <div class="row">
        <div class="certificate tab-content">
          <div class="row">
            <div class="timeline">
              <div class="row">
                <!--timeline items start-->
                <div class="timeline-items">
                  <div class="timeline-items-inner outer-shadow">
                    <i class="fas fa-certificate icon"></i>
                    <span>March, 2021 </span>
                    <h3>CSS Essential Training</h3>
                    <h4>linkedin</h4>
                    <p>This course is available on the linkedin website by the
                      linkedin Elearning school, which spoke in detail about CSS3.</p>
                    <a href="certificate/CSS3.pdf" target="_blank" class="btn-1 outer-shadow hover-in-shadow">View</a>
                  </div>
                </div>
                <!--timeline items End-->
                <!--timeline items start-->
                <div class="timeline-items">
                  <div class="timeline-items-inner outer-shadow">
                    <i class="fas fa-certificate icon"></i>
                    <span>March, 2021 </span>
                    <h3>HTML Essential Training</h3>
                    <h4>linkedin</h4>
                    <p>This course is available on the linkedin website by the
                      linkedin Elearning school, which spoke in detail about HTML5,</p>
                    <a href="certificate/html5.pdf" target="_blank" class="btn-1 outer-shadow hover-in-shadow">View</a>
                  </div>
                </div>
                <!--timeline items End-->
                <!--timeline items start-->
                <div class="timeline-items">
                  <div class="timeline-items-inner outer-shadow">
                    <i class="fas fa-certificate icon"></i>
                    <span>March, 2021</span>
                    <h3>CSS: Animation</h3>
                    <h4>linkedin</h4>
                    <p>This course is available on the linkedin website by the
                      linkedin Elearning school, which spoke in detail about Animation in CSS3.</p>
                    <a href="certificate/css_animation.pdf" target="_blank" class="btn-1 outer-shadow hover-in-shadow">View</a>
                  </div>
                </div>
                <!--timeline items End-->
                <!--timeline items start-->
                <div class="timeline-items">
                  <div class="timeline-items-inner outer-shadow">
                    <i class="fas fa-certificate icon"></i>
                    <span>March, 2021</span>
                    <h3>Adobe XD Essential Training: Design [2020 Q1]</h3>
                    <h4>linkedin</h4>
                    <p>This course is available on the linkedin website by the
                      linkedin Elearning school, which spoke in detail about Adobe XD.</p>
                    <a href="certificate/css-XD.pdf" target="_blank" class="btn-1 outer-shadow hover-in-shadow">View</a>
                  </div>
                </div>
                <!--timeline items End-->
                <!--timeline items start-->
                <div class="timeline-items">
                  <div class="timeline-items-inner outer-shadow">
                    <i class="fas fa-certificate icon"></i>
                    <span>March, 2021</span>
                    <h3>Learning Adobe XD (2019)</h3>
                    <h4>linkedin</h4>
                    <p>This course is available on the linkedin website by the
                      linkedin Elearning school, which spoke in detail about Adobe XD.</p>
                    <a href="certificate/XD2.pdf" target="_blank" class="btn-1 outer-shadow hover-in-shadow">View</a>
                  </div>
                </div>
                <!--timeline items End-->
                <!--timeline items start-->
                <div class="timeline-items">
                  <div class="timeline-items-inner outer-shadow">
                    <i class="fas fa-certificate icon"></i>
                    <span>March, 2021</span>
                    <h3>scientific webinar</h3>
                    <h4>Academics & Researchers Platforms (IFAD)</h4>
                    <p>The IFAD platform provided a scientific research course
                      with the aim of systematic investigation of scientific
                      theories and hypotheses.</p>
                    <a href="certificate/scientific-webinar.pdf" target="_blank" class="btn-1 outer-shadow hover-in-shadow">View</a>
                  </div>
                </div>
                <!--timeline items End-->
                <!--timeline items start-->
                <div class="timeline-items">
                  <div class="timeline-items-inner outer-shadow">
                    <i class="fas fa-certificate icon"></i>
                    <span>March, 2021</span>
                    <h3>Illustrator 2020 Essential Training</h3>
                    <h4>linkedin</h4>
                    <p>This course is available on the linkedin website by the
                      linkedin Elearning school, which spoke in detail about Illustrator 2020.</p>
                    <a href="certificate/Illustrator.pdf" target="_blank" class="btn-1 outer-shadow hover-in-shadow">View</a>
                  </div>
                </div>
                <!--timeline items End-->
                <!--timeline items start-->
                <div class="timeline-items">
                  <div class="timeline-items-inner outer-shadow">
                    <i class="fas fa-certificate icon"></i>
                    <span>feb, 2021</span>
                    <h3>JavaScript Essential Training</h3>
                    <h4>linkedin</h4>
                    <p>This course is available on the linkedin website by the
                      linkedin Elearning school, which spoke in detail about Javescript.</p>
                    <a href="certificate/js.pdf" target="_blank" class="btn-1 outer-shadow hover-in-shadow">View</a>
                  </div>
                </div>
                <!--timeline items End-->
                <!--timeline items start-->
                <div class="timeline-items">
                  <div class="timeline-items-inner outer-shadow">
                    <i class="fas fa-certificate icon"></i>
                    <span>feb, 2021</span>
                    <h3>The DOM in JavaScript, jQuery, AngularJS, and React</h3>
                    <h4>linkedin</h4>
                    <p>This course is available on the linkedin website by the
                      linkedin Elearning school, which spoke in detail about The DOM in JavaScript, jQuery, AngularJS, and React.</p>
                    <a href="certificate/dom.pdf" target="_blank" class="btn-1 outer-shadow hover-in-shadow">View</a>
                  </div>
                </div>
                <!--timeline items End-->


              </div>
            </div>
          </div>
        </div>
      </div>
      <!--certificate tabs End-->
    </div>
  </section>
  <!--About section end-->
  <!--Services section start-->
  <section class="Service-section section" id="Services">
    <div class="container">
      <div class="row">
        <div class="section-title">
          <h2 data-heading="Services">What I Do</h2>
        </div>
      </div>
      <div class="row">
        <!--Service item start-->
        <div class="Service-items">
          <div class="Service-items-inner outer-shadow">
            <div class="icon inner-shadow">
              <i class="fas fa-mobile-alt"></i>
            </div>
            <h3>Responsive design</h3>
            <p>Responsive design is a graphic interface (GUI). so their designs
              can automatically adapt to the browser space to ensure content
              consistency across devices..</p>
          </div>
        </div>
        <!--Service item End-->
        <!--Service item start-->
        <div class="Service-items">
          <div class="Service-items-inner outer-shadow">
            <div class="icon inner-shadow">
              <i class="fas fa-laptop-code"></i>
            </div>
            <h3>WordPress Development</h3>
            <p>To create, and build websits, many of which
              combine text with sounds, pictures, graphics, and video clips.
              I am responsible for bulding the website layout meeting the client requierments.</p>
          </div>
        </div>
        <!--Service item End-->
        <!--Service item start-->
        <div class="Service-items">
          <div class="Service-items-inner outer-shadow">
            <div class="icon inner-shadow">
              <i class="fas fa-code"></i>
            </div>
            <h3>Clean Code</h3>
            <p> code that is easy to understand and easy to change.
              Easy to understand and  easy to read, whether that
              reader is the original author of the code or somebody else.</p>
          </div>
        </div>
        <!--Service item End-->
      </div>
    </div>
  </section>

  <!--portfolio section start-->
  <section class="portfolio-section section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="section-title">
          <h2 data-heading="portfolio">Latest Works</h2>
        </div>
      </div>
        <!--portfolio filter start-->
        <div class="row">
          <div class="portfolio-filter">
            <span class="filter-item" data-target="all">all</span>
            <span class="filter-item" data-target="web application">web application</span>
            <span class="filter-item" data-target="mobile app">mobile app</span>

          </div>
        </div>
          <!--portfolio filter end-->

      </div>
          </section>


  <!--contact section start-->
  <section class="contact-section section" id="contact">
    <div class="container">
      <div class="row">
        <div class="section-title">
          <h2 data-heading="Contact">Get In Touch</h2>
        </div>
      </div>
      <div class="row">
        <!-- cotact items start-->
        <div class="contact-items">
          <div class="contact-items-inner outer-shadow">
            <i class="fas fa-phone"></i>
            <span>Phone</span>
            <a style="color: var(--skin-color); text-decoration: underline;" href="Tel:+601135609316">+601135609316</a>
          </div>
        </div>
        <!-- cotact items End-->
        <!-- cotact items start-->
        <div class="contact-items">
          <div class="contact-items-inner outer-shadow">
            <i class="fas fa-envelope"></i>
            <span>Email</span>
            <a style="text-decoration: underline; color: var(--skin-color);" href="mailto:elsheikh.ammar@gmail.com">elsheikh.ammar@gmail.com</a>
          </div>
        </div>
        <!-- cotact items End-->
        <!-- cotact items start-->
        <div class="contact-items">
          <div class="contact-items-inner outer-shadow">
            <i class="fas fa-map-marker-alt"></i>
            <span>Adress</span>
            <p>Ampang, Kauala Lampur, Malaysia</p>
          </div>
        </div>
        <!-- cotact items End-->
      </div>
      <div class="row">
        <div class="contact-form">
          <form id="form-conatct" action="index.php" method="post" class="form">
            <div class="row">
              <div class="w-50">
                <div class="input-group outer-shadow hover-in-shadow">
                  <input name="name" type="text" placeholder="Name" class="input-control" id="inputName">
                </div>
                <div class="input-group outer-shadow hover-in-shadow">
                  <input <?= $invalid_class_name ?? "" ?> name="email" type="email" placeholder="Email" class="input-control" id="inputEmail" >
                </div>
                <div class="input-group outer-shadow hover-in-shadow">
                  <input name="Subject" type="text" placeholder="Subject" class="input-control " id="inputSub" >
                </div>
              </div>
              <div class="w-50">
                <div class="input-group outer-shadow hover-in-shadow">
                  <textarea name="Message" lass="input-control myText" placeholder="Message" id="inputMessage"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="submit-btn">
              <button  name="send" type="submit" value="send" class="btn-1 outer-shadow hover-in-shadow">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <?php
endif:
  ?>
  <!--contact section End-->

  <!--style swicher start-->
  <div class="style-switcher outer-shadow">
    <div class="style-switcher-toggler s-icon outer-shadow hover-in-shadow">
      <i class="fas fa-cog fa-spin"></i>
    </div>
    <div class="day-night s-icon outer-shadow hover-in-shadow">
      <i class="fas"></i>
    </div>
    <h4>Theme Colors</h4>
    <div class="colors">
      <span class="color-1" onclick="setActiveStyle('color-1')"></span>
      <span class="color-2" onclick="setActiveStyle('color-2')"></span>
      <span class="color-3" onclick="setActiveStyle('color-3')"></span>
      <span class="color-4" onclick="setActiveStyle('color-4')"></span>
      <span class="color-5" onclick="setActiveStyle('color-5')"></span>
    </div>
  </div>
  <!--style swicher End-->
  <!--main js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://alertifyjs.com/build/alertify.js'></script>
  <script src="js/main.js"></script>
  <script src="js/style-switcher.js"></script>
  <script src="js/letter.js"></script>


</body>

</html>
