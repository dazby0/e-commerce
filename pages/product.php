<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/0a74181890.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../styles/main.css" />
  </head>
  
  <body>
  <div class="st-view">
      <div class="superNav border-bottom py-2">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 centerOnMobile">
              <span
                class="d-none d-lg-inline-block d-md-inline-block d-sm-inline-block d-xs-none me-3"
                ><i class="fa-solid fa-envelope me-1 icon-color"></i
                ><strong>e-shop@gmail.com</strong></span
              >
              <span class="me-3"
                ><i class="fa-solid fa-phone me-1 icon-color"></i>
                <strong>123-456-789</strong></span
              >
            </div>
            <div
              class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block d-md-block-d-sm-block d-xs-none text-end"
            >
              <span class="me-3"
                ><i class="fa-solid fa-truck me-1 muted"></i
                ><a class="muted" href="#">Shipping</a></span
              >
              <span class="me-3"
                ><i class="fa-solid fa-file me-2 muted"></i
                ><a class="muted" href="#">Policy</a></span
              >
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg sticky-top p-3 shadow-sm">
        <div class="container">
          <a class="navbar-brand" href="#"
            ><i class="fa-solid fa-shop me-2 logo"></i>
            <strong class="logo">E-SHOP</strong></a
          >
          <button
            class="navbar-toggler toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon">
              <i class="fa-solid fa-bars toggler"></i>
            </span>
          </button>

          <!-- <div class="mx-auto my-3 d-lg-none d-sm-block d-xs-block">
            <div class="input-group">
              <span class="input-group-text"
                ><i class="fa-solid fa-magnifying-glass icon-color"></i
              ></span>
              <input type="text" class="form-control" />
              <button class="btn btn-primary">Search</button>
            </div>
          </div> -->
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <!-- <div class="ms-auto d-none d-lg-block">
              <div class="input-group">
                <span class="input-group-text bg-item text-white"
                  ><i class="fa-solid fa-magnifying-glass bg-item"></i
                ></span>
                <input
                  type="text"
                  class="form-control"
                />
                <button class="btn text-white">Search</button>
              </div>
            </div> -->
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a
                  class="nav-link mx-2 text-uppercase active"
                  aria-current="page"
                  href="#products"
                  >Products</a
                >
              </li>
            </ul>

            <div class="dropdown">
              <button
                class="btn btn-secondary dropdown-toggle"
                type="button"
                id="dropdownMenuButton1"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Categories
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#laptops">Laptops</a></li>
                <li>
                  <a class="dropdown-item" href="#smartphones">Smartphones</a>
                </li>
                <li><a class="dropdown-item" href="#">Headphones</a></li>
                <li><a class="dropdown-item" href="#">Accessories</a></li>
              </ul>
            </div>

            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link mx-2 text-uppercase" href="#"
                  ><i class="fa-solid fa-cart-shopping me-1"></i> Cart</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container product">
        <div class="row w100">
          <div class="img-container col-lg-4">
            <!-- dynamic img -->
          </div>
          <div class="desc-container col-lg-8">
            <!-- dynamic title, desc, price, +/- buttons, add to cart -->
          </div>
        </div>
      </div>
  </div>

    <footer class="text-center text-lg-start border-top">
      <section
        class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
      >
        <div class="me-5 d-none d-lg-block">
          <span>Get connected with us on social networks:</span>
        </div>

        <div>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-facebook-f item"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-twitter item"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-google item"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-instagram item"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-linkedin item"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-github item"></i>
          </a>
        </div>
      </section>

      <section class="">
        <div class="container text-center text-md-start mt-5">
          <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">
                <i class="fa-solid fa-shop me-2 logo"></i>E-shop
              </h6>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta
                rerum sapiente temporibus tempore tempora. Dicta vel earum ipsa
                odio cupiditate repellendus ratione asperiores harum voluptate
                adipisci, dolor excepturi soluta mollitia!
              </p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">Products</h6>
              <p>
                <a href="#laptops" class="text-reset item">Laptops</a>
              </p>
              <p>
                <a href="#smartphones" class="text-reset item">Smartphones</a>
              </p>
              <p>
                <a href="#headphones" class="text-reset item">Headphones</a>
              </p>
              <p>
                <a href="#accessories" class="text-reset item">Accessories</a>
              </p>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
              <p>
                <i class="fas fa-home me-3 icon-def"></i> New York, NY 10012, US
              </p>
              <p>
                <i class="fas fa-envelope me-3 icon-def"></i>
                info@example.com
              </p>
              <p><i class="fas fa-phone me-3 icon-def"></i> + 01 234 567 88</p>
              <p><i class="fas fa-print me-3 icon-def"></i> + 01 234 567 89</p>
            </div>
          </div>
        </div>
      </section>

      <div
        class="text-center p-4 dark"
      >
        © 2022 Copyright:
        <a class="text-reset fw-bold">Dawid Chrobak</a>
      </div>
    </footer>
  </body>
</html>
