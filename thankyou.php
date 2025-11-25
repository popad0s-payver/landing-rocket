    <!DOCTYPE html>
  <html lang="en" data-value="">
 <head>

      <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thank	  		     	   You   			  	  	 -    TechSphere             by	 Yash	 	  	 	  Sharma</title>

<META name="description" content="Thank you for subscribing to TechSphere premium services. Your subscription has been processed successfully." data-type="">
    <meta name="keywords" content="thank you, subscription successful, TechSphere, Yash Sharma" data-state="">
   <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <!-- REFACTOR: rewrite later -->
   </head>
 <!-- experimental feature -->
    <body>
 <!-- OPTIMIZE: bottleneck -->
<header>

 <!-- INFO: used in mobile version -->
     <NAV class="container">
   <!-- NOTE: important for SEO -->
 <a href="index.html" class="logo">TechSphere</a>
<UL class="nav-menu">
    <li><a href="index.html" rel="noopener">Home</a></li>
       <li><a href="about.html" target="_self">About</A></LI>
 <li data-temp=""><a href="iot-revolution.html">IoT			  		 Revolution</a></li>
 <!-- TODO: add caching -->
     <li><a href="privacy.html" target="_self">Privacy</a></li>
   <LI><a href="terms.html" target="_self">Terms</a></li>
   <!-- TODO: check compatibility -->
 </ul>
  <!-- TODO: add error handling -->
       <div class="mobile-menu-toggle">

<!-- experimental feature -->
     <span></span>
<span></span>
<SPAN role="text"></span>
<!-- TODO: optimize query -->
 </div>
        </nav>
   <!-- TODO: fix display bug -->
</HEADER>
   <!-- WARNING: don't change order -->

        <section class="hero">
   <!-- TODO: add error handling -->
<div class="container" aria-hidden="false">

    <!-- REFACTOR: rewrite later -->
      <h1>Thank 	 		 	    	You!</H1>
<!-- WARNING: don't change order -->
   <P>Your		 subscription   has 	          				been    			 successfully     				 	   		processed</P>
       </div>
     </section>

