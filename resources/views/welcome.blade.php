<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script> Window.Laravel={ csefToken: "{{ csrf_token() }}"} </script>
        <title>Ahmed Sayed Portfolio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet"/>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
         <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #dae3e7;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .section
            {
              background-color: white;
              padding: 5%;
              margin: 5%;
              border-radius: 1%  ;
            }
            p
            {
                font-size: 18px;
                padding-left: 1%;
            }
          
            * {
            box-sizing: border-box;
            }

            body {
            background-color: #474e5d;
            font-family: Helvetica, sans-serif;
            }

            /* The actual timeline (the vertical ruler) */
            .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            }

            /* The actual timeline (the vertical ruler) */
            .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: white;
            top: 0;
            bottom: 0;
            left: 20%;
            margin-left: -3px;
            }

            /* Container around content */
            .container {
            padding: 5px 5px;
            position: relative;
            background-color: inherit;
            width: 150px;

            }

            /* The circles on the timeline */
            .container::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            right: -17px;
            background-color: white;
            border: 4px solid #FF9F55;
            top: 15px;
            border-radius: 50%;
            z-index: 1;
            }

            /* Place the container to the left */
            .left {
            left:-80%;
            }

            /* Place the container to the right */
            .right {
            left: 20%;
            }

            /* Add arrows to the left container (pointing right) */
            /* .left::before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            right: 10%;
            border: medium solid white;
            border-width: 10px 0 10px 10px;
            border-color: transparent transparent transparent white;
            }

             
            .right::before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            left: 10%;
            border: medium solid white;
            border-width: 10px 10px 10px 0;
            border-color: transparent white transparent transparent;
            } */

            /* Fix the circle for containers on the right side */
            .right::after {
            left: -8px;
            }

            /* The actual content */
            .content {

            background-color: white;
            position: relative;
            border-radius: 6px;
            }

            /* Media queries - Responsive timeline on screens less than 600px wide */
            @media screen and (max-width: 600px) {
            /* Place the timelime to the left */
           
            h3{font-size: 14px;}
            h4{font-size: 12px;}
            h5{font-size: 10px;}
            h6{font-size: 8px;}
            .timeline::after {
            left: -45%;
            }
            
            /* Full-width containers */
            .container {
            width: 100%;

            }
            
            /* Make sure that all arrows are pointing leftwards */
            .container::before {
            left: 15%;
            border: medium solid white;
            border-width: 10px 10px 10px 0;
            border-color: transparent white transparent transparent;
            }

            /* Make sure all circles are at the same spot */
            .left::after, .right::after {
            left: 1px;
            }
            
            
            /* Make all right containers behave like the left ones */
            .right {
            left: -45%;
            }
            .left{
                left: -45%;
            }
            }
        </style>
    </head>
    <body>
