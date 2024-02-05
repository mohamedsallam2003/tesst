<?php
session_start();
ob_start(); 
$style="about.css";
$script="about.js";
include 'init.php';
if(isset($_GET['season'])){
  $season = $_GET['season'];
  $all_season_baord = board_by_season($_GET['season']);
  echo "<script>
  $('html, body').animate({

    scrollTop: $('.desc').offset().top - 80

}, 2000);
  </script>";
}else{
  $season = 2023;
  $all_season_baord = board_by_season($season);
}

?>
<!-- =================navbar section===================== -->  
<div class="nnav">
  <nav class="navbar navbar-expand-lg navbar-light bg-light first_nav">
    <a class="navbar-brand" href="#">
    
    <img src="img/home/logo.png" alt="header logo">

    </a>
    <button style="border: unset;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <img src="img/home/Menu.png" alt="menu">
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="about.php">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="events.php">events</a>
        </li>
        <li class="nav-item">
        <div style="text-decoration:none;color:#fff;font-size: 16px;font-weight: 900;" href="" class="ui pointing dropdown link item">
          <span style="  font-family: 'Comfortaa', Arial !important;" class="text">More</span>
          <i class="dropdown icon"></i>
          <div class="menu">
            <a href="our_activities.php" style="color:#000 !important;text-decoration: none;font-weight: 900;  font-family: 'Comfortaa', Arial !important;" class="item">Our Activities</a>
            <a href="ieee_tv.php" style="color:#000 !important;text-decoration: none;font-weight: 900;  font-family: 'Comfortaa', Arial !important;" class="item">IEEE TV</a>
            <a href="faq.php" style="color:#000 !important;text-decoration: none;font-weight: 900;  font-family: 'Comfortaa', Arial !important;" class="item">FAQ</a>
            <a href="blogs.php" style="color:#000 !important;text-decoration: none;font-weight: 900;  font-family: 'Comfortaa', Arial !important;" class="item">Blogs</a>
          </div>
        </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link active" href="registration.php">Join Us</a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link" href="mega_event.php">Apply For Event</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact-us.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>
  </div>
<!-- =============== end navbar ==================== -->


<!-- =============== start header ==================== -->
<header>
  <div class="head container">
    <div class="row">
      <div id="left" class="col-md-6">
        <div class="left">
              <h3>Know More About US</h3>
              <p>You can find out more information about us, <br> and also know about our board </p>
              <button id="btn"> Let's Start </button>
            </div>
        </div>
        <div id="right" class="col-md-6">
          <div class="right">
            <img src="img/new_images/Team meeting_Outline.svg" alt="header_img">
          </div>
        </div>
      </div>
    </div>
</header>
<!-- =============== end header ==================== -->


<!-- =============== Start Description ==================== -->
<svg style="display: block;margin: auto;" xmlns="http://www.w3.org/2000/svg" width="14" height="150.841" viewBox="0 0 14 265.841">
  <g id="Group_45" data-name="Group 45" transform="translate(-1203 -1282)">
    <line id="Line_2" data-name="Line 2" y2="238.841" transform="translate(1209.5 1283.5)" fill="none" stroke="rgba(12,117,192,0.96)" stroke-linecap="round" stroke-width="3" stroke-dasharray="9 10"/>
    <circle id="Ellipse_1" data-name="Ellipse 1" cx="7" cy="7" r="7" transform="translate(1203 1533.841)" fill="rgba(12,117,192,0.96)"/>
  </g>
</svg>
<div class="desc">
  <div class="container">
    <div class="btn_group">
      <div class="row">
        <div class="col-lg-3 mb-4 col-md-6">
          <button id="first" class="active">IEEE Global Mission</button>
        </div>
        <div class="col-lg-3 mb-4 col-md-6">
          <button id="second">IEEE Global Vision</button>
        </div>
        <div class="col-lg-3 mb-4 col-md-6">
          <button id="third">IEEE-BUB Mission</button>
        </div>
        <div class="col-lg-3 mb-4 col-md-6">
          <button id="fourth">IEEE-BUB Vision</button>
        </div>
      </div>
    </div>
    <div class="desc_group">
      <div class="row">
        <div class="col-md-6 left">
          <div class="first">
              <h3>IEEE Global Mission</h3>
              <p>IEEE will be essential to the global technical community and to technical professionals everywhere, and be universally recognized for the contributions of technology and of technical professionals in improving global conditions.</p>
          </div>
          <div class="second hide">
              <h3>IEEE Global Vision</h3>
              <p>IEEE's core purpose is to foster technological innovation and excellence for the benefit of humanity.</p>
          </div>
          <div class="third hide">
              <h3>IEEE-BUB Mission</h3>
              <p>Our mission is to provide undergraduate students interested in electrical and electronics or related engineering professions with educational, technical, and professional development opportunities; to organize high-quality and relevant technical meetings, and to facilitate professional networking among its members.
              We also introduce students to the diverse world of electronics and to better prepare them for the profession by allowing them to achieve their passions; in addition to, encouraging youth to be proactive and responsible, and foster the process of gaining, integrating, sharing, and using technology and scientific knowledge for the benefit of humanity. 
              </p>
          </div>
          <div class="fourth hide">
              <h3>IEEE-BUB Vision</h3>
              <p>The primary vision of IEEE student branch is to Inspire, Enable, Empower and Energize our student members to enhance their technical interests by providing them a platform to show case their skills and a variety of events for students, such as sessions, workshops, webinars, and hackathons. All of them were primarily related to engineering, computer science. Our branch also offers soft skills training and sessions, which are required to produce fully qualified engineers and assist a larger range of students.</p>
          </div>
        </div>
        <div class="col-md-6">
          <img src="img/new_images/creative-team.png" alt="git_img">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- =============== End Description ==================== -->


<!-- =============== start height board ==================== -->
<svg style="display: block;margin: auto;" xmlns="http://www.w3.org/2000/svg" width="14" height="150.841" viewBox="0 0 14 265.841">
  <g id="Group_45" data-name="Group 45" transform="translate(-1203 -1282)">
    <line id="Line_2" data-name="Line 2" y2="238.841" transform="translate(1209.5 1283.5)" fill="none" stroke="rgba(12,117,192,0.96)" stroke-linecap="round" stroke-width="3" stroke-dasharray="9 10"/>
    <circle id="Ellipse_1" data-name="Ellipse 1" cx="7" cy="7" r="7" transform="translate(1203 1533.841)" fill="rgba(12,117,192,0.96)"/>
  </g>
