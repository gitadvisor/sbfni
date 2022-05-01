<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('ui/frontend/css/customstyle.css') }}">
  <link rel="stylesheet" href="{{ asset('ui/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('ui/frontend/css/novi.css') }}">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  

  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('ui/frontend/images/slider/slide1.jpg') }}" class="d-block w-100" alt="..." style="height: 500px;">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('ui/frontend/images/slider/slide2.jpg') }}" class="d-block w-100" alt="..." style="height: 500px;">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('ui/frontend/images/slider/slide3.jpg') }}" class="d-block w-100" alt="..." style="height: 500px;">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <section>
    <div class="row">
      <div class="col-md-3 sec2col" style="background-color: #441a7a;">
        1
      </div>
      <div class="col-md-3 sec2col" style="background-color: #eb4034;">
        2
      </div>
      <div class="col-md-3 sec2col" style="background-color: #05365e;">
        3
      </div>
      <div class="col-md-3 sec2col" style="background-color: #c98104;">
        4
      </div>
    </div>
  </section>

  <section>
    <div class="row">
      <div class="col-md-7">
        <div style="padding-left: 70px; padding-right: 30px; padding-top: 70px">
          <h2>What We Offer</h2>
          <p style="padding-top: 20px;">At Daffodil International University, students get the</p> <p style="padding-bottom: 20px;">opportunity to think, learn and grow.</p>
          <div>
            <div class="row">
              <div class="col-md-6">
                <div class="d-flex">
                  <div class="logo">
                    logo
                  </div>
                  <div style="padding-left: 20px;">
                    <h4>Accomodation</h4>
                    <p>We are providing a secure and convenient living facility for our students. DIU dormitories are a home away from home...</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
              <div class="d-flex">
                  <div class="logo">
                    logo
                  </div>
                  <div style="padding-left: 20px;">
                    <h4>Accomodation</h4>
                    <p>We are providing a secure and convenient living facility for our students. DIU dormitories are a home away from home...</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
              <div class="d-flex">
                  <div class="logo">
                    logo
                  </div>
                  <div style="padding-left: 20px;">
                    <h4>Accomodation</h4>
                    <p>We are providing a secure and convenient living facility for our students. DIU dormitories are a home away from home...</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
              <div class="d-flex">
                  <div class="logo">
                    logo
                  </div>
                  <div style="padding-left: 20px;">
                    <h4>Accomodation</h4>
                    <p>We are providing a secure and convenient living facility for our students. DIU dormitories are a home away from home...</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <img src="{{ asset('ui/frontend/images/home-01-846x1002.jpg') }}" alt="" style="width: 80%; height: 100%" >
      </div>
    </div>
  </section>

  <section>
    <div class="row" style="background-color: #441a7a;">
      <div class="col-md-5">
        <img src="{{ asset('ui/frontend/images/home-01-846x1002.jpg') }}" alt="" style="width: 100%;>
      </div>
      <div class="col-md-7"></div>
    </div>
  </section>
  <section class="section novi-background bg-cover section-70 section-md-114 bg-catskill">
    <div class="shell-wide">
      <h2 class="text-bold">Events</h2>
      <hr class="divider bg-madison" />
      <div class="range range-50 offset-top-50 range-xs-center">
        <div class="cell-sm-6 cell-md-5 cell-xl-3">
          <article class="post-event">
            <div class="post-event-img-overlay">
              <img
                class="img-responsive"
                src="images/blog/events-01-420x420.jpg"
                alt=""
                width="420"
                height="420"
              />
              <div class="post-event-overlay context-dark">
                <a class="btn btn-primary" href="#">Book Now</a>
                <div class="offset-top-20">
                  <a class="btn btn-default" href="event-page.html"
                    >Learn More</a
                  >
                </div>
              </div>
              <div class="post-event-meta text-center">
                <div
                  class="h3 text-bold reveal-inline-block reveal-lg-block"
                >
                  31
                </div>
                <p class="reveal-inline-block reveal-lg-block">September</p>
                <span
                  class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0"
                  >5:00pm</span
                >
              </div>
            </div>
            <div class="unit unit-lg unit-lg-horizontal">
              <div class="unit-body">
                <div class="post-event-body text-lg-left">
                  <h6>
                    <a href="event-page.html">Spacewalking Conference</a>
                  </h6>
                  <ul class="list-inline list-inline-xs">
                    <li>
                      <a href="team-member-profile.html"
                        ><span
                          class="icon novi-icon icon-xxs mdi mdi-account-outline text-middle"
                        ></span
                        ><span class="inset-left-10 text-dark text-middle"
                          >Walter Stanley</span
                        ></a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </article>
        </div>
        <div class="cell-sm-6 cell-md-5 cell-xl-3">
          <article class="post-event">
            <div class="post-event-img-overlay">
              <img
                class="img-responsive"
                src="images/blog/events-02-420x420.jpg"
                alt=""
                width="420"
                height="420"
              />
              <div class="post-event-overlay context-dark">
                <a class="btn btn-primary" href="#">Book Now</a>
                <div class="offset-top-20">
                  <a class="btn btn-default" href="event-page.html"
                    >Learn More</a
                  >
                </div>
              </div>
              <div class="post-event-meta text-center">
                <div
                  class="h3 text-bold reveal-inline-block reveal-lg-block"
                >
                  05
                </div>
                <p class="reveal-inline-block reveal-lg-block">May</p>
                <span
                  class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0"
                  >5:00pm</span
                >
              </div>
            </div>
            <div class="unit unit-lg unit-lg-horizontal">
              <div class="unit-body">
                <div class="post-event-body text-lg-left">
                  <h6>
                    <a href="event-page.html"
                      >International Conference on Biomolecular
                      Engineering</a
                    >
                  </h6>
                  <ul class="list-inline list-inline-xs">
                    <li>
                      <a href="team-member-profile.html"
                        ><span
                          class="icon novi-icon icon-xxs mdi mdi-account-outline text-middle"
                        ></span
                        ><span class="inset-left-10 text-dark text-middle"
                          >Raymond Salazar</span
                        ></a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </article>
        </div>
        <div class="cell-sm-6 cell-md-5 cell-xl-3">
          <article class="post-event">
            <div class="post-event-img-overlay">
              <img
                class="img-responsive"
                src="images/blog/events-03-420x420.jpg"
                alt=""
                width="420"
                height="420"
              />
              <div class="post-event-overlay context-dark">
                <a class="btn btn-primary" href="#">Book Now</a>
                <div class="offset-top-20">
                  <a class="btn btn-default" href="event-page.html"
                    >Learn More</a
                  >
                </div>
              </div>
              <div class="post-event-meta text-center">
                <div
                  class="h3 text-bold reveal-inline-block reveal-lg-block"
                >
                  17
                </div>
                <p class="reveal-inline-block reveal-lg-block">June</p>
                <span
                  class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0"
                  >5:00pm</span
                >
              </div>
            </div>
            <div class="unit unit-lg unit-lg-horizontal">
              <div class="unit-body">
                <div class="post-event-body text-lg-left">
                  <h6>
                    <a href="event-page.html">Graphic Design Workshop</a>
                  </h6>
                  <ul class="list-inline list-inline-xs">
                    <li>
                      <a href="team-member-profile.html"
                        ><span
                          class="icon novi-icon icon-xxs mdi mdi-account-outline text-middle"
                        ></span
                        ><span class="inset-left-10 text-dark text-middle"
                          >Bruce Hawkins</span
                        ></a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </article>
        </div>
        <div class="cell-sm-6 cell-md-5 cell-xl-3">
          <article class="post-event">
            <div class="post-event-img-overlay">
              <img
                class="img-responsive"
                src="images/blog/events-04-420x420.jpg"
                alt=""
                width="420"
                height="420"
              />
              <div class="post-event-overlay context-dark">
                <a class="btn btn-primary" href="#">Book Now</a>
                <div class="offset-top-20">
                  <a class="btn btn-default" href="event-page.html"
                    >Learn More</a
                  >
                </div>
              </div>
              <div class="post-event-meta text-center">
                <div
                  class="h3 text-bold reveal-inline-block reveal-lg-block"
                >
                  06
                </div>
                <p class="reveal-inline-block reveal-lg-block">June</p>
                <span
                  class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0"
                  >5:00pm</span
                >
              </div>
            </div>
            <div class="unit unit-lg unit-lg-horizontal">
              <div class="unit-body">
                <div class="post-event-body text-lg-left">
                  <h6><a href="event-page.html">History of Art</a></h6>
                  <ul class="list-inline list-inline-xs">
                    <li>
                      <a href="team-member-profile.html"
                        ><span
                          class="icon novi-icon icon-xxs mdi mdi-account-outline text-middle"
                        ></span
                        ><span class="inset-left-10 text-dark text-middle"
                          >Danielle Garza</span
                        ></a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </article>
        </div>
      </div>
      <div class="offset-top-50 offset-lg-top-56">
        <a
          class="btn btn-icon btn-icon-right btn-primary"
          href="events.html"
          ><span class="icon fa-arrow-right"></span
          ><span>View Event Calendar</span></a
        >
      </div>
    </div>
  </section>

