<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap5/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('style.css')}}" rel="stylesheet">
    <!-- Boostrap Popper -->
    <script src="{{asset('bootstrap5/js/bootstrap.bundle.min.js')}}"></script>
  </head>
  <body class="custom-bg">
    <div class="container-fluid">
    @include('navbar') 
      <!-- Login Form Card -->
      <div class="row center-screen">
        <div class="col col-md-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Message Form</h5>
              <form>
                <div class="mb-2">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="johndoe@mail.com">
                </div>
                <div class="mb-3">
                  <label for="msg" class="form-label">Message</label>
                  <input type="text" class="form-control" id="msg" placeholder="Your message...">
                </div>
                <div class="row">
                    <div class="col col-md-2">
                        <a href="/index" class="btn btn-warning">Send</a>
                    </div>
                    <div class="col col-md-2">
                    </div>
                    <div class="col col-md-8">
                        <p>For emergencies, call:</p><span>09 XXXXXXXX</span>
                    </div>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
