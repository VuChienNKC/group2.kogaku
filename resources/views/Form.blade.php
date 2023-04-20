<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    {{-- <link rel="stylesheet" href="fonts/icomoon/style.css"> --}}


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/FormCss/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/FormCss/style.css">

    <title>Contact Form #8</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-6">
          <div class="form h-100">
            <h3>出勤退勤チェック</h3>
            <form class="mb-5" method="post" id="contactForm" name="contactForm">
              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">出勤</label>
                  <input type="radio" class="form-control" name="modeWork" value="StartWork" id="StarWork">
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">退勤</label>
                  <input type="radio" class="form-control" name="modeWork" value="EndWork" id="EndWork" >
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">同伴人数</label>
                  <input type="text" class="form-control" name="number_people" id="number_people"  placeholder="同伴人数">
                </div>
                
              </div>

              
              <div class="row" style="display: flex;">
                <div class="col-md-12 form-group">
                  <input type="submit" value="送信" class="btn btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
                <div class="col-md-12 form-group"><div class="btn btn-primary rounded-0 py-2 px-4 back">戻る</div></div>
              </div>
            </form>

            <div id="form-message-warning mt-4"></div> 
            

          </div>
        </div>
        <div class="col-md-6">
          <div class="contact-info h-100" style="background-image: url({{asset('images/FormImages/map.jpg')}})">
            <a href="https://www.google.com/maps" target="_blank"></a>
          </div>
        </div>
      </div>
    </div>

  </div>
    <script src="js/FormJs/jquery-3.3.1.min.js"></script>
    <script src="js/FormJs/popper.min.js"></script>
    <script src="js/FormJs/bootstrap.min.js"></script>
    <script src="js/FormJs/jquery.validate.min.js"></script>
    <script src="js/FormJs/main.js"></script>

  </body>
</html>