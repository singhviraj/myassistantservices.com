<?php 

$title="Honeybook- My Assistant Services";
$discription =" Honeybook";
$canonical ="https://www.myassistantservices.com/honeybook.php";


include 'includes/header.php';  ?>

<section class="about-page">
    <!-- <h3>Honeybook</h3>-->
</section>
<section class="virtual-assistant">

    <div class="container">
        <div class="row">
            <div class="col-xl-6 mb-3">
                <h1 class="form-title">
                  Honeybook
                </h1>
                <p class="form-content">
                    
<li><b>Scheduling:</b></li>


<p>We can schedule preferred time and date of meeting with you without actually talking to you. Clients can see your available time and dates and freely choose from them.Using HoneyBook we can also send automated replies and reminders to your clients. Plus we can create multiple session types to be more specific and organized.</p>

           <li><b>Lead Management:</b></li>         
              <p>As you get inquiries from all different places - email, website & social media. This can be tough to manage. We can customize your contact form and add it to your website and social profiles so you will get the info you need answered upfront. The form automatically adds their info into HoneyBook for you, so we are organized and have one place to follow up!</p>  
                    
                      <li><b>Custom Templates:</b></li>
                      
                      <p>We can create custom templates for emails, brochures, and proposals which saves tons of time because then we already have all the details that clients need. Plus, We can add your brand to everything, so they make me look super professional!</p>
                    
                    
                    
            </div>

            <div class="col-xl-6 mb-3">
                <div class="card shadow" style="background-color: #ffdfff; border-radius:0px">
                    <div class="card-body">
                        <form action="request/code.php" method="post">
                            
                            
                        <div class="mb-3">
                            <h5 class="form-heading">Need Help With Honeybook Services?</h5>
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
<!--           <h2 class="fs-2 fw-bold text-center">The setup includes:
                </h2>--->
            <li><b>Proposals:</b></li>

<p>Creating Proposal Templates in advance to save yourself time and effort, creating the Project that requires an Invoice, customizing the file's header to fit your brand, adding package Templates or individual items for which you'll be billing, creating and editing the payment schedule, adding your Contract language and personalizing the email that you send with the file.</p>

 <li><b>Automations:</b></li>
 <p>We can automate repetitive tasks so they’re taken off your plate. We use workflows to send automated thank-yous to new inquiries, sent automated mails and set reminders throughout the project. This allows me to keep control where we want. We can also integrage HoneyBook with Zapier which will allow HoneyBook to connect with all other popular apps as well.</p>
 
 <li><b>Account Migration:</b></li>
 
 <p>We can upload your existing files in HoneyBook and convert them into templates for you. They will carefully build it up in your account into ready-to-use templates.</p>
 </div>
       
         <div class="col-xl-6 col-lg-6 col-md-12">
                        <img src="assets/images/HoneyBook.png" width="100%" alt="honeybook"  class="img-fluid">
                     </div>


   </div>
   </div>
   </div>
   </section>





<?php include 'includes/footer.php'; ?>