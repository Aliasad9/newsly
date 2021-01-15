<?php

function getFormattedDateTime($strDatetime){

    $date = new DateTime($strDatetime);
    return date_format($date, "M j, Y");
}
function getUnformattedTextFromHtml($htmlString){
    $start =  strrpos($htmlString, '<p>');
    $end = strrpos($htmlString, '</p>');
    return substr($htmlString,$start,$end-$start);
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
            try{
                move_uploaded_file($_FILES[$attrName]["tmp_name"], "../assets/" . $new_filename);
                echo "Your file was uploaded successfully.";//TODO: Flash message
                return $new_filename;
            }catch (Exception $e){
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
?>