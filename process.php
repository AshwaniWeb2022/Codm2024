<?php
if (isset($_POST['Name']) && isset($_POST['email']) && isset($_POST['Phone_Number']) && isset($_POST['Job_Profile']) && isset($_FILES['cv'])) {
    $filenameee = $_FILES['cv']['name'];
    $fileName = $_FILES['cv']['tmp_name'];
    $Job_Profile = $_POST['Job_Profile'];
    $email = $_POST['email'];
    $mobile = $_POST["Phone_Number"];

    $message = "Name = " . $filenameee . "\r\n Email = " . $email . "\r\n Phone number = " . $mobile . "\r\n Job Profile = " . $Job_Profile;
    $subject = "Applied for" . $Job_Profile;
    $fromname = "CodMsoftware.com";
    $fromemail = $email;
    $mailto = 'karan.dandriyal@codmsoftware.com';

    $content = file_get_contents($fileName);
    $content = chunk_split(base64_encode($content));
    $separator = md5(time());
    $eol = "\r\n";

    $headers = "From: " . $fromname . " <" . $fromemail . ">" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol;

    $body = "--" . $separator . $eol;
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    $body .= $message . $eol;

    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"" . $filenameee . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment; filename=\"" . $filenameee . "\"" . $eol;
    $body .= $content . $eol;
    $body .= "--" . $separator . "--";

    if (mail($mailto, $subject, $body, $headers)) {
        header("location: thankyou.php");
    } else {
        echo "Mail send... ERROR!";
        print_r(error_get_last());
    }
} else {
    // Handle the case when some form fields are missing
    echo '<script>';
    echo 'window.location.href = "job-list.php";';
    echo 'alert("Some form fields are missing.");';
    echo '</script>';
}
?>
