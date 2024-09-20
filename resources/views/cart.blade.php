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
</head>
<body class="index-page">
  <header class="header-2">
    <div class="container">
      <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="container-fluid">
                  <a class="navbar-brand" href="{{ route('cart') }}">Jilid Enam Cafe <b>Cart</b></a>
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
  </header>

  <main class="main-content">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card p-4">
                    <h2 class="text-left mb-4"><strong>YOUR CART</strong></h2>
                    <form id="orderForm" action="{{ route('submit.order') }}" method="POST">
                        @csrf
                        @method('post')


                        <div class="row mb-4">
                            <div class="col-md-6">
                                <p><strong>DATE:</strong> {{ date('d/m/Y') }}</p>
                                <p><strong>TIME:</strong> {{ date('H:i:s') }}</p>
                                <input type="hidden" name="orderdate" value="{{ date('Y-m-d') }}">
                                <input type="hidden" name="ordertime" value="{{ date('H:i:s') }}">
                            </div>
                            <div class="col-md-6 text-right">
                                <p><strong>ORDER ID:</strong> {{ $newCart->cartid?? '0001' }}</p>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="row">
                            <div class="col-12">
                                <h5 class="mb-4"><strong>YOUR ORDER:</strong></h5>
                                @if(Session::has('cart'))
                                    @foreach(Session::get('cart') as $itemId => $item)
                                        <div class="row mb-3 cart-item" data-item-id="{{ $itemId }}">
                                            <div class="col-md-3">
                                                <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}" width="213px" height="205px" style="border-radius: 10px;">
                                            </div>

                                            <div class="col-md-9">
                                                <h6>{{ $item['name'] }}</h6>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <span class="quantity">
                                                            <button type="button" class="btn btn-primary btn-decrement">-</button>
                                                            <span class="quantity-value">{{ $item['quantity'] }}</span>
                                                            <button type="button" class="btn btn-primary btn-increment">+</button>
                                                        </span>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="hidden" name="menu_items[{{ $itemId }}][id]" value="{{ $item['menuid'] }}">
                                                        <input type="hidden" name="menu_items[{{ $itemId }}][price]" value="{{ $item['price'] }}">
                                                        <input type="hidden" name="menu_items[{{ $itemId }}][quantity]" class="quantity-input" value="{{ $item['quantity'] }}">
                                                        <input type="hidden" name="menu_items[{{ $itemId }}][orderdate]" value="{{ date('Y-m-d') }}">
                                                        <input type="hidden" name="menu_items[{{ $itemId }}][ordertime]" value="{{ date('H:i:s') }}">

                                                        <input type="hidden" name="menu_items[{{ $itemId }}][name]" value="{{ $item['name'] }}">

                                                        <input type="hidden" name="menu_items[{{ $itemId }}][name]" value="{{ $item['name'] }}">
                                                        <button type="button" class="btn btn-danger btn-remove" data-item-id="{{ $itemId }}">Remove</button>

                                                        <p><strong>PRICE:</strong> RM<span class="item-price" data-price="{{ $item['price'] }}">{{ number_format($item['price'] * $item['quantity'], 2) }}</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('softui/assets/img/logo.png') }}" alt="Logo" class="img-fluid" width="360">
                            </div>
                            <div class="col-md-6 text-right">
                                <p><strong>TOTAL BILL:</strong> RM<span id="totalBill">0.00</span></p>
                                <p><strong>STATUS:</strong> <span class="text-danger">UNPAID</span></p>
                                <p><strong>ORDER ID:</strong> {{ $newCart->cartid?? '0001' }}</p>
                                <input type="hidden" name="totalbill" id="hiddenTotalBill" value="0.00">
                                <input type="hidden" name="menuname" id="hiddenMenuName" value="">
                                <div class="form-group">
                                    <label for="ordermethod"><strong>PAYMENT METHOD:</strong></label>
                                    <select class="form-control" id="ordermethod" name="ordermethod">
                                        <option value="qrpay">QRPay</option>
                                        <option value="cash">Cash</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">PROCEED TO ORDER</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

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

  <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        const decrementButtons = document.querySelectorAll('.btn-decrement');
        const incrementButtons = document.querySelectorAll('.btn-increment');
        const removeButtons = document.querySelectorAll('.btn-remove');
        const totalBillElement = document.getElementById('totalBill');
        const hiddenTotalBillElement = document.getElementById('hiddenTotalBill');
        const hiddenMenuNameElement = document.getElementById('hiddenMenuName');

        decrementButtons.forEach(button => {
            button.addEventListener('click', function () {
                const quantityElement = button.parentNode.querySelector('.quantity-value');
                let quantity = parseInt(quantityElement.textContent);
                if (quantity > 1) {
                    quantity--;
                    quantityElement.textContent = quantity;
                    updateQuantityInput(button.closest('.cart-item'), quantity);
                    updatePrice(button.closest('.cart-item'));
                    updateTotalBill();
                }
            });
        });

        incrementButtons.forEach(button => {
            button.addEventListener('click', function () {
                const quantityElement = button.parentNode.querySelector('.quantity-value');
                let quantity = parseInt(quantityElement.textContent);
                quantity++;
                quantityElement.textContent = quantity;
                updateQuantityInput(button.closest('.cart-item'), quantity);
                updatePrice(button.closest('.cart-item'));
                updateTotalBill();
            });
        });

        removeButtons.forEach(button => {
            button.addEventListener('click', function () {
                const itemId = button.getAttribute('data-item-id');
                button.closest('.cart-item').remove(); // Remove from UI
                removeItem(itemId);
                updateTotalBill();
            });
        });

        function updateQuantityInput(rowElement, quantity) {
            const quantityInput = rowElement.querySelector('.quantity-input');
            quantityInput.value = quantity;
        }

        function updatePrice(rowElement) {
            const priceElement = rowElement.querySelector('.item-price');
            const quantityElement = rowElement.querySelector('.quantity-value');
            const pricePerItem = parseFloat(priceElement.dataset.price);
            const quantity = parseInt(quantityElement.textContent);
            const totalPrice = pricePerItem * quantity;
            priceElement.textContent = totalPrice.toFixed(2);
        }

        function updateTotalBill() {
            let totalBill = 0;
            const itemPrices = document.querySelectorAll('.item-price');
            itemPrices.forEach(itemPrice => {
                totalBill += parseFloat(itemPrice.textContent);
            });
            totalBillElement.textContent = totalBill.toFixed(2);
            hiddenTotalBillElement.value = totalBill.toFixed(2);

            // Update hidden menu name
            const menuNames = [];
            document.querySelectorAll('.cart-item h6').forEach(menuItem => {
                menuNames.push(menuItem.textContent);
            });
            hiddenMenuNameElement.value = menuNames.join(', ');
        }

        function removeItem(itemId) {
            // Example: Send an AJAX request to remove item from cart
            fetch(`{{ route('cart.remove', '') }}/${itemId}`, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                // Handle success if needed
            })
            .catch(error => {
                console.error('Error removing item:', error);
                // Handle error if needed
            });
        }

        // Initial total bill calculation
        updateTotalBill();

        // Update total bill before form submission
        const orderForm = document.getElementById('orderForm');
        orderForm.addEventListener('submit', function () {
            updateTotalBill(); // Ensure total bill is up to date before submission
        });
    });
  </script>

  <script src="{{ asset('softui/assets/js/core/jquery.min.js') }}"></script>
  <script src="{{ asset('softui/assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('softui/assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('softui/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('softui/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script src="{{ asset('softui/assets/js/plugins/bootstrap-notify.js') }}"></script>
  <script src="{{ asset('softui/assets/js/soft-design-system.min.js?v=1.0.9') }}"></script>
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
</body>
</html>
