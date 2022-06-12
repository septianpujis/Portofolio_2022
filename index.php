<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Septian Puji - Portofolio</title>
    <link rel="icon" href="assets/images/icon.png" type = "image/x-icon">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />

    <!-- Bootstrap core CSS -->
    <link href="js/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-style.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/lightbox.css" />
    <link rel="stylesheet" href="assets/css/timeline.css" />

    <!-- Language JSON -->
    <?php include 'lang_config.php';?>
  </head>

  <body>
    <div id="page-wraper">
      <!-- Sidebar Menu -->
      <div class="responsive-nav">
        <i class="fa fa-bars" id="menu-toggle"></i>
        <div id="menu" class="menu">
          <i class="fa fa-times" id="menu-close"></i>
          <div class="container">
            <div class="social-network">
              <ul class="soial-icons">
                <li>
                  <a href="?lang=id">
                    <b>ID</b>
                  </a>
                </li>
                <li>
                  <a href="?lang=en">
                    <b>EN</b>
                  </a>
                </li>
              </ul>
            </div>
            <div class="image" style="margin-top : 20px;">
              <img src="assets/images/author-image.jpg" alt="Profile Picture" />
            </div>
            <div class="author-content">
              <h4>Septian Puji</h4>
              <span>Web/Mobile Developer</span>
            </div>
            <div class="social-network">
              <ul class="soial-icons">
                <li>
                  <a href="https://www.facebook.com/septianpujisaputro/" target="_blank">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li>
                  <a href="https://twitter.com/septianpujipuji" target="_blank">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/in/septian-puji-b93885135/" target="_blank">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
                <li>
                  <a href="mailto:septianpujipuji@gmail.com">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                  </a>
                </li>
                <li>
                  <a href="https://github.com/septianpujis" target="_blank">
                    <i class="fa fa-github" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
            <nav class="main-nav" role="navigation">
              <ul class="main-menu">
                <li><a href="#section1"><?php echo $text['title_1']?></a></li>
                <li><a href="#section2"><?php echo $text['title_2']?></a></li>
                <li><a href="#section3"><?php echo $text['title_3']?></a></li>
                <li><a href="#section4"><?php echo $text['title_4']?></a></li>
              </ul>
            </nav>
            <div class="copyright-text">
              <p>Copyright 2019 Reflux Design</p>
            </div>
          </div>
        </div>
      </div>

      <section class="section about-me" data-section="section1">
        <div class="container">
          <div class="section-heading">
            <h2><?php echo $text['title_1']?></h2>
            <div class="line-dec"></div>
            <h5>
              Web and Mobile Full Stack Developer.
            </h5>
            <span>
              <?php echo $text['about']; ?>
            </span>
          </div>
          <div class="left-image-post">
            <div class="row">
              <div class="col-md-6">
                <div class="left-image">
                  <img src="assets/images/left-image.jpg" alt="Evotech Team" />
                  <!-- Gambar ganti foto evotech aja, harusnya gapapa-->
                </div>
              </div>
              <div class="col-md-6">
                <div class="right-text">
                  <p style="font-size:1.5em; margin:0px;">
                    <b><? echo $text['pengalaman_kerja_judul']?></b>
                  </p>
                  <p><?php echo $text['pengalaman_kerja_tanggal']?></p>
                  <p><?php echo $text['pengalaman_kerja_text']?></p>
                  <div class="white-button">
                    <a href="https://evotech.co.id/" target="_blank">Read More about Evotech</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="right-image-post">
            <div class="row">
              <div class="col-md-6">
                <div class="left-text">
                  <p style="font-size:1.5em; margin:0px;">
                    <b><?php echo $text['sarjana_judul']?></b>
                  </p>
                  <p><?php echo $text['sarjana_tanggal']?></p>
                  <p><?php echo $text['sarjana_text']?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="right-image">
                  <img src="assets/images/right-image.jpg" alt="" />
                  <!-- gambar pake gambar wisuda, ada di hp-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section" data-section="section5" style="min-height: 40px;">
        <div class="container">
          <div class="section-heading">
            <div class="container">
              <div class="Timeline">
                <svg height="5" width="200">
                  <line x1="0" y1="0" x2="200" y2="0" style="stroke:#004165;stroke-width:5" />
                  Sorry, your browser does not support inline SVG.
                </svg>
              
                <div class="event1">
                  <div class="event1Bubble">
                    <div class="eventTime">
                      <div class="DayDigit">02</div>
                      <div class="Day">
                         Wednesday
                        <div class="MonthYear">february 2016</div>
                      </div>
                    </div>
                    <div class="eventTitle">Profile Created</div>
                  </div>
                  <div class="eventAuthor">by Youri Nelson</div>
                  <svg height="20" width="20">
                    <circle cx="10" cy="11" r="5" fill="#004165" />
                  </svg>
                  <div class="time">9 : 27 AM</div>
                  
                </div>
                
                <svg height="5" width="300">
                  <line x1="0" y1="0" x2="300" y2="0" style="stroke:#004165;stroke-width:5" />
                  Sorry, your browser does not support inline SVG.
                </svg>
              
                <div class="event2">
                  
                  <div class="event2Bubble">
                    <div class="eventTime">
                      <div class="DayDigit">17</div>
                      <div class="Day">
                         Thursday
                        <div class="MonthYear">April 2016</div>
                      </div>
                    </div>
                    <div class="eventTitle">Phone Interview</div>
                  </div>
                  <div class="event2Author">by Tom Eggleston</div>
                    <svg height="20" width="20">
                      <circle cx="10" cy="11" r="5" fill="#004165" />
                    </svg>
                  <div class="time2">1 : 32 PM</div>
                </div>
                
                <svg height="5" width="50">
                  <line x1="0" y1="0" x2="50" y2="0" style="stroke:#004165;stroke-width:5" />
                  Sorry, your browser does not support inline SVG.
                </svg>

                
              <svg height="5" width="50">
                <line x1="0" y1="0" x2="50" y2="0" style="stroke:#004165;stroke-width:5" /> 
              </svg>
              <svg height="20" width="42">
                <line x1="1" y1="0" x2="1" y2="20" style="stroke:#004165;stroke-width:2" /> 
                <circle cx="11" cy="10" r="3" fill="#004165" />  
                <circle cx="21" cy="10" r="3" fill="#004165" />  
                <circle cx="31" cy="10" r="3" fill="#004165" />    
                <line x1="41" y1="0" x2="41" y2="20" style="stroke:#004165;stroke-width:2" /> 
              </svg>  
                
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section my-services" data-section="section2">
        <div class="container">
          <div class="section-heading">
            <h2><?php echo $text['title_2']?></h2>
            <div class="line-dec"></div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="service-item">
                <div class="first-service-icon service-icon"></div>
                <h4>Work With Framework</h4>
                <p>
                  Isi Teks aja dulu
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <div class="second-service-icon service-icon"></div>
                <h4>Modular & Efficient Ideas</h4>
                <p>
                  Isi Teks dulu
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <div class="third-service-icon service-icon"></div>
                <h4>Work With API Integration</h4>
                <p>
                  Isi Teks
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <div class="fourth-service-icon service-icon"></div>
                <h4>Full Stack</h4>
                <p>
                  Isi Teks
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section my-work" data-section="section3">
        <div class="container">
          <div class="section-heading">
            <h2><?php echo $text['title_3']?></h2>
            <div class="line-dec"></div>
            <span>
              Berikut beberapa project yang pernah/sedang saya kerjakan. Project yang saya sebutkan berikut merupakan project yang saya kerjakan sendiri.
            </span>
          </div>
          <div class="row">
            <div class="isotope-wrapper">
              <form class="isotope-toolbar">
                <label>
                  <input type="radio" data-type="*" checked="" name="isotope-filter"/>
                  <span>all</span>
                </label>
                <label>
                  <input type="radio" data-type="web" name="isotope-filter"/>
                  <span>Web</span>
                </label>
                <label>
                  <input type="radio" data-type="mobile" name="isotope-filter"/>
                  <span>Mobile</span>
                </label>
              </form>
              <div class="isotope-box">
                <div class="isotope-item" data-type="web">
                  <figure class="snip1321">
                    <img src="assets/images/portofolio-01-T.PNG" alt="Project-01-Sipusdi" />
                    <figcaption>
                      <a href="assets/images/portfolio-01.gif" data-lightbox="image-1" data-title="Sistem Perpustakaan Digital | dibangun menggunakan aplikasi Outsystems, Low-Code Development Platform for web/mobile<br>Untuk live demo, klik <a href='https://personal-i6nfgh8p.outsystemscloud.com/SiPusDi/' target='_blank'>Link Berikut</a>">
                        <i class="fa fa-search"></i>
                      </a>
                      <h4>Outsystems</h4>
                      <span>Low-Code Development Platform</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="mobile">
                  <figure class="snip1321">
                    <img src="assets/images/portfolio-02.jpg" alt="sq-sample26"/>
                    <figcaption>
                      <a href="assets/images/portfolio-02.jpg" data-lightbox="image-2" data-title="Caption images <a href='http://www.twitter.com'>AAAA</a>" data-alt="Altttttt">
                        <i class="fa fa-search"></i>
                      </a>
                      <h4>Second Title</h4>
                      <span>please tell your friends</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="web">
                  <figure class="snip1321">
                    <img src="assets/images/portfolio-03.jpg" alt="sq-sample26"/>
                    <figcaption>
                      <a href="assets/images/portfolio-03.jpg" data-lightbox="image-3" data-title="Caption">
                        <i class="fa fa-search"></i>
                      </a>
                      <h4>Item Third</h4>
                      <span>customize anything</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="web">
                  <figure class="snip1321">
                    <img src="assets/images/portfolio-04.jpg" alt="sq-sample26" />
                    <figcaption>
                      <a href="assets/images/portfolio-04.jpg" data-lightbox="image-4" data-title="Caption">
                        <i class="fa fa-search"></i>
                      </a>
                      <h4>Item Fourth</h4>
                      <span>Re-distribution not allowed</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="mobile">
                  <figure class="snip1321">
                    <img src="assets/images/portfolio-05.jpg" alt="sq-sample26" />
                    <figcaption>
                      <a href="assets/images/portfolio-05.jpg" data-lightbox="image-5" data-title="Caption" >
                        <i class="fa fa-search"></i>
                      </a>
                      <h4>Fifth Awesome</h4>
                      <span>Ut sollicitudin risus</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="mobile">
                  <figure class="snip1321">
                    <img src="assets/images/portfolio-06.jpg" alt="sq-sample26"/>
                    <figcaption>
                      <a href="assets/images/portfolio-06.jpg" data-lightbox="image-6" data-title="Caption">
                        <i class="fa fa-search"></i>
                      </a>
                      <h4>Awesome Sixth</h4>
                      <span>Donec eget massa ante</span>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section contact-me" data-section="section4">
        <div class="container">
          <div class="section-heading">
            <h2><?php echo $text['title_4']?></h2>
            <div class="line-dec"></div>
            <span>
              You have any question about me? Send it directly here. (It's work)
            </span>
          </div>
          <div class="row">
            <div class="right-content">
              <div class="container">
                <form id="contact" action="Message_Send.php" method="post">
                  <input hidden disabled value="ID" name="lang" id="lang">
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset>
                        <input
                          name="name"
                          type="text"
                          class="form-control"
                          id="name"
                          placeholder="Your name..."
                          required=""
                          maxlength="50"
                        />
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input
                          name="email"
                          type="email"
                          class="form-control"
                          id="email"
                          placeholder="Your email..."
                          required=""
                          maxlength="250"
                        />
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input
                          name="subject"
                          type="text"
                          class="form-control"
                          id="subject"
                          placeholder="Subject..."
                          required=""
                          maxlength="500"
                        />
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <textarea
                          name="message"
                          rows="6"
                          class="form-control"
                          id="message"
                          placeholder="Your message..."
                          required=""
                          maxlength="5000"
                        ></textarea>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="button">
                          Send Message
                        </button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/timeline.js"></script>
    <script>
      $(".main-menu li:first").addClass("active");

      var showSection = function showSection(section, isAnimate) {
        var direction = section.replace(/#/, ""),
          reqSection = $(".section").filter(
            '[data-section="' + direction + '"]'
          ),
          reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
          $("body, html").animate(
            {
              scrollTop: reqSectionPos
            },
            800
          );
        } else {
          $("body, html").scrollTop(reqSectionPos);
        }
      };

      var checkSection = function checkSection() {
        $(".section").each(function() {
          var $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
          if (topEdge < wScroll && bottomEdge > wScroll) {
            var currentId = $this.data("section"),
              reqLink = $("a").filter("[href*=\\#" + currentId + "]");
            reqLink
              .closest("li")
              .addClass("active")
              .siblings()
              .removeClass("active");
          }
        });
      };

      $(".main-menu").on("click", "a", function(e) {
        e.preventDefault();
        showSection($(this).attr("href"), true);
      });

      $(window).scroll(function() {
        checkSection();
      });
    </script>
  </body>
</html>