</svg>
<div class="height_board">
  <div class="container">
    <h3 class="text-center display-3 py-3">
       High Board - <?php echo $season; ?>
    </h3>
    <div class="text-center mb-5 mt-5">
        <div class="meta pb-3">
          <span class="date">You can choose a past years to see the board at that time</span>
          </div>
            <div class="years_filter pt-5">
                <div style="justify-content:center ;" class="row text-center">
                        <div style="margin-bottom: 25px;" class="col-md-3 col-6"><a href="about.php" class="<?php if(!isset($_GET['season']) || $_GET['season'] == "2023"){echo "active";} ?>" id="web_link">Season 2023</a></div>
                        <div style="margin-bottom: 25px;" class="col-md-3 col-6"><a href="about.php?season=2022" class="<?php if(isset($_GET['season']) && $_GET['season'] == "2022"){echo "active";} ?>" id="web_link">Season 2022</a></div>
                        <div style="margin-bottom: 25px;" class="col-md-3 col-6"><a href="about.php?season=2021" class="<?php if(isset($_GET['season']) && $_GET['season'] == "2021"){echo "active";} ?>" id="web_link">Season 2021</a></div>
                        <div style="margin-bottom: 25px;" class="col-md-3 col-6"><a href="about.php?season=2020" class="<?php if(isset($_GET['season']) && $_GET['season'] == "2020"){echo "active";} ?>" id="web_link">Season 2020 </a></div>
                        <div style="margin-bottom: 25px;" class="col-md-3 col-6"><a href="about.php?season=2019" class="<?php if(isset($_GET['season']) && $_GET['season'] == "2019"){echo "active";} ?>" id="web_link">Season 2019</a></div>
                </div>
            </div>
    </div>
    <!-- <img src="img/line.webp" style="display: block;margin: 20px auto;" alt="line">
    <div style="justify-content:center ;" class="row">
      <div class="col-md-5 align-self-center">
            <img class="board_img" src="./img/images/counselor.jpg" alt="board image">
            <div style="height: auto" class="card1">
                <h3>DR. Amr Al-Awamry</h3>
                <button class="btn">Counselor</button>
                <div class="icons">
                    <a style="color: #fff;" target="_blank" href="<?php                   foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Secretary"){
                      echo $board_data["facebook"];
                    }
                  }  ?>"> <i class="fab fa-facebook-f"></i></a>
                    <a style="color: #fff;" target="_blank" href="<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Chairman"){
                      echo $board_data["linkedIn"];
                    }
                  } ?>"><i class="fab fa-linkedin"></i></a>
                    <a style="color: #fff;" target="_blank" href="mailto:<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Chairman"){
                      echo $board_data["email"];
                    }
                  } ?>"><i class="far fa-envelope"></i></a>
                </div>
                <p>Consulting with Egypt Section SAC Chair, Regional SAC Chair, or Region Eight Director about activities or problems.</p>
            </div>
      </div>
    </div> -->

    <img src="img/line.webp" style="display: block;margin: 20px auto;" alt="line">
    <div class="row">
        <div class="col-md-4">
            <img class="board_img" src="./img/ieee-board/<?php foreach($all_season_baord as $board_data){
              if($board_data["position"] == "Chairman"){
                echo $board_data["img"];
              }
            }  ?>"
            alt="board image">
            <div class="card1">
                <h3><?php
                  foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Chairman"){
                      echo $board_data["name"];
                    }
                  } 
                ?></h3>
                <button class="btn">Chairman</button>
                <div class="icons">
                <a style="color: #fff;" target="_blank" href="<?php                   foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Chairman"){
                      echo $board_data["facebook"];
                    }
                  } ?>"> <i class="fab fa-facebook-f"></i></a>
                    <a style="color: #fff;" target="_blank" href="<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Chairman"){
                      echo $board_data["linkedIn"];
                    }
                  } ?>"><i class="fab fa-linkedin"></i></a>
                    <a style="color: #fff;" target="_blank" href="mailto:<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Chairman"){
                      echo $board_data["email"];
                    }
                  } ?>"><i class="far fa-envelope"></i></a>
                </div>
                <p>Supervising the whole board, members, events , Holding meetings and planning for the whole season,</p>
            </div>
        </div>

        <div class="col-md-4">
        <img class="board_img" src="./img/ieee-board/<?php foreach($all_season_baord as $board_data){
              if($board_data["position"] == "Secretary"){
                echo $board_data["img"];
              }
            }  ?>"
            alt="board image">
            <div class="card1">
                <h3><?php
                  foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Secretary"){
                      echo $board_data["name"];
                    }
                  } 
                ?></h3>
                <button class="btn">Secretary</button>
                <div class="icons">
                    <a style="color: #fff;" target="_blank" href="<?php                   foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Secretary"){
                      echo $board_data["facebook"];
                    }
                  }  ?>"> <i class="fab fa-facebook-f"></i></a>
                    <a style="color: #fff;" target="_blank" href="<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Secretary"){
                      echo $board_data["linkedIn"];
                    }
                  } ?>"><i class="fab fa-linkedin"></i></a>
                    <a style="color: #fff;" target="_blank" href="mailto:<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Secretary"){
                      echo $board_data["email"];
                    }
                  } ?>"><i class="far fa-envelope"></i></a>
                </div>
                <p style="padding:10px 20px;">record keeper and historian of the Student Branch. He/she is responsible for maintaining all records</p>
            </div>
        </div>

        <div class="col-md-4">
            <img class="board_img" src="./img/ieee-board/<?php foreach($all_season_baord as $board_data){
              if($board_data["position"] == "Treasurer"){
                echo $board_data["img"];
              }
            }  ?>"
            alt="board image">
            <div class="card1">
                <h3 style="font-size: 18px;"><?php
                  foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Treasurer"){
                      echo $board_data["name"];
                    }
                  } 
                ?></h3>
                <button class="btn">Treasurer</button>
                <div class="icons">
                    <a style="color: #fff;" target="_blank" href="<?php                   foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Treasurer"){
                      echo $board_data["facebook"];
                    }
                  }  ?>"> <i class="fab fa-facebook-f"></i></a>
                    <a style="color: #fff;" target="_blank" href="<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Treasurer"){
                      echo $board_data["linkedIn"];
                    }
                  } ?>"><i class="fab fa-linkedin"></i></a>
                    <a style="color: #fff;" target="_blank" href="mailto:<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Treasurer"){
                      echo $board_data["email"];
                    }
                  } ?>"><i class="far fa-envelope"></i></a>
                </div>
                <p>maintaining the financial accounts. It is imperative that all records be kept current and as accurate as possible.</p>
            </div>
        </div>
    </div>


    <img src="img/line.webp" style="display: block;margin: 30px auto;" alt="line">
    <div class="row" style="justify-content:center">
      <div class="col-md-4">
            <img class="board_img" src="./img/ieee-board/<?php foreach($all_season_baord as $board_data){
              if($board_data["position"] == "Vice Technical"){
                echo $board_data["img"];
              }
            }  ?>"
            alt="board image">
            <div class="card1">
                <h3><?php
                  foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Vice Technical"){
                      echo $board_data["name"];
                    }
                  } 
                ?></h3>
                <button class="btn">Vice Technical</button>
                <div class="icons">
                    <a style="color: #fff;" target="_blank" href="<?php                   foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Vice Technical"){
                      echo $board_data["facebook"];
                    }
                  }  ?>"> <i class="fab fa-facebook-f"></i></a>
                    <a style="color: #fff;" target="_blank" href="<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Vice Technical"){
                      echo $board_data["linkedIn"];
                    }
                  } ?>"><i class="fab fa-linkedin"></i></a>
                    <a style="color: #fff;" target="_blank" href="mailto:<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Vice Technical"){
                      echo $board_data["email"];
                    }
                  } ?>"><i class="far fa-envelope"></i></a>
                </div>
                <p>help the Branch Chair with the workload, oversee some of the technical subcommittees, and manage some scientific activities</p>
            </div>
        </div>

        <div class="col-md-4">
            <img class="board_img" src="./img/ieee-board/<?php foreach($all_season_baord as $board_data){
              if($board_data["position"] == "Vice Non-technical"){
                echo $board_data["img"];
              }
            }  ?>"
            alt="board image">
            <div class="card1">
                <h3><?php
                  foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Vice Non-technical"){
                      echo $board_data["name"];
                    }
                  } 
                ?></h3>
                <button class="btn">Vice Non-technical</button>
                <div class="icons">
                    <a style="color: #fff;" target="_blank" href="<?php                   foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Vice Non-technical"){
                      echo $board_data["facebook"];
                    }
                  }  ?>"> <i class="fab fa-facebook-f"></i></a>
                    <a style="color: #fff;" target="_blank" href="<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Vice Non-technical"){
                      echo $board_data["linkedIn"];
                    }
                  } ?>"><i class="fab fa-linkedin"></i></a>
                    <a style="color: #fff;" target="_blank" href="mailto:<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Vice Non-technical"){
                      echo $board_data["email"];
                    }
                  } ?>"><i class="far fa-envelope"></i></a>
                </div>
                <p>help the Branch Chair with the workload, oversee some of the non-technical subcommittees, and manage some activities</p>
            </div>
        </div>

        <?php if(isset($_GET['season']) && $_GET['season'] == "2022"){ ?>
        <div class="col-md-4">
            <img class="board_img" src="./img/ieee-board/Amr Mohamed.webp" alt="board image">
            <div class="card1">
                <h3 class="webmaster">Amr Mohamed Eissa</h3>
                <button class="btn">WebMaster</button>
                <div class="icons">
                    <a style="color: #fff;" target="_blank" href="https://www.facebook.com/AmrMoEissa/"> <i class="fab fa-facebook-f"></i></a>
                    <a style="color: #fff;" target="_blank" href="https://www.linkedin.com/in/amr-eissa-538a47199"><i class="fab fa-linkedin"></i></a>
                    <a style="color: #fff;" target="_blank" href="mailto:amr-eissa@ieee-bub.com"><i class="far fa-envelope"></i></a>
                </div>
                <p>maintaining our website and ensuring they work perfectly, his duties may include SEO optimization, handling web hosting issues.</p>
            </div>
        </div>
        <?php }else if(!isset($_GET['season']) || $_GET['season'] == "2023"){ ?>
          <div class="col-md-4">
            <img class="board_img" src="./img/board-2023/rodina.webp" alt="board image">
            <div class="card1">
                <h3 class="webmaster">Rodina Ibrahim</h3>
                <button class="btn">WebMaster</button>
                <div class="icons">
                    <a style="color: #fff;" target="_blank" href="https://www.facebook.com/profile.php?id=100006312648072&mibextid=ZbWKwL"> <i class="fab fa-facebook-f"></i></a>
                    <a style="color: #fff;" target="_blank" href="https://www.linkedin.com/in/rodina-ibrahim-240634222"><i class="fab fa-linkedin"></i></a>
                    <a style="color: #fff;" target="_blank" href="mailto:rodina-ibrahim@ieee.org"><i class="far fa-envelope"></i></a>
                </div>
                <p>maintaining our website and ensuring they work perfectly, his duties may include SEO optimization, handling web hosting issues.</p>
            </div>
        </div>
          <?php }?>

    </div>

    <img src="img/line.webp" style="display: block;margin: 30px auto;margin-bottom: 0;" alt="line">
    <svg style="display: block;margin: auto;" xmlns="http://www.w3.org/2000/svg" width="14" height="150.841" viewBox="0 0 14 265.841">
      <g id="Group_45" data-name="Group 45" transform="translate(-1203 -1282)">
        <line id="Line_2" data-name="Line 2" y2="238.841" transform="translate(1209.5 1283.5)" fill="none" stroke="rgba(12,117,192,0.96)" stroke-linecap="round" stroke-width="3" stroke-dasharray="9 10"/>
        <circle id="Ellipse_1" data-name="Ellipse 1" cx="7" cy="7" r="7" transform="translate(1203 1533.841)" fill="rgba(12,117,192,0.96)"/>
      </g>
    </svg>
    
  </div>
    <!-- Swiper -->
