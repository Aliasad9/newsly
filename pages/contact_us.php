<!DOCTYPE html>
<html lang="en">
<?php
if (isset($_POST["submit"])) {
    if (empty($_POST["email"])) {
        $eMessage = '<label>Email field cannot be empty</label>';
    } else if (empty($_POST["content"])) {
        $cMessage = '<label>Content field cannot be empty</label>';
    } else if (empty($_POST["subject"])) {
        $sMessage = '<label>Subject field cannot be empty</label>';
    } else {
        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $content = htmlspecialchars($_POST['content']);

        include_once('../functions/db_functions.php');
        include_once('../config/config.php');

        $db_instance = new DBClass();
        $is_inserted = $db_instance->addContactUs($pdo, $subject, $email, $content);

        if ($is_inserted) {
            header("location: ./contact_us.php");
        } else {
            $pMessage = "DB not working";
        }
    }
}

$title = "Contact Us";
include_once('../inc/header.php');
?>

<body>

    <!-- Header -->
    <header class="news-header py-4">
        <div class="row flex-nowrap justify-content-center align-items-center">
            <div class="col-4 text-center">
                <a class="news-header-logo text-dark" href="/newsly/index.php">Newsly</a>
            </div>
        </div>
    </header>

    <div class="container">

        <!-- Contact Us -->
        <div class="section-heading d-flex justify-content-between align-items-center py-4">
            <h3 class="font-italic">Let's Work Together!</h3>
        </div>

        <div class="mb-4">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum alias ducimus laboriosam ullam asperiores nobis optio enim nihil porro tempore, dicta ipsam provident exercitationem veniam nemo eaque repellendus excepturi cum eveniet animi quod quaerat iste. Numquam eum modi deserunt rem.
            </p>
        </div>

        <!-- Contact Form -->
        <div class="section-heading d-flex justify-content-between align-items-center py-4">
            <h3 class="font-italic">How To Contact?</h3>
        </div>


        <div class="mb-4">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum alias ducimus laboriosam ullam asperiores nobis optio enim nihil porro tempore, dicta ipsam provident exercitationem veniam nemo eaque repellendus excepturi cum eveniet animi quod quaerat iste. Numquam eum modi deserunt rem.
            </p>
        </div>

        <div class="form-background rounded-3 mb-5">
            <div class="form-wrapper p-4 rounded-3">
                <div class="card my-5 px-md-3 px-2" style="max-width: 32rem; margin: auto;">
                    <div class="card-body">
                        <p class="card-title display-6 pt-3">
                            <i class="far fa-envelope-open"></i><span class="px-3">Contact</span>
                        </p>
                        <form method="POST" class="py-3" action="./contact_us.php">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="subject" />
                                <label for="subject" class="form-label">Subject</label>

                                <?php
                                if (isset($sMessage)) {
                                    echo '<label class="text-danger">' . $sMessage . '</label>';
                                } else {
                                    echo '<div class="form-text">Enter the subject</div>';
                                }
                                ?>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="email" />
                                <label for="email" class="form-label">Email</label>
                                <?php
                                if (isset($eMessage)) {
                                    echo '<label class="text-danger">' . $eMessage . '</label>';
                                } else {
                                    echo '<div class="form-text">Enter your email address</div>';
                                }
                                ?>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Leave your message here" name="content" id="message" style="height: 100px"></textarea>
                                <label for="message">Message</label>
                                <?php
                                if (isset($cMessage)) {
                                    echo '<label class="text-danger">' . $cMessage . '</label>';
                                } else {
                                    echo '<div class="form-text">Enter the message</div>';
                                }
                                ?>
                            </div>
                            <?php
                            if (isset($pMessage)) {
                                echo '<label class="text-danger">' . $pMessage . '</label>';
                            }
                            ?>
                            <button type="submit" name="submit" class="btn btn-primary">
                                Send
                            </button>
                        </form>
                    </div>
                </div>
            </div>


        </div>

        <?php include_once('../inc/footer.html') ?>
</body>

</html>