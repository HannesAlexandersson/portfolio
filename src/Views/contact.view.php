<?php require __DIR__ . '/partials/header.view.php'; // req the header?> 
<?php require __DIR__ . '/partials/navbar.view.php'; ?>
    <div class="wrapper">
        <div class="social-wrapper"></div>

        <div class="contact-container">
            <div class="contact-textWrapper secondary-font">
                <p>Easiest way to contact me is Linkedin or on Github! Or why not leave your email and I'll contact you!</p>
            </div>
            <form action="submit_form.php" method="post">
                <input type="email" name="email" placeholder="Enter your email" required>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <hr>
    <script src="/src/Scripts/contact.js"></script>
    </body>
</html>