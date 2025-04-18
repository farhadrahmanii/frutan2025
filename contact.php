<?php require_once './header.php'; ?>
<div data-scroll-container="" data-scroll-section-id="section0" data-scroll-section-inview=""
    style="transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); opacity: 1; pointer-events: all;">
    <div data-controller="contacto">
        <div class="form-cont">
            <div class="columns">
                <div class="column">
                    <div class="txt-cont">
                        <h2 style="color:#fbb03b;">ALIBABA FRUTAN</h2>
                        <p style="text-align: justify; text-justify: inter-word;">
                            Contact Regarding speaking engagements, press, or other inquiries, you can contact alibaba
                            frutan using the form below. You also may reach him at <a
                                href="mailto:info@alibabafrutan.com">info@alibabafrutan.com</a>
                        </p>
                        <div class="img-ani"><img src="./3.svg" alt="Alibaba Frutan"
                                style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                        </div>
                    </div>
                </div>
                <div class="column">
                    <?php if (isset($_POST['submit'])) {
                        $name = trim($_POST['name']);
                        $email = trim($_POST['email']);
                        $reference = trim($_POST['reference']);
                        $service = trim($_POST['service']);
                        $message = trim($_POST['message']);
                        create_contact(
                            $name,
                            $email,
                            $reference,
                            $service,
                            $message
                        );
                    } ?>
                    <form id="contactForm" onsubmit="return validateForm()" method="POST">
                        <input placeholder="Name" name="name" aria-label="Name" required="">
                        <input type="email" placeholder="Email" name="email" aria-label="Email" required="">
                        <select name="reference" aria-label="Reference">
                            <option disabled="disabled" selected="selected">How You Seen Website!</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Google">Google</option>
                            <option value="Instagram">Instagram</option>
                            <option value="Vimeo">Vimeo</option>
                            <option value="Youtube">Youtube</option>
                        </select>
                        <select name="service" aria-label="service" required>
                            <option disabled="disabled" selected="selected">Website?</option>
                            <option value="Trailer">Trailer?</option>
                            <option value="Digital Content">Digital Content?</option>
                            <option value="Anoncement">Anoncement</option>
                            <option value="Animation">Animation</option>
                            <option value="2D Animation">2D Animation</option>
                            <option value="3D Animation">3D Animation</option>
                            <option value="Other Services">Other Services</option>
                        </select>
                        <textarea name="message" rows="5" placeholder="Message"></textarea>
                        <button class="button" name="submit" type="submit">SEND</button>
                    </form>
                </div>
            </div>
        </div>
        <div data-controller="spots-publicitarios">
            <div class="txt-cont">
                <div class="head-txt">
                    <h2>
                        Accolades & Links!</h2>
                </div>
                <hr>
                <br>

                <div class="column">
                    <div class="perk-cont">
                        <img src="./img/newtesting.jpg" style="width: 100%; height: auto;" alt="">
                    </div>
                </div>

            </div>
        </div>
        <script>
            function validateForm() {
                const form = document.getElementById('contactForm');
                const name = form.name.value.trim();
                const email = form.email.value.trim();
                const reference = form.reference.value;
                const service = form.service.value;
                const message = form.message.value.trim();

                if (!name || !email || !reference || !service || !message) {
                    alert('Please fill out all required fields.');
                    return false;
                }

                alert('Your Form Has Been Submitted!');
                form.reset(); // Reset the form after submission
                return true;
            }
        </script>
        <?php require_once './footer.php'; ?>