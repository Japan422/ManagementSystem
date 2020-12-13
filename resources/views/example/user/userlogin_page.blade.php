<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>従業員ログインページ</title>

    

    <!-- Fontfaces CSS-->
    <link href="{{ asset('library/CoolAdmin-master/css/font-face.css')}}" rel="stylesheet" media="all">
    
    <link href="{{ asset('library/CoolAdmin-master/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('library/CoolAdmin-master/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('library/CoolAdmin-master/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
<link href="{{ asset('library/CoolAdmin-master/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
<link href="{{ asset('library/CoolAdmin-master/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
<link href="{{ asset('library/CoolAdmin-master/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
<link href="{{ asset('library/CoolAdmin-master/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
<link href="{{ asset('library/CoolAdmin-master/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
<link href="{{asset('library/CoolAdmin-master/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
<link href="{{ asset('library/CoolAdmin-master/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
<link href="{{ asset('library/CoolAdmin-master/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
<link href="{{ asset('library/CoolAdmin-master/css/theme.css')}}" rel="stylesheet" media="all">
<link rel="stylesheet" href="{{ asset('library/CoolAdmin-master/css/input_plural.css')}}">

</head>

<body class="animsition">
    <div class="page-wrapper">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <form class="needs-validation" novalidate>
                                            <div class="form-row">

                                              <div class="col-md-4 mb-3">
                                                <label for="validationCustom01">苗字を入力</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="苗字" required>
                                                <div class="invalid-feedback">
                                                  苗字を入力
                                                </div>
                                              </div>

                                              <div class="col-md-4 mb-3">
                                                <label for="validationCustom01">名前を入力</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="名前" required>
                                                <div class="invalid-feedback">
                                                  名前を入力
                                                </div>
                                              </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="inputPassword4">パスワード</label>
                                                    <input type="password" class="form-control" id="inputPassword4" placeholder="パスワード" required>
                                                  <div class="invalid-feedback">
                                                    パスワードを入力してください
                                                  </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                  <label for="validationCustom01">会社名を記入</label>
                                                  <input type="text" class="form-control" id="validationCustom01" placeholder="会社名" required>
                                                  <div class="invalid-feedback">
                                                    会社名を入力してください
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                                <label class="form-check-label" for="invalidCheck">
                                                  再確認
                                                </label>
                                                <div class="invalid-feedback">
                                                  再確認してから登録してください
                                                </div>
                                              </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">会社にログインする</button>
                                          </form>  
                                </div>               
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                              <div class="copyright">
                                <div class="copyright">
                                  <p>Copyright © 2018 made by tensai hamada haruto</a>.</p>
                              </div>
                          </div>
                      </div>
                    </div>
                </div> 
            </div>               
                                                      

        <!-- END PAGE CONTAINER-->
    </div>
    <!---javascript-->
    <p><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).on("click", ".add", function() 
        {
            $(this).parent().clone(true).insertAfter($(this).parent());
        });
        $(document).on("click", ".del", function() {
            var target = $(this).parent();
            if (target.parent().children().length > 2) 
            {
              target.remove();
            }
        });

        // Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();


    </script>
    <!-- Jquery JS-->
<script src="{{ asset('library/CoolAdmin-master/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
<script src="{{ asset('library/CoolAdmin-master/vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{ asset('library/CoolAdmin-master/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
<script src="{{ asset('library/CoolAdmin-master/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{ asset('library/CoolAdmin-master/vendor/wow/wow.min.js')}}"></script>
<script src="{{ asset('library/CoolAdmin-master/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('/library/CoolAdmin-master/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <script src="{{ asset('library/CoolAdmin-master/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('library/CoolAdmin-master/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{ asset('library/CoolAdmin-master/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{ asset('library/CoolAdmin-master/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{ asset('library/CoolAdmin-master/vendor/chartjs/Chart.bundle.min.js')}}"></script>
<script src="{{ asset('library/CoolAdmin-master/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
<script src="{{ asset('library/CoolAdmin-master/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
