<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

$is_admin = (($_SESSION['role'] ?? null) === 'admin');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/app.css'); ?>">
    <title>Products | LavaLust</title>
</head>
<body>
<main class="app-shell">
    <header class="app-header">
        <div>
            <div class="app-brand">LavaLust / Product desk</div>
            <h1>Products</h1>
            <p>A clear view of what is in motion, what is available, and what needs your attention.</p>
        </div>
        <div class="header-actions">
            <?php if ($is_admin): ?><a class="button" href="<?= base_url('products/create'); ?>">+ Add product</a><?php endif; ?>
            <a class="button ghost" href="<?= base_url('logout'); ?>">Sign out</a>
        </div>
    </header>

    <div class="user-strip">
        <span>Signed in as <strong><?= htmlspecialchars($_SESSION['username'] ?? ''); ?></strong><?php if (!$is_admin): ?><span class="role-badge">View only</span><?php endif; ?></span>
        <span><?= count($products ?? []); ?> <?= count($products ?? []) === 1 ? 'product' : 'products'; ?> in workspace</span>
    </div>

    <?php if (!empty($success)): ?><div class="notice success"><?= htmlspecialchars($success); ?></div><?php endif; ?>
    <?php if (!empty($error)): ?><div class="notice error"><?= htmlspecialchars($error); ?></div><?php endif; ?>

    <section class="table-panel" aria-label="Product inventory">
        <div class="table-scroll">
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Created</th>
                    <?php if ($is_admin): ?><th>Manage</th><?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($products)): ?>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td><span class="product-name"><?= htmlspecialchars($product['product_name']); ?></span><span class="product-id">#<?= htmlspecialchars($product['id']); ?></span></td>
                            <td class="description"><?= htmlspecialchars($product['description'] ?? 'No description'); ?></td>
                            <td class="numeric price">₱<?= number_format((float) $product['price'], 2); ?></td>
                            <td class="numeric"><?= htmlspecialchars($product['quantity']); ?></td>
                            <td><?= htmlspecialchars($product['created_at'] ?? ''); ?></td>
                            <?php if ($is_admin): ?>
                            <td>
                                <div class="table-actions">
                                    <a class="button ghost" href="<?= base_url('products/edit/' . $product['id']); ?>">Edit</a>
                                    <form method="post" action="<?= base_url('products/delete/' . $product['id']); ?>" onsubmit="return confirm('Delete this product?');">
                                        <button type="submit" class="button danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="<?= $is_admin ? 6 : 5; ?>"><div class="empty-state"><strong>No products yet.</strong><p><?= $is_admin ? 'Your first product can start here.' : 'Products will appear here when they are added.'; ?></p><?php if ($is_admin): ?><a class="button" href="<?= base_url('products/create'); ?>">Add your first product</a><?php endif; ?></div></td></tr>
                <?php endif; ?>
            </tbody>
        </table>
        </div>
    </section>
</main>
</body>
</html>
