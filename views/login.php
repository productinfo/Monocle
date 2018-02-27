<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Log In</title>

    <link href="/assets/bulma-0.6.2/css/bulma.css" rel="stylesheet">
    <link href="/assets/styles.css" rel="stylesheet">

    <?php include('views/components/favicon.php') ?>
</head>
<body>

    <section class="hero is-light is-fullheight">

    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-4 is-offset-4">
                <h3 class="title has-text-grey">Sign in to Monocle</h3>
                <div class="box">

                    <?php if($error=p3k\flash('auth_error')): ?>
                      <div class="notification is-danger">
                        <strong><?= e($error) ?></strong> 
                        <p><?= e(p3k\flash('auth_error_description')) ?></p>
                      </div>
                    <?php endif; ?>

                    <form method="POST" action="/login">

                        <div class="field">
                            <div class="control">
                                <input id="url" type="url" class="input is-large" name="url" value="<?= $_SESSION['auth_url'] ?? '' ?>" required autofocus placeholder="https://example.com">
                            </div>
                        </div>

                        <button type="submit" class="button is-primary">Log In</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    </section>

</body>
</html>
