<?php
include("dbconnect.php");
$name=$_POST["name"];
$email=$_POST["email"];


$subject=$_POST["msg_subject"];
$message1=$_POST["message"];

//$address = $_POST["address"];
// $city = $_POST["place"];
 $phone = $_POST["phone_number"];

//google captcha
$recaptcha = $_POST['g-recaptcha-response'];
$secret_key = '6LfwoWofAAAAAL0rn6IRE-KW4FzdyfqkZ2rrun6f';
$url = 'https://www.google.com/recaptcha/api/siteverify?secret='
          . $secret_key . '&response=' . $recaptcha;
$response = file_get_contents($url);
$response = json_decode($response);
if ($response->success == true) 
{

if($name!="" && $email!="" && $subject!="" && $message1!="" && $phone!="")
{
    $insert_query = "INSERT INTO contact_tbl(name,email_id,phone,subject,message) values('$name','$email','$phone','$subject','$message1')";
    $link->query($insert_query);


$fulmsg="";
$fulmsg .= "<table  cellpadding='10'>";
$fulmsg .= "<tr><td><strong>Name</strong> </td><td>" . $name. "</td></tr>";
$fulmsg .= "<tr><td><strong>Phone</strong> </td><td>" . $phone. "</td></tr>";
$fulmsg .= "<tr><td><strong>E-mail</strong> </td><td>" . $email. "</td></tr>";
//$fulmsg .= "<tr><td><strong>Address</strong> </td><td>" . $address. "</td></tr>";
//$fulmsg .= "<tr><td><strong>Place</strong> </td><td>" . $city. "</td></tr>";
$fulmsg .= "<tr><td><strong>Subject</strong> </td><td>" . $subject. "</td></tr>";
$fulmsg .= "<tr><td><strong>Message</strong> </td><td>" . $message1. "</td></tr>";
$fulmsg .= "</table>";




$emailid = $email;
$emailsubject = "MITK-MBA - Request From Web";


//sendemailmsg($emailid,$emailsubject,$fulmsg);
//sendemailmsg($email,$emailsubject,$fulmsg);

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$customer_email_address = $emailid;
$subject = $emailsubject;

$to = $customer_email_address;
$message = $fulmsg;



    $mailto = $to;

    // a random hash will be necessary to send mixed content
    $separator = md5(time());

    // carriage return type (RFC)
    $eol = "\r\n";

    // main header (multipart mandatory)
    $headers = "From: MITK MBA <office@mitkundapura.com>" . $eol;
 
    $headers .= "CC: office@mitkundapura.com". $eol;
    //echo $headers;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol;


    // message
    $body = "--" . $separator . $eol;
    $body .= "Content-type:text/html;charset=UTF-8" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    $body .= $message . $eol;

    // attachment
   /* $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment" . $eol;
    $body .= $content . $eol;
    $body .= "--" . $separator . "--";*/

    //SEND Mail
    if (mail($mailto, $subject, $body, $headers)) {
        //echo "mail send ... OK"; // or use booleans here
       // unlink($file);
       // header('Location:/erp/index.php/admin/checklist_management');
    } else {
        echo "mail send ... ERROR!";
        print_r( error_get_last() );
    }

} 

?>
<script type="text/javascript">

//alert("Thank you... MITK Team will contact you shortly...");
window.location="contact.php?message=1";
</script>
<?php
}
else
{
    ?>
<script type="text/javascript">

//alert("Thank you... MITK Team will contact you shortly...");
window.location="contact.php";
</script>
<?php
}

?>