<section class="quotesection">
  <div class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 mx-auto">
                <div class="p-5 bg-white shadow rounded">
                    <!-- Bootstrap carousel-->
                    <div class="carousel slide" id="carouselExampleIndicators" data-ride="carousel">
                        <!-- Bootstrap carousel indicators [nav] -->
                        <ol class="carousel-indicators mb-0">
                            <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>


                        <!-- Bootstrap inner [slides]-->
                        <div class="carousel-inner px-5 pb-4">
                            <!-- Carousel slide-->
                            <div class="carousel-item active">
                                <div class="media"><img class="rounded-circle img-thumbnail" src="https://bootstrapious.com/i/snippets/sn-slider-quote/avatar-1.jpg" alt="" width="75">
                                    <div class="media-body ml-3">
                                        <blockquote class="blockquote border-0 p-0">
                                            <p class="font-italic lead"> <i class="fa fa-quote-left mr-3 text-success"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <footer class="blockquote-footer">Someone famous in
                                                <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Carousel slide-->
                            <div class="carousel-item">
                                <div class="media"><img class="rounded-circle img-thumbnail" src="https://bootstrapious.com/i/snippets/sn-slider-quote/avatar-3.jpg" alt="" width="75">
                                    <div class="media-body ml-3">
                                        <blockquote class="blockquote border-0 p-0">
                                            <p class="font-italic lead"> <i class="fa fa-quote-left mr-3 text-success"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <footer class="blockquote-footer">Someone famous in
                                                <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Carousel slide-->
                            <div class="carousel-item">
                                <div class="media"><img class="rounded-circle img-thumbnail" src="https://bootstrapious.com/i/snippets/sn-slider-quote/avatar-2.jpg" alt="" width="75">
                                    <div class="media-body ml-3">
                                        <blockquote class="blockquote border-0 p-0">
                                            <p class="font-italic lead"> <i class="fa fa-quote-left mr-3 text-success"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <footer class="blockquote-footer">Someone famous in
                                                <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Bootstrap controls [dots]-->
                        <a class="carousel-control-prev width-auto" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <i class="fa fa-angle-left text-dark text-lg"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next width-auto" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <i class="fa fa-angle-right text-dark text-lg"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>

