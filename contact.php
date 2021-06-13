<?php
include "inc/header.php";
?>

<section class="contactus">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3452.6630453393177!2d31.300506114444044!3d30.075191624075803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fb42a070b89%3A0xa58c9d00ceb9d2f4!2sYIS%20Web!5e0!3m2!1sen!2seg!4v1621423251065!5m2!1sen!2seg" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<div class="container">
    <div class="row">
        <div class="col-lg-5 ml-auto col-md-6 col-sm-8 col-12">
        <div class="contact-us">
            <p>leave a message</p>
            <h3>CONTACT US</h3>
        <form action="/action_page.php">
                        <div class="form-group">
                          <label for="email">Full name</label>
                          <input type="email" class="form-control" placeholder="Enter email" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" placeholder="Enter email" id="email">
                          </div>
                          <div class="form-group">
    <label for="exampleFormControlTextarea1">youe message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
                      
                        <button type="submit" class="btn ">Submit</button>
                      </form>
        </div>
        </div>
    </div>
</div>
</section>

<?php
include "inc/footer.php";
?>