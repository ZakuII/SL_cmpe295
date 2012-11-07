<?php defined('SYSPATH') or die('No direct script access.'); ?>
 
<h1>Test Home Page</h1>
 
<?php echo HTML::anchor("article2/new", "New Article"); ?>
 
<?php foreach ($articles as $article) : ?>
<div style="background-color: #dddddd; margin: 0px 2px 0px 2px">
    <h2><?php echo $article->name; ?></h2>
    <pre><?php echo $article->content; ?></pre>
    <?php //echo HTML::anchor("article/edit/".$article->id, "Edit"); ?>
    <?php //echo HTML::anchor("article/delete/".$article->id, "Delete"); ?>
</div>
<?php endforeach; ?>