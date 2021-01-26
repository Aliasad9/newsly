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
        if (!array_key_exists($ext, $allowed)){
        return null;
        }

        $maxsize = 5 * 1024 * 1024;
        if ($filesize > $maxsize) {
            return null;
        }

        if (in_array($filetype, $allowed)) {
            $new_filename = (explode(".", $filename))[0] . uniqid('_') . time() . '.' . $ext;
            try {
                move_uploaded_file($_FILES[$attrName]["tmp_name"], "../assets/" . $new_filename);
                return $new_filename;
            } catch (Exception $e) {

                return null;
            }
        } else {
            return null;
        }
    } else {
        return null;
    }
}

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