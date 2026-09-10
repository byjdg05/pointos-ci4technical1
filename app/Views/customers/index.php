<?= view('templates/header', ['title' => $title]) ?>

<section class="container page-section">
    <div class="page-heading">
        <span class="eyebrow">Accounts</span>
        <h1>Customer Accounts</h1>
        <p class="page-lead">Registered customers currently on file, loaded from a temporary static data source.</p>
    </div>

    <div class="table-card">
        <table class="data-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($customers)): ?>
                    <tr>
                        <td colspan="4" class="empty-row">No customer records found.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($customers as $index => $customer): ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= esc($customer['full_name']) ?></td>
                            <td><?= esc($customer['email']) ?></td>
                            <td><?= esc($customer['phone']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <p class="table-note"><?= count($customers) ?> customer record(s) on file.</p>
</section>

<?= view('templates/footer') ?>
