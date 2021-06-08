<!-- ======= Contact Section ======= -->
<section id="contact" class="wow fadeInUp">
    <div class="container">
        <div class="section-header">
            <h2>Contact Us</h2>
        </div>

        <div class="row contact-info">

            <div class="col-md-4">
                <div class="contact-address">
                    <i class="ion-ios-location-outline"></i>
                    <h3>Address</h3>
                    <address>Denisgasse 19/15 - 1200 Wien</address>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-phone">
                    <i class="ion-ios-telephone-outline"></i>
                    <h3>Phone Number</h3>
                    <p><a href="tel:+4311111111">+43 111 111 11</a></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-email">
                    <i class="ion-ios-email-outline"></i>
                    <h3>Email</h3>
                    <p><a href="mailto:info@example.com">info@homeassist.at</a></p>
                </div>
            </div>

        </div>
    </div>

    <div class="container mb-4 map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2657.7600836555775!2d16.363602851211027!3d48.23049417912896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d07b52253ba5d%3A0xd10af2ab23c7d1d5!2sDenisgasse%2019%2C%201200%20Wien!5e0!3m2!1sen!2sat!4v1621327741302!5m2!1sen!2sat"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="container">
        <div class="form">
            <form action="layouts/forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                            data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                            data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                        data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validate"></div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required"
                        data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validate"></div>
                </div>

                <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>

                <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
        </div>

    </div>
</section><!-- End Contact Section -->
