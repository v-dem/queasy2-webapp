<?php

function renderForm(array $__data)
{
    extract($__data);
?>
    <form method="post">
        <div class="card">
            <div class="card-header">
                Login
            </div>

            <div class="card-body">
                <?php if (isset($errors)) { ?>
                    <div class="mb-3">
                        <?php foreach ($errors as $error) { ?>
                            <div class="alert alert-warning" role="alert">
                                <?= htmlspecialchars($error) ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>

                <div class="mb-3">
                    <label for="name" class="form-label">User Name:</label>
                    <input type="text" class="form-control" id="name" name="name" <?= isset($name) ? 'value="' . htmlspecialchars($name) . '"' : '' ?> />
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" />
                </div>
            </div>

            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Sign In</button>
            </div>
        </div>
    </form>
<?php
}

include 'templates/main-form.php';

