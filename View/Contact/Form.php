
<h1>Résultats</h1>
<?php if (!empty($this->getContent())) :?>
	<?php foreach ($this->getContent() as $data) :?>
		<p><?= $data ?></p>
	<?php endforeach; ?>
<?php endif; ?>
<br>
<a href="/contact" class="btn waves-effect"><- Retour</a>