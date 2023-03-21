<?php

session_start();

?>

<!doctype html>
<html lang="en">

<!-------------------------------------- HEAD ---------------------------------------->

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, ">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- for icon of error msg -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css'>

  <!-- For scrolling Animation -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>CodeWalkerz-SCA</title>

  <link rel="stylesheet" href="style.css">
  <!-- <link rel="stylesheet" href="stylee.scss"> -->
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">

</head>

<!-------------------------------------------------------------------------------------->









<!---------------------------------------BODY------------------------------------->

<body>
  <!-- nav bar -->
  <div>
    <nav class="navbar navbar-expand-lg navbar navbar-expand-sm fixed-top navbar-dark bg-dark">

      <a class="navbar-brand ml-3 " href="codewalkerz.html" style="font-weight:bolder ;font-size:30px"
        style="background-image: url('./images/logo.png');">S C A</a>
      <button id="tg-btn" class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse sticky-top" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto justify-content-center">
          <li class="nav-item">
            <a href="" style="background-image: url('./images/logo.png');"></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link  " href="codewalkerz.html">Home </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="#contest">ContestDetails</a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="#event">Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#prizes">Prizes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#register">Register</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>

      </div>
    </nav>
  </div>


  <!-- home -->
  <div id="home" class=" ">
    <div class="row justify-content-md-center">
      <div class="col-md-10">
        <div class="contents text-center text-light">
          <!-- for animation -->
          <div data-aos="zoom-in" data-aos-offset="200" data-aos-delay="50" data-aos-duration="900"
            data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
            data-aos-anchor-placement="top-center">
            <img src="./images/logo.png" alt="NIT Logo" style="height: 200px ;margin-top: 25px;">
          </div>
          <p class="text-center  text-light">Presented By: <br> <span style="font-size:25px;">Society Of Computer Application </span><br>NIT JAMSHEDPUR</p>
          <p class="text-success display-4 text-light fw-bold "
            style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
            ALL INDIA MEGA CODING EVENT</p>
          <h1 class="   mb-5  line-1 anim-typewriter">&#60;\CodeWalkerz&#62;</h1>
          <!-- <a data-aos="fade-right" href="#register" class="btn btn-primary m-2 mb-5">Register</a> -->
          <!-- <a  data-aos="fade-left" href="#event" class="btn btn-primary m-2 mb-5">Events</a> -->
          <!-- <input type="button" name="" id="" class="btn btn-primary m-2 mb-5" value="Register">
  <input type="button" name="" id="" class="btn btn-primary m-
  2 mb-5" value="Details"> -->

  <div class="wrap">
    <button class="button button1"><a style="list-style-type: none ; color:black;" href="#register">Register here!</a></button>
  </div>
  <div class="wrap">
    <button id="event-button" onclick="toEvents()">Events</button>
  </div>
        </div>
      </div>
    </div>
  </div>



  <!-- contest details -->


  
  <div  id="contest"  data-aos="zoom-in" data-aos-offset="200" data-aos-delay="50" data-aos-duration="900"
  data-aos-easing="ease-in-out" data-aos-mirror="true">
    <div class="flex d-flex justify-content-center ">
      <h1 class="text-success mb-4 mt-5 "><b> Contest Details</b></h1>
    </div>
    <div class="row justify-content-md-center">
      <div class="col-md-10">
        <p class="mb-4 fs-md-2 fw-bold detail"> CodeWalkerz is an All-India Mega
          Coding Event organized by Society of
          Computer Application, NIT Jamshedpur.
          It's a two days competition comprising of
          an offline on-campus fun event and a
          mega competitive programming contest
          wherein seven questions have to be
          solved. Exciting cash prizes, goodies and
          surprises awaits your way!
        </p>
        <h3 class="text-center text-dark  "> <b>Where?</b> </h3>
        <p class="mb-4 detail">The event will take place on the online platform of Coding Ninjas.<img src="images/codestudio.png" alt="" width="120px"></p>
        
        <h3 class="text-center text-dark "> <b>When?</b> </h3>
        
        <p class="mb-5 detail" style="font-size: 25px; font-weight: bold; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #11999e;">1 <sup>st</sup> & 2 <sup>nd</sup> April, 2023</p>
        <h3 class="text-center text-dark mb-4 "> <b>Total Entries</b> </h3>
        <div class="detail part" style="color: #11999e;"><span id="value">2500</span>+</div>
        <p class="mb-5  text-center" style="color: #11999e; font-size: 30px; font-weight: bold;"> Participants</p>

        <div class="row">
          <div class="col-md-6">
            <h3 class="text-center text-dark mb-4 "> <b>Powered By</b> </h3>
        <div class="text-center">
          
          <img src="images/codingninja.png" alt="" width="150px">
        </div>
          </div>
          <div class="col-md-6">
            <h3 class="text-center text-dark mb-4 "> <b>Associated By</b> </h3>
        <div class="text-center">
          
          <img src="images/codingblocks.png" alt="" width="150px">
        </div>
          </div>
        </div>

        
       


      </div>
    </div>
  </div>





  <!------------------------ Event details ----------------------->


  <div id="event" >
    <div class="flex d-flex justify-content-center ">
      <h1 class="text-success mb-4 mt-4 "><b>Events</b></h1>
    </div>
    <div class="row flex d-flex justify-content-md-center"   data-aos="zoom-out-down"  data-aos-offset="200" data-aos-delay="50" data-aos-duration="900"
    data-aos-easing="ease-in-out" data-aos-mirror="true">
      <div class="col-md-10">
        <p class="text-center mb-4" style="font-size: larger;">Society of Computer Applications, NIT
          Jamshedpur in collaboration with Coding
          Ninjas presents, an All India Two day long mega coding event.
          The event starts on the 1<sup>st</sup> of April at 10 AM.
          The questions will be posted as per the
          following pattern:</p>
          
          <div class="container">
            <div class="">

              <div>
                <h1 class="card-header text-center bg-light">Day 1 (Snap the Quest!!)</h1>

              </div>

              <!-- crack the binges -->
              <div class="row mt-5">
                <div class="col-md-8 ">
                  <div class="">
                    <h3>CRACK THE BINGES (elimination round 1)</h3>
                  </div>
                  <br>
                  <div>
                    <p style="font-size: 16px;"> It can be a sword of Deadpool or the call of the 
                      Professor, it can be a shield of Captain or the crime master gogo keeping an eye on you, a 
                      chemical formula from Heisenberg or John Wick being on his next hunt, a 500 rupee note 
                      from The Artist, or your name being next in the Death Note. 
                      So, the rules are simple just binge watch everything on the internet and get ready for some 
                      crazy quiz answer them and get saved from being eliminated in this round and propel 
                      yourself to the next one. </p>
                  </div>
                  <div>
                    <ul  style="list-style-type: circle;">
                      <li> <span style="color: #11999e;"><b>Venue:</b></span>  National Institue Of Technology, Jamshedpur Room No: 309, 310, 311</li> 
                      <li> <span style="color: #11999e;"><b>Timing:</b></span> 10 AM to 12 PM</li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4 text-center">
                  <div >
                    <img src="images/event_1.jpeg" alt="" width="300px" height="200px">
                  </div>
                  
                </div>
                
              </div>

              <!-- dig the riddles -->
              <div class="row mt-3">
                <div class="col-md-8 ">
                  <div >
                    <h3 >Dig The Riddle (elimination round 2)</h3>
                  </div>
                  <br>
                  <div>
                    <p style="font-size: 16px;"> Okay!!! Now that you have successfully made up to this 
                      round, Evaluate the riddles in the best newest forms. Think! Solve! & Dig! into the next cave 
                      each time, till you encounter the squirrel. 
                      Rules this time are little different you got to surf the internet filter the content and find the 
                      clue to solve the riddle let see what’s your threshold!!!  </p>
                  </div>
                  <div>
                    <ul class=" " style="list-style-type: circle;">
                      <li> <span style="color: #11999e;"><b>Venue:</b></span>  National Institue Of Technology, Jamshedpur Room No: 309, 310, 311</li> 
                      <li><span style="color: #11999e;"><b>Timing:</b></span> 2 PM to 3 PM</li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4 text-center">
                  <div >
                    <img src="images/event2.png" alt="" width="300px">
                  </div>
                  
                </div>
                
              </div>

              <!-- BEG! BORROW! STEAL -->

              <div class="row mt-3">
                <div class="col-md-8 ">
                  <div>
                    <h3>BEG! BORROW! STEAL! (final Stage)</h3>
                  </div>
                  <br>
                  <div>
                    <p style="font-size: 16px;"> Aah!! Glad that you made up to this round we must 
                      say you are a tough nut to crack!! NOW, Hunt precisely like a good hunter until you shoot 
                      each bird, before the sand goes down! Either borrow it, beg for it or steal from the hunter 
                      right beside you. Let’s see how far can you go this round it will test your IQ, behaviour and 
                      manipulation skills.
                       </p>
                  </div>
                  <div>
                    <ul class=" " style="list-style-type: circle;">
                      <li> <span style="color: #11999e;"><b>Venue:</b></span>  National Institue Of Technology, Jamshedpur Room No: 309, 310, 311</li> 
                      <li><span style="color: #11999e;"><b>Timing:</b></span> 3 PM to 5 PM</li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4 text-center">
                  <div >
                    <img src="images/event3.jpeg" alt="" width="300px">
                  </div>
                  
                </div>
                
              </div>

              <div class="text-center mt-5" >
                <a href="#prizes" class="btn btn-warning"> To Know more about Prizes</a>
              
              </div>
              
            </div>

            <!-- day 2 -->
            <div class="mb-5">

              <div>
                <h1 class="card-header text-center bg-light">Day 2</h1>

              </div>

              <div class=" mt-5">
                <h2 class="text-center">ALL INDIA MEGA CODING EVENT</h2>
                <div class="mt-4 text-center">
                  <p style="font-size: 20px;">Welcome <coders>!!•
                    🧑‍💻CODEWALKERZ IS LIVE👩‍💻
                    After The Amazing completion of  SNAP THE QUEST, it's time now for the 2nd event,
                    Which is : 
                    The All India Mega Coding Event.
                    
                    Get ready for some crazy 🧠 Brain storming Questions of DSA and CP, Coders will be asked 7 questions from None other than The CODING NINJAS on their platform Coding Studio, which will Go Live all over the Country, yes your heard it right, the whole Nation !!!!
                     So Charge your laptops, Get some almonds, Get your brain ready, Mug up your favourite Algorithms and let's get started.</p>
                </div>

                <div class="mt-5 text-center" >
                  <h3 class="" >Rules</h3>
                  
                  <div class="container text-center ">
                    <ul class="myUL" style="display: inline-block; text-align: left; list-style-type: circle;">
                      <li id="para">Coders are required to avoid plagiarism.</li>
                      <li id="para">Hustle should be in focus, rather just the  submission of code.</li>
                      <li id="para">All systems taking part, must have a good internet connection.</li>
                    </ul>
                  </div>
                 
                </div>

                <div class="text-center ">
                  <h3>Timing</h3>
                  <p id="para">2 <sup>nd</sup> April | SUN | 2 PM - 5 PM </p>
                </div>

                <div class="mt-4 text-center">
                  <h3 >Platform</h3>
                  <img src="images/codingninja.png" alt="" width="150px">&nbsp; <img src="images/codestudio.png" alt="" width="150px">
                </div>
                <div class="text-center mt-5">
                  <a href="http://bit.ly/42mMTgR" class="btn btn-warning">Registration Link</a>

                </div>
              </div>


            </div>
           
          </div>
      </div>
    </div>
  </div>



  <!---------------------------------- prizes ------------------------------>

  <div class="container" id="prizes" >
    <div class="flex d-flex justify-content-center ">
      <h1 class="text-success mb-4 mt-5 "><b> Prizes</b></h1>
    </div>
    <p class="text-center" style="font-size: 25px; font-weight: bold;">We are overwhelmed to inform you of all the perks of the event
      which are as follows:</p>
      
      <div>
        <h2 class="card-header text-center bg-light" style="color:black; font-family: serif;">Day 1 (Prizes)</h2>

        <p class="text-center mt-3" style="font-size: 20px; font-weight: bold; color: #11999e;">
          Prizes upto Rs. 5000 including cash prizes and food coupons 
          (for the first 3 winners) </p>

          <div class="flex d-flex justify-content-center">
            <ul style="list-style-type: circle;">
              <li><b>First Winner:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1500 Cash + 500 Food Voucher </li>
              <li><b>Second Winner:</b> &nbsp; 1000 Cash + 400 Food Voucher</li>
              <li><b>Third Winner:</b> &nbsp;&nbsp;&nbsp;&nbsp; 750 Cash + 300 Food Voucher</li>
            </ul>
          </div>
        
      </div>

      <div class="mt-4">
        <h2 class="card-header text-center bg-light" style="color:black; font-family: serif;">Day 2 (Prizes)</h2>

        <p class="text-center mt-3" style="font-size: 20px; font-weight: bold; color: #11999e;">
          Prizes upto Rs. 25000 including cash prizes and Amazon Vouchers
          </p>

          <div class="row container mt-5">

            <div class="col-sm-6  text-center ">
              <ul class="myUL" style="display: inline-block; text-align: left; list-style-type: circle;">
                <li><b>First Winner:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3K Amazon Voucher </li>
                <li><b>Second Winner:</b> &nbsp; 2K Amazon Voucher</li>
                <li><b>Third Winner:</b> &nbsp;&nbsp;&nbsp;&nbsp; 1.5K Amazon Voucher</li>
                <li><b>Fourth Winner:</b> &nbsp;&nbsp; 1K Amazon Voucher</li>
                <li><b>Fifth Winner:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1K Amazon Voucher</li>
              </ul>
            </div>

           
           
            <div class="col-sm-6 text-center" >
              <img src="images/amazon.png" alt="">
            </div>
          </div>
          <p class="text-center mt-4" style="font-size: 20px; font-weight: bold; color: #11999e;">
            *6th to 10th position holders will be rewarded with an exclusive

            </p>
            <h2 class="text-center text-dark">Coding Ninja's Bag</h2>
            <div class="text-center">
              <img src="images/bag.jpg" alt="" width="170px">
              <p> <b> “ 25% markdown will be there on the desired Coding
                Ninja courses for every participant. ” </b></p>
            </div>
            <p class="text-center mt-4" style="font-size: 20px; font-weight: bold; color: #11999e;">
              *Top 3 Winners from 1st year and 7 winners from 2nd year of MCA, NITJSR will be rewarded with an
    exclusive
  
              </p>
              <h2 class="text-center text-dark">Coding Ninja's T-shirt</h2>
              <div class="text-center mt-3">
                <img src="images/ninjatshirt.png" alt="">
              </div>
      </div>

  </div>



  

  
  <!-- --------------------Registration Form----------------- -->
  
  <div class="mt-5" id="register" style="background: linear-gradient(to right , black, rgb(48, 47, 47));
  color:white;">
    <div class="flex d-flex justify-content-center mb-1 ">
      <h1 class="text-success mt-4 "><b>Registration Form</b></h1>
    </div>
    <section class=" h-custom">
      <div class="container py-5 ">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-lg-8 col-xl-6" data-aos="flip-right" data-aos-offset="200" data-aos-delay="50"
            data-aos-duration="900" data-aos-easing="ease-in-out" data-aos-mirror="true">
            <div class="card rounded-3">
              <div class="card-body p-md-5">
                <h3 class="pb-2 pb-md-0 mb-md-5 px-md-2 text-center">
                  Registration For Day 1
                </h3>

                <form class="px-md-2" id="reg-form" method="post" action="register.php">
                  <div class="form-outline">
                    <label class="form-label font-weight-bold" for="fname">Name :</label>
                    <input type="text"
                           id="fname"
                           name="name"
                           class="form-control"
                           placeholder="Enter your name here..."
                           required

                    />
                  </div>

                  <div class="form-outline ">
                    <label class="form-label font-weight-bold" for="email">Email :</label>
                    <input type="email" id="email" name="email" class="form-control"
                      placeholder="Enter your Email..." required />

                    <!-- for error msg -->
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-times-circle"></i>
                    <small>Error message</small>
                  </div>
                  <div class="form-outline ">
                    <label class="form-label font-weight-bold" for="phone">Whatsapp Number :</label>
                    <input type="number" maxlength="10" id="phone" name="phone" class="form-control"
                      placeholder="Enter your Phone Number..." required/>

                    <!-- for error msg -->
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-times-circle"></i>
                    <small>Error message</small>
                  </div>

                  <div class="row">
                    <div class="col-md-6 ">
                      <div class="form-outline datepicker">
                        <label for="yPassing" class="form-label font-weight-bold">Year of Passing :</label>
                        <input type="number" name="year_of_passing" class="form-control" id="yPassing" min="2020"
                          max="2028" step="1" value="2023" required/>

                        <!-- for error msg -->
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-times-circle"></i>
                        <small>Error message</small>
                        <!-- <input
                          type="date"
                          class="form-control"
                          id="exampleDatepicker1"
                        /> -->
                      </div>
                    </div>
                    <div class="col-md-6 ">
                      <div class="form-outline">
                        <label for="course" class="form-label font-weight-bold">Select your course :</label>
                        <select class="select form-control-lg" name="course" id="course" style="width: 100%" required>
                          <option value="" selected disabled>Course</option>
                          <option value="btech">BTech</option>
                          <option value="mtech">MTech</option>
                          <option value="mca">MCA</option>
                          <option value="msc">MSC</option>
                          <option value="other">Other</option>
                        </select>
                        <!-- for error msg -->
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-times-circle"></i>
                        <small>Error message</small>
                      </div>
                    </div>
                  </div>

                  <!-- <div class="mb-4">
                    <div class="form-outline">
                      <label for="college" class="form-label font-weight-bold">Select your College :</label>
                      <select class="select form-control-lg" id="college" name="college" style="width: 100%"></select>
                    </div>
                  </div> -->
                 

                  <button type="submit" class="btn btn-primary btn-lg mb-1" id="form-submit" value="register" name="submit">
                    Submit
                  </button>
                  <div style="color:red; margin-top:10px;">
                    <h3>***Rules***</h3>
                    <ul>
                      <li><b>Snap the Quest</b> will be held in teams comprising 3/4 members.</li>
                      <li>Form must be filled by all the members.</li>
                      <li>Team names will be assigned on the spot on the event day.</li>
                      <li>If someone is not capable of forming a team of atlaest 3 peers, then he/she will be assigned a team discreatly on the spot of the event.</li>
                    </ul>
                  </div>
                </form>
                <!-- </div> -->
              </div>
            </div>
          </div>
        </div>
    </section>
  </div>


