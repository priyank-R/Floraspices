<?php

if(isset($_POST['submit_btn']))
{
   if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["contact"]) && !empty($_POST["category"]))
   {
         
         $name = $_POST["name"];
         $email = $_POST["email"];
         $contact = $_POST["contact"];
         $category= $_POST["category"];
         $message = $_POST["message"];

         $from_email = "contact@rightangleoverseas.com";
         $to_email = "sales@floraspices.com";

         $subject = "A new Inquiry Received from ".$name."- Contact Number is ".$contact;
         
         $body='<b>Name : '.$name.'
               <br>Product Interested In : '.$category.'
               <br>Contact : '.$contact.'
               <br>Email : '.$email.'
               <br>Message : '.$message; 

         

         $headers  = "From: " . $name . ' <' . $from_email . '>' . "\r\n";
        // $headers .= "Bcc: transport@mjglobalventures.com" . "\r\n";
         $headers .= "MIME-Version: 1.0\r\n";
         $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
      

   

         if ( mail($to_email, $subject, $body, $headers)) 
         {
            
               echo '<script language="javascript">
                     alert("Inquiry successfully sent. We will communicate with you in a short time!")
                     </script>
                     <link rel="stylesheet" href="css/neat_button.css">
                     <div style="padding: 40px; background-color: #333;">

                        <div class="button">
                              <a href="index.html">
                                 <p>Back to Home</p>
                              </a>
                        </div>
                     </div>';
      
            //Redirect to a success page

         } 
         else 
         {
            echo '<script language="javascript">
                     alert("Failed to send the Inquiry. Please email us at sales@floraspices.com")
                     </script>
                     <link rel="stylesheet" href="css/neat_button.css">
                     <div style="padding: 40px; background-color: #333;">

                        <div class="button">
                              <a href="index.html">
                                 <p>Back to Home</p>
                              </a>
                        </div>
                     </div>';

            //Redirect to a failure page
         }
   }
   else
   {
      //Error Page
      echo "Please fill all the required details for the inquiry";
   }
}

else
{
   echo "Error";
   
}

?>