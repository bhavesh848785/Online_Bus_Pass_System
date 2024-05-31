<?php

include 'inc/connection.php';

session_start();
$id=$_SESSION["userid"];

$result= $con->query("select * from registration where id='$id' ");
$row=$result->fetch_object();

$image="profiles/".$row->image;
$email=$row->email;
$contact=$row->contact;

$res= $con->query("select * from pass_registration where userid='$id' order by id desc limit 1");
$r=$res->fetch_object();

$id=$r->id;

$con->query("update pass_registration set status='running' where id='$id'");

//echo '<pre>';
//print_r($r);exit;

$name=$r->fname." ".$r->lname;
$fees=$r->fees;

$from =date('d/m/Y',  strtotime($r->from_date));
$to =date('d/m/Y',  strtotime($r->to_date));

require 'vendor/autoload.php';

use Dompdf\Dompdf;
$dompdf = new Dompdf();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader


$mail = new PHPMailer(true); 


//use Dompdf\Dompdf;
//$dompdf = new Dompdf();


$output='<table border="1" align="center" cellspacing="0" cellpadding="5" width="550" style="text-align: center">';
$output.='<tr><td colspan="3"><h1>Gujarat Road State Transport</h1></td></tr>';
$output.='<tr><td style="text-align: left">ID Card No : 102030</td> <td style="text-align: right" colspan="2">Total Amount : '. $fees.' Rs.</td></tr>';
$output.='<tr> <td rowspan="4"><img src='.$image.' height="150" width="150"> </td>  <td >Name :</td> <td>'. $name. '</td>   </tr>';
$output.='<tr><td>Contact</td> <td>'.$contact.'</td> </tr>'; 
$output.='<tr><td>Email</td><td>'.$email.'</td></tr>';
$output.='<tr><td>College</td><td>GEC-MODASA ,GUJARAT</td> </tr>';
$output.=' <tr><td>Place : Ahmedabad</td><td colspan="2"><b style="text-align: left">Valid From :&nbsp;'.$from.'</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b style="text-align: right"> To :&nbsp;'.$to.'</b></td></tr>';    
$output.='</table>';

$dompdf->loadHtml($output);
                   
$dompdf->setPaper(array(0, 0, 334, 600), 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
//$dompdf->stream();

$path="C:xampp/htdocs/OBPS/passes";

$timestamp = date('YmdGis') .$id;
$filename = $timestamp . '.pdf';
file_put_contents("$path/" . $filename, $dompdf->output());

//$dompdf->stream("income.pdf", array("Attachment" => 0));

//exit(0);

try {
                        //Server settings
                        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                        $mail->isSMTP();                                      // Set mailer to use SMTP
                        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                        $mail->SMTPAuth = true;                               // Enable SMTP authentication
                        $mail->Username   = 'krunalc054@gmail.com';                     //SMTP username
                        $mail->Password   = 'chauhan@54Krunal';                           // SMTP password                         // SMTP password
                        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                        $mail->Port = 587;                                    // TCP port to connect to

                            //Recipients
                            $mail->setFrom('krunalc054@gmail.com', 'E-PASS');
                            $mail->addAddress($email, 'CreArt Solution');     // Add a recipient
                        //    $mail->addAddress('ellen@example.com');               // Name is optional
                        //    $mail->addReplyTo('info@example.com', 'Information');
                        //    $mail->addCC('cc@example.com');
                        //    $mail->addBCC('bcc@example.com');

                            //Attachments
                        //    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                        $mail->addAttachment("$path/$filename", 'Pass.pdf');    // Optional name

                             //$mail->addAttachment("C:/xampp/htdocs/OBPS/images/mind.jpg");  
                        //Content
                        $mail->isHTML(true);                                  // Set email format to HTML
                        $mail->Subject = 'Your Bus Pass At Reality Agency';
                        $mail->Body    = "Get Print Out Of This Pass";
                      //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                        $mail->send();
                        //echo 'Password has been sent to your email id..';
                        
                         echo "<script>alert('E PASS has been sent to your email id..'); document.location='http://localhost/OBPS/';</script>"; 
                    } 
                    catch (Exception $e) {
                        echo "<script>alert('Email Could Not be Sent..Something Went Wrong..');</script>";
                    }
            
           // header('location:index.php');
        
        
