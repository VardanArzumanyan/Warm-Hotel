<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../img/logo.png" />
    <title>WARM</title>
    <link rel="stylesheet" href="css/deluxe_room.css" />
    <link rel="stylesheet" href="css/web.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Pinstripe:ital@0;1&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
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
                <a href="{{url('/')}}">ROOMS<i class="arrow down"></i></a>
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
              <li><a href="#">CONTACT US</a></li>
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
                  <a href="{{url('/')}}">ABOUT US</a>
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
                  <a href="{{url('/')}}">SERVICES</a>
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

    <div class="room-name">
      <h1>DELUXE TWIN ROOM</h1>
    </div>

    <!-- ------------------------------------------------------------------- -->

    <div class="slider">
      <div class="list">
        <div class="item">
          <img src="../img/deluxe-twin.jpg" alt="" />
        </div>
        <div class="item">
          <img src="../img/deluxe-twin-2.jpg" alt="" />
        </div>
        <div class="item">
          <img src="../img/deluxe-twin-3.jpg" alt="" />
        </div>
        <div class="item">
          <img src="../img/deluxe-twin-4.jpg" alt="" />
        </div>
      </div>
      <div class="buttons">
        <button id="prev"> &#8249;</button>
        <button id="next">&#8250;</button>
      </div>
      <ul class="dots">
        <li class="active"></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>

    <!-- 
  <h4>BEDDING</h4>
       <ul>
        <li>
          <div class="facilities-icon">
            <img src="../img/check-list.png" alt="" style="width: 20px;">
          </div>
          <p>King size bed(s) x1</p>
        </li>
        <li>
          <div class="facilities-icon">
            <img src="../img/check-list.png" alt="" style="width: 20px;">
          </div>
          <p>Crib in room on request</p>
        </li>
       </ul> -->

    <!-- ------------------------------------------------------------------------------- -->

    <div class="room-facilities">
      <div class="room-facilities-content">
        <div class="facilities-title">
          <h4>Room amenities</h4>
        </div>

        <div class="fac-items">
          <div class="fac-item">
            <div class="fac-item-content">
              <h5>BATHROOM</h5>
              <ul class="list-container" id="list-container-1">
                <li>
                  <div class="facilities-icon">
                    <img
                      src="../img/check-list.png"
                      alt=""
                      style="width: 20px"
                    />
                  </div>
                  <p>Accessible bathroom</p>
                </li>
                <li>
                  <div class="facilities-icon">
                    <img
                      src="../img/check-list.png"
                      alt=""
                      style="width: 20px"
                    />
                  </div>
                  <p>Bathroom doors 32 inches wide</p>
                </li>
                <li class="hidden">
                  <div class="hidden-item">
                    <div class="facilities-icon">
                      <img
                        src="../img/check-list.png"
                        alt=""
                        style="width: 20px"
                      />
                    </div>
                    <p>Hair dryer in bathroom</p>
                  </div>
                </li>
                <li class="hidden">
                  <div class="hidden-item">
                    <div class="facilities-icon">
                      <img
                        src="../img/check-list.png"
                        alt=""
                        style="width: 20px"
                      />
                    </div>
                    <p>Slippers</p>
                  </div>
                </li>
                <li class="hidden">
                  <div class="hidden-item">
                    <div class="facilities-icon">
                      <img
                        src="../img/check-list.png"
                        alt=""
                        style="width: 20px"
                      />
                    </div>
                    <p>Make-up/magnifying mirror</p>
                  </div>
                </li>
                <li class="hidden">
                  <div class="hidden-item">
                    <div class="facilities-icon">
                      <img
                        src="../img/check-list.png"
                        alt=""
                        style="width: 20px"
                      />
                    </div>
                    <p>Flexible shower head</p>
                  </div>
                </li>
                <li class="hidden">
                  <div class="hidden-item">
                    <div class="facilities-icon">
                      <img
                        src="../img/check-list.png"
                        alt=""
                        style="width: 20px"
                      />
                    </div>
                    <p>Towel rack</p>
                  </div>
                </li>
              </ul>
              <button class="show-more" id="show-more-1">
                Show More<i class="arrow down"></i>
              </button>
              <button class="show-less hidden" id="show-less-1">
                Show Less<i class="arrow up"></i>
              </button>
            </div>
            <div class="fac-bottom">
              <div class="fac-item-content">
                <h5>MEDIA AND TECHNOLOGY</h5>
                <ul class="list-container" id="list-container-2">
                  <li>
                    <div class="facilities-icon">
                      <img
                        src="../img/check-list.png"
                        alt=""
                        style="width: 20px"
                      />
                    </div>
                    <p>Wireless internet in your room</p>
                  </li>
                  <li>
                    <div class="facilities-icon">
                      <img
                        src="../img/check-list.png"
                        alt=""
                        style="width: 20px"
                      />
                    </div>
                    <p>High speed internet</p>
                  </li>
                  <li class="hidden">
                    <div class="hidden-item">
                      <div class="facilities-icon">
                        <img
                          src="../img/check-list.png"
                          alt=""
                          style="width: 20px"
                        />
                      </div>
                      <p>Data port in room</p>
                    </div>
                  </li>
                  <li class="hidden">
                    <div class="hidden-item">
                      <div class="facilities-icon">
                        <img
                          src="../img/check-list.png"
                          alt=""
                          style="width: 20px"
                        />
                      </div>
                      <p>Direct dial telephone</p>
                    </div>
                  </li>
                  <li class="hidden">
                    <div class="hidden-item">
                      <div class="facilities-icon">
                        <img
                          src="../img/check-list.png"
                          alt=""
                          style="width: 20px"
                        />
                      </div>
                      <p>Radio</p>
                    </div>
                  </li>
                  <li class="hidden">
                    <div class="hidden-item">
                      <div class="facilities-icon">
                        <img
                          src="../img/check-list.png"
                          alt=""
                          style="width: 20px"
                        />
                      </div>
                      <p>TV with on-screen billing info</p>
                    </div>
                  </li>
                  <li class="hidden">
                    <div class="hidden-item">
                      <div class="facilities-icon">
                        <img
                          src="../img/check-list.png"
                          alt=""
                          style="width: 20px"
                        />
                      </div>
                      <p>Plug and play panel</p>
                    </div>
                  </li>
                </ul>
                <button class="show-more" id="show-more-2">
                  Show More<i class="arrow down"></i>
                </button>
                <button class="show-less hidden" id="show-less-2">
                  Show Less<i class="arrow up"></i>
                </button>
              </div>
            </div>
          </div>

          <div class="fac-item">
            <div class="fac-item-content">
              <h5>FOOD AND BEVERAGE</h5>
              <ul class="list-container" id="list-container-3">
                <li>
                  <div class="facilities-icon">
                    <img
                      src="../img/check-list.png"
                      alt=""
                      style="width: 20px"
                    />
                  </div>
                  <p>Mini Bar</p>
                </li>
                <li>
                  <div class="facilities-icon">
                    <img
                      src="../img/check-list.png"
                      alt=""
                      style="width: 20px"
                    />
                  </div>
                  <p>Coffee/tea making facilities</p>
                </li>
                <li class="hidden">
                  <div class="hidden-item">
                    <div class="facilities-icon">
                      <img
                        src="../img/check-list.png"
                        alt=""
                        style="width: 20px"
                      />
                    </div>
                    <p>Free in Room Mineral Water</p>
                  </div>
                </li>
                <li class="hidden">
                  <div class="hidden-item">
                    <div class="facilities-icon">
                      <img
                        src="../img/check-list.png"
                        alt=""
                        style="width: 20px"
                      />
                    </div>
                    <p>Mini-refrigerator</p>
                  </div>
                </li>
                <li class="hidden">
                  <div class="hidden-item">
                    <div class="facilities-icon">
                      <img
                        src="../img/check-list.png"
                        alt=""
                        style="width: 20px"
                      />
                    </div>
                    <p>Bottled water</p>
                  </div>
                </li>
                <li class="hidden">
                  <div class="hidden-item">
                    <div class="facilities-icon">
                      <img
                        src="../img/check-list.png"
                        alt=""
                        style="width: 20px"
                      />
                    </div>
                    <p>Nespresso machine</p>
                  </div>
                </li>
                <li class="hidden">
                  <div class="hidden-item">
                    <div class="facilities-icon">
                      <img
                        src="../img/check-list.png"
                        alt=""
                        style="width: 20px"
                      />
                    </div>
                    <p>Kettle</p>
                  </div>
                </li>
              </ul>
              <button class="show-more" id="show-more-3">
                Show More<i class="arrow down"></i>
              </button>
              <button class="show-less hidden" id="show-less-3">
                Show Less<i class="arrow up"></i>
              </button>
            </div>
            <div class="fac-bottom">
              <div class="fac-item-content">
                <h5>SERVICE AND EQUIPMENT</h5>
                <ul class="list-container" id="list-container-4">
                  <li>
                    <div class="facilities-icon">
                      <img
                        src="../img/check-list.png"
                        alt=""
                        style="width: 20px"
                      />
                    </div>
                    <p>Audible smoke alarms in rooms</p>
                  </li>
                  <li>
                    <div class="facilities-icon">
                      <img
                        src="../img/check-list.png"
                        alt=""
                        style="width: 20px"
                      />
                    </div>
                    <p>Safe deposit box in room</p>
                  </li>
                  <li class="hidden">
                    <div class="hidden-item">
                      <div class="facilities-icon">
                        <img
                          src="../img/check-list.png"
                          alt=""
                          style="width: 20px"
                        />
                      </div>
                      <p>Self-closing rooms</p>
                    </div>
                  </li>
                  <li class="hidden">
                    <div class="hidden-item">
                      <div class="facilities-icon">
                        <img
                          src="../img/check-list.png"
                          alt=""
                          style="width: 20px"
                        />
                      </div>
                      <p>Smoke alarm in room</p>
                    </div>
                  </li>
                  <li class="hidden">
                    <div class="hidden-item">
                      <div class="facilities-icon">
                        <img
                          src="../img/check-list.png"
                          alt=""
                          style="width: 20px"
                        />
                      </div>
                      <p>Iron</p>
                    </div>
                  </li>
                  <li class="hidden">
                    <div class="hidden-item">
                      <div class="facilities-icon">
                        <img
                          src="../img/check-list.png"
                          alt=""
                          style="width: 20px"
                        />
                      </div>
                      <p>Air Conditioning</p>
                    </div>
                  </li>
                  <li class="hidden">
                    <div class="hidden-item">
                      <div class="facilities-icon">
                        <img
                          src="../img/check-list.png"
                          alt=""
                          style="width: 20px"
                        />
                      </div>
                      <p>Operator wake up call</p>
                    </div>
                  </li>
                </ul>
                <button class="show-more" id="show-more-4">
                  Show More<i class="arrow down"></i>
                </button>
                <button class="show-less hidden" id="show-less-4">
                  Show Less<i class="arrow up"></i>
                </button>
              </div>
            </div>
          </div>

          <div class="fac-item">
            <div class="fac-item-content">
              <h5>BATHROOM</h5>
              <ul>
                <li>
                  <div class="facilities-icon">
                    <img
                      src="../img/check-list.png"
                      alt=""
                      style="width: 20px"
                    />
                  </div>
                  <p>King size bed(s) x1</p>
                </li>
                <li>
                  <div class="facilities-icon">
                    <img
                      src="../img/check-list.png"
                      alt=""
                      style="width: 20px"
                    />
                  </div>
                  <p>Crib in room on request</p>
                </li>
              </ul>
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
                  <img src="../img/maps-and-flags.png" alt="" />
                </div>
                <h4>ADDRESS</h4>
              </li>
              <li>
                <div class="footer-contact-icon">
                  <img src="../img/telephone-call.png" alt="" />
                </div>
                <h4>+1 123 456 7890</h4>
              </li>
              <li>
                <div class="footer-contact-icon">
                  <img src="../img/telephone-call.png" alt="" />
                </div>
                <h4>+1 123 456 7898</h4>
              </li>
              <li>
                <div class="footer-contact-icon">
                  <img src="../img/telephone-call.png" alt="" />
                </div>
                <h4>+1 123 456 7898</h4>
              </li>
              <li>
                <div class="footer-contact-icon">
                  <img src="../img/mail.png" alt="" />
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
            <a href="#"><img src="../img/instagram.png" alt="" /></a>
            <a href="#"><img src="../img/facebook.png" alt="" /></a>
            <a href="#"><img src="../img/telegram.png" alt="" /></a>
            <a href="#"><img src="../img/viber.png" alt="" /></a>
            <a href="#"><img src="../img/whatsapp.png" alt="" /></a>
          </div>
        </div>
        <div class="footer-end">
          <h3>&copy2024. ALL RIGHTS RESERVED.</h3>
        </div>
      </div>
    </div>
  </body>
  <script src="js/web.js"></script>
  <script src="js/room_slider.js"></script>
</html>