<div class="slid">
  <h3 class="text-center display-4 py-3">
   Committees Board - <?php echo $season; ?>
  </h3>
<div class="swiper mySwiper">
      <div class="swiper-wrapper">

        <!-- first head -->
        <div class="swiper-slide">
          <div class="board_slider">
            <img class="ui small circular image" src="img/ieee-board/<?php foreach($all_season_baord as $board_data){
              if($board_data["position"] == "Media Head"){
                echo $board_data["img"];
              }
            }  ?>">
            <h3 class="display-4 py-3"><?php
                  foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Media Head"){
                      echo $board_data["name"];
                    }
                  } 
                ?></h3>
            <h3>Head of Media</h3>
              <div class="icons">
                  <a style="color: #3381c9;" target="_blank" href="<?php                   foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Media Head"){
                      echo $board_data["facebook"];
                    }
                  }  ?>"> <i class="fab fa-facebook-f"></i></a>
                  <a style="color: #3381c9;margin-left:10px;margin-right: 10px" target="_blank" href="<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Media Head"){
                      echo $board_data["linkedIn"];
                    }
                  } ?>"><i class="fab fa-linkedin"></i></a>
                  <a style="color: #3381c9;" target="_blank" href="mailto:<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Media Head"){
                      echo $board_data["email"];
                    }
                  } ?>"><i class="far fa-envelope"></i></a>
              </div>
            <hr class="featurette-divider">

            <p style="line-height: 30px;" class="text-center">
              The Media Committee is in charge of the team's brand and advertising it. The committee in IEEE BUB SB is divided into 4 sections:
                <ul style="list-style: none;line-height: 30px;" class="list-group text-center">
                    <li><strong>* Designers:</strong> They are the ones who design all the advertisements, whether online like the posts that you see on the page or offline, like banners, flyers, IDs... etc.</li>
                    <li><strong>* Content Creators:</strong> responsible for content on Social Media and YouTube channel.</li>
                    <li><strong>* Photographers:</strong> They are responsible for filming and documenting the events.</li>
                    <li><strong>* Video Editing:</strong> responsible for making and editing videos on Facebook and Youtube.</li>
                </ul>                                    
            </p>
          </div>
        </div>

        <!-- seconnd head -->
        <div class="swiper-slide">
          <div class="board_slider">
            <img class="ui small circular image" src="img/ieee-board/<?php foreach($all_season_baord as $board_data){
              if($board_data["position"] == "FR Head"){
                echo $board_data["img"];
              }
            }  ?>">
            <h3 class="display-4 py-3"><?php
                  foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "FR Head"){
                      echo $board_data["name"];
                    }
                  } 
                ?></h3>
            <h3>Head of FR</h3>
            <div class="icons">
                  <a style="color: #3381c9;" target="_blank" href="<?php                   foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "FR Head"){
                      echo $board_data["facebook"];
                    }
                  }  ?>"> <i class="fab fa-facebook-f"></i></a>
                  <a style="color: #3381c9;margin-left:10px;margin-right: 10px" target="_blank" href="<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "FR Head"){
                      echo $board_data["linkedIn"];
                    }
                  } ?>"><i class="fab fa-linkedin"></i></a>
                  <a style="color: #3381c9;" target="_blank" href="mailto:<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "FR Head"){
                      echo $board_data["email"];
                    }
                  } ?>"><i class="far fa-envelope"></i></a>
            </div>
            <hr class="featurette-divider">

            <p style="line-height: 30px;" class="text-center">
            One of the most important committees in the whole team, as it is responsible for getting fund for all other committees such as components for scientific committee and material for logistics. This fund can be got by an international company, startup company and university, so in FR we have the negotiation and persuasion skills to do our job.                               
            </p>
          </div>
        </div>

        <!-- third head -->
        <?php if($season != "2019" && $season != "2023"){ ?>
        <div class="swiper-slide">
          <div class="board_slider">
            <img class="ui small circular image" src="img/ieee-board/<?php foreach($all_season_baord as $board_data){
              if($board_data["position"] == "Scientific CS Track Head"){
                echo $board_data["img"];
              }
            }  ?>">
            <h3 class="display-4 py-3"><?php
                  foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Scientific CS Track Head"){
                      echo $board_data["name"];
                    }
                  } 
                ?></h3>
            <h3>Head of Scientific CS Track</h3>
            <div class="icons">
                  <a style="color: #3381c9;" target="_blank" href="<?php                   foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Scientific CS Track Head"){
                      echo $board_data["facebook"];
                    }
                  }  ?>"> <i class="fab fa-facebook-f"></i></a>
                  <a style="color: #3381c9;margin-left:10px;margin-right: 10px" target="_blank" href="<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Scientific CS Track Head"){
                      echo $board_data["linkedIn"];
                    }
                  } ?>"><i class="fab fa-linkedin"></i></a>
                  <a style="color: #3381c9;" target="_blank" href="mailto:<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Scientific CS Track Head"){
                      echo $board_data["email"];
                    }
                  } ?>"><i class="far fa-envelope"></i></a>
              </div>
            <hr class="featurette-divider">

            <p style="line-height: 30px;" class="text-center">
                The other half of the Scientific committe is the <strong>CS Track</strong> which is mostly software and coding and also lots of fun!.<br>
                Currently it includes two sub-tracks:
                <ul style="list-style: none;line-height: 30px;" class="list-group text-center">
                    <li><strong>* Web Development:</strong> like the creators of this website!</li>
                    <li><strong>* Android Development:</strong> learn how to create apps for your Android smartphone!</li>
                </ul>                                    
            </p>
          </div>
        </div>
        <?php }else if($season == "2023"){?>

          <div class="swiper-slide">
          <div class="board_slider">
            <img class="ui small circular image" src="img/ieee-board/<?php foreach($all_season_baord as $board_data){
              if($board_data["position"] == "Web Head"){
                echo $board_data["img"];
              }
            }  ?>">
            <h3 class="display-4 py-3"><?php
                  foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Web Head"){
                      echo $board_data["name"];
                    }
                  } 
                ?></h3>
            <h3>Head of Web</h3>
            <div class="icons">
                  <a style="color: #3381c9;" target="_blank" href="<?php                   foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Web Head"){
                      echo $board_data["facebook"];
                    }
                  }  ?>"> <i class="fab fa-facebook-f"></i></a>
                  <a style="color: #3381c9;margin-left:10px;margin-right: 10px" target="_blank" href="<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Web Head"){
                      echo $board_data["linkedIn"];
                    }
                  } ?>"><i class="fab fa-linkedin"></i></a>
                  <a style="color: #3381c9;" target="_blank" href="mailto:<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Web Head"){
                      echo $board_data["email"];
                    }
                  } ?>"><i class="far fa-envelope"></i></a>
              </div>
            <hr class="featurette-divider">

            <p style="line-height: 30px;" class="text-center">
                The other half of the Scientific committe is the <strong>Web Track</strong>
                <ul style="list-style: none;line-height: 30px;" class="list-group text-center">
                    <li><strong>* The web development committee:</strong>  is a multidisciplinary team with the main focus of designing and maintaining websites.
