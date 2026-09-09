<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/app.css'); ?>">
    <title>Create account | LavaLust</title>
</head>
<body>
<main class="auth-shell">
    <section class="auth-rail">
        <div class="brand"><span class="brand-mark">/</span> LavaLust</div>
        <div class="auth-rail-content">
            <p class="kicker">Start with clarity</p>
            <h1>Give your products a proper home.</h1>
            <p class="auth-rail-copy">Set up your workspace once, then keep every product easy to find and easier to manage.</p>
        </div>
        <div class="rail-note">Built for a clear next step</div>
    </section>
    <section class="auth-panel">
        <div class="auth-form">
            <p class="kicker">Your workspace</p>
            <h2>Create account</h2>
            <p class="auth-subtitle">A few details and you are ready to begin.</p>

            <?php if (!empty($error)): ?><div class="notice error"><?= htmlspecialchars($error); ?></div><?php endif; ?>

            <form method="post" action="<?= base_url('register'); ?>">
                <div class="field">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" autocomplete="username" required autofocus>
                </div>
                <div class="field">
                    <label for="email">Email address</label>
                    <input type="email" id="email" name="email" autocomplete="email" required>
                </div>
                <div class="field">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" autocomplete="new-password" minlength="6" required>
                </div>
                <button class="button block" type="submit">Create workspace</button>
            </form>

            <footer>Already have an account? <a href="<?= base_url('login'); ?>">Sign in</a></footer>
        </div>
    </section>
</main>
</body>
</html>
