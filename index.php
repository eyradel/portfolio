<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
    	<link rel="stylesheet" type="text/css" href="vendors/styles/mdb.css">
        <link rel="stylesheet" type="text/css" href="vendors/fonts/font-awesome/css/font-awesome.css">
        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/jvectormap/jquery-jvectormap-2.0.3.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
 
    
        <link rel="icon" href="assets/img/about.png">
        <title>Eyram Dela</title>
    </head>
    <style>
        body{
            
            
            background: white;
        }
    input{

    
    border-radius: 50px;
    }
  
    
    .btn{

    
    border-radius: 50px;
    
    }
        .skills__data{
            
            
            border-radius: 10px;
        }
    
    
    
</style>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Eyram Dela</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">Work</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
        <?php   
              require 'query.php';
              
              $user = [
    'name' => '',
    'tel' => '',
    'email'=>'',
    'date'=>'',
    'msg'=>'',             
                  
];

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);
     
     $user = createUser($_POST);
 echo "<div class=' card alert alert-success' style=' width:300px;'>Submitted Successfully</div>" ;  
     if(!$user)
     {
echo "<div class='btn card alert alert-warning' style=' width:300px;'>Request failed to send</div>" ;  
     }


 }
    
              
              
              
              
              ?>
                <div class="home__data">
                    <p class="home__title" style="font-size:25px;">Hi,<br>I'am <span class="home__title-color">Eyram Dela</span><br> Computer Scientist &amp; Engineer</p>

                   <a  class="btn btn-outline-primary" href="https://www.facebook.com/iboy.transcend" ><i class="ti ti-facebook"></i></a>
                    <a  class="btn btn-outline-danger " href="mailto:kuwornueyramdela2000@gmail.com" ><i class="ti ti-email"></i></a>
                    <a  class="btn btn-outline-primary " href="tel:0540202096" ><i class="ti ti-headphone-alt"></i></a>
                    <a  class="btn btn-outline-warning " href="https://www.instagram.com/accounts/login/?next=/iboy_transcend_einstein_stark/" ><i class="ti ti-instagram"></i></a>
                                <a  class="btn btn-outline-success " href="https://wa.me/+233540202096"><i class="ti ti-location-arrow"></i></a>    
                    <a  class="btn btn-outline-success " href="Kuwornu%20Eyram%20Dela_cv.pdf" >CV</a> 
                </div>
<br>
                <div class="home__social">
                    <a href="https://gh.linkedin.com/in/kuwornu-eyram-dela-0a02851a4" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
              
                    <a href="https://github.com/eyradel" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                </div>

                <div class="home__img">
                    <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <mask id="mask0" mask-type="alpha">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                        </mask>
                        <g mask="url(#mask0)">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                            <image class="home__blob-img" x="50" y="60" href="assets/img/perfil.png"/>
                        </g>
                    </svg>
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/about.png" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">I'am Eyram Dela</h2>
                        <p class="about__text"> A young man with strong computing background skills, organized,detail oriented and posses good leadership qualities (including developing and coaching colleagues). Very good at Problem identificationa and solving.</p>  

<b>Skills :</b> Web, desktop and mobile applications development,Artificial Intelliigence,Data Analysis and Visualization,Virtual Reality.        
                    </div>                                   
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">          
                    <div>
                        <h2 class="skills__subtitle">Profesional Skills</h2>
                        <p class="skills__text">For the past years i've been able to learn and acquire skills in the field of computing</p>
                       <div class="skills__data">
                            <div class="skills__names">
                                <i class='fa fa-code skills__icon' ></i>
                                <span class="skills__name">HTML</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                         <div class="skills__data">
                            <div class="skills__names">
                                <i class='fa fa-code skills__icon' ></i>
                                <span class="skills__name">CSS</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">60%</span>
                            </div>
                        </div>
                         <div class="skills__data">
                            <div class="skills__names">
                                <i class='fa fa-code skills__icon' ></i>
                                <span class="skills__name">JS</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">50%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='fa fa-code skills__icon' ></i>
                                <span class="skills__name">PHP</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">80%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='fa fa-code skills__icon' ></i>
                                <span class="skills__name">C#</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">60%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='fa fa-code skills__icon' ></i>
                                <span class="skills__name">Python</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">75%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='fa fa-code skills__icon' ></i>
                                <span class="skills__name">Java</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">65%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='fa fa-code skills__icon' ></i>
                                <span class="skills__name">Virtual Reality</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='fa fa-code skills__icon' ></i>
                                <span class="skills__name">CMS</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">75%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='fa fa-code skills__icon' ></i>
                                <span class="skills__name">Artificial intelligence</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">70%</span>
                            </div>
                        </div>
                        
                    </div>
                      <a href="" class="work__img">
                        <img src="assets/img/work1.jpg" alt="">
                    </a>
                   
                </div>
            </section>

            <!--===== WORK =====-->
            <section class="work section" id="work">
                <h2 class="section-title">Work</h2>

                <div class="work__container bd-grid">
                    <a href="" class="work__img">
                        <img src="assets/img/work1.jpg" alt="">
                        
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/icons8_artificial_intelligence_512px_1.png" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/icons8_robot_512px_1.png" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work4.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work5.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work6.jpg" alt="">
                    </a>
                </div>
            </section>

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <div class="contact__container bd-grid ">
                    <div class="login-box bg-white box-shadow  card">
                   <form method="post">
												<div class="select-role">
	
												</div>
												<div class="input-group custom">
													<input type="text" class="form-control form-control-lg" placeholder="name" name="name" required>
													<div class="input-group-append custom">
														<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
													</div>
												</div>
												    
                       
												<div class="input-group custom">
													<input type="tel" class="form-control form-control-lg" placeholder="tel" name="tel" required>
													<div class="input-group-append custom">
														<span class="input-group-text"><i class="icon-copy ti ti-headphone-alt"></i></span>
													</div>
												</div>
												<div class="input-group custom">
													<input type="email" class="form-control form-control-lg" placeholder="**@gmail.com" name="email" required>
													<div class="input-group-append custom">
														<span class="input-group-text"><i class="dw dw-email"></i></span>
													</div>
												</div>
                       
                       
                       <div class="input-group custom">
                           <textarea class="form-control form-control-lg" placeholder="message........" name="msg" required></textarea>
													<div class="input-group-append custom">
														<span class="input-group-text"><i class="dw dw-message"></i></span>
													</div>
												</div>
												
												<div class="row">
													<div class="col-sm-12">
														<div class="input-group mb-0">
															<!--
																use code for form submit
																<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
															-->
                                                           
                                                            
                                                             
                                                            <button  class="btn btn-outline-success " >send</button>
                                                           
															
														</div>
													</div>
												</div>
                        </form></div>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">Eyram Dela</p>
            <div class="footer__social">
                <a href="#" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
            </div>
            <p class="footer__copy">&#169; Transcendence studio gh</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
        
 	<!-- js -->

       
  
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/jQuery-Knob-master/jquery.knob.min.js"></script>
	<script src="src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
	<script src="src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
	<script src="src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
	<script src="src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="vendors/scripts/dashboard2.js"></script>
    </body>
</html>
