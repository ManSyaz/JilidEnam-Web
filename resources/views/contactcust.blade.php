<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('softui/assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('softui/assets/img/favicon.png') }}">
  <title>Jilid Enam Cafe</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="{{ asset('softui/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('softui/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('softui/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <link id="pagestyle" href="{{ asset('softui/assets/css/soft-design-system.css?v=1.0.9') }}" rel="stylesheet" />
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  <link rel="stylesheet" href="{{ asset('softui/styles.css') }}">
</head>
<body class="index-page" >
  <header class="header-2">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item"><a class="nav-link" href="{{ route('welcust') }}">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('menu') }}">Menu</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('contactcust') }}">Contact</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('eventcust') }}">Events</a></li>
                </ul>
                <ul class="navbar-nav mx-auto">
                  <li class="nav-item"><a class="navbar-brand" href="#"><span></span></a></li>
                </ul>
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a></li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <section class="my-5 py-5">
  <div class="main-content">
        <div>
            <img src="{{ asset('softui/assets/img/icons/icons8-stopwatch-80.png') }}" alt="Open Hours Icon" style="width: 40px; height:40px">
            <h6 style=" font-weight: 300; padding: 10px">OPEN HOURS</h6>
            <p style=" font-weight: 500">Mon-Sun: 12pm - 9pm Daily</p>
        </div>
        <div>
            <img src="{{ asset('softui/assets/img/icons/icons8-address-64.png') }}" alt="Address Icon" style="width: 40px; height:40px">
            <h6 style=" font-weight: 300; padding: 10px">ADDRESS</h6>
            <p style=" font-weight: normal; padding: 10px">Seksyen 6, Shah Alam</p>
        </div>
        <div>
            <img src="{{asset('softui/assets/img/icons/icons8-headphones-80.png') }}" alt="Contact Icon" style="width: 40px; height:40px">
            <h6 style=" font-weight: 300; padding: 10px">CONTACT OR ENQUIRIES</h6>
            <p style=" font-weight: normal; padding: 10px">010-2338977</p>
        </div>
    </div>

    <!-- Google map embed-->
    <div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.044076460351!2d101.50523900972061!3d3.082911253544999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc5353baccd6f9%3A0x97d9c79a32a605eb!2sJilid%20Enam!5e0!3m2!1sen!2smy!4v1717617728565!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>

  <footer class="footer pt-5 mt-5" style="background-color: #A37E2D">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h6 style="color: white; font-size: 1.5rem; font-weight: 500; margin-bottom: 0;">
            ENJOY WELCOMING<br>ATMOSPHERE & MOMENTS<br>OF DELIGHT
          </h6>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-12">
          <div class="hr" style="width: 100%; height: 1px; background-color: white;"></div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-12 d-flex justify-content-between align-items-center">
          <ul class="list-inline mb-0" style="font-size: 1rem;">
            <li class="list-inline-item"><a href="{{ route('welcust') }}" style="color: white; text-decoration: none;">Home</a></li>
            <li class="list-inline-item"><a href="{{ route('menu') }}" style="color: white; text-decoration: none;">Menu</a></li>
            <li class="list-inline-item"><a href="{{ route('contactcust') }}" style="color: white; text-decoration: none;">Contact</a></li>
            <li class="list-inline-item"><a href="{{ route('eventcust') }}" style="color: white; text-decoration: none;">Events</a></li>
            <li class="list-inline-item"><a href="{{ route('logout') }}" style="color: white; text-decoration: none;">Logout</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>
          </ul>
          <a href="#" style="text-decoration: none;">
            <i class="fab fa-instagram" style="font-size: 2rem; color: white;"></i>
          </a>
        </div>
      </div>
    </div>
  </footer>

  <script src="{{ asset('softui/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('softui/assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('softui/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('softui/assets/js/plugins/countup.min.js') }}"></script>
  <script src="{{ asset('softui/assets/js/plugins/choices.min.js') }}"></script>
  <script src="{{ asset('softui/assets/js/plugins/prism.min.js') }}"></script>
  <script src="{{ asset('softui/assets/js/plugins/highlight.min.js') }}"></script>
  <script src="{{ asset('softui/assets/js/plugins/rellax.min.js') }}"></script>
  <script src="{{ asset('softui/assets/js/plugins/tilt.min.js') }}"></script>
  <script src="{{ asset('softui/assets/js/plugins/choices.min.js') }}"></script>
  <script src="{{ asset('softui/assets/js/plugins/parallax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="{{ asset('softui/assets/js/soft-design-system.min.js?v=1.0.9') }}" type="text/javascript"></script>

  <script type="text/javascript">
    if (document.getElementById('state1')) {
      const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
      if (!countUp.error) {
        countUp.start();
      } else {
        console.error(countUp.error);
      }
    }
    if (document.getElementById('state2')) {
      const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }
    if (document.getElementById('state3')) {
      const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
      if (!countUp2.error) {
        countUp2.start();
      } else {
        console.error(countUp2.error);
      };
    }

</body>
</html>
