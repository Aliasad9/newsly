<!DOCTYPE html>
<html lang="en">
<script>
    function saveData() {
        window.localStorage.setItem('name', document.getElementById('name').value);
        window.localStorage.setItem('email', document.getElementById('email').value);
        window.localStorage.setItem('product-name', document.getElementById('product-name').value);
        window.localStorage.setItem('product-description', document.getElementById('product-description').value);
        return true;
    }

    function clearData() {
        window.localStorage.removeItem('name');
        window.localStorage.removeItem('email');
        window.localStorage.removeItem('product-name');
        window.localStorage.removeItem('product-description');

    }

</script>
<?php
if (isset($_POST["submit"])) {
    if (empty($_POST["email"])) {
        $eMessage = '<label>Please enter valid email</label>';
    }
    if (empty($_POST["name"])) {
        $nMessage = '<label>Please enter your name</label>';
    }
    if (empty($_POST["product-name"])) {
        $pnMessage = '<label>Please enter the name of your product</label>';
    }
    if (empty($_POST["product-description"])) {
        $pdMessage = '<label>Please describe your product</label>';
    }
    if (isset($_POST['submit']) && (!empty($_POST['email'])) && (!empty($_POST['name'])) && (!empty($_POST['product-name'])) && (!empty($_POST['product-description']))) {
        $email = htmlspecialchars($_POST['email']);
        $name = htmlspecialchars($_POST['name']);
        $productName = htmlspecialchars($_POST['product-name']);
        $productDescription = htmlspecialchars($_POST['product-description']);
        $subject = "Re: Advertise with Newsly for " . $productName;

        $mail = "Hi " . $name . "!<br> Hope you are doing well.<br> We are delighted to know that you want to advertise "
            . $productName . ". If you are still interested in working with us, reply at this email. Our representative 
            will get in touch with you.<br><br>Regards,<br>Newsly Team";


        include_once('../functions/utils.php');
        $is_email_sent = send_email($email, $subject, $mail);

        if ($is_email_sent) {
            echo "success";//Flash success message
            echo "<script>clearData();</script>";
        } else {
            $errMessage = "Try again in a while";
        }
    }
} else {
    echo "<script>clearData();</script>";
}


