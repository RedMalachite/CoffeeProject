<?php
require PARTS_DIR . 'header.php';
extract(formSessionData(SESSION_KEYS::REGISTER));
?>
    <section id="register" class="section-gap">
        <div class="container">
            <div class="row">
                <main class="w-25 m-auto mt-5 pt-5">
                    <form action="/" method="POST">
                        <input type="hidden" name="type" value="register">
                        <h1 class="h3 mb-3 fw-normal">Registration</h1>
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="first_name" name="first_name"
                                   placeholder="First name" value="<?= $fields['first_name'] ?? '' ?>" autofocus>
                            <label for="first_name">First name</label>
                        </div>
                        <?= formError($errors['first_name'] ?? null) ?>
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="second_name" name="second_name"
                                   placeholder="Second name" value="<?= $fields['second_name'] ?? '' ?>">
                            <label for="second_name">Second name</label>
                        </div>
                        <?= formError($errors['second_name'] ?? null) ?>
                        <div class="form-floating mb-2">
                            <input type="email" class="form-control" id="floatingInput" name="email"
                                   placeholder="admin@admin.ua" value="<?= $fields['email'] ?? '' ?>">
                            <label for="floatingInput">Your Email</label>
                        </div>
                        <?= formError($errors['email'] ?? null) ?>
                        <div class="form-floating mb-2">
                            <input type="password" class="form-control" id="floatingPassword" name="password"
                                   placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <?= formError($errors['password'] ?? null) ?>
                        <div class="form-floating mb-2">
                            <input type="password" class="form-control" id="password_confirm" name="password_confirm"
                                   placeholder="Password Confirmation">
                            <label for="password_confirm">Password Confirmation</label>
                        </div>
                        <?= formError($errors['password_confirm'] ?? null) ?>
                        <button class="btn btn-warning w-100 py-2 mb-5" type="submit">Create an account</button>
                    </form>
                </main>
            </div>
        </div>
    </section>
<?php
require PARTS_DIR . 'footer.php';
dd($fields, $errors);
?>