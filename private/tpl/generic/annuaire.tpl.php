<div id="activity_bloc"><div class="titre_plugg"><?= \Lang\annuaire ?></div>
<div class="liste_annuaires">
	<ul>
    	<?php foreach ($data['directories'] as $item) : ?>
   		<li><a href="/directory_search?label=<?= $item['activity'] ?>" title="<?= $item['total'].' '.(($item['total']==1)? \Lang\contact : \Lang\contacts) ?>"><?= $item['activity'] ?> <span><?= $item['total'] ?></span></a></li>
        <?php endforeach ?>
 	</ul>
    <a href="/activity" class="voire_to"><?= \Lang\see_all ?></a>
</div></div>