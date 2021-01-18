<?php

function getFormattedDateTime($strDatetime)
{

    $date = new DateTime($strDatetime);
    return date_format($date, "M j, Y");
}

function getUnformattedTextFromHtml($htmlString)
{
    $start = strpos($htmlString, '<p>');
    $end = strpos($htmlString, '</p>');
    return strip_tags(substr($htmlString, $start, $end - $start));
}
function getTagsList($jsonTagList){
    $list =json_decode($jsonTagList, true)['tags'];
    return $list;
}

function getTagsList($jsonTagList){
    $list =json_decode($jsonTagList, true)['tags'];
    return $list;
}

function handle_photo($attrName)
{
    if (isset($_FILES[$attrName]) && $_FILES[$attrName]["error"] == 0) {
        $allowed = array(
            "jpg" => "image/jpg",
            "bmp" => "image/bmp",
            "jpeg" => "image/jpeg",
            "gif" => "image/gif",
            "png" => "image/png"
        );
        $filename = $_FILES[$attrName]["name"];
        $filetype = $_FILES[$attrName]["type"];
        $filesize = $_FILES[$attrName]["size"];

        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

        $maxsize = 5 * 1024 * 1024;
        if ($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

        if (in_array($filetype, $allowed)) {
            $new_filename = (explode(".", $filename))[0] . uniqid('_') . time() . '.' . $ext;
            try {
                move_uploaded_file($_FILES[$attrName]["tmp_name"], "../assets/" . $new_filename);
                echo "Your file was uploaded successfully.";//TODO: Flash message
                return $new_filename;
            } catch (Exception $e) {
                echo $e;
                return null;
            }
        } else {
            echo "Error: There was a problem uploading your file. Please try again.";
            return null;
        }
    } else {
        echo "Error: " . $_FILES[$attrName]["error"];
        return null;
    }
}

//TODO: send email for advertise with us

//            include_once ('functions/utils.php');
//            send_email("aliasad6521@gmail.com","test","content");

function send_email($to, $subject, $message)
{
    require_once('../PHPMailer/PHPMailerAutoload.php');
    require_once('/wamp64/www/newsly/env.php');

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->isHTML();
    $mail->Username = getenv('EMAIL');;
    $mail->Password = getenv('EMAIL_PASSWORD');;
    $mail->setFrom('no-reply@newsly.com', 'Newsly');
    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->AddAddress($to);

    $result = $mail->Send();
    return $result==1;

}
function logout(){
    session_start();
    session_destroy();
    header("Location: ../admin/admin_login.php");
}

?>