web development team learn a lot of languages ​​to be able to be professional developers, there main goal is to develop IEEE BUB SB website</li>
                </ul>                                    
            </p>
          </div>
        </div>
        <?php
        }
        
        else{ ?>
          <div class="swiper-slide">
          <div class="board_slider">
            <img class="ui small circular image" src="img/ieee-board/<?php foreach($all_season_baord as $board_data){
              if($board_data["position"] == "PES Head"){
                echo $board_data["img"];
              }
            }  ?>">
            <h3 class="display-4 py-3"><?php
                  foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "PES Head"){
                      echo $board_data["name"];
                    }
                  } 
                ?></h3>
            <h3>Head of Scientific PES</h3>
            <div class="icons">
                  <a style="color: #3381c9;" target="_blank" href="<?php                   foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "PES Head"){
                      echo $board_data["facebook"];
                    }
                  }  ?>"> <i class="fab fa-facebook-f"></i></a>
                  <a style="color: #3381c9;margin-left:10px;margin-right: 10px" target="_blank" href="<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "PES Head"){
                      echo $board_data["linkedIn"];
                    }
                  } ?>"><i class="fab fa-linkedin"></i></a>
                  <a style="color: #3381c9;" target="_blank" href="mailto:<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "PES Head"){
                      echo $board_data["email"];
                    }
                  } ?>"><i class="far fa-envelope"></i></a>
              </div>
            <hr class="featurette-divider">

            <p style="line-height: 30px;" class="text-center">
                The other half of the Scientific committe is the <strong>PES</strong> which is mostly software and coding and also lots of fun!.<br>
                Currently it includes two sub-tracks:
                <ul style="list-style: none;line-height: 30px;" class="list-group text-center">
                    <li><strong>* Web Development:</strong> like the creators of this website!</li>
                    <li><strong>* Android Development:</strong> learn how to create apps for your Android smartphone!</li>
                </ul>                                    
            </p>
          </div>
        </div>


        <?php } ?>
        <!-- seven head -->

        <?php if($season != "2023"){ ?>
        <div class="swiper-slide">
          <div class="board_slider">
            <img class="ui small circular image" src="img/ieee-board/<?php foreach($all_season_baord as $board_data){
              if($board_data["position"] == "Scientific RAS Track Head"){
                echo $board_data["img"];
              }
            }  ?>">
            <h3 class="display-4 py-3"><?php
                  foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Scientific RAS Track Head"){
                      echo $board_data["name"];
                    }
                  } 
                ?></h3>
            <h3>Head of Scientific RAS Track</h3>
            <div class="icons">
                  <a style="color: #3381c9;" target="_blank" href="<?php                   foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Scientific RAS Track Head"){
                      echo $board_data["facebook"];
                    }
                  }  ?>"> <i class="fab fa-facebook-f"></i></a>
                  <a style="color: #3381c9;margin-left:10px;margin-right: 10px" target="_blank" href="<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Scientific RAS Track Head"){
                      echo $board_data["linkedIn"];
                    }
                  } ?>"><i class="fab fa-linkedin"></i></a>
                  <a style="color: #3381c9;" target="_blank" href="mailto:<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Scientific RAS Track Head"){
                      echo $board_data["email"];
                    }
                  } ?>"><i class="far fa-envelope"></i></a>
              </div>
            <hr class="featurette-divider">

            <p style="line-height: 30px;" class="text-center">
            The Scientific committee is now split into two parts, they still work hand in hand during events, but during the learning phase, each part has its own course and objectives.
            <br>
            One of the two halves is the <strong>RAS track </strong> where members can learn embedded systems and compete with eachother in events organized by us or represent IEEE BUB in other places nationally.                                  
            </p>
          </div>
        </div>

        <?php } else if($season == "2023"){?>

<div class="swiper-slide">
<div class="board_slider">
  <img class="ui small circular image" src="img/ieee-board/<?php foreach($all_season_baord as $board_data){
    if($board_data["position"] == "Flutter Head"){
      echo $board_data["img"];
    }
  }  ?>">
  <h3 class="display-4 py-3"><?php
        foreach($all_season_baord as $board_data){
          if($board_data["position"] == "Flutter Head"){
            echo $board_data["name"];
          }
        } 
      ?></h3>
  <h3>Head of Flutter</h3>
  <div class="icons">
        <a style="color: #3381c9;" target="_blank" href="<?php                   foreach($all_season_baord as $board_data){
          if($board_data["position"] == "Flutter Head"){
            echo $board_data["facebook"];
          }
        }  ?>"> <i class="fab fa-facebook-f"></i></a>
        <a style="color: #3381c9;margin-left:10px;margin-right: 10px" target="_blank" href="<?php foreach($all_season_baord as $board_data){
          if($board_data["position"] == "Flutter Head"){
            echo $board_data["linkedIn"];
          }
        } ?>"><i class="fab fa-linkedin"></i></a>
        <a style="color: #3381c9;" target="_blank" href="mailto:<?php foreach($all_season_baord as $board_data){
          if($board_data["position"] == "Flutter Head"){
            echo $board_data["email"];
          }
        } ?>"><i class="far fa-envelope"></i></a>
    </div>
  <hr class="featurette-divider">

  <p style="line-height: 30px;" class="text-center">
      The other half of the Scientific committe is the <strong>Flutter Track</strong>
      <ul style="list-style: none;line-height: 30px;" class="list-group text-center">
          <li><strong>* Flutter Development:</strong> Flutter committee is responsible for making awesome apps for a lot of platforms like android, ios, desktop and web 
