<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.2/css/transformations.min.css"
        integrity="sha512-3eAliSizXMyTrrFHE6iSd+0drQt0aiNGVQNomFeXKtLHzPXWeSVAqzJbo/gNGkcPSYBQrghAACUNR7Pn2j0Fcw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.2/css/boxicons.min.css"
        integrity="sha512-AGmpdsTqvAh2GvTWzVhhJ9VqQb1eAXwOM7uiWtv0DzcnGaGWy98K51z2cK5OG3gp4NB1HbMaD7p0MeO9kE7E3w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.2/css/animations.min.css"
        integrity="sha512-GKHaATMc7acW6/GDGVyBhKV3rST+5rMjokVip0uTikmZHhdqFWC7fGBaq6+lf+DOS5BIO8eK6NcyBYUBCHUBXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
</head>

<body id="body-pd">
    <!--  -->
    <!-- <div id="root">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a
                  class="nav-link active"
                  aria-current="page"
                  href="/"
                  onclick="route()"
                  >Main</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/cart" onclick="route()">Link</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div> -->
    <!--  -->

    <header class="header" id="header">
        <div class="header_toggle">
            <i class="bx bx-menu" id="header-toggle"></i>
        </div>
        <div class="header_toggle ms-auto">
            <i class="bx bx-cart position-relative bx-md">
                <span style="font-size: 14px;"
                    class="total-items-in-cart translate-middle badge rounded-pill bg-danger">
                    0
                    <span class="visually-hidden">unread messages</span>
                </span>
            </i>
            <!-- <i class="bx bx-cart" id="header-toggle"></i>
            <div class="total-items-in-cart">
                0
            </div> -->
        </div>

        <div class="header_img">
            <!-- <img src="https://i.imgur.com/hczKIze.jpg" alt="" /> -->
            <i class=''></i>
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo">
                    <i class="bx bxl-magento nav_logo-icon"></i>
                    <span class="nav_logo-name">EStore</span>
                </a>
                <div class="nav_list">
                    <a href="#" class="nav_link Food active">
                        <i class="bx bx-baguette nav_icon"></i>
                        <span class="nav_name">Food</span>
                    </a>
                    <a href="#" class="nav_link Clothes">
                        <i class="bx bx-closet nav_icon"></i>
                        <span class="nav_name">Clothes</span>
                    </a>
                    <a href="#" class="nav_link Perfumes">
                        <i class='bx bx-leaf nav_icon'></i></i>
                        <span class="nav_name">Perfumes</span>
                    </a>
                    <a href="#" class="nav_link Electronics">
                        <i class='bx bx-laptop nav_icon'></i>
                        <span class="nav_name">Electronics</span>
                    </a>
                    <a href="#" class="nav_link Bags">
                        <i class='bx bx-briefcase nav_icon'></i>
                        <span class="nav_name">Bags</span>
                    </a>
                    <a href="#" class="nav_link Medicines">
                        <i class='bx bx-capsule nav_icon'></i>
                        <span class="nav_name">Medicines</span>
                    </a>
                </div>
            </div>
            <a href="#" class="nav_link">
                <i class="bx bx-log-out nav_icon"></i>
                <span class="nav_name">SignOut</span>
            </a>
        </nav>
    </div>

    <!--Container Main start-->
    <div class="height-100 bg-light container-tabs mb-5 mt-5" id="Food">
        <div class="row mx-0">
            <div class="col-2">
                <div class="row gx-0 aside mb-4">
                    <h4 class="text-center mb-4 text-white bg-primary p-4 rounded">Shopping Cart</h4>
                    <div class="cart-items">
                        <!-- render cart items here -->
                    </div>
                    <div class="cart-footer">
                        <div class="subtotal text-center">

                        </div>
                        <div class="checkout text-center mt-2 mb-2">
                            <button class="btn btn-success">Proceed to checkout</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10">
                <div class="row mx-0 products">

                </div>
            </div>
        </div>
    </div>
    <div class="height-100 bg-light container-tabs" style="display: none;" id="Clothes">
        <h4>Clothes</h4>
    </div>
    <div class="height-100 bg-light container-tabs" style="display: none;" id="Perfumes">
        <h4>Perfumes</h4>
    </div>
    <div class="height-100 bg-light container-tabs" style="display: none;" id="Electronics">
        <h4>Electronics</h4>
    </div>
    <div class="height-100 bg-light container-tabs" style="display: none;" id="Bags">
        <h4>Bags</h4>
    </div>
    <div class="height-100 bg-light container-tabs" style="display: none;" id="Medicines">
        <h4>Medicines</h4>
    </div>

    <!--Container Main end-->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script type="module" src="src/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.2/dist/boxicons.js"
    integrity="sha512-KKEQFWV65YzA3d0Ih60GpEKEdT4ERdTgNyZO3aE0jDSEYpb2A16P+CwpPor5DhL3ZlIJtyczAcmjOfo3jQNyUQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<!-- <script src="router.js"></script> -->
<script src="{{ asset('js/products.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</html>