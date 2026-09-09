<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/app.css'); ?>">
    <title>Sign in | LavaLust</title>
</head>
<body>
<main class="auth-shell">
    <section class="auth-rail">
        <div class="brand"><span class="brand-mark">/</span> LavaLust</div>
        <div class="auth-rail-content">
            <p class="kicker">Product desk</p>
            <h1>Make your inventory feel lighter.</h1>
            <p class="auth-rail-copy">A focused home for the products, details, and decisions that keep your work moving.</p>
        </div>
        <div class="rail-note">Quiet tools for busy work</div>
    </section>
    <section class="auth-panel">
        <div class="auth-form">
            <p class="kicker">Welcome back</p>
            <h2>Sign in</h2>
            <p class="auth-subtitle">Continue to your product workspace.</p>

            <?php if (!empty($denied)): ?><div class="notice info">Please sign in to continue.</div><?php endif; ?>
            <?php if (!empty($registered)): ?><div class="notice success">Account created. You can now sign in.</div><?php endif; ?>
            <?php if (!empty($error)): ?><div class="notice error"><?= htmlspecialchars($error); ?></div><?php endif; ?>

            <form method="post" action="<?= base_url('login'); ?>">
                <div class="field">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" autocomplete="username" required autofocus>
                </div>
                <div class="field">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" autocomplete="current-password" required>
                </div>
                <button class="button block" type="submit">Enter workspace</button>
            </form>

            <footer>New to LavaLust? <a href="<?= base_url('register'); ?>">Create an account</a></footer>
        </div>
    </section>
</main>
</body>
</html>
