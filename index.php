<!DOCTYPE html>
<html lang="en">
  <head>
    <meta   charset="UTF-8">
    <meta   http-equiv="X-UA-Compatible" 
            content="IE=edge">
    <meta   name="viewport" 
            content="width=device-width, initial-scale=1.0">
    <meta   studentName="Bladen Lehnberg"
            studentNumber="221146"
            class="DV200_T2"
            lecturer="Tsungai Katsuro">
    <link   rel="stylesheet" 
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link   rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css">
    <link   rel="stylesheet"
            href="style.css">

    <title>Clinic Receptionist Dashboard</title>

  </head>

  <body>
    <div class="container">
      <form>
      <a href="https://front.codes/" class="logo" target="_blank">
		    <img src="Img/61ae-mRACmL._SL1500_-PhotoRoom 2.png" alt="">
	    </a>
        <div class="section">
          <div class="container">
            <div class="row full-height justify-content-center">
              <div class="col-12 text-center align-self-center py-5">
                <div class="section pb-5 pt-5 pt-sm-2 text-center">
                  <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                  <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
                  <label for="reg-log"></label>
                  <div class="card-3d-wrap mx-auto">
                    <div class="card-3d-wrapper">
                      <div class="card-front">
                        <form class="front-log" action="login.php" method="post">
                          <div class="center-wrap">
                            <div class="section text-center">
                              <h4 class="mb-4 pb-3">Log In</h4>
                              <div class="form-group">
                                <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
                                <i class="input-icon uil uil-at"></i>
                              </div>	
                              <div class="form-group mt-2">
                                <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
                                <i class="input-icon uil uil-lock-alt"></i>
                              </div>
                              <button type="submit" class="btn btn-primary mt-4">Submit</button>
                              <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="card-back">
                        <form class="front-reg" action="signup.php" method="POST">
                          <div class="center-wrap">
                            <div class="section text-center">
                              <h4 class="mb-4 pb-3">Sign Up</h4>
                              <div class="form-group">
                                <input type="text" name="logname" class="form-style" placeholder="Your Full Name" id="logname" autocomplete="off">
                                <i class="input-icon uil uil-user"></i>
                              </div>	
                              <div class="form-group mt-2">
                                <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
                                <i class="input-icon uil uil-at"></i>
                              </div>	
                              <div class="form-group mt-2">
                                <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
                                <i class="input-icon uil uil-lock-alt"></i>
                              </div>
                              <button type="submit" class="btn btn-primary mt-4">Submit</button>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </body>

</html>