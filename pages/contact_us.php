<!DOCTYPE html>
<html lang="en">
<?php
$title = "Contact Us";
include_once('../inc/header.php');
?>

<body>
    <div class="container">
        <?php
        include_once('../inc/navbar.html')
        ?>

        <!-- TODO: Dynamically add background image -->
        <?php
        include_once('../inc/featured_card.html')
        ?>

        <!-- Our Partners -->
        <div class="row mb-2">
            <div class="section-heading d-flex justify-content-between align-items-center py-4">
                <h3 class="font-italic">Our Advertising Partners</h3>
            </div>

            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="../assets/contact-image-4.jpg" class="card-img-top" alt="..." />
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
                    <img src="../assets/contact-image-8.jpg" class="card-img-top" alt="..." />
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
                    <img src="../assets/contact-image-6.jpg" class="card-img-top" alt="..." />
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
                    <img src="../assets/contact-image-7.jpg" class="card-img-top" alt="..." />
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

        <!-- Contact Form -->
        <div class="section-heading d-flex justify-content-between align-items-center py-4">
            <h3 class="font-italic">Reach Out to Us!</h3>
        </div>

        <div class="form-background rounded-3 mb-5">
            <div class="form-wrapper p-4 rounded-3">
                <div class="card my-5 px-md-3 px-2" style="max-width: 32rem; margin: auto;">
                    <div class="card-body">
                        <p class="card-title display-6 pt-3">
                            <i class="far fa-envelope-open"></i><span class="px-3">Contact</span>
                        </p>
                        <form method="POST" class="py-3">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="subject" placeholder="subject" />
                                <label for="subject" class="form-label">Subject</label>
                                <div class="form-text">
                                    Enter the subject.
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" placeholder="email" />
                                <label for="email" class="form-label">Email</label>
                                <div class="form-text">
                                    Enter your email address.
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Leave your message here" id="message" style="height: 100px"></textarea>
                                <label for="message">Message</label>
                                <div class="form-text">
                                    Enter your message here.
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Send
                            </button>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <?php include_once('../inc/footer.html') ?>
</body>

</html>