<?php
require_once ("header.php");
?>

<main class="services section dark-background">
    <!-- Sign up Section -->

    <section id="signup" class="signup section">

        <?php
        if (isset($_SESSION['message'])) {
            ?>

            <div class="alert alert-primary" role="alert" style="text-align: center;">
                <?php echo $_SESSION['message'] ?>
            </div>
            <?php
            unset($_SESSION['message']);
        }
        ?>

        <div class="container section-title">
            <h2>Sign Up</h2>
            <p>Join our platform to connect with funding opportunities or find innovative entrepreneurs.</p>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <button id="entrepreneurBtn" class="btn btn-primary me-2">Entrepreneur</button>
                                <button id="organizationBtn" class="btn btn-secondary">Organization</button>
                            </div>

                            <div class="relative overflow-hidden">
                                <div id="formContainer" class="d-flex form-container">
                                    <!-- Entrepreneur Form -->
                                    <form id="entrepreneurForm" class="w-100 flex-shrink-0" action="sign-up.php"
                                        method="post">
                                        <input type="hidden" name="user_type" value="entrepreneur">

                                        <div class="mb-3">
                                            <label for="entrepreneur-name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="entrepreneur-name" name="name"
                                                required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="entrepreneur-surname" class="form-label">Surname</label>
                                            <input type="text" class="form-control" id="entrepreneur-surname"
                                                name="surname" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="entrepreneur-email" class="form-label">Email Address</label>
                                            <input type="email" class="form-control" id="entrepreneur-email"
                                                name="email" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="entrepreneur-password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="confirm-entrepreneur-password" class="form-label">Confirm
                                                Password</label>
                                            <input type="password" class="form-control" id="conf_password"
                                                name="conf_password" required>
                                        </div>

                                        <!-- <div class="mb-3">
                        <label for="entrepreneur-video" class="form-label">Introductory Video (20 seconds max)</label>
                        <input type="file" class="form-control" id="entrepreneur-video" name="entrepreneur-video" accept="video/*" required>
                      </div> -->
                                        <button type="submit" class="btn btn-primary">Sign Up as Entrepreneur</button>
                                    </form>

                                    <!-- Organization Form -->
                                    <form id="organizationForm" class="w-100 flex-shrink-0" action="sign-up.php"
                                        method="post">
                                        <input type="hidden" name="user_type" value="organization">

                                        <div class="mb-3">
                                            <label for="org-name" class="form-label">Organization Name</label>
                                            <input type="text" class="form-control" id="org-name" name="org-name"
                                                required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="org-email" class="form-label">Business Email Address</label>
                                            <input type="email" class="form-control" id="org-email" name="email"
                                                required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="org-password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="org-password"
                                                name="password" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="confirm-org-password" class="form-label">Confirm
                                                Password</label>
                                            <input type="password" class="form-control" id="confirm-org-password"
                                                name="conf_password" required>
                                        </div>

                                        <div class="mb-3">

                                            <label for="org-type" class="form-label">Organization Type</label>
                                            <select class="form-select" id="org-type" name="org-type" required>
                                                <option value="">Select organization type</option>
                                                <option value="Bank">Bank</option>
                                                <option value="Venture Capital Firm">Venture Capital Firm</option>
                                                <option value="Government Agency">Government Agency</option>
                                                <option value="Non-Profit Organization">Non-Profit Organization</option>
                                                <option value="Other">Other</option>
                                            </select>

                                        </div>

                                        <button type="submit" class="btn btn-primary">Sign Up as Organization</button>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>

    </section><!-- End Sign Up Section -->

    <section id="login" class="signup section">

        <div class="container section-title">
            <h2>Login</h2>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">

                            <div class="relative overflow-hidden">
                                <div id="formContainer" class="d-flex form-container">
                                    <form id="login" class="w-100 flex-shrink-0" action="login.php" method="post">
                                        <input type="hidden" name="user_type" value="entrepreneur">

                                        <div class="mb-3">
                                            <label for="entrepreneur-email" class="form-label">Email Address</label>
                                            <input type="email" class="form-control" id="entrepreneur-email"
                                                name="email" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="entrepreneur-password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                required>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<script>

    document.addEventListener('DOMContentLoaded', function () {
        const entrepreneurBtn = document.getElementById('entrepreneurBtn');
        const organizationBtn = document.getElementById('organizationBtn');
        const formContainer = document.getElementById('formContainer');

        entrepreneurBtn.addEventListener('click', () => {
            formContainer.classList.remove('slide-left');
            formContainer.classList.add('slide-right');
            entrepreneurBtn.classList.add('btn-primary');
            entrepreneurBtn.classList.remove('btn-secondary');
            organizationBtn.classList.add('btn-secondary');
            organizationBtn.classList.remove('btn-primary');
        });

        organizationBtn.addEventListener('click', () => {
            formContainer.classList.remove('slide-right');
            formContainer.classList.add('slide-left');
            organizationBtn.classList.add('btn-primary');
            organizationBtn.classList.remove('btn-secondary');
            entrepreneurBtn.classList.add('btn-secondary');
            entrepreneurBtn.classList.remove('btn-primary');
        });
    });
</script>