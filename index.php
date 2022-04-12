<?php include('db.php')?>

<div class="grid">
    <section class="header">
        <?php
        include('includes/header.php');
        ?>
    </section>

    <main class="flex-container main">
        <?php include('components/create_users.php') ?>
        <?php include('components/list_of_users.php') ?>
    </main>

    <section class="footer">
        <?php
        include('includes/footer.php');
        ?>
    </section>

</div>