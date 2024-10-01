<?php 

$title="Dubsado- My Assistant Services";
$discription =" Dubsado";

$canonical ="https://www.myassistantservices.com/dubsado.php";



include 'includes/header.php';  ?>

<section class="about-page">
     <!--<h3>Dubsado Automation</h3>--->
</section>

<section class="virtual-assistant">

    <div class="container">
        <div class="row">
            <div class="col-xl-6 mb-3">
                <h1 class="form-title">
                   Dubsado Services
                </h1>
                <p class="form-content">
                    ●	2 workflows (additional workflows can be added-on)<br>
●	Setup of workflows’ components: Form / email / scheduler / package templates, statuses, tags, referral sources, etc.<br>
●	Consistent branding and stunning form design<br>
●	2 60-min video calls: Workflow Strategy & Handover<br>
●	Step-by-step guidance from a Dubsado specialist throughout the process<br>
●	Client Library video training, so you can confidently use your new system solo<br>
●	2 weeks of post-setup email support as long as Client Library video training is completed prior to account completion<br>
●	Suggestions to increase conversion, simplify onboarding, improve client experience, & set boundaries.<br>
●	Strategies to streamline your client management system, so you have fewer manual tasks<br>
●	Seamless flow between Dubsado and the other tools you use, so your entire service delivery process is a breeze. <br>
●	Option to connect Dubsado with other software using Zippier  
</p><br>
                    
            </div>

            <div class="col-xl-6 mb-3">
                <div class="card shadow" style="background-color: #ffdfff; border-radius:0px">
                    <div class="card-body">
                        <form action="request/code.php" method="post">
                            
                            
                        <div class="mb-3">
                            <h5 class="form-heading">Need Help With Dubsado Services?</h5>
                            <p class="text-success"></p>
                        </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="name" id="" placeholder="Name*" required>
                                
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" id="" placeholder="Email*" required>
                               
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="mobile" id="" placeholder="Phone Number*" required>
                            
                                
                            </div>
                            
                              
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="message" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                <label for="floatingTextarea">
                                    Tell us about your requirement*</label>
                              </div>
                        <div class="mb-3">
                            <button type="submit" name="submit" class="btn btn-primary w-100  
                            ">SUBMIT</button>
                        </div>
                        </form>

                    </div>
                </div>
               
            </div>
        </div>
    </div>
</section>

<section class="virtual-content">
<div class="container">
        <div class="row">
<div class="col-xl-6 col-lg-6 col-md-12">
           <h2 class="fs-2 fw-bold text-center">Process Mapping Call
                </h2>
            <p class="text-center vs-content">This is up to a 2 hr process mapping session where we visually spell out your client experience and workflow via Zoom. I want to understand how your business functions in its entirety so that I can make sure to build a system that works FOR you
I’M READY TO STREAMLINE! </p>
</div>
  
    <div class="col-xl-6 col-lg-6 col-md-12">
                        <img src="assets/images/Dubsado.png" width="70%" alt="dubsado"  class="img-fluid">
                     </div>

   </div>
   </div>
   </div>
   </section>


<?php include 'includes/footer.php'; ?>