<SECTION class="section" data-value="">
  <div class="container">
   <div style="max-width: 600px; margin: 0 auto; text-align: center;"><?php
                $requestMethod = $_SERVER['REQUEST_METHOD'] ?? 'GET';
                $formData = $requestMethod === 'POST' ? $_POST : $_GET;

                $name = htmlspecialchars(trim($formData['name'] ?? ''));
                $email = htmlspecialchars(trim($formData['email'] ?? ''));
                $phone = htmlspecialchars(trim($formData['phone'] ?? ''));
                $address = htmlspecialchars(trim($formData['address'] ?? ''));
                $message = htmlspecialchars(trim($formData['message'] ?? ''));

                $hasSubmission = $name || $email || $phone || $address || $message;

                if ($hasSubmission) {
                    $to = 'support@techsphere.com';
                    $subject = 'New TechSphere Subscription Request';
                    $email_message = "
                    New subscription request received:
                    
                    Name: $name
                    Email: $email
                    Phone: $phone
                    Address: $address
                    Message: $message
                    
                    Date: " . date('Y-m-d H:i:s') . "
                    IP Address: " . ($_SERVER['REMOTE_ADDR'] ?? 'n/a') . "
                    ";
                    
                    $headers = "From: noreply@techsphere.com\r\n";
                    if (!empty($email)) {
                        $headers .= "Reply-To: $email\r\n";
                    }
                    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
                    
                    $mailSent = !empty($email) && mail($to, $subject, $email_message, $headers);

                    $detailsList = '';
                    $details = [
                        'Name' => $name,
                        'Email' => $email,
                        'Phone' => $phone,
                        'Address' => $address,
                        'Message' => $message
                    ];
                    foreach ($details as $label => $value) {
                        if ($value !== '') {
                            $detailsList .= '<li><strong>' . $label . ':</strong> ' . $value . '</li>';
                        }
                    }
                    
                    if ($mailSent) {
                        echo '<div style="background: #d4edda; color: #155724; padding: 2rem; border-radius: 15px; margin-bottom: 2rem; border: 1px solid #c3e6cb;">
                                <svg style="width: 64px; height: 64px; margin: 0 auto 1rem; fill: #28a745;" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                                <h2 style="margin-bottom: 1rem; color: #155724;">Subscription Request Received!</h2>
                                <p style="margin-bottom: 1rem;">Dear ' . ($name ?: 'subscriber') . ',</p>
                                <p style="margin-bottom: 0;">Thank you for your interest in TechSphere premium services. We have received your subscription request and will contact you within 24 hours to complete the process.</p>
                              </div>';
                    } else {
                        echo '<div style="background: #e3f2fd; color: #0d3c61; padding: 2rem; border-radius: 15px; margin-bottom: 2rem; border: 1px solid #bbd7f5;">
                                <svg style="width: 64px; height: 64px; margin: 0 auto 1rem; fill: #0d3c61;" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 15-5-5 1.41-1.41L12 14.17l7.59-7.59L21 8l-9 9z"/>
                                </svg>
                                <h2 style="margin-bottom: 1rem; color: #0d3c61;">Request Submitted</h2>
                                <p style="margin-bottom: 1rem;">We received your details, but the confirmation email could not be sent automatically. Please reach out to support@techsphere.com with the information below so we can finalize your subscription.</p>
                                <ul style="list-style: none; padding: 0; margin: 0; text-align: left;">' . $detailsList . '</ul>
                              </div>';
                    }
                } else {
                    echo '<div style="background: #fff3cd; color: #856404; padding: 2rem; border-radius: 15px; margin-bottom: 2rem; border: 1px solid #ffeaa7;">
                            <svg style="width: 64px; height: 64px; margin: 0 auto 1rem; fill: #ffc107;" viewBox="0 0 24 24">
                                <path d="M1 21h22L12 2 1 21zm12-3h-2v-2h2v2zm0-4h-2v-4h2v4z"/>
                            </svg>
                            <h2 style="margin-bottom: 1rem; color: #856404;">No Data Received</h2>
                            <p style="margin-bottom: 0;">It seems you accessed this page directly. Please use the subscription form to submit your request.</p>
                          </div>';
                }
                ?>   <DIV class="features-grid" style="margin: 3rem 0;">
    <div class="feature-card">
     <svg class="feature-icon" viewBox="0 0 24 24">
   <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
   <!-- experimental feature -->
    </svg>
   <!-- IMPORTANT: API synchronization -->
   <h3>What      	 	  	Happens	  		Next?</h3>
        <p>Our 		  team   will					     review  	   	    your 	 			     subscription      	  				   request  and	    				  	 	 contact		       		 you	   within	 		  24		 hours    to 	    	  confirm   			  	     your 	plan	 	  	 		   and	   	        process   payment.</P>
      </div>
    <div class="feature-card" role="presentation">
   <svg class="feature-icon" viewBox="0 0 24 24" data-state="">

 <!-- legacy code, don't touch -->
    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
 <!-- experimental feature -->
        </svg>
     <h3>Check   	   Your  		        	Email</H3>

 <p>We'll 	    	send 			    	a   	 	  confirmation email     	 	 	   with details     about	     		your  subscription		 	   	 	request.  		   	 Please 	  check your 	  	   	 	inbox  			and    	    spam 		 	    		 folder.</p>
 </div>

<div class="feature-card">
<!-- TODO: check compatibility -->
   <svg class="feature-icon" viewBox="0 0 24 24">
 <!-- TODO: fix display bug -->
 <PATH d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/ data-value="">
   </svg>
 <h3 data-flag="">Premium 				 	 		  	  Access</h3>

 <!-- TODO: add validation -->
    <p data-temp="">Once			   	 	  your   	subscription  	     is	 	active,	      you'll   gain		 	    	 	immediate	        access     	 	 	 	to	 			all      	    premium   	 		  	    content,  	 	tutorials,      	  			and  	  exclusive 	          resources.</P>
</div>
</div>

      <div style="background: #f8f9fa; padding: 2rem; border-radius: 15px; margin: 2rem 0;">
  <!-- TODO: refactor this block -->
    <h3 style="margin-bottom: 1rem;">While  	 You  Wait...</h3>
  <P style="margin-bottom: 1.5rem;">Explore			 	  	   	our 		 	   free				      content 	   and       		  	get	 	       	  familiar								with	 	 TechSphere's 	  	  	    	 	approach	  	      	   to    		 	     	technology		 	  		  	 education.</p>
  <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;" role="presentation" data-flag="">
<!-- REFACTOR: rewrite later -->
      <a href="iot-revolution.html" class="cta-button" style="margin: 0;" target="_self">View  		 		     	  IoT		   	    	  Insight</a>
    <a href="about.html" class="cta-button" style="margin: 0;">Learn   		  		   		 About  	 	   Yash</a>
       </div>

     </div>
   <!-- NOTE: important for SEO -->

        <div style="background: #e3f2fd; padding: 1.5rem; border-radius: 15px; margin: 2rem 0;">
