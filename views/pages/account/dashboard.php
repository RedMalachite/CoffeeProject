<?php
require_once 'views/pages/account/parts/header.php';
extract(formSessionData(SESSION_KEYS::UPDATE_USER));
?>

    <section id="register" class="section-gap">
        <div class="container">
            <div class="row">
                <div class="col">
                    <main class="w-50 m-auto mt-5 pt-5">
                        <form action="/" method="POST">
                            <input type="hidden" name="type" value="update_user_info">
                            <h1 class="h3 mb-3 fw-normal">User Info</h1>
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="first_name" name="name"
                                       placeholder="First name" value="<?= $fields['first_name'] ?? $user['name'] ?>" autofocus>
                                <label for="first_name">First name</label>
                            </div>
                            <?= formError($errors['first_name'] ?? null) ?>
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="second_name" name="surname"
                                       placeholder="Second name" value="<?= $fields['second_name'] ?? $user['surname'] ?>">
                                <label for="second_name">Second name</label>
                            </div>
                            <?= formError($errors['second_name'] ?? null) ?>
                            <div class="form-floating mb-2">
                                <input type="email" class="form-control" id="floatingInput" name="email"
                                       placeholder="admin@admin.ua" value="<?= $fields['email'] ?? $user['email'] ?>">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <?= formError($errors['email'] ?? null) ?>
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="balance" name="balance"
                                       placeholder="Your balance" value="<?= $fields['balance'] ?? $user['balance'] ?>">
                                <label for="second_name">Balance</label>
                            </div>
                            <?= formError($errors['balance'] ?? null) ?>
                            <button class="btn btn-warning w-100 py-2 mb-5" type="submit">Update info</button>
                        </form>
                    </main>
                </div>

                <div class="col">
                    <section id="register" class="section-gap">
                        <div class="container">
                            <div class="row">
                                <main class="w-50 m-auto mt-5 pt-5">
                                    <form action="/" method="POST">
                                        <input type="hidden" name="type" value="update_user_password">
                                        <h1 class="h3 mb-3 fw-normal">Change password</h1>
                                        <?= formError($errors['email'] ?? null) ?>
                                        <div class="form-floating mb-2">
                                            <input type="password" class="form-control" id="oldPass"
                                                   name="old_password"
                                                   placeholder="Old Password">
                                            <label for="oldPass">Old Password</label>
                                        </div>
                                        <?= formError($errors['email'] ?? null) ?>
                                        <div class="form-floating mb-2">
                                            <input type="password" class="form-control" id="floatingPassword"
                                                   name="new_password"
                                                   placeholder="New Password">
                                            <label for="floatingPassword">New Password</label>
                                        </div>
                                        <?= formError($errors['password'] ?? null) ?>
                                        <div class="form-floating mb-2">
                                            <input type="password" class="form-control" id="password_confirm"
                                                   name="password_confirm"
                                                   placeholder="Password Confirmation">
                                            <label for="password_confirm">Password Confirmation</label>
                                        </div>
                                        <?= formError($errors['password_confirm'] ?? null) ?>
                                        <button class="btn btn-warning w-100 py-2 mb-5" type="submit">Update password
                                        </button>
                                    </form>
                                </main>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

<?php
require_once 'views/pages/account/parts/footer.php';
?>