Flutter team studied flutter fundamentals  and learn how to make impressive ui and learn firebase to make a powerful backend</li>
      </ul>                                    
  </p>
</div>
</div>
<?php
}
    ?>


<?php if($season == "2023"){?>

<div class="swiper-slide">
<div class="board_slider">
  <img class="ui small circular image" src="img/ieee-board/<?php foreach($all_season_baord as $board_data){
    if($board_data["position"] == "Problem Solving Head"){
      echo $board_data["img"];
    }
  }  ?>">
  <h3 class="display-4 py-3"><?php
        foreach($all_season_baord as $board_data){
          if($board_data["position"] == "Problem Solving Head"){
            echo $board_data["name"];
          }
        } 
      ?></h3>
  <h3>Head of Problem Solving</h3>
  <div class="icons">
        <a style="color: #3381c9;" target="_blank" href="<?php                   foreach($all_season_baord as $board_data){
          if($board_data["position"] == "Problem Solving Head"){
            echo $board_data["facebook"];
          }
        }  ?>"> <i class="fab fa-facebook-f"></i></a>
        <a style="color: #3381c9;margin-left:10px;margin-right: 10px" target="_blank" href="<?php foreach($all_season_baord as $board_data){
          if($board_data["position"] == "Problem Solving Head"){
            echo $board_data["linkedIn"];
          }
        } ?>"><i class="fab fa-linkedin"></i></a>
        <a style="color: #3381c9;" target="_blank" href="mailto:<?php foreach($all_season_baord as $board_data){
          if($board_data["position"] == "Problem Solving Head"){
            echo $board_data["email"];
          }
        } ?>"><i class="far fa-envelope"></i></a>
    </div>
  <hr class="featurette-divider">

  <p style="line-height: 30px;" class="text-center">
      The other half of the Scientific committe is the <strong>Problem Solving Track</strong> The committee is responsible for improving the skills of thinking of the team's members,
through courses, sessions lectures about different techniques,
data structures and algorithms that help them solve problems, 
encourage them with knowledge and gain experience. In addition, 
another benifit of our committee is that help them compete in ICPC, IEEEXTREEME.
We educate them and equip them to compete in this world competitions.
and we in general helps members who aspire to excel in technical interviews of top IT companies.
                            
  </p>
</div>
</div>


<div class="swiper-slide">
<div class="board_slider">
  <img class="ui small circular image" src="img/ieee-board/<?php foreach($all_season_baord as $board_data){
    if($board_data["position"] == "Embedded Head"){
      echo $board_data["img"];
    }
  }  ?>">
  <h3 class="display-4 py-3"><?php
        foreach($all_season_baord as $board_data){
          if($board_data["position"] == "Embedded Head"){
            echo $board_data["name"];
          }
        } 
      ?></h3>
  <h3>Head of Embedded</h3>
  <div class="icons">
        <a style="color: #3381c9;" target="_blank" href="<?php                   foreach($all_season_baord as $board_data){
          if($board_data["position"] == "Embedded Head"){
            echo $board_data["facebook"];
          }
        }  ?>"> <i class="fab fa-facebook-f"></i></a>
        <a style="color: #3381c9;margin-left:10px;margin-right: 10px" target="_blank" href="<?php foreach($all_season_baord as $board_data){
          if($board_data["position"] == "Embedded Head"){
            echo $board_data["linkedIn"];
          }
        } ?>"><i class="fab fa-linkedin"></i></a>
        <a style="color: #3381c9;" target="_blank" href="mailto:<?php foreach($all_season_baord as $board_data){
          if($board_data["position"] == "Embedded Head"){
            echo $board_data["email"];
          }
        } ?>"><i class="far fa-envelope"></i></a>
    </div>
  <hr class="featurette-divider">

  <p style="line-height: 30px;" class="text-center">
      The other half of the Scientific committe is the <strong>Embedded Commitee</strong>    
The committee is responsible of the scientific developent of team's members, specializing in Embedded Systems.
This happens through lots of sessions, starting with C then AVR.
The committe can contribute in:
1. Technical support and scientific workshops for students through IEEE events.
2. Giving its members the needed knowledge and support for competitions.
3. Preparing some of its members to be future instructors.                            
  </p>
</div>
</div>


<div class="swiper-slide">
<div class="board_slider">
  <img class="ui small circular image" src="img/ieee-board/<?php foreach($all_season_baord as $board_data){
    if($board_data["position"] == "Arduino Head"){
      echo $board_data["img"];
    }
  }  ?>">
  <h3 class="display-4 py-3"><?php
        foreach($all_season_baord as $board_data){
          if($board_data["position"] == "Arduino Head"){
            echo $board_data["name"];
          }
        } 
      ?></h3>
  <h3>Head of Arduino</h3>
  <div class="icons">
        <a style="color: #3381c9;" target="_blank" href="<?php                   foreach($all_season_baord as $board_data){
          if($board_data["position"] == "Arduino Head"){
            echo $board_data["facebook"];
          }
        }  ?>"> <i class="fab fa-facebook-f"></i></a>
        <a style="color: #3381c9;margin-left:10px;margin-right: 10px" target="_blank" href="<?php foreach($all_season_baord as $board_data){
          if($board_data["position"] == "Arduino Head"){
            echo $board_data["linkedIn"];
          }
        } ?>"><i class="fab fa-linkedin"></i></a>
        <a style="color: #3381c9;" target="_blank" href="mailto:<?php foreach($all_season_baord as $board_data){
          if($board_data["position"] == "Arduino Head"){
            echo $board_data["email"];
          }
        } ?>"><i class="far fa-envelope"></i></a>
    </div>
  <hr class="featurette-divider">

  <p style="line-height: 30px;" class="text-center">
      The other half of the Scientific committe is the <strong>Arduino committee</strong>   is responsible for making Hardware projects such as robots, electronic games, Automated & Remotely Operated Vehicles using Arduino development board.
Arduino is like a beginner's guide to Embedded Systems, so we make sure that eventually, Arduino members are ready for Embedded Systems after making a lot of Arduino projects and using a lot of hardware components.                              
  </p>
</div>
</div>






