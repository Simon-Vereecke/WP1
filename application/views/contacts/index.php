
<h2><?php echo $title; ?></h2>

<?php foreach ($contacts as $contact): ?>

    <h3><?php echo $contact['name']; ?></h3>
    <div class="main">
        <?php echo $contact['email']; ?>
    </div>
<!--    <p><a href="--><?php //echo 'news/'.$news_item['slug']; ?><!--">View article</a></p>-->

<?php endforeach; ?>
<p><a href="about">About</a></p>