<section class="section novi-background bg-cover section-70 section-md-114 bg-catskill">
  <div class="shell isotope-wrap">
    <h2 class="text-bold">Latest News</h2>
    <hr class="divider bg-madison" />
    <div class="row range-30 isotope offset-top-50 text-left">
      <div class="col-xs-12 col-sm-6 col-md-4 isotope-item">
        <article class="post-news">
          <a href="news-post-page.html"
            ><img
              class="img-responsive"
              src="images/blog/news-04-370x240.jpg"
              alt=""
              width="370"
              height="240"
          /></a>
          <div class="post-news-body">
            <h6>
              <a href="news-post-page.html">
                Ways Parents and Counselors</a
              >
            </h6>
            <div class="offset-top-20">
              <p>
                Securing scholarships can be stressful, but parents and
                counselors can serve as a resource.
              </p>
            </div>
            <div class="post-news-meta offset-top-20">
              <span
                class="icon novi-icon icon-xs mdi mdi-calendar-clock text-middle text-madison"
              ></span
              ><span
                class="text-middle inset-left-10 text-italic text-black"
                >3 days ago</span
              >
            </div>
          </div>
        </article>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 isotope-item">
        <article class="post-news">
          <a href="news-post-page.html"
            ><img
              class="img-responsive"
              src="images/blog/news-05-370x240.jpg"
              alt=""
              width="370"
              height="240"
          /></a>
          <div class="post-news-body">
            <h6>
              <a href="news-post-page.html"> Consider MBA Programs</a>
            </h6>
            <div class="offset-top-20">
              <p>
                Summer preparatory programs offered through schools allow
                students to get a head start on making connections and
                building skills.
              </p>
            </div>
            <div class="post-news-meta offset-top-20">
              <span
                class="icon novi-icon icon-xs mdi mdi-calendar-clock text-middle text-madison"
              ></span
              ><span
                class="text-middle inset-left-10 text-italic text-black"
                >4 days ago</span
              >
            </div>
          </div>
        </article>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 isotope-item">
        <article class="post-news">
          <a href="news-post-page.html"
            ><img
              class="img-responsive"
              src="images/blog/news-06-370x240.jpg"
              alt=""
              width="370"
              height="240"
          /></a>
          <div class="post-news-body">
            <h6>
              <a href="news-post-page.html"
                >Studying in the United States</a
              >
            </h6>
            <div class="offset-top-20">
              <p>
                International students increasingly want to come to the
                United States for college or graduate school.
              </p>
            </div>
            <div class="post-news-meta offset-top-20">
              <span
                class="icon novi-icon icon-xs mdi mdi-calendar-clock text-middle text-madison"
              ></span
              ><span
                class="text-middle inset-left-10 text-italic text-black"
                >2 days ago</span
              >
            </div>
          </div>
        </article>
      </div>
    </div>
    <div class="offset-top-50">
      <a class="btn btn-primary" href="grid-news.html"
        >View All News Posts</a
      >
    </div>
  </div>
