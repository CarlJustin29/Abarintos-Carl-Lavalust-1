<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

$is_edit = ($mode === 'edit');
$form_action = $is_edit ? base_url('products/edit/' . $product['id']) : base_url('products/create');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/app.css'); ?>">
    <title><?= $is_edit ? 'Edit product' : 'Add product'; ?> | LavaLust</title>
</head>
<body>
<main class="app-shell">
    <div class="form-layout">
        <a class="back-link" href="<?= base_url('products'); ?>">&larr; Back to products</a>
        <section class="form-panel">
            <div class="app-brand">LavaLust / Product desk</div>
            <h1><?= $is_edit ? 'Edit product' : 'Add product'; ?></h1>
            <p class="intro"><?= $is_edit ? 'Refine the details so this product stays easy to understand.' : 'Capture the essentials and keep your inventory up to date.'; ?></p>

            <?php if (!empty($error)): ?><div class="notice error"><?= htmlspecialchars($error); ?></div><?php endif; ?>
            <?php if (!empty($success)): ?><div class="notice success"><?= htmlspecialchars($success); ?></div><?php endif; ?>

            <form method="post" action="<?= $form_action; ?>">
                <div class="form-grid">
                    <div class="field">
                        <label for="product_name">Product name</label>
                        <input type="text" id="product_name" name="product_name" maxlength="100" required value="<?= htmlspecialchars($product['product_name'] ?? ''); ?>" autofocus>
                    </div>
                    <div class="field">
                        <label for="description">Description</label>
                        <textarea id="description" name="description"><?= htmlspecialchars($product['description'] ?? ''); ?></textarea>
                    </div>
                    <div class="field">
                        <label for="price">Price</label>
                        <input type="number" id="price" name="price" step="0.01" min="0" required value="<?= htmlspecialchars($product['price'] ?? ''); ?>">
                    </div>
                    <div class="field">
                        <label for="quantity">Quantity</label>
                        <input type="number" id="quantity" name="quantity" step="1" min="0" required value="<?= htmlspecialchars($product['quantity'] ?? ''); ?>">
                    </div>
                </div>
                <div class="form-actions">
                    <a class="button ghost" href="<?= base_url('products'); ?>">Cancel</a>
                    <button class="button" type="submit"><?= $is_edit ? 'Save changes' : 'Add product'; ?></button>
                </div>
            </form>
        </section>
    </div>
</main>
</body>
</html>
