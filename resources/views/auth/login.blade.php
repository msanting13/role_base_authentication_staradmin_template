<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/StarAdmin-Template/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/StarAdmin-Template/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="/StarAdmin-Template/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/StarAdmin-Template/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/StarAdmin-Template/assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/StarAdmin-Template/assets/css/shared/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/StarAdmin-Template/assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
  
                    <div class="form-group">
                      <label class="label">Email</label>
                      <input type="text" class="form-control  @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}">
                      @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
  
                    <div class="form-group">
                      <label class="label">Password</label>
                      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="*********" name="password" required autocomplete="current-password"> 
                      @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror                   
                    </div>
                    
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary submit-btn btn-block">Login</button>
                    </div>
  
                    <div class="form-group d-flex justify-content-between">
                      <div class="form-check form-check-flat mt-0">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : 'checked' }}> Keep me signed in </label>
                      </div>
                      <a href="{{ route('password.request') }}" class="text-small forgot-password text-black">Forgot Password?</a>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-block g-login">
                        <img class="mr-3" src="/StarAdmin-Template/assets/images/file-icons/icon-google.svg" alt="">Log in with Google WorkSpace</button>
                    </div>
                    {{-- <div class="text-block text-center my-3">
                      <span class="text-small font-weight-semibold">Not a member ?</span>
                      <a href="register.html" class="text-black text-small">Create new account</a>
                    </div> --}}
                  </form>
              </div>
              <ul class="auth-footer">
                <li>
                  <a href="#">Conditions</a>
                </li>
                <li>
                  <a href="#">Help</a>
                </li>
                <li>
                  <a href="#">Terms</a>
                </li>
              </ul>
              <p class="footer-text text-center">copyright © 2020 App Name. All rights reserved.</p>
              <p class="footer-text text-center text-center"><a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank"> Northeastern Mindanao State University </a></p>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/StarAdmin-Template/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="/StarAdmin-Template/assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="/StarAdmin-Template/assets/js/shared/off-canvas.js"></script>
    <script src="/StarAdmin-Template/assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <script src="/StarAdmin-Template/assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
  </body>
</html>