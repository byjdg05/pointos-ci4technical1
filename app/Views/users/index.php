<?php
$title = $title ?? 'User Accounts';
$users = $users ?? [];
?>
<?= view('templates/header', ['title' => $title]) ?>

<section class="container page-section">
    <div class="page-heading">
        <span class="eyebrow">Accounts</span>
        <h1>User Accounts</h1>
        <p class="page-lead">Staff accounts and their assigned roles, loaded from a temporary static data source.</p>
    </div>

    <div class="table-card">
        <table class="data-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($users)): ?>
                    <tr>
                        <td colspan="4" class="empty-row">No user records found.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($users as $index => $user): ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= esc($user['username']) ?></td>
                            <td><?= esc($user['full_name']) ?></td>
                            <td><span class="role-badge"><?= esc($user['role']) ?></span></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <p class="table-note"><?= count($users) ?> user record(s) on file.</p>
</section>

<?= view('templates/footer') ?>
