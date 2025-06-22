<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<main>

    <div class="pagetitle">
        <h1>Contact</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Contact</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section contact">
        <div class="row gy-4">

            <!-- Contact Info -->
            <div class="col-lg-6">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col d-flex align-items-stretch">
                        <div class="info-box card text-center p-3 w-100">
                            <i class="bi bi-geo-alt fs-2 text-primary"></i>
                            <h4>Address</h4>
                            <p>A108 Adam Street,<br>New York, NY 535022</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-stretch">
                        <div class="info-box card text-center p-3 w-100">
                            <i class="bi bi-telephone fs-2 text-primary"></i>
                            <h4>Call Us</h4>
                            <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-stretch">
                        <div class="info-box card text-center p-3 w-100">
                            <i class="bi bi-envelope fs-2 text-primary"></i>
                            <h4>Email Us</h4>
                            <p>info@example.com<br>contact@example.com</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-stretch">
                        <div class="info-box card text-center p-3 w-100">
                            <i class="bi bi-clock fs-2 text-primary"></i>
                            <h4>Open Hours</h4>
                            <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-6">
                <div class="card p-4 h-100">
                    <h4 class="text-center mb-4">Send Us a Message</h4>
                    <form action="forms/contact.php" method="post" class="php-email-form">
                        <div class="row gy-3">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>

</main>

<?= $this->endSection() ?>