<?php
}
    ?>


        <!-- fourth head -->
        <div class="swiper-slide">
          <div class="board_slider">
            <img class="ui small circular image" src="img/ieee-board/<?php foreach($all_season_baord as $board_data){
              if($board_data["position"] == "HR Head"){
                echo $board_data["img"];
              }
            }  ?>">
            <h3 class=" <?php if($board_data["season"] == "2021"){echo "display-5";}else{echo "display-4";} ?> py-3"><?php
                  foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "HR Head"){
                      echo $board_data["name"];
                    }
                  } 
                ?></h3>
            <h3>Head of HR</h3>
            <div class="icons">
                  <a style="color: #3381c9;" target="_blank" href="<?php                   foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "HR Head"){
                      echo $board_data["facebook"];
                    }
                  }  ?>"> <i class="fab fa-facebook-f"></i></a>
                  <a style="color: #3381c9;margin-left:10px;margin-right: 10px" target="_blank" href="<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "HR Head"){
                      echo $board_data["linkedIn"];
                    }
                  } ?>"><i class="fab fa-linkedin"></i></a>
                  <a style="color: #3381c9;" target="_blank" href="mailto:<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "HR Head"){
                      echo $board_data["email"];
                    }
                  } ?>"><i class="far fa-envelope"></i></a>
              </div>
            <hr class="featurette-divider">

            <p style="line-height: 30px;" class="text-center">
            HR committee is one of the most important committees. We're responsible for providing trainings to members. We recruit and select the right person for the right position. We have the whole documentations for every single committee. We follow up and evaluidate the work. We also give candies to our sweet members. Also, we make sure to update a suitable policy for a healthy workplace.                                
            </p>
          </div>
        </div>

        <!-- five head -->
        <div class="swiper-slide">
          <div class="board_slider">
            <img class="ui small circular image" src="img/ieee-board/<?php foreach($all_season_baord as $board_data){
              if($board_data["position"] == "PR Head"){
                echo $board_data["img"];
              }
            }  ?>">
            <h3 class="display-4 py-3"><?php
                  foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "PR Head"){
                      echo $board_data["name"];
                    }
                  } 
                ?></h3>
            <h3>Head of PR</h3>
            <div class="icons">
                  <a style="color: #3381c9;" target="_blank" href="<?php                   foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "PR Head"){
                      echo $board_data["facebook"];
                    }
                  }  ?>"> <i class="fab fa-facebook-f"></i></a>
                  <a style="color: #3381c9;margin-left:10px;margin-right: 10px" target="_blank" href="<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "PR Head"){
                      echo $board_data["linkedIn"];
                    }
                  } ?>"><i class="fab fa-linkedin"></i></a>
                  <a style="color: #3381c9;" target="_blank" href="mailto:<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "PR Head"){
                      echo $board_data["email"];
                    }
                  } ?>"><i class="far fa-envelope"></i></a>
              </div>
            <hr class="featurette-divider">

            <p style="line-height: 30px;" class="text-center">
            Public Relations ‘PR’ coordinators are the voice of the team. As They facilitate the communication between IEEE BUB SB and other organizations, provide coverage of media for all the events, contact our Event speakers and professional trainers, promote any event that is held by IEEE BUB SB, and, last but not least, arrange proper places for the events, general meetings and training sessions.                            
            </p>
          </div>
        </div>
  

        <!-- six head -->
        <div class="swiper-slide">
          <div class="board_slider">
            <img class="ui small circular image" src="img/ieee-board/<?php foreach($all_season_baord as $board_data){
              if($board_data["position"] == "Logistics Head"){
                echo $board_data["img"];
              }
            }  ?>">
            <h3 class="display-4 py-3"><?php
                  foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Logistics Head"){
                      echo $board_data["name"];
                    }
                  } 
                ?></h3>
            <h3>Head of Logistics</h3>
            <div class="icons">
                  <a style="color: #3381c9;" target="_blank" href="<?php                   foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Logistics Head"){
                      echo $board_data["facebook"];
                    }
                  }  ?>"> <i class="fab fa-facebook-f"></i></a>
                  <a style="color: #3381c9;margin-left:10px;margin-right: 10px" target="_blank" href="<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Logistics Head"){
                      echo $board_data["linkedIn"];
                    }
                  } ?>"><i class="fab fa-linkedin"></i></a>
                  <a style="color: #3381c9;" target="_blank" href="mailto:<?php foreach($all_season_baord as $board_data){
                    if($board_data["position"] == "Logistics Head"){
                      echo $board_data["email"];
                    }
                  } ?>"><i class="far fa-envelope"></i></a>
              </div>
            <hr class="featurette-divider">

            <p style="line-height: 30px;" class="text-center">
            Logistics committee is the director who coordinates all the work to give you that amazing result. In general, logistics committee in IEEE BUB has two main activities:
                <ul style="list-style: none;line-height: 30px;" class="list-group text-center">
                    <li><strong>* Decoration:</strong> Decorating the place in which we hold the event (we add some fun to the scientific topics).</li>
                    <li><strong>* Organizing:</strong> Our major activity is to organize the events and solve the problems we face logically. Also, logistics team is responsible to supply the whole event with the required things like food, water and scientific components.</li>
                </ul>                                    
            </p>
          </div>
        </div>


  </div>
</div>
</div>
<!-- =============== End height board ==================== -->


<!-- =============== start footer ==================== -->
<!-- <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 230" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(12, 117, 192, 1)" offset="0%"></stop><stop stop-color="rgba(3, 47, 78, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,138L17.1,130.3C34.3,123,69,107,103,99.7C137.1,92,171,92,206,107.3C240,123,274,153,309,138C342.9,123,377,61,411,42.2C445.7,23,480,46,514,65.2C548.6,84,583,100,617,92C651.4,84,686,54,720,34.5C754.3,15,789,8,823,30.7C857.1,54,891,107,926,134.2C960,161,994,161,1029,138C1062.9,115,1097,69,1131,72.8C1165.7,77,1200,130,1234,134.2C1268.6,138,1303,92,1337,92C1371.4,92,1406,138,1440,145.7C1474.3,153,1509,123,1543,122.7C1577.1,123,1611,153,1646,161C1680,169,1714,153,1749,126.5C1782.9,100,1817,61,1851,61.3C1885.7,61,1920,100,1954,130.3C1988.6,161,2023,184,2057,164.8C2091.4,146,2126,84,2160,84.3C2194.3,84,2229,146,2263,149.5C2297.1,153,2331,100,2366,76.7C2400,54,2434,61,2451,65.2L2468.6,69L2468.6,230L2451.4,230C2434.3,230,2400,230,2366,230C2331.4,230,2297,230,2263,230C2228.6,230,2194,230,2160,230C2125.7,230,2091,230,2057,230C2022.9,230,1989,230,1954,230C1920,230,1886,230,1851,230C1817.1,230,1783,230,1749,230C1714.3,230,1680,230,1646,230C1611.4,230,1577,230,1543,230C1508.6,230,1474,230,1440,230C1405.7,230,1371,230,1337,230C1302.9,230,1269,230,1234,230C1200,230,1166,230,1131,230C1097.1,230,1063,230,1029,230C994.3,230,960,230,926,230C891.4,230,857,230,823,230C788.6,230,754,230,720,230C685.7,230,651,230,617,230C582.9,230,549,230,514,230C480,230,446,230,411,230C377.1,230,343,230,309,230C274.3,230,240,230,206,230C171.4,230,137,230,103,230C68.6,230,34,230,17,230L0,230Z"></path></svg> -->
  <svg style="background-color: #edf6ff;" width="100%" height="100%" id="svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><style>