<!-----------------------About us --------------------------->

<div id="about" >
  <div class="flex d-flex justify-content-center mb-4 ">
    <h1 class="text-success  mt-5 "><b>About US</b></h1>
  </div>
  <div class="row  flex d-flex justify-content-md-center mb-5">
    <div class="col-md-10 " >
      <p class="detail  text-center" style="font-size: 20px;">
        Society of Computer Applications of National Institute of Technology,
        Jamshedpur was established on 6th February, 2016 in the premises of the Department of Computer Applications,
        with the vision of organising social and professional activities and events which will help in enriching
        ,fortifying and strengthening the community within the Department.
      </p>
    </div>
  </div>


  <div class="row  flex d-flex justify-content-center ">
    <div class="col-sm-4 text-center mb-4">
      <div class="icon">
        <i class="fa fa-pencil "></i>
      </div>
      <h4 class="text-success"> <b>For The Students</b> </h4>
      <p class=" " style="font-size: 15px;">A Happy life is one spent in learning and yearning. <br> Our aim
        is to reciprocate it “For the Students”.</p>
    </div>
    <div class="col-sm-4 text-center mb-4">
      <div class="icon">
        <i class="fa fa-code"></i>
      </div>
      <h4 class="text-success"> <b>By The Students</b> </h4>
      <p class=" " style="font-size: 15px;">Knowledge is Power. Education is premise of progress when it is brought up “By the
        Students”.</p>
    </div>
    <div class="col-sm-4 text-center mb-4">
      <div class="icon">
        <i class="fa fa-user"></i>
      </div>
      <h4 class="text-success"> <b>Of The Students</b> </h4>
      <p class=" " style="font-size: 15px;">Our success is no accident. It is perseverance,sacrifice <br> and most of all, the Pure
        love “Of the Students”.</p>
    </div>
  </div>