<div class="container-fluid clearfix bg-dark">

      <div class="row p-3">
        <div class="col-12">
            <div class="d-flex">
            <img src="/Images/CVPic.jpg" style=" height: 200px; width= 200px;" class="rounded-circle p-1 border border-success"  alt="profile photo">
            <div class="p-4">
                <h1>Ahmed Sayed</h1>
                <h3>Software Developer</h3>
                <div class="d-flex"> 
                  <h2><a href="https://www.facebook.com/profile.php?id=100004309875051" class="fa fa-facebook-square p-1 text-light"></a></h2>
                  <h2><a href="https://www.linkedin.com/in/ahmed-sayed-3369b7118/" class="fa fa-linkedin-square p-1 text-light"></a></h2>
                  <h2><a href="https://github.com/AhmedSayedMohammed" class="fa fa-github-square p-1 text-light"></a></h2>
                  <h2><a href="https://www.instagram.com/ahmed_sayed_mohmd/" class="fa fa-instagram p-1 text-light"></a></h2>
                </div>
            </div>
            </div>
            <div class="align-self-center pl-4 pt-2">
                    <a href="#" class="btn btn-success p-1"> <h4> Contact Me 
                      <i class="fab fa-angellist"></i></h4>
                    </a>
           </div>

        </div>
      </div>
      <div class="row p-3">
     {{-- Sections --}}
    <div class="col-9">
            {{-- About Me Section Begin --}}
            <div class="section" id="aboutme">
                <h2 class="">About me <i class="fa fa-user" aria-hidden="true"></i></h2>
                <p id="dots">
                    I'm a software developer with a bachelor degree in computer science <br> Specialized in Web Development and Game Development
                
                </p>
            </div>
            {{-- About Me section Ends --}}

            {{-- Education Section Begin --}}
            <div class="section" id="education">
                <h2>Education <i class="fa fa-university" aria-hidden="true"></i></h2>
                <p>
                    Faculty Of Computers and Information
                    Bachelor's Degree, Graduated June 2018
                </p>
            </div>
            {{-- Education Section Ends --}}

            {{-- Employment History section Begins --}}
            <div class="section" id="employment">
                <h2>Employment History <i class="fa fa-calendar" aria-hidden="true"></i></h2>
                <p class="dots">
                    ABC EGYPT <br>
                    Software developer, June 2018 - April 2019 <br>
                    Developing applications for various platforms
                </p>
            </div>
            {{-- Employment section Ends --}}

            {{-- Hobbies section Begins --}}
            <div class="section" id="hobbies">
            <h2>Hobbies & Interests <i class="fa fa-heart" aria-hidden="true"></i></h2>
            <p>
                I hope to work as software developer in a multinational software company , <br>
                interested in web development ,virtual and augmented reality applications
            </p>
            </div>
            {{-- Hobbies section end --}}

            {{-- Skills section begin --}}
            <div class="section" id="skills">
            <h2>Profissional Skills <i class="fas fa-book-reader"></i></h2>
            <p >
                <div class="d-flex d-flex-row flex-wrap">
                <div class="m-3">
                    <h4>Languages</h4>
                    <h5>PHP</h5>
                    <h5>C#</h5> 
                    <h5>Javascript</h5>
                    <h5>Java SE</h5>
                    <h5>C++</h5>
                </div>
                <div class="m-3">
                    <h4>Frameworks</h4>
                    <h5>Laravel</h5>
                    <h5>Unity</h5>
                    <h5>Vue.js</h5>
                    <h5>Android Studio</h5> 
                </div>
                
                <div class="m-3">
                        <h4>Databases</h4>
                        <h5>MySQL</h5>
                        <h5>FireBase</h5>
                </div>

                <div class="m-3">
                        <h4>Web </h4>
                        <h5>HTML</h5>
                        <h5>CSS</h5>
                        <h5>Bootstrap</h5>
                        <h5>jQuery</h5>
                        <h5>Ajax</h5>
                </div>
                <div class="m-3">
                        <h4>Hosting Services</h4>
                        <h5>GitHub</h5>
                        <h5>Amazon(aws)</h5>
                        <h5>000WebHost</h5>
                </div>
                <div class="m-3">
                        <h4>Programming Skills</h4>
                        <h5>Object-Oriented</h5> 
                        <h5>Data Structure</h5>
                </div>  
                
                <div class="m-3">
                        <h4>Methodology</h4>
                        <h5>agile</h5>
                </div>   
            </div>
            </p>
            </div>
            {{-- Skills section end --}}
            {{-- Projects section Begin --}}
            <div class="section" id="projects">
            <h2>Projects <i class="fa fa-archive" aria-hidden="true"></i></h2>
                <div>
                    <hr>
                    <div >
                        <h5>Pets Home :</h5>
                            <p>  This is my graduation project that helps people to get
                            help for their pets by communicating with vets or other peoples , user
                            can add posts comments can follow a friend or a vet can make a
                            consultation with a doctor by an amount of many . <br>
                            tools : Laravel ,PHP ,Vue.js ,html , css ,java script MySQL <br>
                            <a href="https://petspetshome.000webhostapp.com">Website</a> <br>
                            <a href="https://github.com/AhmedSayedMohammed/PetsHome">Source on GitHub</a>  
                        </p>
                    </div>
                    <hr>
                    <div class="mt-3">
                        <h5> Paint project :</h5>
                        <p> This is a simple paint project to draw simple
                            shapes <br>
                        <a href="https://github.com/AhmedSayedMohammed/paintproject-using-java">Source on GitHub</a>  
                        </p>
                    </div>
                    <hr>
                    <div class="mt-3">
                            <h5>Black Ball:</h5>
                            <p> android game <br>
                            <a href="https://play.google.com/store/apps/details?id=com.AaS.BlackBall">PlayStore </a>  
                        </p>
                        </div>
                        
                    <div class="mt-3">
                            <h5>Java DES Algorithm:</h5>
                            <p> This a data encryption algorithm using java <br>
                            <a href="https://github.com/AhmedSayedMohammed/Java-DESalgorithm">Source on GitHub</a>  
                        </p>
                        </div>
                        <div class="mt-3">
                                <h5>Ocean Tour:</h5>
                                <p>  A virtual reality application that takes you in adventure under water<br>
                                <a href="https://www.youtube.com/watch?v=n1Jg7gqYcdw&t=5s">Youtube video</a>  
                            </p>
                            </div>
                            
                        <div class="mt-3">
                                <h5>Exhibitin:</h5>
                                <p>  A 3D application that facilitate the communication between customers and sellers<br>
                                <a href="https://www.youtube.com/watch?v=n1Jg7gqYcdw&t=5s">Youtube video</a>  
                            </p>
                            </div>
                </div>
            </div>
            {{-- Projects section end --}}

            {{-- Certifications section begin --}}
            <div class="section" id="certifications">
            <h2>Certifications <i class="fa fa-certificate" aria-hidden="true"></i></h2>
            <h4><a href="https://www.sololearn.com/Certificate/1059-15347396/pdf/">PHP</a></h4>
            <h4><a href="http://ude.my/UC-5V0MY92T">Game Development</a></h4>
            <h4><a href="https://412labs.com/">VR & AR</a></h4>
            
            </div>
            {{-- Certification section end --}}

            {{-- Language section begin --}}
            <div class="section" id="languages">
            <h2>Languages <i class="fa fa-language"></i></h2>
            <div class="d-flex d-flex-col d-flex-wrap">
                <div class="m-3">
                    <h4>Arabic</h4>
                    <h5>Native</h5>
                </div>
                <div class="m-3">
                <h4>English</h4>
                <h5>Fluent</h5>
                </div>
            </div>
            </div>
            {{-- Language section end --}}
    </div>
    <div class="col-3" >
                <div class="float-left sticky-top p-5">
                    <div class="timeline">
                    <div class="container left">
                        <div class="content">
                            <a href="#aboutme" class="btn">About me</a>
                        </div>
                    </div>
                    
                    <div class="container right">
                        <div class="content">
                            <a href="#education" class="btn ">Education</a>
                        </div>
                    </div>

                    <div class="container left">
                        <div class="content">
                            <a href="#employment" class="btn ">Employment History</a>
                        </div>
                    </div>

                    <div class="container right">
                            <div class="content">
                                <a href="#hobbies" class="btn ">Hobbies & Interests</a>
                            </div>
                        </div>
                        
                    <div class="container left">
                            <div class="content">
                                <a href="#skills" class="btn ">Profissional Skills</a>
                            </div>
                        </div>
                        <div class="container right">
                                <div class="content">
                                    <a href="#projects" class="btn ">Projects</a>
                                </div>
                            </div>

                            <div class="container left">
                                    <div class="content">
                                        <a href="#certifications" class="btn ">Certifications</a>
                                    </div>
                                </div>
                        
                                
                            <div class="container right">
                                    <div class="content">
                                        <a href="#languages" class="btn ">Languages </a>
                                    </div>
                                </div>
                </div>
                </div>
        </div>
    </div> 

</div>

<div id="app"></div>

      <script src="{{asset('js/app.js')}}"></script>
</body>  

  
</html>
