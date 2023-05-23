
<div class="container">
<?php foreach ($posts as $posts_item): ?>

		<h3><i class="fa fa-star-o"></i> <?php echo $posts_item['title']; ?></h3>
		<div class="main">
			<?php echo $posts_item['text']; ?>
		</div>
		<p><a href="<?php echo site_url('forum/posts/'.$posts_item['slug']); ?>">Yazıyı görüntüle</a></p>
		<hr>

<?php endforeach; ?>
</div>
