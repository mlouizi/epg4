<?php include TPL_DIR.'generic/header.tpl.php' ?>
<script type="text/javascript">/*<![CDATA[*/
$(function(){
    var div = $('div.sc_menu'), ul = $('ul.sc_menu'), ulPadding = 15;
    var divWidth = div.width();
    div.css({overflow: 'hidden'});
    var lastLi = ul.find('li:last-child');
    div.mousemove(function(e){
        var ulWidth = lastLi[0].offsetLeft + lastLi.outerWidth() + ulPadding;   
        var left = (e.pageX - div.offset().left) * (ulWidth-divWidth) / divWidth;
        div.scrollLeft(left);
    });
});
/*]]>*/
</script>
<div id="content">
    <div class="center_content_inner">
      	<div id="left_content"><?php include TPL_DIR.'generic/currentUser.tpl.php' ?></div>
        <div id="body_content">
			<div class="titre_plugg"><?= \Lang\annuaire ?></div>
            <div class="filtre_alphabet sc_menu">
            	<ul class="sc_menu">
        			<li><a class="<?= (!$data['letter'])? 'select' : '' ?>" href="/activity"><?= \Lang\all ?></a></li>
                    <?php for ($lettre = ord('A'); $lettre <= ord('Z'); $lettre++):  ?>
            		<li><a class="setLetter <?= (isset($data['letter']) && $data['letter']==chr($lettre))? "select" : '' ?>" href='/activity?letter=<?= chr($lettre) ?>' ><?= chr($lettre) ?></a></li>
            		<?php endfor  ?>
            	</ul>
        	</div>
        	<div id="content_infinity">
		       	<?php foreach($data['sql'] as $row) : ?> 
                <div class="item_infinity">
					<div class="bloc_user">
                        <div class="des_connais"><strong><a href="/directory_search?label=<?= $row['activity'] ?>"><?= $row['activity'] ?></a></strong></div>                    
                        <div class="ferme_connais"><a href="/directory_search?label=<?= $row['activity'] ?>" title="<?= $row['total'].' '.(($row['total']==1)? \Lang\contact : \Lang\contacts) ?>" class="nb_vue_"><span><?=  $row['total'] ?></span></a></div>                    
                        <div class="clear5"></div>
                    </div>                    
                </div>
                <?php endforeach ?>                 
                <a id="next" href="?page=2"></a>           
        	</div>             
      	</div>
      	<div id="right_content"><?php include TPL_DIR.'generic/suggestion.tpl.php' ?></div>
	</div>
    <div class="clear25"></div>
</div>
<script src="/js/jquery.infinitescroll.js"></script>
<script language="javascript" type="text/javascript">
$('#content_infinity').infinitescroll(
	{
		navSelector:"#next:last",
		nextSelector:"a#next:last",
		itemSelector:"#content_infinity div.item_infinity",
		dataType:'html',
		maxPage:<?= $data['numberOfPages'] ?>,
		path:function(index) { return "?page=" + index + '<?= (($data['keys'])? '&keys='.$data['keys'] : '' ).(($data['letter'])? '&letter='.$data['letter'] : '' ) ?>' ; } 
	}, 
	function(newElements, data, url){	
		intPretty() ;	
	}
);
</script>
<?php include TPL_DIR.'generic/footer.tpl.php' ?>