</div>


  <!-- Contact section -->

 
  <div style="background-color: black;" id="contact">
   
    <div class="container">

    
    <div class="flex d-flex justify-content-center  ">
      <h1 class="text-success "><b>Contact Us</b></h1>
    </div>
   
    <div class="row text-white mt-5 text-center " >
      <div class="col-md-6" style="border-right: 1px solid whitesmoke;">
        <ul style="list-style-type: none; padding: 10px;">
          <li id="contact-us">
            <img src="images/linkedin.png" alt="" width="45px"> &nbsp;
            <a href="https://www.linkedin.com/company/society-of-computer-applications-nit-jamshedpur">LinkedIn</a> 
            
          </li>
          <li id="contact-us">
            <img src="images/insta.png" alt="" width="30px"> &nbsp; 
           <a href="https://instagram.com/scanitjsr">Instagram</a> 
          </li>
          <li id="contact-us">
            <img src="images/fb.png" alt="" width="45px"> &nbsp;&nbsp;
           <a href="https://facebook.com/scanitjsr">Facebook</a> 
          </li>
          <li id="contact-us">
            <img src="images/twitter.png" alt="" width="40px"> &nbsp; &nbsp;
           <a href="https://twitter.com/scanitjsr">Twitter</a> 
          </li>
        </ul>
      </div>
      <div class="col-md-6 mt-5">
        <h4>Department Of Computer Applications <br> NIT Jamshedpur</h4>
        <br>
        
        <p> <span style="color: #11999e;"> <b>Phone:  </b> </span>  +919518455871</p>
        <p> <span style="color: #11999e;"> <b>Email: </b> </span> <a class="text-white" href="mailto: society.developers.2023@gmail.com"> society.developers.2023@gmail.com</a></p>
      </div>
      
    </div>
   

   



      <!-- <a class="footer-link" href="">Website</a> -->
      
        
        <div class=" text-center" >

          <p class="copyright-paragraph">© All Rights Are Reserved, SCA NITJSR !!</p>

        </div>
       
     
    </div>
  </div>



  <!-- top button -->
  <button onclick="topFunction()" id="myBtn" class="button1" title="Go to top">Top</button>
  <!-- For dropdown menu -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="index.js"></script>

  <!-- Script for scrolling animation -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"-->
<!--    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"-->
<!--    crossorigin="anonymous"></script>-->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <!-- form processor script -->
  <script src="formprocessor.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
      toastr.options = {
          "closeButton": true,
          "newestOnTop": false,
          "progressBar": true,
          "positionClass": "toast-bottom-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
      }


  <?php


  if (isset($_SESSION['errors']))
  {
      $errors = $_SESSION['errors'];
            foreach ($errors as $error){
                ?>
                     toastr.error('<?php echo $error ?>');
                <?php
            }
      unset($_SESSION['errors']);
  }

  ?>
</script>

</body>

</html>