</section>

<footer class="section page-footer">
        <div class="novi-background bg-cover bg-default">
          <div class="shell-wide"><div class="hr bg-gray-light"></div></div>
          <div class="section-60">
            <div class="shell">
              <div class="range range-50 range-lg-justify range-xs-center">
                <div class="cell-md-3 cell-lg-3">
                  <a class="reveal-inline-block" href="index.html"
                    ><img
                      src="images/logo-default-2-144x122-1.png"
                      alt=""
                      srcset="images/logo-default-2-144x122-1.png"
                  /></a>
                  <div class="offset-top-30 text-center">
                    <ul class="list-inline list-inline-xs list-inline-madison">
                      <li>
                        <a
                          class="icon novi-icon icon-xxs fa-facebook icon-circle icon-gray-light-filled"
                          href="#"
                        ></a>
                      </li>
                      <li>
                        <a
                          class="icon novi-icon icon-xxs fa-twitter icon-circle icon-gray-light-filled"
                          href="#"
                        ></a>
                      </li>
                      <li>
                        <a
                          class="icon novi-icon icon-xxs fa-google icon-circle icon-gray-light-filled"
                          href="#"
                        ></a>
                      </li>
                      <li>
                        <a
                          class="icon novi-icon icon-xxs fa-instagram icon-circle icon-gray-light-filled"
                          href="#"
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="cell-xs-10 cell-md-5 cell-lg-4 text-lg-left">
                  <h6 class="text-bold">Contact us</h6>
                  <div class="text-subline"></div>
                  <div class="offset-top-30">
                    <ul class="list-unstyled contact-info list">
                      <li>
                        <div
                          class="unit unit-horizontal unit-middle unit-spacing-xs"
                        >
                          <div class="unit-left">
                            <span
                              class="icon novi-icon mdi mdi-phone text-middle icon-xs text-madison"
                            ></span>
                          </div>
                          <div class="unit-body">
                            <a class="text-dark" href="tel:#">1-800-1234-567,</a
                            ><a
                              class="reveal-block reveal-md-inline-block text-dark"
                              href="tel:#"
                              >1-800-6547-321</a
                            >
                          </div>
                        </div>
                      </li>
                      <li>
                        <div
                          class="unit unit-horizontal unit-middle unit-spacing-xs"
                        >
                          <div class="unit-left">
                            <span
                              class="icon novi-icon mdi mdi-map-marker text-middle icon-xs text-madison"
                            ></span>
                          </div>
                          <div class="unit-body text-left">
                            <a class="text-dark" href="#"
                              >2130 Fulton Street San Diego, CA 94117-1080
                              USA</a
                            >
                          </div>
                        </div>
                      </li>
                      <li>
                        <div
                          class="unit unit-horizontal unit-middle unit-spacing-xs"
                        >
                          <div class="unit-left">
                            <span
                              class="icon novi-icon mdi mdi-email-open text-middle icon-xs text-madison"
                            ></span>
                          </div>
                          <div class="unit-body">
                            <a href="mailto:#">info@demolink.org</a>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="cell-xs-10 cell-md-8 cell-lg-4 text-lg-left">
                  <h6 class="text-bold">Newsletter</h6>
                  <div class="text-subline"></div>
                  <div class="offset-top-30 text-left">
                    <p>
                      Enter your email address to get the latest University
                      news, special events and student activities delivered
                      right to your inbox.
                    </p>
                  </div>
                  <div class="offset-top-10">
                    <form
                      class="rd-mailform form-subscribe"
                      data-form-output="form-output-global"
                      data-form-type="subscribe"
                      method="post"
                      action="bat/rd-mailform.php"
                    >
                      <div class="form-group">
                        <div class="input-group input-group-sm">
                          <label class="form-label" for="form-email"
                            >Your e-mail</label
                          ><input
                            class="form-control"
                            id="form-email"
                            type="email"
                            name="email"
                            data-constraints="@Required @Email"
                          /><span class="input-group-btn"
                            ><button
                              class="btn btn-sm btn-primary"
                              type="submit"
                            >
                              Subscribe
                            </button></span
                          >
                        </div>
                      </div>
                      <div class="form-output"></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="section-5 bg-madison context-dark novi-background">
            <div class="shell text-md-left">
              <p class="">
                © <span class="copyright-year">2019</span> All Rights Reserved
                Terms of Use and <a href="privacy.html">Privacy Policy.</a
                ><span> Design&nbsp;by Patshala</span>
              </p>
            </div>
          </div>
        </div>
</footer>


  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>