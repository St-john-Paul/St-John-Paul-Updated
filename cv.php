<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ST. JOHN PAUL II VOC & HIGH SCH MBALALA-MUKONO.</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .p-4 {
            text-align: left; /* Aligns text to the left */
            padding: 16px; /* Optional: Adds padding */
        }
        .fox {
            font-weight: bold; /* Ensures the font is bold */
        }
        .name, .fox {
            text-align: left; /* Aligns text to the left */
        }
        .btn {
    white-space: nowrap; /* Prevent text from wrapping */
    padding: 0.375rem 0.75rem; /* Adjust padding as needed */
    font-size: 18px; /* Ensure the text size is appropriate */
}
    
        .toggle-button_ {
            width: 30px;
            height: 30px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            cursor: pointer;
            border: 2px solid #333;
            border-radius: 5px;
            padding: 5px;
        }

        .toggle-button_ .line {
            width: 100%;
            height: 4px;
            background-color: #333;
        }
        .navbar-toggler_ {
            background: none;
            border: none;
            padding: 0;
        }

    
        .both {
            display: flex;
            flex-direction: row;
            align-content: center;
            justify-content: center;
            align-items: center;
            align-items: center;
            padding: 20px;
        }

        .begin {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }


.responsive-img {
    max-width: 100%; /* Ensure image scales down to fit container */
    height: auto;    /* Maintain aspect ratio */
}
       
        .mainContainer{
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .int, .int2 {
            padding: 10px;
        }

        .int2{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-content: center;
            /* border: 3px solid black; */
        }
        .int img {
            max-width: 100%;
            height: auto;
        }

        .tito {
            font-size: 1.25em;
            margin: 0;
        }

        .int2 b {
            font-size: 1em;
            color: blue;
        }

        @media (max-width: 768px) {
            .begin {
                flex-direction: column;
                text-align: center;
            }

            .int2 h5 {
                font-size: 1em;
            }

            .int2 b {
                font-size: 0.9em;
            }
        }

        @media (max-width: 480px) {
            .tito {
                font-size: 1em;
            }

            .int2 b {
                font-size: 0.8em;
            }

            .int img {
                width: 70px;
                height: 70px;
            }
        }
    </style>

<style>
    .wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        align-self: center;
        justify-self: center;
        width: 90%;
    }
    .centerCards{
        justify-content: center;
    }
    .img-preview {
        max-width: 100%;
        height: auto;
        margin-bottom: 10px;
    }
    
    .thumbnails {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
    }
    
    .thumbnail {
        width: 100px; /* Adjust as needed */
        height: auto;
        cursor: pointer;
    }
    
    .thumbnail.active {
        border: 2px solid #000; /* Highlight active thumbnail */
    }

    .mybd{
        border: 2px solid green;
    }
    </style>