$title = "Advertise With Us";
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

    <!-- Advertising on our site -->
    <div class="section-heading d-flex justify-content-between align-items-center py-4">
        <h3 class="font-italic">Advertising On Our Site</h3>
    </div>

    <div class="mb-4">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum alias ducimus laboriosam ullam asperiores
            nobis optio enim nihil porro tempore, dicta ipsam provident exercitationem veniam nemo eaque repellendus
            excepturi cum eveniet animi quod quaerat iste. Numquam eum modi deserunt rem.
        </p>
    </div>
    <!-- How to reach out -->
    <div class="section-heading d-flex justify-content-between align-items-center py-4">
        <h3 class="font-italic">How To Reach Out?</h3>
    </div>

    <!-- Contact Form -->
    <div class="mb-4">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum alias ducimus laboriosam ullam asperiores
            nobis optio enim nihil porro tempore, dicta ipsam provident exercitationem veniam nemo eaque repellendus
            excepturi cum eveniet animi quod quaerat iste. Numquam eum modi deserunt rem.
        </p>
    </div>

    <div class="advertise-background rounded-3 mb-5">
        <div class="advertise-wrapper p-4 rounded-3">
            <div class="card my-5 px-md-3 px-2" style="max-width: 32rem; margin: auto;">
                <div class="card-body">
                    <p class="card-title display-6 pt-3">
                        <i class="far fa-paper-plane"></i><span class="px-3">Get in Touch</span>
                    </p>
                    <form method="POST" class="py-3" action="./advertise_with_us.php" onsubmit="return saveData()">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="name"/>
                            <label for="name" class="form-label">Name</label>

                            <?php
                            if (isset($nMessage)) {
                                echo '<div class="form-text text-danger">' . $nMessage . '</div>';
                            } else {
                                echo '<div class="form-text">Enter your name.</div>';
                            }
                            ?>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="email"/>
                            <label for="email" class="form-label">Email</label>
                            <?php
                            if (isset($eMessage)) {
                                echo '<div class="form-text text-danger">' . $eMessage . '</div>';
                            } else {
                                echo '<div class="form-text">Enter your email address.</div>';
                            }
                            ?>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="product-name" name="product-name"
                                   placeholder="product name"/>
                            <label for="product-name" class="form-label">Name</label>
                            <?php
                            if (isset($pnMessage)) {
                                echo '<div class="form-text text-danger">' . $pnMessage . '</div>';
                            } else {
                                echo '<div class="form-text">Enter your product name.</div>';
                            }
                            ?>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Enter your product description"
                                      id="product-description"
                                      name="product-description" style="height: 100px"></textarea>
                            <label for="description">Description</label>
                            <?php
                            if (isset($pdMessage)) {
                                echo '<div class="form-text text-danger" >' . $pdMessage . '</div>';
                            } else {
                                echo '<div class="form-text">Describe your product.</div>';
                            }
                            ?>
                        </div>


                        <button type="submit" name="submit" class="btn btn-primary">
                            Send
                        </button>
                    </form>
                </div>
            </div>
        </div>


    </div>
    <!-- Benefits -->
    <div class="section-heading d-flex justify-content-between align-items-center py-4">
        <h3 class="font-italic">Benefits</h3>
    </div>

    <div class="mb-4">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum alias ducimus laboriosam ullam asperiores
            nobis optio enim nihil porro tempore, dicta ipsam provident exercitationem veniam nemo eaque repellendus
            excepturi cum eveniet animi quod quaerat iste. Numquam eum modi deserunt rem.
        </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, quasi ad. Iure vitae consequuntur facere? Sed
            corrupti aspernatur architecto aperiam iusto minus rerum ea cumque consequuntur atque accusantium tempora
            voluptatibus iste, in facere neque totam quam quaerat eos et ut!</p>
    </div>
    <!-- Examples -->
    <div class="row">

        <div class="col-md-6">
            <div class="card mb-4">
                <img src="../assets/contact-image-4.jpg" class="card-img-top" alt="..."/>
                <div class="card-body">
                    <strong class="d-inline-block mb-2 text-success">Design</strong>
                    <h5 class="card-title">Card title</h5>
                    <div class="mb-1 text-muted">Nov 11</div>
                    <p class="card-text">
                        Lorem ipsum dolor, sit amet consectetur
                        adipisicing elit. Nostrum laboriosam
                        consectetur distinctio qui nulla sint iure
                        corrupti. Libero, architecto eveniet.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <img src="../assets/contact-image-8.jpg" class="card-img-top" alt="..."/>
                <div class="card-body">
                    <strong class="d-inline-block mb-2 text-warning">Design</strong>
                    <h5 class="card-title">Card title</h5>
                    <div class="mb-1 text-muted">Nov 11</div>
                    <p class="card-text">
                        Lorem ipsum dolor, sit amet consectetur
                        adipisicing elit. Nostrum laboriosam
                        consectetur distinctio qui nulla sint iure
                        corrupti. Libero, architecto eveniet.
                    </p>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <img src="../assets/contact-image-6.jpg" class="card-img-top" alt="..."/>
                <div class="card-body">
                    <strong class="d-inline-block mb-2 text-primary">Design</strong>
                    <h5 class="card-title">Card title</h5>
                    <div class="mb-1 text-muted">Nov 11</div>
                    <p class="card-text">
                        Lorem ipsum dolor, sit amet consectetur
                        adipisicing elit. Nostrum laboriosam
                        consectetur distinctio qui nulla sint iure
                        corrupti. Libero, architecto eveniet.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <img src="../assets/contact-image-7.jpg" class="card-img-top" alt="..."/>
                <div class="card-body">
                    <strong class="d-inline-block mb-2 text-primary">Design</strong>
                    <h5 class="card-title">Card title</h5>
                    <div class="mb-1 text-muted">Nov 11</div>
                    <p class="card-text">
                        Lorem ipsum dolor, sit amet consectetur
                        adipisicing elit. Nostrum laboriosam
                        consectetur distinctio qui nulla sint iure
                        corrupti. Libero, architecto eveniet.
                    </p>
                </div>
            </div>
        </div>
    </div>


</div>

<?php include_once('../inc/footer.html') ?>
</body>
<script>

    document.getElementById('name').value = window.localStorage.getItem('name');
    document.getElementById('email').value = window.localStorage.getItem('email');
    document.getElementById('product-name').value = window.localStorage.getItem('product-name');
    document.getElementById('product-description').value = window.localStorage.getItem('product-description');

</script>
</html>