.path-0{
animation:pathAnim-0 4s;
animation-timing-function: linear;
animation-iteration-count: infinite;
}
@keyframes pathAnim-0{
0%{
d: path("M 0,400 C 0,400 0,200 0,200 C 28.65024175979743,191.49523143847284 57.30048351959486,182.9904628769457 84,197 C 110.69951648040514,211.0095371230543 135.448307681418,247.53337993069005 159,265 C 182.551692318582,282.46662006930995 204.90628575473323,280.87601740029413 238,246 C 271.09371424526677,211.1239825997059 314.926549299649,142.96255046813346 349,145 C 383.073450700351,147.03744953186654 407.3875170466708,219.27378072717207 433,229 C 458.6124829533292,238.72621927282793 485.523382513668,185.9423266231784 513,189 C 540.476617486332,192.0576733768216 568.5189528986572,250.9569127801144 595,272 C 621.4810471013428,293.0430872198856 646.4008058917036,276.23002225636407 672,258 C 697.5991941082964,239.76997774363593 723.8778235345287,220.12299819442936 755,199 C 786.1221764654713,177.87700180557064 822.0878999701816,155.27798496591842 855,143 C 887.9121000298184,130.72201503408158 917.770576584745,128.7650619418969 942,140 C 966.229423415255,151.2349380581031 984.8297936908382,175.66176726649397 1014,188 C 1043.1702063091618,200.33823273350603 1082.9102486519023,200.5878689921273 1110,188 C 1137.0897513480977,175.4121310078727 1151.529211701552,149.98675676499678 1175,141 C 1198.470788298448,132.01324323500322 1230.97290454189,139.4651039478855 1264,136 C 1297.02709545811,132.5348960521145 1330.5791701308885,118.15282744346129 1360,127 C 1389.4208298691115,135.8471725565387 1414.7104149345557,167.92358627826934 1440,200 C 1440,200 1440,400 1440,400 Z");
}
25%{
d: path("M 0,400 C 0,400 0,200 0,200 C 27.63076319170458,198.42273027215666 55.26152638340916,196.8454605443133 86,195 C 116.73847361659084,193.1545394556867 150.58465765806793,191.04088809490338 181,209 C 211.41534234193207,226.95911190509662 238.39984298431915,264.9909870760732 265,251 C 291.60015701568085,237.00901292392678 317.8159704046555,170.99516360080375 349,165 C 380.1840295953445,159.00483639919625 416.336275397059,213.02835852071172 437,224 C 457.663724602941,234.97164147928828 462.83892800710873,202.89140231634943 492,213 C 521.1610719928913,223.10859768365057 574.308012574506,275.4060322138904 604,267 C 633.691987425494,258.5939677861096 639.9290216948675,189.4844688280889 663,163 C 686.0709783051325,136.5155311719111 725.975900646024,152.65609247375403 755,169 C 784.024099353976,185.34390752624597 802.1673757210365,201.89116127689496 831,200 C 859.8326242789635,198.10883872310504 899.3545964698294,177.77926241866618 928,166 C 956.6454035301706,154.22073758133382 974.4142383996461,150.9917890484403 1007,175 C 1039.5857616003539,199.0082109515597 1086.9884499315865,250.2535813875726 1115,248 C 1143.0115500684135,245.7464186124274 1151.6319618740079,189.99388540126918 1177,161 C 1202.3680381259921,132.00611459873082 1244.4837025723823,129.77087700735058 1278,154 C 1311.5162974276177,178.22912299264942 1336.4332278364623,228.9226065693284 1362,241 C 1387.5667721635377,253.0773934306716 1413.7833860817689,226.5386967153358 1440,200 C 1440,200 1440,400 1440,400 Z");
}
50%{
d: path("M 0,400 C 0,400 0,200 0,200 C 34.637176149300934,198.8528353718535 69.27435229860187,197.705670743707 92,207 C 114.72564770139813,216.294329256293 125.53976695489348,236.03015239702552 156,254 C 186.46023304510652,271.9698476029745 236.56657988182428,288.1737196681908 269,269 C 301.4334201181757,249.8262803318092 316.19391351780934,195.27496893021126 336,179 C 355.80608648219066,162.72503106978874 380.6577660469383,184.72640461096418 412,176 C 443.3422339530617,167.27359538903582 481.1750222944373,127.8194126259319 517,144 C 552.8249777055627,160.1805873740681 586.6421447753122,231.99594488530818 607,247 C 627.3578552246878,262.0040551146918 634.2563986043143,220.19680783283547 663,197 C 691.7436013956857,173.80319216716453 742.3322608074305,169.21682378334998 775,177 C 807.6677391925695,184.78317621665002 822.4145581659634,204.93589703376463 849,191 C 875.5854418340366,177.06410296623537 914.0095065287156,129.03958808159143 940,134 C 965.9904934712844,138.96041191840857 979.5474157191745,196.90575063986967 1004,231 C 1028.4525842808255,265.09424936013033 1063.8008305945857,275.33740935893 1096,264 C 1128.1991694054143,252.66259064107 1157.2492619024822,219.74461192441052 1183,222 C 1208.7507380975178,224.25538807558948 1231.2021217954855,261.6841429434279 1262,253 C 1292.7978782045145,244.31585705657207 1331.9422509155756,189.51881630187773 1363,173 C 1394.0577490844244,156.48118369812227 1417.0288745422122,178.24059184906113 1440,200 C 1440,200 1440,400 1440,400 Z");
}
75%{
d: path("M 0,400 C 0,400 0,200 0,200 C 24.10985791704742,226.7572066476421 48.21971583409484,253.5144132952842 77,241 C 105.78028416590516,228.4855867047158 139.230994580668,176.69955346650517 167,166 C 194.769005419332,155.30044653349483 216.85630584323314,185.68737283869513 246,196 C 275.14369415676686,206.31262716130487 311.3437820463993,196.55095517871425 339,194 C 366.6562179536007,191.44904482128575 385.7685659711696,196.1088064464479 417,185 C 448.2314340288304,173.8911935535521 491.5819540689223,147.01381903549435 520,136 C 548.4180459310777,124.98618096450566 561.9036177531417,129.83591741157483 585,132 C 608.0963822468583,134.16408258842517 640.8035749185112,133.64251131820635 676,157 C 711.1964250814888,180.35748868179365 748.8820825728133,227.5940373155998 777,226 C 805.1179174271867,224.4059626844002 823.6680947902361,173.98133941939446 848,150 C 872.3319052097639,126.01866058060554 902.4455382662418,128.48060500682232 933,159 C 963.5544617337582,189.51939499317768 994.5497521447969,248.09624055331633 1025,247 C 1055.450247855203,245.90375944668367 1085.355453154571,185.13443277991252 1109,174 C 1132.644546845429,162.86556722008748 1150.028435236919,201.36602832703375 1178,199 C 1205.971564763081,196.63397167296625 1244.5308058977525,153.40145391195244 1277,137 C 1309.4691941022475,120.59854608804756 1335.8483411720706,131.02815602515645 1362,146 C 1388.1516588279294,160.97184397484355 1414.0758294139646,180.48592198742176 1440,200 C 1440,200 1440,400 1440,400 Z");
}
100%{
d: path("M 0,400 C 0,400 0,200 0,200 C 28.65024175979743,191.49523143847284 57.30048351959486,182.9904628769457 84,197 C 110.69951648040514,211.0095371230543 135.448307681418,247.53337993069005 159,265 C 182.551692318582,282.46662006930995 204.90628575473323,280.87601740029413 238,246 C 271.09371424526677,211.1239825997059 314.926549299649,142.96255046813346 349,145 C 383.073450700351,147.03744953186654 407.3875170466708,219.27378072717207 433,229 C 458.6124829533292,238.72621927282793 485.523382513668,185.9423266231784 513,189 C 540.476617486332,192.0576733768216 568.5189528986572,250.9569127801144 595,272 C 621.4810471013428,293.0430872198856 646.4008058917036,276.23002225636407 672,258 C 697.5991941082964,239.76997774363593 723.8778235345287,220.12299819442936 755,199 C 786.1221764654713,177.87700180557064 822.0878999701816,155.27798496591842 855,143 C 887.9121000298184,130.72201503408158 917.770576584745,128.7650619418969 942,140 C 966.229423415255,151.2349380581031 984.8297936908382,175.66176726649397 1014,188 C 1043.1702063091618,200.33823273350603 1082.9102486519023,200.5878689921273 1110,188 C 1137.0897513480977,175.4121310078727 1151.529211701552,149.98675676499678 1175,141 C 1198.470788298448,132.01324323500322 1230.97290454189,139.4651039478855 1264,136 C 1297.02709545811,132.5348960521145 1330.5791701308885,118.15282744346129 1360,127 C 1389.4208298691115,135.8471725565387 1414.7104149345557,167.92358627826934 1440,200 C 1440,200 1440,400 1440,400 Z");
}
}</style><defs><linearGradient id="gradient" x1="50%" y1="0%" x2="50%" y2="100%"><stop offset="5%" stop-color="#032f4eff"></stop><stop offset="95%" stop-color="#0c75c0ff"></stop></linearGradient></defs><path d="M 0,400 C 0,400 0,200 0,200 C 28.65024175979743,191.49523143847284 57.30048351959486,182.9904628769457 84,197 C 110.69951648040514,211.0095371230543 135.448307681418,247.53337993069005 159,265 C 182.551692318582,282.46662006930995 204.90628575473323,280.87601740029413 238,246 C 271.09371424526677,211.1239825997059 314.926549299649,142.96255046813346 349,145 C 383.073450700351,147.03744953186654 407.3875170466708,219.27378072717207 433,229 C 458.6124829533292,238.72621927282793 485.523382513668,185.9423266231784 513,189 C 540.476617486332,192.0576733768216 568.5189528986572,250.9569127801144 595,272 C 621.4810471013428,293.0430872198856 646.4008058917036,276.23002225636407 672,258 C 697.5991941082964,239.76997774363593 723.8778235345287,220.12299819442936 755,199 C 786.1221764654713,177.87700180557064 822.0878999701816,155.27798496591842 855,143 C 887.9121000298184,130.72201503408158 917.770576584745,128.7650619418969 942,140 C 966.229423415255,151.2349380581031 984.8297936908382,175.66176726649397 1014,188 C 1043.1702063091618,200.33823273350603 1082.9102486519023,200.5878689921273 1110,188 C 1137.0897513480977,175.4121310078727 1151.529211701552,149.98675676499678 1175,141 C 1198.470788298448,132.01324323500322 1230.97290454189,139.4651039478855 1264,136 C 1297.02709545811,132.5348960521145 1330.5791701308885,118.15282744346129 1360,127 C 1389.4208298691115,135.8471725565387 1414.7104149345557,167.92358627826934 1440,200 C 1440,200 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="url(#gradient)" class="transition-all duration-300 ease-in-out delay-150 path-0"></path></svg>
<footer>
  <div class="container">
            <div class="row top pb-3">
                <div class="col-xm-12 col-sm-6 col-md-4">
                  <div style="height: 100%;" class="logo text-center">
                    <div style="height: 100%;" class="row">
                        <div style="display:flex;justify-content: center;align-items: center;height: 100%;" class="col-12">
                         <img class="w-100" src="img/LOGO.webp" alt="logo">
                        </div>
                    </div>
                  </div>
               </div>
                <div class="col-xm-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="links text-center mt-3">
                        <div class="footer_linkes row">
                            <div class="col-12 mb-3"><a style="text-decoration:none" href="index.php">Home</a></div>
                            <div class="col-12 mb-3"><a style="text-decoration:none" href="about.php">About</a></div>
                            <div class="col-12 mb-3"><a style="text-decoration:none" href="events.php">Events</a></div>
                            <div class="col-12 mb-3"><a style="text-decoration:none" href="ieee_tv.php">IEEE TV</a></div>
                            <div class="col-12 mb-3"><a style="text-decoration:none" href="blogs.php">Blogs</a></div>
                            <div class="col-12 mb-3"><a style="text-decoration:none" href="faq.php">FAQ</a></div>
                            <div class="col-12 mb-3"><a style="text-decoration:none" href="our_activities.php">Our Activities</a></div>
                        </div>
                    </div>
               </div>
                <div class="col-xm-12 col-sm-6 col-md-4 col-lg-3">
                   <div class="mail mt-5 text-center">
                        <div class="row text-center pt-5">
                            <div style="display:flex;justify-content: center;align-items: center;height: 100%;" class="col-12">
                                <img style="display: block;margin: auto;margin-bottom:10px;" src="img/email.webp" alt="email">
                            </div>
                            <div style="display:flex;justify-content: center;align-items: center;height: 100%;" class="col-12">
                                <h4>MAIL</h4>
                            </div>
                            <div style="display:flex;justify-content: center;align-items: center;height: 100%;" class="col-12">
                                <a style="text-decoration:none" href="mailto:ieee.bub.sb6@gmail.com">info@ieee-bub.com</a>
                            </div>
                        </div>
                   </div>
               </div>
                <div class="col-xm-12 col-sm-6 col-md-4 col-lg-3">
                   <div class="location mt-5 text-center mb-5">
                        <div class="row text-center pt-5">
                            <div class="col-12">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="col-12">
                                <h4>FIND US</h4>
                            </div>
                            <div class="col-12">
                                <a style="text-decoration:none;font-size: 1.3rem;color: #fff;" href="https://goo.gl/maps/52dG9hkyd5gwuBhr9" target="_blank">Benha University</a>
                            </div>
                        </div>
                   </div>
               </div>
            </div>
            <div class="row middle mt-4 pb-3">
                <div class="icons m-auto text-center">
                    <div class="row">
                        <div class="col-12">
                            <a href="https://web.facebook.com/IEEE.BUB.SB?_rdc=1&_rdr" target="_blank"><i  style="margin-bottom:20px;" class="fab fa-facebook-f"></i></a>
                            <a href="https://www.linkedin.com/company/ieee-bub-sb/" target="_blank"><i  style="margin-bottom:20px;" class="fab fa-linkedin"></i></a>
                            <a href="https://instagram.com/ieee.bub?igshid=YmMyMTA2M2Y=" target="_blank"><i  style="margin-bottom:20px;" class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UC6iqY0Z5b7sx9F1Nz39NyPQ/playlists" target="_blank"><i  style="margin-bottom:20px;" class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="last">
                <div class="row mt-4 pb-3">
                    <div class="col-12 text-center">
                        <span>copyright © 2022 - IEEE-BUB SB , All Right Reserved.</span>
                    </div>
                </div>
            </div>
       </div>
</footer>
<!-- =============== end footer ==================== -->

<!-- =============== start loading ==================== -->
<div class="loading">
        <div id="preloder">
            <img src="img/loader1.gif" alt="logo gif">
        </div>
    </div>
<!-- =============== end loading ==================== -->

<?php
require_once "./includes/template/footer.php";
if(isset($_GET['season'])){
  echo "<script>
  $('html, body').animate({

    scrollTop: $('.height_board').offset().top - 100

}, 500);
  </script>";
}
ob_end_flush();?>
