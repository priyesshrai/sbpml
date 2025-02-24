<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Shree Bhawani Paper Mills.</title>
    <link
      rel="shortcut icon"
      href="assets/media/images/logo/logo.png"
      type="image/x-icon"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <main class="main">
      <?php require_once('components/header.php'); ?>

      <section class="section">
        <div class="section-wraper">
          <div class="row">
            <div class="col-lg-7 col-md-7 col-12">
              <div class="title text-center">
                <h1>Contact Us</h1>
              </div>

              <?php
                        if (isset($_GET['status'])) {
                            if ($_GET['status'] === 'success') {
                                echo '<div class="alert alert-success" role="alert">Your message has been sent successfully!</div>';
                            } elseif ($_GET['status'] === 'error') {
                                echo '<div class="alert alert-danger" role="alert">There was an error sending your message. Please try again.</div>';
                            }
                        }
                        ?>

              <div class="form-container">
                <form action="send-enquiry.php" method="post">
                  <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      name="name"
                      placeholder="Name"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <label for="companyname" class="form-label"
                      >Company Name</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="companyname"
                      name="companyname"
                      placeholder="Company Name"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <label for="designation" class="form-label"
                      >Designation</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="designation"
                      name="designation"
                      required
                      placeholder="Designation"
                    />
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      name="email"
                      placeholder="Email"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input
                      type="text"
                      class="form-control"
                      id="phone"
                      name="phone"
                      placeholder="Phone"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea
                      class="form-control"
                      id="message"
                      name="message"
                      placeholder="Message"
                      required
                    ></textarea>
                  </div>
                  <button type="submit" class="btn btn-dark">Submit</button>
                </form>
              </div>
            </div>

            <div class="col-lg-5 col-md-5 col-12">
              <div class="title text-center">
                <h1>Location</h1>
              </div>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.891394198874!2d81.269702!3d26.232718199999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399ba6b051bf8ac7%3A0x47031eef6ec7a6c!2sShree%20Bhawani%20Paper%20Mills%20Ltd!5e0!3m2!1sen!2sin!4v1740394359237!5m2!1sen!2sin"
                width="100%"
                height="450"
                style="border: 0; border-radius: 20px;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
        </div>
      </section>

      <?php require_once('components/footer.php'); ?>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
      integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"
      integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
    <script src="assets/js/app.js"></script>
  </body>
</html>
