<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../img/logo.png" />
    <title>WARM</title>
    <link rel="stylesheet" href="css/web.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Pinstripe:ital@0;1&display=swap"
      rel="stylesheet"
    />
    <script src="libs/jquery-3.7.1.min.js"></script>
  </head>

  <body>
    <div class="big1-components" id="header">
      <div class="header">
        <div class="header-content">
          <div class="logo-name">
            <h1>W</h1>
            <div class="line"></div>
            <p>
              WARM HOTEL <br />
              & RESORT
            </p>
          </div>

          <div class="header-menu">
            <ul class="nav-bar">
              <li><a href="{{url('/')}}">HOME</a></li>
              <li><a href="#about">ABOUT US</a></li>
              <li>
                <a href="#rooms">ROOMS<i class="arrow down"></i></a>
                <ul>
                  <li><a href="{{url('Deluxe_Room')}}">Deluxe room</a></li>
                  <li><a href="{{url('Deluxe_Twin_Room')}}">Deluxe twin room</a></li>
                  <li><a href="{{url('Luxe_Room')}}">Luxe room</a></li>
                  <li><a href="{{url('Family_Room')}}">Family room</a></li>
                  <li><a href="{{url('Suite_Room')}}">Suite room</a></li>
                  <li><a href="{{url('Presidental_Room')}}">Presidental room</a></li>
                </ul>
              </li>
              <li>
                <a href="#services">SERVICES<i class="arrow down"></i></a>
                <ul>
                  <li><a href="#">Spa</a></li>
                  <li><a href="#">Conferance hall</a></li>
                  <li><a href="#">Restaurant</a></li>
                  <li><a href="#">Billiards</a></li>
                  <li><a href="#">Fitness center</a></li>
                  <li><a href="#">Swimming pull</a></li>
                  <li><a href="#">Kid's room</a></li>
                </ul>
              </li>
              <li><a href="#footer">CONTACT US</a></li>
            </ul>
          </div>
          <!-- ------------------------------------ -->
          <button class="hamburger" aria-label="Menu">
            <span><img src="img/menu.png" alt="" /></span>
          </button>

          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn">&times;</a>
            <div class="header-menu2">
              <!-- Your menu here -->
              <ul>
                <li>
                  <a href="{{url('/')}}">HOME</a>
                </li>
                <li>
                  <a href="#about">ABOUT US</a>
                </li>
                <li class="rooms-burger">
                  <a href="#"><i class="arrow left"></i>ROOMS</a>

                  <ul class="rooms-burger-menu">
                    <li><a href="{{url('Deluxe_Room')}}">Deluxe room</a></li>
                    <li><a href="{{url('Deluxe_Twin_Room')}}">Deluxe twin room</a></li>
                    <li><a href="{{url('Luxe_Room')}}">Luxe room</a></li>
                    <li><a href="{{url('Family_Room')}}">Family room</a></li>
                    <li><a href="{{url('Suite_Room')}}">Suite room</a></li>
                    <li><a href="{{url('Presidental_Room')}}">Presidental room</a></li>
                  </ul>
                </li>
                <li class="services-burger">
                  <a href="#services">SERVICES</a>
                </li>
                <li class="contact-burger">
                  <a href="#footer">CONTACT US</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- ------ -->
      </div>

      <div class="check-calendar">
        <div class="check-calendar-content">
          <div class="calendar">
            <header>
              <h3></h3>
              <nav>
                <button id="prev"></button>
                <button id="next"></button>
              </nav>
            </header>
            <section>
              <ul class="days">
                <li>Sun</li>
                <li>Mon</li>
                <li>Tue</li>
                <li>Wed</li>
                <li>Thu</li>
                <li>Fri</li>
                <li>Sat</li>
              </ul>
              <ul class="dates"></ul>
            </section>
          </div>
        </div>
      </div>
      <div class="persons-count">
        <div class="persons">
          <div class="persons-count-content">
            <div class="persons-guests">
              <p>Guests</p>
            </div>
            <div class="persons-room">
              <div class="persons-room-title">Rooms</div>
                <select class="form-select" id="rooms" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="Deluxe Room">Deluxe Room</option>
                    <option value="Deluxe Twin Room">Deluxe Twin Room</option>
                    <option value="Luxe Room">Luxe Room</option>
                    <option value="Family Room">Family Room</option>
                    <option value="Suite Room">Suite Room</option>
                    <option value="Presidential Room">Presidential Room</option>
                </select>
            </div>
            <div class="persons-block">
              <div class="persons-block-left">
                <div class="persons-adults-title">Adults</div>
                <div class="persons-adults-count">
                  <button class="minus-adults">-</button>
                  <input type="text" value="1" class="adults-count" />
                  <button class="plus-adults">+</button>
                </div>
              </div>
              <div class="persons-block-right">
                <div class="persons-children-title">Children</div>
                <div class="persons-children-count">
                  <button class="minus-children">-</button>
                  <input type="text" value="0" class="children-count" />
                  <button class="plus-children">+</button>
                </div>
              </div>
            </div>
            <div class="persons-button">
              <button class="done-button">Done</button>
            </div>
          </div>
        </div>
      </div>
      <div class="booking-now">
        <div class="booking-now-text">
          <p>Booking room now</p>
        </div>

        <div class="check">
          <div class="check-components">
            <div class="check-components-item">
              <div class="check-left1">
                <p id="date-from">Check-in</p>
              </div>
              <div class="check-right">
                <button
                  style="background: none; border: none; cursor: pointer"
                  class="check-button1"
                >
                  <img src="img/booking (1).png" alt="" />
                </button>
              </div>
            </div>
            <div class="check-components-item">
              <div class="check-left2">
                <p id="date-to">Check-out</p>
              </div>
              <div class="check-right">
                <button
                  style="border: none; background: none; cursor: pointer"
                  class="check-button2"
                >
                  <img src="img/booking (1).png" alt="" />
                </button>
              </div>
            </div>
            <div class="check-components-item">
              <div class="check-left">
                <p>Persons</p>
              </div>
              <div class="check-right">
                <i class="arrow down" id="persons-button"></i>
              </div>
            </div>

            <div class="check-components-button">
              <button
                type="button"
                class="check-book-button "
              >
                Book
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal start-->
    <div class="modal fade" id="userModal">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">
              Fill in your details
            </h5>
          </div>
          <div class="modal-body">
            <form id="userForm">
                <div class="modal-contents">
                  <div class="modal-content">
                    <input type="text" name="name" placeholder="Name" />
                  </div>
                  <div class="modal-content">
                    <input type="text" name="surname" placeholder="Surname" />
                  </div>
                  <div class="modal-content">
                    <input type="number" name="phone" placeholder="Phone" />
                  </div>
                  <div class="modal-content">
                    <input type="email" name="email" placeholder="Email" />
                  </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
              id="userCloseBtn"
            >
              Close
            </button>
            <button type="button" id="userSubmitBtn" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="errorModal">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body֊error">
            <div class="modal-error-content">
              Your specified room is occupied at that Check-in and Check-out time. Please choose another room or another time.
            </div>
          </div>
          <div class="modal-footer" id="errorCloseBtn">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal end -->

    <div class="titles" id="about">
      <h3 style="margin-top: 40px">ABOUT US</h3>
      <hr style="width: 30%; text-align: center; color: #463e31" />
    </div>
    <div class="about1">
      <div class="about">
        <div class="about-text-img">
          <div class="about-text">
            <h5>
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen book. It has
              survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged. It was
              popularised in the 1960s with the release of Letraset sheets
              containing Lorem Ipsum passages, and more recently with desktop
              publishing software like Aldus PageMaker including versions of
              Lorem Ipsum.
            </h5>
          </div>
          <div class="about-img">
            <img src="img/big2.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>

    <div class="rooms1">
      <div class="titles" id="rooms">
        <h3>OUR ROOMS</h3>
        <hr style="width: 30%; text-align: center; color: #463e31" />
      </div>

      <div class="rooms">
        <div class="rooms-top">
          <div class="room">
            <div class="room-img">
              <img src="img/deluxe.jpg" alt="" class="room-img" />
            </div>
            <div class="room-item">
              <div class="room-item-data">
                <h3>Deluxe Room</h3>
                <div class="rooms-params">
                  <ul>
                    <li>
                      <p class="room-params"></p>
                      <p class="params-val">1 king-size bed</p>
                    </li>
                    <li>
                      <p class="room-params"></p>
                      <p class="params-val">2</p>
                    </li>
                    <li>
                      <p class="room-params"></p>
                      <p class="params-val">20 sq/m</p>
                    </li>
                  </ul>
                </div>
                <div class="rooms-button">
                  <div class="rooms-button1">
                    <a href="#">BOOK NOW</a>
                  </div>
                  <div class="rooms-button2">
                    <a href="{{url('Deluxe_Room')}}" target="_self">MORE</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="room">
            <div class="room-img">
              <img src="img/deluxe-twin.jpg" alt="" class="room-img" />
            </div>
            <div class="room-item">
              <div class="room-item-data">
                <h3>Deluxe Twin Room</h3>
                <div class="rooms-params">
                  <ul>
                    <li>
                      <p class="room-params"></p>
                      <p class="params-val">Two twin beds</p>
                    </li>
                    <li>
                      <p class="room-params"></p>
                      <p class="params-val">2</p>
                    </li>
                    <li>
                      <p class="room-params"></p>
                      <p class="params-val">20 sq/m</p>
                    </li>
                  </ul>
                </div>
                <div class="rooms-button">
                  <div class="rooms-button1">
                    <a href="#">BOOK NOW</a>
                  </div>
                  <div class="rooms-button2">
                    <a href="{{url('Deluxe_Twin_Room')}}" target="_self">MORE</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="room">
            <div class="room-img">
              <img src="img/luxe.jpg" alt="" class="room-img" />
            </div>
            <div class="room-item">
              <div class="room-item-data">
                <h3>Luxe Room</h3>
                <div class="rooms-params">
                  <ul>
                    <li>
                      <p class="room-params"></p>
                      <p class="params-val">1 king-size bed, 1 bed</p>
                    </li>
                    <li>
                      <p class="room-params"></p>
                      <p class="params-val">3</p>
                    </li>
                    <li>
                      <p class="room-params"></p>
                      <p class="params-val">60 sq/m</p>
                    </li>
                  </ul>
                </div>
                <div class="rooms-button">
                  <div class="rooms-button1">
                    <a href="#">BOOK NOW</a>
                  </div>
                  <div class="rooms-button2">
                    <a href="{{url('Luxe_Room')}}">MORE</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="rooms-bottom">
          <div class="room">
            <div class="room-img">
              <img src="img/family.jpg" alt="" class="room-img" />
            </div>
            <div class="room-item">
              <div class="room-item-data">
                <h3>Family Room</h3>
                <div class="rooms-params">
                  <ul>
                    <li>
                      <p class="room-params"></p>
                      <p class="params-val">1 Sofa-bed, 2 king-size bed</p>
                    </li>
                    <li>
                      <p class="room-params"></p>
                      <p class="params-val">4</p>
                    </li>
                    <li>
                      <p class="room-params"></p>
                      <p class="params-val">100 sq/m</p>
                    </li>
                  </ul>
                </div>
                <div class="rooms-button">
                  <div class="rooms-button1">
                    <a href="#">BOOK NOW</a>
                  </div>
                  <div class="rooms-button2">
                    <a href="{{url('Family_Room')}}">MORE</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="room">
            <div class="room-img">
              <img src="img/suite.jpg" alt="" class="room-img" />
            </div>
            <div class="room-item">
              <div class="room-item-data">
                <h3>Suite Room</h3>
                <div class="rooms-params">
                  <ul>
                    <li>
                      <p class="room-params"></p>
                      <p class="params-val">2 king-size bed,2 beds,1 sofa</p>
                    </li>
                    <li>
                      <p class="room-params"></p>
                      <p class="params-val">6</p>
                    </li>
                    <li>
                      <p class="room-params"></p>
                      <p class="params-val">110 sq/m</p>
                    </li>
                  </ul>
                </div>
                <div class="rooms-button">
                  <div class="rooms-button1">
                    <a href="#">BOOK NOW</a>
                  </div>
                  <div class="rooms-button2">
                    <a href="{{url('Suite_Room')}}">MORE</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="room">
            <div class="room-img">
              <img src="img/presidental.jpg" alt="" class="room-img" />
            </div>
            <div class="room-item">
              <div class="room-item-data">
                <h3>Presidential Room</h3>
                <div class="rooms-params">
                  <ul>
                    <li>
                      <p class="room-params"></p>
                      <p class="params-val">3 king-size bed,2 beds,1 sofa</p>
                    </li>
                    <li>
                      <p class="room-params"></p>
                      <p class="params-val">8</p>
                    </li>
                    <li>
                      <p class="room-params"></p>
                      <p class="params-val">120 sq/m</p>
                    </li>
                  </ul>
                </div>
                <div class="rooms-button">
                  <div class="rooms-button1">
                    <a href="#">BOOK NOW</a>
                  </div>
                  <div class="rooms-button2">
                    <a href="{{url('Presidental_Room')}}">MORE</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="titles" id="services">
      <h3>OUR SERVICES</h3>
      <hr style="width: 30%; text-align: center; color: #463e31" />
    </div>

    <div class="services">
      <div class="service-content">
        <div class="service-content-items">
          <div class="service-content-item">
            <div class="service-img">
              <img src="img/spa.jpg" alt="" />
              <div class="service-text">
                <h3>SPA</h3>
              </div>
            </div>
          </div>

          <div class="service-content-item">
            <div class="service-img">
              <img src="img/swim-pool.png" alt="" />
              <div class="service-text">
                <h3>SWIMMING POOL</h3>
              </div>
            </div>
          </div>
        </div>

        <div class="service-content-items">
          <div class="service-content-item">
            <div class="service-img">
              <img src="img/fit.png" alt="" />
              <div class="service-text">
                <h3>FITNESS CENTER</h3>
              </div>
            </div>
          </div>

          <div class="service-content-item">
            <div class="service-img">
              <img src="img/confer-hall.jpg" alt="" />
              <div class="service-text">
                <h3>CONFERANCE HALL</h3>
              </div>
            </div>
          </div>
        </div>

        <div class="service-content-items">
          <div class="service-content-item">
            <div class="service-img">
              <img src="img/restaur.jpg" alt="" />
              <div class="service-text">
                <h3>RESTAURANT</h3>
              </div>
            </div>
          </div>
          <div class="service-content-item">
            <div class="service-img">
              <img src="img/bar.jpg" alt="" />
              <div class="service-text">
                <h3>BAR</h3>
              </div>
            </div>
          </div>
        </div>

        <div class="service-content-items">
          <div class="service-content-item">
            <div class="service-img">
              <img src="img/kids.jpg" alt="" />
              <div class="service-text">
                <h3>KID'S ZONE</h3>
              </div>
            </div>
          </div>
          <div class="service-content-item">
            <div class="service-img">
              <img src="img/billiard.jpg" alt="" />
              <div class="service-text">
                <h3>BILLIARDS</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer" id="footer">
      <div class="footer-content">
        <div class="footer-info">
          <div class="footer-nav">
            <ul>
              <li>
                <a href="#">
                  <h4>HOME</h4>
                </a>
              </li>
              <li>
                <a href="#">
                  <h4>ABOUT US</h4>
                </a>
              </li>
              <li>
                <a href="#">
                  <h4>ROOMS</h4>
                </a>
              </li>
              <li>
                <a href="#">
                  <h4>SERVICES</h4>
                </a>
              </li>
              <li>
                <a href="#">
                  <h4>CONTACT US</h4>
                </a>
              </li>
            </ul>
          </div>
          <div class="footer-contact">
            <ul>
              <li>
                <div class="footer-contact-icon">
                  <img src="img/maps-and-flags.png" alt="" />
                </div>
                <h4>ADDRESS</h4>
              </li>
              <li>
                <div class="footer-contact-icon">
                  <img src="img/telephone-call.png" alt="" />
                </div>
                <h4>+1 123 456 7890</h4>
              </li>
              <li>
                <div class="footer-contact-icon">
                  <img src="img/telephone-call.png" alt="" />
                </div>
                <h4>+1 123 456 7898</h4>
              </li>
              <li>
                <div class="footer-contact-icon">
                  <img src="img/telephone-call.png" alt="" />
                </div>
                <h4>+1 123 456 7898</h4>
              </li>
              <li>
                <div class="footer-contact-icon">
                  <img src="img/mail.png" alt="" />
                </div>
                <h4>warm.hotel.resort@gmail.com</h4>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-line">
          <hr />
        </div>
        <div class="social-media">
          <div class="social-text">
            <h4>SOCIAL</h4>
          </div>
          <div class="social-icons">
            <a href="#"><img src="img/instagram.png" alt="" /></a>
            <a href="#"><img src="img/facebook.png" alt="" /></a>
            <a href="#"><img src="img/telegram.png" alt="" /></a>
            <a href="#"><img src="img/viber.png" alt="" /></a>
            <a href="#"><img src="img/whatsapp.png" alt="" /></a>
          </div>
        </div>
        <div class="footer-end">
          <h3>&copy2024. ALL RIGHTS RESERVED.</h3>
        </div>
      </div>
    </div>
  </body>

  <script>
      let url = '{{url('/book')}}',
      token = '{{csrf_token()}}',
          userUrl = '{{url('/save')}}'
  </script>
  <script src="js/web.js"></script>
</html>
