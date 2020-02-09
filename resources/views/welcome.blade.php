@extends('layouts.user')

@section('content')


<main role="main">
  <div id="header" class="home">

    <div class="container">
      <div class="header-content">
        <h1>NPI University Of Bangladesh</h1>
        <p>Department Of Computer Science And Technology</p>

        <ul class="list-unstyled list-social">
          <li><a href="<%=general.facebook%>"><i class="ion-social-facebook"></i></a></li>
          <li><a href="<%=general.twitter%>"><i class="ion-social-twitter"></i></a></li>
          <li><a href="<%=general.instagram%>"><i class="ion-social-instagram"></i></a></li>
          <li><a href="<%=general.tumblr%>"><i class="ion-social-tumblr"></i></a></li>
        </ul>
      </div>
    </div>
  </div>



    <!-- START THE FEATURETTES -->


     <!-- start section about us -->
  <div id="about" class="paddsection">
    <div class="container">
      <div class="row justify-content-between">

        <div class="col-lg-4 ">
          <div class="div-img-bg">
            <div class="about-img">
              <img src="/storage/npi.png" class="img-responsive" alt="me">
            </div>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="about-descr">

            <p class="p-heading"><%=general.aboutHeader%></p>
            <p class="separator"><%=general.aboutText%></p>

          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- end section about us -->


  <!-- start section portfolio -->
  <div id="portfolio" class="text-center paddsection">

    <div class="container">
      <div class="section-title text-center">
        <h2>My Portfolio</h2>
      </div>
    </div>

    {{-- <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="portfolio-list">

            <ul class="nav list-unstyled" id="portfolio-flters">
              <li class="filter filter-active" data-filter=".all">all</li>
              <li class="filter" data-filter=".branding">branding</li>
              <li class="filter" data-filter=".mockups">mockups</li>
              <li class="filter" data-filter=".uikits">ui kits</li>
              <li class="filter" data-filter=".webdesign">web design</li>
              <li class="filter" data-filter=".photography">photography</li>
            </ul>

          </div>

          <div class="portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all branding uikits webdesign">
              <a class="popup-img" href="/images/portfolio/1.jpg">
                <img src="/images/portfolio/1.jpg" alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all mockups uikits photography">
              <a class="popup-img" href="/images/portfolio/2.jpg">
                <img src="/images/portfolio/2.jpg"  alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all branding webdesig photographyn">
              <a class="popup-img" href="/images/portfolio/3.jpg">
                <img src="/images/portfolio/3.jpg" alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all mockups webdesign photography">
              <a class="popup-img" href="/images/portfolio/4.jpg">
                <img src="/images/portfolio/4.jpg" alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all branding uikits photography">
              <a class="popup-img" href="/images/portfolio/5.jpg">
                <img src="/images/portfolio/5.jpg" alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all mockups uikits webdesign">
              <a class="popup-img" href="/images/portfolio/6.jpg">
                <img src="/images/portfolio/6.jpg" alt="img">
              </a>
            </div>

          </div>
        </div>
      </div>
    </div> --}}

  </div>
  <!-- End section portfolio -->


  <!-- start section journal -->
  <div id="journal" class="text-left paddsection">

    <div class="container">
      <div class="section-title text-center">
        <h2>journal</h2>
      </div>
    </div>

    <div class="container">
      <div class="journal-block">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="journal-info">

              <a href="/blog/single"><img src="/images/blog-post-1.jpg" class="img-responsive" alt="img"></a>

              <div class="journal-txt">

                <h4><a href="/blog/single">SO LETS MAKE THE MOST IS BEAUTIFUL</a></h4>
                <p class="separator">To an English person, it will seem like simplified English
                </p>

              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="journal-info">

              <a href="/blog/single"><img src="/images/blog-post-2.jpg" class="img-responsive" alt="img"></a>

              <div class="journal-txt">

                <h4><a href="#/blog/single">WE'RE GONA MAKE DREAMS COMES</a></h4>
                <p class="separator">To an English person, it will seem like simplified English
                </p>

              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="journal-info">

              <a href="/blog/single"><img src="/images/blog-post-3.jpg" class="img-responsive" alt="img"></a>

              <div class="journal-txt">

                <h4><a href="/blog/single">NEW LIFE CIVILIZATIONS TO BOLDLY</a></h4>
                <p class="separator">To an English person, it will seem like simplified English
                </p>

              </div>

            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
  <!-- End section journal -->


  <!-- start sectoion contact -->
  <div id="contact" class="paddsection">
    <div class="container">
      <div class="contact-block1">
        <div class="row">

          <div class="col-lg-4">
            <div class="contact-contact">

              <h2 class="mb-30">GET IN TOUCH</h2>

              <ul class="contact-details">
                <li><span>Narangai, Manikgonj.</span></li>
                <li><span>Dhaka</span></li>
                <li><span>01703-444111</span></li>
                <li><span>info@npiub.edu.bd</span></li>
              </ul>

            </div>
          </div>
          <div class="col-lg-4">
          <div class="contact-contact">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14594.037359572105!2d90.002796!3d23.871551!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4d40cf17d55306f8!2sNPI%20University%20of%20Bangladesh!5e0!3m2!1sen!2sus!4v1581188255500!5m2!1sen!2sus" height="400" frameborder="0" style="border:0;" allowfullscreen="TRUE"></iframe>

          </div>

          </div>

          <div class="col-lg-4">
            <form action="" method="post" role="form" class="contactForm">
              <div class="row">

                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>

                <div class="col-lg-6">
                  <div class="form-group contact-block1">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <input type="submit" class="btn btn-defeault btn-send" value="Send message">
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- start sectoion contact -->

</main>
@endsection