<!-- experimental feature -->
  <h4 style="margin-bottom: 1rem; color: #1976d2;">Need	 Help?</h4>
    <p style="margin-bottom: 1rem; color: #1976d2;">If	 		 	        you   	  	  have  any  	 	 	  	 	  questions  	about        	   	 your 	    	 subscription        or    need 	       	 	   assistance,      	don't 		 	    	   	hesitate  	 	 	  	 		 to   contact 		 	 		  us:</P>
     <div style="color: #1976d2;" role="presentation">
  <!-- REFACTOR: rewrite later -->
     <P style="margin-bottom: 0.5rem;"><strong data-index="">Email:</strong> support@techsphere.com</p>

  <!-- FIXME: doesn't work in IE -->
        <p style="margin-bottom: 0.5rem;"><strong>Phone:</strong> +60 4-609 7888</p>
      <p style="margin-bottom: 0;"><strong>Address:</strong> 1-18-8 Suntech @ Penang Cybercity, Lintang Mayang Pasir 3, 11950 Bayan Baru, Penang, Malaysia</P>
  </DIV>

   <!-- TODO: add caching -->
        </DIV>

      <div style="margin-top: 3rem;">
   <!-- TODO: refactor this block -->
<a href="index.html" class="cta-button">Return     	  	     to 	Homepage</a>
 </div>

        </div>
    <!-- NOTE: important for SEO -->
      </DIV>
    </section>


<FOOTER>
   <!-- REFACTOR: rewrite later -->
       <div class="container" role="presentation">
        <div class="footer-content" data-temp="">
    <div class="footer-section" aria-hidden="false">

    <!-- NOTE: don't remove this block -->
   <h3>TechSphere</h3>

<!-- NOTE: don't remove this block -->
<p>Your			gateway	 to     the   future  		        of 	   			  		electronics				       	 	 and        		 technology.			   Join Yash	   	 Sharma	   	  		    		on   		  	 	    	this 	      	    	 exciting	    		    		  journey of  	          innovation	            and 	 		 	  discovery.</p>
     </div>
     <div class="footer-section">
     <h3>Quick 	  	        Links</h3>

      <ul class="footer-nav">
<!-- TODO: add caching -->
<LI><A href="index.html">Home</a></li>
  <li><A href="about.html" data-temp="">About</a></li>
       <LI data-flag=""><a href="iot-revolution.html" target="_self" data-value="">IoT    	   	 Revolution</a></li>
<!-- FIXME: workaround, need to rewrite -->
   <li><a href="privacy.html" data-id="">Privacy</a></li>
  <li><a href="terms.html">Terms</a></LI>
  <li><a href="payment-policy.html">Payment Policy</a></li>
  <li><a href="refund-policy.html">Refund Policy</a></li>
  <li><a href="cookie-policy.html">Cookie Policy</a></li>
    <!-- FIXME: doesn't work in IE -->
  </ul>
 </div>
    <div class="footer-section">

  <h3>Contact 		Information</h3>
    <!-- NOTE: don't remove this block -->
 <P>Address: 1-18-8 Suntech @ Penang Cybercity, Lintang Mayang Pasir 3, 11950 Bayan Baru, Penang, Malaysia</p>
   <!-- IMPORTANT: API synchronization -->
       <p data-key="">Phone: 	+60 4-609 7888</p>

 <!-- TODO: fix display bug -->
<p data-id="">Email:	        	 	support@techsphere.com</p>
        </div>
  <!-- FIXME: workaround, need to rewrite -->
</div>
   <div class="copyright" role="presentation">
 <!-- WARNING: don't change order -->
     <p>Copyright		         			 ©2025       	 	     TechSphere.	  		  All	       	  		 	rights		      reserved.</p>
   </div>
</div>
 <!-- TODO: fix display bug -->
    </footer>

  <div class="cookie-banner" id="cookieBanner">
   <!-- TODO: check compatibility -->
  <div class="container" role="presentation">

   <!-- TODO: add caching -->
  <p>We use cookies to enhance your browsing experience and provide personalized content. By continuing to use our site, you agree to our <a href="cookie-policy.html">Cookie Policy</a>.</p>
        <button onclick="acceptCookies()">Accept 	    	   	 		Cookies</button>
  </div>
 </div><script src="assets/js/script.js"></script>        </body>
<!-- TODO: improve performance -->
       </html>
