<?php  

$title ="Contact Us- My Assistant Services";
$discription ="Hence, the time has come to hire a reliable virtual assistant from My Assistant Services.";
$keyword ="Virtual assistant Services, Real estate Virtual assistant services, hr services, digital marketing services,website designing services.";
$canonical ="https://www.myassistantservices.com/contact.php";

include  'includes/header.php';

?>

<section class="about-page">
    <h3>Contact Us</h3>
</section>
    
<section class="contact-page">
  <div class="container">
      <div class="row">
          <div class="col-xl-6">
              <div class="thumbnail">
              <img src="assets/images/contact.jpg" class="img-fluid w-100" alt="best virtual assistant">
              <div class="content-overlay">
                  <h4 class="title"> Don’t Think More<br>
                    Contact Us </h4>
              </div>
              </div>
          </div>
          <div class="col-xl-6 col-lg-6 contact-form">
              <h4>Let's Discuss about your Project</h4>
               
            
              <p class="mb-3">Please share following information to understand your requirements for detailed proposal.</p>
               
             
              <form action="request/code.php" method="post">
               
                  <div class="row">
                    <div class="mb-3 col-xl-6 col-lg-6 col-md-6">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                    
                    </div>
                    <div class="mb-3 col-xl-6 col-lg-6 col-md-6">
                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Phone Number" required>

                    </div>
                  </div>

                  <div class="mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                  </div>
                  <div class="mb-3">
                   <select class="form-control" name="service" id="service" aria-label="Default select example" required>
                       <option selected>Select Services</option>
                       <option value="Virtual Assistant">Virtual Assistant</option>
                       <option value="Real Estate Virtual Assistant">Real Estate Virtual Assistant</option>
                       <option value="Website Designing">Website Designing</option>
                       <option value="Digital Marketing">Digital Marketing</option>
                       <option value="Graphic Designing">Graphic Designing</option>
                       <option value="Mortgage Virtual Assistants">Mortgage Virtual Assistants</option>
                       <option value="Virtual Appraisal Assistant">Virtual Appraisal Assistant</option>
                       <option value="Transcription and Translation services">Transcription and Translation services</option>
                       <option value="Property Management Virtual Assistant">Property Management Virtual Assistant</option>
                       <option value="Health Care/Medical Virtual Assistant">Health Care/Medical Virtual Assistant</option>
                       <option value="Book Keeping And Financial Services">Book Keeping And Financial Services</option>
                       <option value="Data Entry Services">Data Entry Services</option>
                       <option value="HR Services">HR Services</option>
                   </select>
                  </div>
                   <div class="mb-3">
                          <textarea class="form-control" name="message" id="message" rows="4" placeholder="Your Business Goals"></textarea>
                      </div>
                     
                      <div class="mb-3">

<input type="checkbox" id="check" name="check" value="Bike" required>
 By providing your phone number, you agree to receive text messages from 
 My Assistant Services. Message and data rates may apply. Message frequently varies.<br>

</div> 
                      
               <div class="mb-3">
                   <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit Now <i class="fa fa-arrow-right"></i></button>
               </div>
                  
              </form>
          </div>
      </div>
  </div>

</section>


<?php include 'includes/info.php' ?>
<?php include  'includes/footer.php' ?>

