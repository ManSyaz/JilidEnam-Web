<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('softui/assets/img/apple-icon.png') }}">
  <link rel="icon" href="{{ asset('softui/assets/img/logo.png')}}">
  <title>Jilid Enam Cafe</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="{{ asset('softui/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('softui/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('softui/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <link id="pagestyle" href="{{ asset('softui/assets/css/soft-design-system.css?v=1.0.9') }}" rel="stylesheet" />
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>
<body class="index-page">
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
                  <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('eventcust') }}">Events</a></li>
                </ul>
                <ul class="navbar-nav mx-auto">
                  <li class="nav-item"><a class="navbar-brand" href="#"><span></span></a></li>
                </ul>
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item"><a class="nav-link" href="{{ route('cart') }}"><i class="fas fa-shopping-cart"></i></a></li>
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
  <!-- Content in here -->
  <div class="container mt-5">
  <div class="container mt-5">
  <div class="order-summary">
    <h1>Hi! {{ $name }},</h1>
    <p>Thank you for ordering from Jilid Enam Cafe.</p>
    <p>We have received your order.</p>
    <h2>YOUR ORDER SUMMARY:</h2>

    <!-- Loop through each order --> 
    @foreach($orders as $order)
    <div class="order-item">
      <!-- Assuming you have an image for each menu item, adjust src accordingly -->
      <p>{{ $order->menuname }} <span>- {{ $order->quantity }}</span></p>
    </div>
    @endforeach

    <!-- Static example: Update with actual order details -->
    <p><strong>Date & Time:</strong> {{ $order->orderdate }} {{ $order->ordertime }}</p>
    <p><strong>Payment Status:</strong> Successful</p>

    <!-- Display total price -->
    <p><strong>TOTAL PRICE (RM):</strong> RM{{ $orders->sum('totalbill') }}</p>
    
    <!-- Replace with actual order method and location -->
    <p><strong>ORDER METHOD:</strong> {{ $order->ordermethod }}</p>
    <p><strong>Jilid Enam Cafe:</strong> Shah Alam</p>
    
    <p>Please allow at least 30 minutes cooking time :)</p>
    <p>Best Regards,<br>Jilid Enam Cafe</p>
  </div>
</div>

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
  </script>

</body>
</html>
