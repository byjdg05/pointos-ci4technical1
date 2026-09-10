<?= view('templates/header', ['title' => $title]) ?>

<section class="hero">
    <div class="container hero-inner">
        <span class="eyebrow">Laboratory Activity &middot; v1.0</span>
        <h1>A simple, reliable Point-of-Sale foundation.</h1>
        <p class="hero-lead">
            PointOS is the first version of a basic POS system built with CodeIgniter 4.
            This release lays the groundwork for managing customer and user accounts
            before a database is introduced.
        </p>
        <div class="hero-actions">
            <a href="<?= site_url('customers') ?>" class="btn btn-primary">View Customer Accounts</a>
            <a href="<?= site_url('users') ?>" class="btn btn-secondary">View User Accounts</a>
        </div>
    </div>
</section>

<section class="container features">
    <div class="feature-card">
        <div class="feature-icon">01</div>
        <h3>Customer Accounts</h3>
        <p>List and review registered customers &mdash; full name, email, and phone number &mdash; at a glance.</p>
    </div>
    <div class="feature-card">
        <div class="feature-icon">02</div>
        <h3>User Accounts</h3>
        <p>Keep track of staff accounts and their roles, from administrators to cashiers.</p>
    </div>
    <div class="feature-card">
        <div class="feature-icon">03</div>
        <h3>Built to Grow</h3>
        <p>Static arrays today, a database tomorrow &mdash; the structure is ready for that next step.</p>
    </div>
</section>

<?= view('templates/footer') ?>
