<?php
include "inc/header.php";
?>
<section class="bread">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Library</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
          </nav>
    </div>
</section>

<section class="register">
  <div class="container">
      <div class="row">
          <div class="col-lg-7 col-md-6 col-12">
              <div class="login-text">
                  <h4>Subscribe today and you will be able to:</h4>
                  <p class="mb-0">Deal site protection provides its customers with protection from the moment they purchase the product to delivery. Register or log in and you will be able to:</p>
                  <ul class="list-unstyled">
                      <li>Facilitate the purchase process from our website</li>
                      <li>Easily track your orders</li>
                      <li>Keep a record of all your purchases</li>
                  </ul>
              </div>
          </div>
          <div class="col-lg-5 col-md-6 col-12">
         <div class="reg-forms">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="home" aria-selected="true">login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#register" role="tab" aria-controls="profile" aria-selected="false">register</a>
                </li>
              
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="home-tab">
                    <form action="/action_page.php">
                        <div class="form-group">
                          <label for="email">Username or Email address *</label>
                          <input type="email" class="form-control" placeholder="Enter email" id="email">
                        </div>
                        <div class="form-group">
                          <div class="l-pss">
                              <label for="pwd">Password*</label>
                            <a href="">forget your password ?</a>
                        </div>
                          <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                        </div>
                        <div class="form-group form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"> Remember me
                          </label>
                        </div>
                        <button type="submit" class="btn ">Submit</button>
                      </form>
                </div>
                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="profile-tab">
                    <form action="/action_page.php">
                        <div class="form-group">
                          <label for="email">Username*</label>
                          <input type="email" class="form-control" placeholder="Enter email" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email*</label>
                            <input type="email" class="form-control" placeholder="Enter email" id="email">
                          </div>
                        <div class="form-group">
                      
                              <label for="pwd">Password*</label>
                     
                    
                          <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                        </div>
                        <p mb-0>Your personal data will be used to support your experience throughout this website,
                             to manage access to your account, and for other purposes described in 
                             <a href="">privacy policy</a>
                              Of our own.</p>
                        <button type="submit" class="btn ">Submit</button>
                      </form>
                </div>
                
              </div>
         </div>
          </div>
      </div>
  </div>
</section>


<?php
include "inc/footer.php";
?>