<style>
    .card-group {
        display: flex;
        flex-wrap: wrap;
        gap: 10px; /* Adjust gap as needed */
        justify-content: center;
    }
    
    .card {
        flex: 1 1 calc(25% - 20px); /* Adjust the width of each card */
        margin: 1px;
        max-width: 900px; /* Adjust as needed */
        
    }
    
    .card-img-top {
        width: 100%;
        height: auto;
    }
    
    .card-body {
        text-align: center;
    }
    
    .card-footer {
        text-align: center;
    }
    
    @media (max-width: 768px) {
        .card {
            flex: 1 1 calc(50% - 20px); /* Adjust for smaller screens */
        }
    }
    
    @media (max-width: 576px) {
        .card {
            flex: 1 1 100%; /* Stack cards vertically on very small screens */
        }
    }
    .cv-both_{
        display: flex;
        flex-direction: column;
        width: inherit;

    }
    </style>
    <style>
        .cv-card {
            border: 2px solid #007bff;
            border-radius: 15px;
            padding: 20px;
            margin: 20px auto;
            max-width: 700px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
    
        .cv-card img {
            border: 3px solid #ffc107;
            border-radius: 10px;
            height: 220px;
            width: 260px;
            object-fit: cover;
        }
    
        .cv-card h3, .cv-card h4 {
            font-family: 'Arial', sans-serif;
            font-weight: bold;
        }
    
        .cv-card h3 {
            color: #007bff;
        }
    
        .cv-card h4 {
            color: #6c757d;
        }
    
        .cv-card hr {
            border-top: 2px solid #007bff;
        }
    
        .cv-card ul {
            list-style-type: disc;
            padding-left: 20px;
        }
    
        .cv-card p, .cv-card ul {
            font-size: 16px;
            line-height: 1.6;
        }
    </style>
    
</head>
<body>
    <!-- Spinner Start-->
<div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="loader" role="status">
        <span></span>
      </div>
    </div>
    <!-- Spinner End -->
    <div class="both " style="border-top: 5px solid orange; background-color: rgb(255, 255, 255);">
       
        <div class="int "> 
            <img src="./img/Badge.png" class="responsive-img" >
        </div>
        <div class="int2">
            <a href="index.php" class="">
                <center><h5 class="tito" style=" font-size: 2.92vw;font-weight: bold; color:darkred; font-family: Rockwell Extra Bold;" >ST. JOHN PAUL II VOC & HIGH SCH MBALALA-MUKONO.</h5></center>
               <center><b style="font-size: 1.5vw; color: blue;">YOUR SUCCESS BEGINS HERE.</b></center>
            </a>
           </div>
 
   </div>

       <!-- Navbar Start -->
       <nav class="navbar  navbar-expand-md   sticky-top p-0 ">
        <div class="container-fluid pt-1 pb-1" style="background-color:rgb(248, 215, 155);">
          <!-- <a class="navbar-brand" href="#">Home</a> -->
          <button class="navbar-toggler_   d-block d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNavl" aria-expanded="false" aria-label="Togglel navigation">
            <span class="">
                <div class="toggle-button_">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav nav-pills w-100" style=" background-color:rgb(248, 215, 155); justify-content: center;display: flex; padding-top: 5px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.php"  style="font-weight: bolder; color:whitesmoke; border: 1px solid whitesmoke; background-color: rgb(111, 111, 242); border-radius: 10px; margin-left: 5px;">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./about.php" style="font-weight: bolder; color:whitesmoke; border: 1px solid whitesmoke; background-color: rgb(111, 111, 242); border-radius: 10px; margin-left: 5px;">About</a>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="font-weight: bolder; color:whitesmoke; border: 1px solid whitesmoke; background-color: rgb(111, 111, 242); border-radius: 10px; margin-left: 5px;">Clubs</a>
                <ul class="dropdown-menu">
                  <li><a href="Clubs.php" class="dropdown-item active" style="font-weight: bolder; background-color: rgb(111, 111, 242);">Music, Dance & Drama Club</a></li>
                  <li><a href="./Clubs.php" class="dropdown-item" style="font-weight: bolder;">Science Clubs</a></li>
                  <li><a href="./Clubs.php" class="dropdown-item" style="font-weight: bolder;">Nkobazambogo Club</a></li>
                  <li><a href="./Clubs.php" class="dropdown-item" style="font-weight: bolder;">Interact Club</a></li>
                  <li><a href="./Clubs.php" class="dropdown-item" style="font-weight: bolder;">Scouts & Girl Guides Club</a></li>
                  <li><a href="./Clubs.php" class="dropdown-item" style="font-weight: bolder;">Wildlife & Environment Club</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="font-weight: bolder; color:whitesmoke; background-color: rgb(111, 111, 242); border: 1px solid whitesmoke; border-radius: 10px; margin-left: 5px;">Subjects</a>
                <ul class="dropdown-menu">
                  <li><a href="./courses.php" class="dropdown-item active" style="font-weight: bolder; background-color: rgb(111, 111, 242);">O-Level Subjects</a></li>
                  <li><a href="./A-level-courses.php" class="dropdown-item" style="font-weight: bolder;">A-Level Subjects</a></li>
                  <li><a href="./vocational-courses.php" class="dropdown-item" style="font-weight: bolder;">Vocational Courses</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"  style="font-weight: bolder; color:whitesmoke; border: 1px solid whitesmoke; background-color: rgb(111, 111, 242); border-radius: 10px; margin-left: 5px;">Mission</a>
                <ul class="dropdown-menu fade-down m-0">
                  <li><a href="./Mission&Vision.php" class="dropdown-item active" style="font-weight: bolder; background-color: rgb(111, 111, 242);">Mission</a></li>
                  <li><a href="./Mission&Vision.php" class="dropdown-item" style="font-weight: bolder;">Vision</a></li>
                  <li><a href="./Mission&Vision.php" class="dropdown-item" style="font-weight: bolder;">Core Values</a></li>
                  <li><a href="./Mission&Vision.php" class="dropdown-item" style="font-weight: bolder;">Objectives</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" id="Admission" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="font-weight: bolder; color:whitesmoke; border: 1px solid whitesmoke; background-color: rgb(111, 111, 242); border-radius: 10px; margin-left: 5px;">Admission</a>
                <ul class="dropdown-menu fade-down m-0">
                  <li><a href="./O-level.php" class="dropdown-item active" style="font-weight: bolder; background-color: rgb(111, 111, 242);">O-Level Courses</a></li>
                  <li><a href="./A-level.php" class="dropdown-item" style="font-weight: bolder;">A-Level Courses</a></li>
                  <li><a href="./vocation.php" class="dropdown-item" style="font-weight: bolder;">Vocational Courses</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="font-weight: bolder; color:whitesmoke; border: 1px solid whitesmoke; border-radius: 10px; margin-left: 5px; background-color: darkred;">More</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item active" href="./Fees.php" style="font-weight: bolder; background-color: rgb(111, 111, 242);">Fees</a></li>
                  <li><a class="dropdown-item" href="./Gallery.php" style="font-weight: bolder;">Gallery</a></li>
                  <li><a class="dropdown-item" href="./FAQs.php" style="font-weight: bolder;">FAQs</a></li>
                  <li><a class="dropdown-item" href="./cv.php" style="font-weight: bolder;">CV</a></li>
                  <li><a class="dropdown-item" href="./Other_requirements.php" style="font-weight: bolder;">Requirements</a></li>
                  <li><a class="dropdown-item" href="./video.php" style="font-weight: bolder;">Videos</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="./Co-curricular-Activities.php" style="font-weight: bolder;">Co-curricular Activities</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./team.php" style="font-weight: bolder; color:whitesmoke; border: 1px solid whitesmoke; background-color: rgb(111, 111, 242); border-radius: 10px; margin-left: 5px;">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./contact.php" style="font-weight: bolder; color:whitesmoke; border: 1px solid whitesmoke; background-color: rgb(111, 111, 242); border-radius: 10px; margin-left: 5px;">Contact</a>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="font-weight: bolder; color:whitesmoke; border: 1px solid whitesmoke; background-color: rgb(111, 111, 242); border-radius: 10px; margin-left: 5px;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                  </svg>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="./login.php" class="dropdown-item" style="font-weight: bold; color: darkred;">Login</a></li>
                  <li><a href="#" class="dropdown-item" style="font-weight: bold; color: rgb(111, 111, 242);;">SignUp</a></li>
                  <li><a href="#" class="dropdown-item" style="font-weight: bold; color: rgb(111, 111, 242);;">My Profile</a></li>
                  <li><a href="#" class="dropdown-item" style="font-weight: bold; color: rgb(111, 111, 242);;">Privacy</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
     <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid  page-header" style="margin-bottom: 5px;">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-10 text-center" style=" width: inherit; background-color: darkred; margin-left: 1px;  margin-top: 0px; ">
        <h1 class="display-3 text-white animated slideInDown">Board of Governors</h1>
    </div>
    <br>
   <div class=" ">

<!-- CV One -->
<div class="cv-card">
    <div class="text-center">
        <img src="./img/st john/board/fr maviiri.jpg" alt="Fr. Maviiri">
    </div>
    <h3 class="text-center mt-3">Rev. Fr. Prof. John Chrysostom Maviiri</h3>
    <h4 class="text-center">Chairman Board Of Governors</h4>
    <hr>
    <div>
        <h5><strong>Education:</strong></h5>
        <p>PhD in Dogmatic Theology (Urban University, Rome) 1987.</p>
        <p>Doctoral Dissertation: Primacy in the Communion of Churches.</p>
        <h5><strong>Engagements:</strong></h5>
        <ul>
            <li>1987 – 1991: Teacher and Rector, St. Mbaaga Major Seminary, Ggaba, Uganda</li>
            <li>1991 – 1995: Parish Priest, Nakulabye Parish, Kampala, Uganda</li>
            <li>1995 - 2011: Professor in the Faculty of Theology, The Catholic University of Eastern Africa (CUEA, Nairobi)</li>
            <li>Dean of Faculty of Theology (1996 – 2002)</li>
            <li>Vice Chancellor of CUEA (August 2002 – August 2011)</li>
            <li>2011 – 2012: Sabbatical Spiritual Year</li>
            <li>2012 – 2014: Pastoral/Administrative Experience – Lugazi Diocese</li>
            <li>2015 – 2021: Vice Chancellor of Uganda Martyrs University, Nkozi</li>
            <li>2021 – 2022: Sabbatical Spiritual Year</li>
            <li>2022 – 2023: Associate Parish Priest, St. Balikuddembe Church, Kiwanga</li>
            <li>2023 to-date: Parish Priest, Nkokonjeru Parish, Episcopal Vicar for the Religious in Lugazi Diocese, Dean, Nkokonjeru Deanery, Council member, University of Kisubi, Chairperson, BOG, Queen of Apostles Philosophy Centre, Jinja, Chairperson, BOG, John Paul II Vocational and High School, Mukono</li>
        </ul>
        <h5><strong>Research Interests:</strong></h5>
        <p>Ecumenism, theology in African context and higher education</p>
        <h5><strong>Hobbies:</strong></h5>
        <p>Reading, farming, and sports.</p>
    </div>
</div>

<!-- CV Two -->
<div class="cv-card">
    <div class="text-center">
        <img src="./img/st john/board/mr alex.jpg" alt="Mr. Alex">
    </div>
    <h3 class="text-center mt-3">Muheesi Alex Gerald</h3>
    <h4 class="text-center">Chief Finance Officer</h4>
    <hr>
    <div>
        <h5><strong>Education:</strong></h5>
        <ul>
            <li>PhD in Business Administration (In progress, Kabale University, 2021-2025)</li>
            <li>Postgraduate Diploma in Education (PDE) (Kampala International University, 2017-2018)</li>
            <li>Master of Business Administration (MBA) (Uganda Martyrs University, 2012-2014)</li>
            <li>Degree in Procurement and Logistics Management (Kyambogo University, 2004-2007)</li>
            <li>Various Certificates in Planning, Budgeting, Procurement, and Education.</li>
        </ul>
        <h5><strong>Current Position:</strong></h5>
        <p>Assistant Lecturer & Head of Department (Management & Entrepreneurship) at Uganda Martyrs University (2023 - Present)</p>
        <h5><strong>Previous Experience:</strong></h5>
        <ul>
            <li>Assistant Lecturer at Uganda Martyrs University (2016-2023)</li>
            <li>Assistant Lecturer & Head of Department (Business) at Uganda Martyrs University - Kabale Campus (2015-2018)</li>
            <li>Part-time lecturer in Procurement at Kabale University (2016-2019)</li>
            <li>Visiting facilitator in Logistics and Procurement at various institutions (2015-2016, 2013-2015)</li>
            <li>A-Level Mathematics Teacher at Bethany High School and Science Foundation College (2004-2014)</li>
        </ul>
        <h5><strong>Key Skills:</strong></h5>
        <ul>
            <li>Integrity & Ethics</li>
            <li>Professionalism</li>
            <li>Leadership</li>
            <li>Teamwork</li>
            <li>Training</li>
            <li>Communication</li>
            <li>Continuous Improvement</li>
        </ul>
        <h5><strong>Community Engagement:</strong></h5>
        <p>Research Coordinator at Uganda Martyrs University, Internship Coordinator at Uganda Martyrs University, Chairperson of various committees related to procurement and education.</p>
    </div>
</div>

<!-- CV Three -->
<div class="cv-card">
    <div class="text-center">
        <img src="./img/st john/latest/ccta2.jpg" alt="Sr. Dr. Marie">
    </div>
    <h3 class="text-center mt-3">Sr. Dr. Marie Goretti Nakitende</h3>
    <h4 class="text-center">Director</h4>
    <hr>
    <div>
        <h5><strong>Education:</strong></h5>
        <ul>
            <li>Doctor of Philosophy (PhD) Education Leadership and Management, Cardinal Stritch University, Milwaukee, Wisconsin-USA (December 2012)</li>
            <li>Master of Business Administration (MBA) Cardinal Stritch University, Milwaukee, Wisconsin USA (May 2009)</li>
            <li>Bachelor of Arts in Business Administration and Management (Minor in Communication & Computer Science) (B.A) Alverno College, Milwaukee, Wisconsin USA (May 2006)</li>
            <li>Assoc. Deg. Information Technology and Business Administration. Milwaukee Area Technical College, Wisconsin USA (May 2003)</li>
            <li>Diploma Accounting & Finance, Nkokonjeru Institute of Management, Uganda (1995)</li>
        </ul>
        <h5><strong>Professional Development:</strong></h5>
        <ul>
            <li>Transforming Employability For Social Change in East Africa (TESCEA) Training (2021)</li>
            <li>Pedagogy Training for Transformative teaching and learning (2019)</li>
            <li>Academic Leadership and Emotional Intelligence (2018)</li>
            <li>Scientific Data Management Systems Training (2018)</li>
            <li>Training of Trainers Entrepreneurship Academy Training (2019)</li>
            <li>Research methodology and Scholarly Writing Training (2019)</li>
            <li>Research Supervision of Postgraduate Students Training (2019)</li>
            <li>Principal Investigator - Community Lending with Outside Capital (CLOC): Case study of small scale enterprises, Uganda. (2019 – 2021)</li>
        </ul>
        <h5><strong>Community Outreach and Engagement:</strong></h5>
        <ul>
            <li>Director St. John Paul II Voc. High School, Mbalala-Mukono</li>
            <li>Dean, Faculty of Business Administration and Management Uganda Martyrs University (2017 to Feb, 2023)</li>
            <li>Chairperson University Management Committee (UMC) Uganda Martyrs University</li>
            <li>Coordinator-Business Desk, Faculty of Business Administration and Management</li>
            <li>Coordinator UBTEB, Secretariat, Faculty of Business Administration and Management</li>
        </ul>
    </div>
</div>
   </div>
    <div class="arrow-container">
        <a href="./team.php" class="arrow back">
          &#8592; <!-- Left Arrow -->
        </a>
        <a href="./Gallery.php" class="arrow next">
          &#8594; <!-- Right Arrow -->
          
        </a>
      </div>
      <br>
    <!-- Footer Start -->
 <div class="container-fluid  footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Quick Link</h4>
                <a class="btn btn-link" href="./about.php" style="font-size: 15px; font-weight: bolder;">About Us</a>
                <a class="btn btn-link" href="./contact.php" style="font-size: 15px; font-weight: bolder;">Contact Us</a>
                <a class="btn btn-link" href="./Mission&Vision.php" style="font-size: 15px; font-weight: bolder;">Mission & Vision</a>
                <a class="btn btn-link" href="./apply.php" style="font-size: 15px; font-weight: bolder;">How to Apply</a>
                <a class="btn btn-link" href="./FAQs.php" style="font-size: 15px; font-weight: bolder;">FAQs</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Contact</h4>
                <p class="mb-2" style="font-size: 15px; font-weight: bolder;"><i class="fa fa-map-marker-alt me-3"></i>1.5km off Mukono-Mbalala on Kampala Jinja Highway.  </p>
                <p class="mb-2" style="font-size: 15px; font-weight: bolder;"><i class="fa fa-phone-alt me-3"></i>0784824441 |  0777609907</p>
                <p class="mb-2" style="font-size: 14px; font-weight: bolder;"><i class="fa fa-envelope me-3"></i><a href="#">stjohnpauliivocationalhighscho@gmail.com</a></p> 
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="https://youtu.be/MkDQ3S-eEoo"><i class="bi bi-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href="mailto:stjohnpauliivocationalhighscho@gmail.com"><i class="bi bi-envelope"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/share/CVwpA78nN8zzn8hM/"><i class="bi bi-facebook"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Gallery</h4>
                <div class="row g-2 pt-2">
                    <div class="col-4">
                        <a href="./Gallery.php"><img class="img-fluid bg-light p-1" src="img/st john/sch comp/van.JPG" alt="" style="height: 100px; width: 80px;"></a>
                    </div>
                    <div class="col-4">
                       <a href="./Gallery.php"> <img class="img-fluid bg-light p-1" src="img/st john/co -/1.JPG" alt="" style="height: 100px; width: 80px;"></a>
                    </div>
                    <div class="col-4">
                        <a href="./Gallery.php"><img class="img-fluid bg-light p-1" src="img/st john/co -/6.JPG" alt="" style="height: 100px; width: 80px;"></a>
                    </div>
                    <div class="col-4">
                        <a href="./Gallery.php"><img class="img-fluid bg-light p-1" src="img/st john/vocation/h5.JPG" alt="" style="height: 100px; width: 80px;"></a>
                    </div>
                    <div class="col-4">
                       <a href="./Gallery.php"> <img class="img-fluid bg-light p-1" src="img/st john/vocation/t4.JPG" alt="" style="height: 100px; width: 80px;"></a>
                    </div>
                    <div class="col-4">
                        <a href="./Gallery.php"><img class="img-fluid bg-light p-1" src="img/st john/computer lab/3.JPG" alt="" style="height: 100px; width: 80px;"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Newsletter</h4>
                <p style="font-size: 15px; font-weight: bolder;">At ST. JOHN PAUL II VOC & HIGH SCH MBALALA-MUKONO, we are always excited to welcome new families into our community. 
                    The best way to get to know us is to arrange a visit or reach out to us through Email or Contact.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <form id="emailCaptureForm">
                            <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="email" id="userEmail" placeholder="Your email" required>
                            <button type="submit" class="btn py-2 position-absolute top-0 end-0 mt-2 me-2" style="color: whitesmoke; background-color: orange; font-size: 18px; width: fit-content; padding: 0.375rem 0.75rem;">
                                <span><a href="./register/index.php">Login</a></span>
                            </button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="./index.php"  style="font-size: 13px; font-weight: bolder;">ST. JOHN PAUL II VOC & HIGH SCH MBALALA-MUKONO,</a> <b>All Right Reserved.</b> 

                    <!--/*** Designer credit ***/-->
                    <b>Designed By </b><a class="border-bottom"  style="font-size: 15px; font-weight: bolder;" href="./">@jbzkalla</a><br><br>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="./index.php"  style="font-size: 15px; font-weight: bolder;">Home</a>
                        <a href="./about.php"  style="font-size: 15px; font-weight: bolder;">About</a>
                         <a href="./FAQs.php"  style="font-size: 15px; font-weight: bolder;">FAQ</a>
                        <a href="./apply.php"  style="font-size: 15px; font-weight: bolder;">Admission</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>