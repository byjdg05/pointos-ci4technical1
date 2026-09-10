<?= view('templates/header', ['title' => $title]) ?>

<section class="container page-section">
    <div class="page-heading">
        <span class="eyebrow">About this project</span>
        <h1>About PointOS</h1>
    </div>

    <div class="about-grid">
        <div class="about-copy">
            <p>
                PointOS is the first version of a basic Point-of-Sale (POS) system,
                developed as a laboratory activity for Web and Mobile Development.
                It is built on the <strong>CodeIgniter 4</strong> PHP framework and
                currently ships with four pages: a landing page, this about page,
                a Customer Accounts page, and a User Accounts page.
            </p>
            <p>
                At this stage, no database is connected. The Customer Accounts and
                User Accounts pages are powered by static PHP arrays acting as a
                temporary data source, which are looped through with a
                <code>foreach</code> statement in their respective views. This keeps
                the focus on routing, controllers, and views before models and a
                database are introduced in a later version.
            </p>
        </div>

        <aside class="about-card">
            <h3>Project details</h3>
            <ul class="about-list">
                <li><span>Framework</span><strong>CodeIgniter 4</strong></li>
                <li><span>Data source</span><strong>Static PHP arrays</strong></li>
                <li><span>Pages</span><strong>4</strong></li>
                <li><span>Status</span><strong>v1.0 &mdash; In progress</strong></li>
            </ul>
        </aside>
    </div>
</section>

<?= view('templates/footer') ?>
