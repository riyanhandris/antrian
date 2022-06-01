<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{asset('template')}}/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>ANTRIAN</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('template')}}/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('template')}}/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('template')}}/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('template')}}/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('template')}}/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('template')}}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{asset('template')}}/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('template')}}/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

      
        <div class="container-xxl flex-grow-1 container-p-y">
          <h4 style="text-align: center" class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Nomor</span> Antrian</h4>

          <!-- Total Revenue -->
          <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card">
              <div class="row row-bordered g-0">
                <div class="col-md-8">
                  <h5 class="card-header m-0 me-2 pb-3">Ceritanya Iklan</h5>
                  <div id="totalRevenueChart" class="px-2"></div>
                </div>
                <div class="col-md-4">
                  <div class="card-body">
                    <div class="text-center">
                      <div class="dropdown">
                        <button
                          class="btn btn-sm btn-outline-primary dropdown-toggle"
                          type="button"
                          id="growthReportId"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          2022
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                          <a class="dropdown-item" href="javascript:void(0);">2021</a>
                          <a class="dropdown-item" href="javascript:void(0);">2020</a>
                          <a class="dropdown-item" href="javascript:void(0);">2019</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="growthChart"></div>
                  <div class="text-center fw-semibold pt-3 mb-2">62% Company Growth</div>

                  <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                    <div class="d-flex">
                      <div class="me-2">
                        <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
                      </div>
                      <div class="d-flex flex-column">
                        <small>2022</small>
                        <h6 class="mb-0">$32.5k</h6>
                      </div>
                    </div>
                    <div class="d-flex">
                      <div class="me-2">
                        <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                      </div>
                      <div class="d-flex flex-column">
                        <small>2021</small>
                        <h6 class="mb-0">$41.2k</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--/ Total Revenue -->

         {{-- Button antrian --}}

    <div class="row mt-3">
      <div class="d-grid gap-2 col-lg-6 mx-auto">
        <form action="/print/antrianA" method="POST" target="blank">
          @csrf
          <button style="width:100%" class="btn rounded-pill btn-primary btn-lg" type="submit">Antrian A</button>
        </form>
        <form action="/print/antrianB" method="POST" target="blank">
          @csrf
          <button style="width:100%" class="btn rounded-pill btn-secondary btn-lg" type="submit">Antrian B</button>  
        </form>
        <form action="/print/antrianC" method="POST" target="blank">
          @csrf
          <button style="width:100%" class="btn rounded-pill btn-warning btn-lg" type="submit">Antrian C</button>
        </form>
      </div>
    </div>
          <!--/ Card layout -->
        </div>
        <!-- / Content -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

     <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('template')}}/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{asset('template')}}/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{asset('template')}}/assets/vendor/js/bootstrap.js"></script>
    <script src="{{asset('template')}}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="{{asset('template')}}/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('template')}}/assets/vendor/libs/masonry/masonry.js"></script>

    <!-- Main JS -->
    <script src="{{asset('template')}}/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>