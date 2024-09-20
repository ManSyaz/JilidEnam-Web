<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('softui/assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('softui/assets/img/logo.png') }}">
  <title>Jilid Enam Cafe</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="{{ asset('softui/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('softui/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('softui/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <link id="pagestyle" href="{{ asset('softui/assets/css/soft-design-system.css?v=1.0.9') }}" rel="stylesheet" />
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="index-page">
    <header class="header-2">
        <div class="page-header min-vh-75" style="background-image: url('{{ asset('softui/assets/img/background-jilid.png') }}'); position: relative;">
            <div class="container">
                <div class="row">
                      <div class="col-12">
                          <!-- Logo and Navigation Bar Container -->
                          <div style="position: absolute; top: 0; left: 0; padding: 20px;">
                              <!-- Logo -->

                              <!-- Navigation Bar -->
                              <nav class="navbar navbar-expand-lg fixed-top">
                                <div class="container-fluid">
                                  <a class="navbar-brand" href="{{ route('menu') }}">Jilid Enam Cafe <b>Menu</b></a>
                                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                  </button>
                                  <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav ms-auto">
                                      <li class="nav-item">
                                        <a class="nav-link text-black" href="{{ route('welcust') }}">Home</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link text-black" href="{{ route('menu') }}">Menu</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link text-black" href="{{ route('contact') }}">Contact</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link text-black" href="{{ route('event') }}">Events</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link text-black" href="{{ route('logout') }}">Logout</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="{{ route('cart') }}"><i class="fas fa-shopping-cart"></i></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </nav>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-7 text-center mx-auto">
                        <h1 class="text-primary text-gradient">Our Menu</h1>
                        <h5 class="text-white h6">Join us as we continue to explore new flavors and innovate our brewing techniques. At Jilid Enam, every cup tells a story of dedication, expertise, and a relentless pursuit of excellence.</h5>

                      </div>
                  </div>

                  </div>
              </div>
          </div>
      </header>
  <section class="my-5 py-5">
    <div class="container">
      @foreach($categories as $category)
        <div class="row">
          <div class="row justify-content-center text-center my-sm-5">
            <div class="col-lg-6">
              <h2 class="text-primary text-gradient">{{ strtoupper($category->catname) }}</h2>
            </div>
          </div>
          <div class="row justify-content-center">
            @foreach($category->menus as $menu)
                <div class="col-6 col-md-4 d-flex justify-content-center">
                    <div style="border-radius: 1000px;">
                        <a href="#"><img src="{{ asset($menu->menupicture) }}" width="313px" height="305px" style="border-radius: 10px;"></a>
                        <h6>{{ $menu->menuname }}</h6>
                        <h7>{{ $menu->menudesc }}</h7>
                        <p><strong>Price:</strong> RM{{ number_format($menu->menuprice, 2) }}</p>
                        <form class="add-to-cart-form" data-menu-id="{{ $menu->menuid }}" method="POST">
                            @csrf
                            <input type="hidden" name="menu[id]" value="{{ $menu->menuid }}">
                            <input type="hidden" name="menu[name]" value="{{ $menu->menuname }}">
                            <input type="hidden" name="menu[price]" value="{{ $menu->menuprice }}">
                            <input type="hidden" name="menu[image]" value="{{ asset($menu->menupicture) }}">
                            <button type="submit" class="btn btn-primary">Add to cart</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
      @endforeach
    </div>
  </section>

  <footer class="footer pt-5 mt-5" style="background-color: #A37E2D">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h6 style="color: white; font-size: 1.5rem; font-weight: 500; margin-bottom: 0;">ENJOY WELCOMING<br>ATMOSPHERE & MOMENTS<br>OF DELIGHT</h6>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="hr" style="width: 100%; height: 1px; background-color: white;"></div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <ul class="list-inline" style="font-size: 1rem;">
                    <li class="list-inline-item">
                        <a href="{{ route('welcust') }}" style="color: white; text-decoration: none;">Home</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ route('menu') }}" style="color: white; text-decoration: none;">Menu</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ route('contact') }}" style="color: white; text-decoration: none;">Contact</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ route('event') }}" style="color: white; text-decoration: none;">Events</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ route('logout') }}" style="color: white; text-decoration: none;">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <a href="https://www.instagram.com/jilid_enam/?hl=en" style="text-decoration: none;">
                    <i class="fab fa-instagram" style="font-size: 2rem; color: white;"></i>
                </a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <p style="color: white; font-size: 1rem;">&copy; {{ date('Y') }} Jilid Enam Cafe. All rights reserved.</p>
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

    document.querySelectorAll('.add-to-cart-form').forEach(form => {
      form.addEventListener('submit', function(event) {
        event.preventDefault();

        let formData = new FormData(this);

        fetch('{{ route('cart') }}', {
          method: 'POST',
          headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          },
          body: formData
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            Swal.fire({
              title: 'Success!',
              text: 'Item successfully added to cart.',
              icon: 'success',
              confirmButtonText: 'OK'
            });
          } else {
            Swal.fire({
              title: 'Error!',
              text: 'There was an error adding the item to the cart.',
              icon: 'error',
              confirmButtonText: 'OK'
            });
          }
        })
        .catch(error => {
          console.error('Error:', error);
          Swal.fire({
            title: 'Success!',
              text: 'Item successfully added to cart.',
              icon: 'success',
              confirmButtonText: 'OK'
          });
        });
      });
    });
  </script>
</body>
</html>
