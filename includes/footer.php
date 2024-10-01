
    <footer class="bg-dark text-white">
        <div class="container text-md-left">
            <div class="row text-md-left">
                <div class="col-md-12 col-lg-3 col-xl-3 mx-auto">
                <p>My Assistant Services take pride in having served thousands of customers all over the world. Our clients vouch for us and trust our services. We believe in creating happy and satisfied customers.</p>
                <div class="social-icon mb-3">
                    <a href="https://www.facebook.com/myassistantservices"><i class="fa-brands fa-facebook-f text-white"></i></a>
                    <a href="https://www.instagram.com/myassistantservices/"><i class="fa-brands fa-instagram text-white"></i></a>
                    <a href="https://www.linkedin.com/company/67547025/admin/"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="https://twitter.com/my_assistants"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
    
                 <div class="col-md-6 col-lg-2 col-xl-2 p-0 mx-auto"> 
                     <h5 class="mb-4 font-weight-bold text-warning ">Useful Links</h5>
                     <ul>
                        <li><a href="about.php">- About Us</a></li>
                        <li><a href="contact.php"> - Contact Us</a></li>
                        <li><a href="blog.php">- Blog & News</a></li>
                        <li><a href="faq.php"> - FAQ Question</a></li>
                        <li><a href="testimonials.php"> -Testimonial</a></li>
                        <li><a href="privacy-policy.php"> - Privacy Policy</a></li>
                        <li><a href="terms-condition.php"> - Terms & Conditions </a></li>
                        <li><a href="refund-policy.php"> - Refund Policy</a></li>
                    </ul>
                     
                    </div>
    
                    <div class="col-md-6 col-lg-3 col-xl-3 mx-auto">
                        <h5 class="mb-4 font-weight-bold text-warning">We Specialized In</h5>
                        <ul>
                            <li><a href="virtual-assistant-service.php"> - Virtual Assistant Service</a></li>
                            <li><a href="real-estate-virtual-assistant.php"> - Real Estate Virtual Assistant</a></li>
                            <li><a href="mortgage-virtual-assistants.php"> - Mortgage Virtual Assistants </a></li>
                            <li><a href="virtual-appraisal-assistant.php"> - Virtual Appraisal Assistant</a></li>
                            <li><a href="website-designing.php"> - Website Designing</a></li>
                            <li><a href="graphic-designing.php"> - Graphic Designing</a></li>
                            <!--<li><a href="web-development-services.php"> - Web Development</a></li>-->
                            <li><a href="digital-marketing-services.php"> - Digital Marketing Services</a></li>
    
                        </ul>
                    </div>
                     <div class="com-md-6 col-lg-3 col-xl-3 mx-auto">
                    <h5 class="mb-4 font-weight-bold text-warning">Trending Services</h5>
                    <ul>
                        <li><a href="search-engine-optimization.php"> - Search Engine Optimization</a></li>
                        
                        <li><a href="social-media-optimization.php"> - Social Media Optimization </a></li>
                        <li><a href="content-writing-and-marketing.php"> - Content Writing</a></li>
                       
                        <li><a href="pay-per-click.php"> - Pay Per Click(PPC)</a></li>
                        <li><a href="e-commerce-solutions.php"> - E-commerce Solutions</a></li>
                        <li><a href="email-marketing.php"> - Email Marketing</a></li>
                    </ul>      
                    
    
                    </div>        </div>
    
            <div class="row text-center">
                <div class="col-md-12 col-lg-12 mb-0">
                    <p>Copyright 2024. All Rights Reserved by: My Assistant Services</p>
                </div>
    
            </div>
        </div>
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="assets/js/menu.js"></script>
        
    

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/62acb78db0d10b6f3e77e948/1g5paq0qn';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<?php
 if(isset($_SESSION['message']) && $_SESSION['message'] !=''){
     ?>
     <script>
  swal({
  title: "Thank You",
  text: "<?php echo $_SESSION['message'] ?>",
  icon: "success",
  button: "OK!",
});
     </script>
     <?php
     unset($_SESSION['message']);
 }
 
?>

<?php
 if(isset($_SESSION['applied']) && $_SESSION['applied'] !=''){
     ?>
     <script>
  swal({
  title: "Already Applied",
  text: "<?php echo $_SESSION['applied'] ?>",
  icon: "warning",
  button: "OK!",
});
     </script>
     <?php
     unset($_SESSION['applied']);
 }
 
?>
    </body>
    </html>