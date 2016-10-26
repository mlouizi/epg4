<?php if($data['is_logged_in']) : ?>
<?php include TPL_DIR.'generic/header.tpl.php' ?>
<?php else : ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?= $data['sys_title'] ?></title>	
        <link rel="stylesheet" type="text/css" href="/css/main.css" >
        <link rel="stylesheet" type="text/css" href="/css/cupertino/jquery-ui-1.10.4.custom.css">	        
        <link rel="stylesheet" type="text/css" href="/css/responsive.css" />
       	<style>.login{ float:right; text-align:right; font-weight:bold; padding-top:11px; width:48%; color:#f5ab1b; font-family:Tahoma, Geneva, sans-serif; font-size:11px}</style>
		<script language="javascript" type="text/javascript" src="/js/jquery-1.10.2.js"></script>
        <script language="javascript" type="text/javascript" src="/js/jquery-ui-1.10.4.custom.js"></script>
        <script language="javascript" type="text/javascript" src="/js/jquery.easing.min.js"></script>
        <script language="javascript" type="text/javascript" src="/js/jquery.cookie.js"></script>
        <script language="javascript" type="text/javascript" src="/js/jsrender.min.js"></script>
        <script language="javascript" type="text/javascript">
			$(document).ready(function(){					
				$('#content').css('min-height', $(document).height()-120);
				$('.center_content_inner').css('min-height', $(document).height()-125);	
				$('.souscat a').click(function(){				
					_this = $(this) ;
					$('#userLang').val(_this.data('lang')) ;
					$('#lang_link').html(_this.html()) ;
					$('.souscat').animate({height: ['hide', 'swing'],opacity: 'hide'}, 500, 'linear');	
				}) ;
				$('#btn_cat, #lang_link').click(function(){ 
					$('.souscat').animate({height: ['toggle', 'swing'],opacity: 'toggle'}, 500, 'linear');	 
				}) ;									
			}) ;
		</script>
	</head>
	<body>
		<div id="eplugg">
        	<div id="header">
		    	<div class="center_content">
      				<div id="logo"><a href="/"><img src="/images/logo.png" alt="" /></a></div>
                    <div class="login">	
                        <form action="/login" id="signinform" method="POST">
                            <input type="text" class="<?= (isset($data['login_error']))? 'error' : '' ?>" name="login_email"  placeholder="<?= \Lang\email ?>"   /></span>
                            <input type="password" class="<?= (isset($data['login_error']))? 'error' : '' ?>" name="login_password"  autocomplete="off"  placeholder="<?= \Lang\password ?>" />                           
                            <input id="userLang" name="lang" type="hidden" value="<?= \Core\Config\Vars::$user_lang ?>" >
                            <button class="submit_header" type="submit" ></button> | 
                            <div class="cat_search">
                                <a id="lang_link"><span id="cat_label"><?= \Core\Config\Vars::$user_lang ?> </span></a>
                                <a id="btn_cat"><img src="images/arrow.png" /></a> 
                                <div class="souscat">
                                    <ul>
                                        <?php foreach(\Core\Config\Vars::$languages as $lang=>$tmp){ ?>
                                        <li><a href="/lang?c=<?= $lang ?>" data-lang='<?= $lang ?>'><?= $lang ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>							
                        </form>
                    </div>
                    <div class="clear"></div>    
                </div>
            </div>
<?php endif ?>
			<div id="content">
    			<div class="center_content_inner mentionlegal">                  	   
      				<div class="titre_plugg search"><?= \Lang\mentions ?></div>
        			




<h2>Déclaration des droits et responsabilités</h2>

<p>Cette Déclaration concerne les utilisateurs du support ePlugg.<br />
Elle régit les relations entre ePlugg et ses utilisateurs et les utilisateurs entre eux.<br />
Votre accès à ePlugg indique votre acceptation de cette Déclaration.</p>

<p>Confidentialité et partage de contenu :</p>
<p>Dans un souci de convivialité et d’amélioration de la qualité de nos services, les informations de votre compte sont susceptibles d’être combinées avec celles de tiers.</p>
<p>Vous êtes tenu responsable de vos contenus et de manière générale de vos interactions sur ePlugg.</p>
<p>Nous identifions et différencions 2 types de contenus : les informations vous concernant et les publications partagées.</p>
<p>Les informations propres à l’utilisateur vous appartiennent. En revanche, dès lors qu’il y a publication sur ePlugg, celui-çi ne vous appartient plus, au risque d’être relayé, commenté, liké, sans limite. Toutefois, libre à vous de paramétrer votre compte en réglementant l’accès à vos informations et en particulier à vos publications. Ces options vous assurent le contrôle sur la visibilité de votre compte.</p>

<h3>1. Inscription et sécurité des comptes</h3>

<p>A l’inscription, en tant que futur utilisateur de ePlugg, vous déclinerez votre vrai identité et donnerez de vraies informations vous concernant. Et vous vous engagerez à respecter les points suivant :</p>

<ul><li>a. Vous ne fournirez pas de fausses informations sur votre personne.
</li><li>b. Vous ne créerez qu’un seul profil personnel.
</li><li>c. Vous ne créerez pas de compte pour une autre personne sans son autorisation.
</li><li>d. Pour aucune raison, vous n’usurperez l’identité d’une personne.
</li><li>e. Un compte supprimer ne donnera droit à un nouveau compte, uniquement sur autorisation de ePlugg.
</li><li>f. L’utilisation de ePlugg est interdite aux mineurs de moins de 15 ans.
</li><li>g. Vos coordonnées et informations personnelles seront de manière régulière actualisés et mis à jour.
</li><li>h. Vous ne laisserez personne d’autres que vous utilisez tacitement votre compte, en quel cas vous en assumerez les publications.
</li><li>i. Au bout de plusieurs signalements et abus, nous nous réservons le droit de sanctionner un utilisateur ePlugg, à travers son compte. Cette sanction peut aller jusqu’à la suppression d’un compte ayant reçu au préalable plusieurs avertissement.</li></ul>

<p>Si vous entrez des données ou informations que nous jugeons inappropriées ou erronées, nous nous réservons le droit de les retirer et cela sans préavis.</p>

<h3>2. Règle de sécurité et utilisation</h3>

<p>Nos ingénieurs mettent un point d’honneur à sécuriser l’utilisation du logiciel ePlugg, dès inscription.<br />
Afin de tendre vers une sécurité absolue et optimale, nous sollicitons l’implication de chaque utilisateur dans la bienveillance et la vigilance de la gestion de son compte.<br />
Ainsi, sous peine de poursuite, vous vous soumettrez aux obligations suivantes :</p>

<ul><li>a. Vous n’utiliserez pas ePlugg dans un but d’activité illégale ou illicite.
</li><li>b. Vous ne téléchargerez pas de virus et n’envisagerez aucun acte de piratage
</li><li>c. Vous n’agirez pas d’une manière qui pourrait nuire au bon fonctionnement du logiciel ePlugg.
</li><li>d. Vous n’accéderez et n’utiliserez pas à un compte ne vous appartenant pas, sans autorisation au préalable du concerné.
</li><li>e. Vous n’utiliserez pas l’outil de communication ePlugg comme un moyen d’intimidation et de harcèlement. Et de manière générale, ne porterez aucunement atteinte à autrui.
</li><li>f. Vous ne publierez pas de contenus : à caractère érotique, pornographique ou violent.
</li><li>g. Il vous est interdit à travers ePlugg de tenir des propos, discriminatoires, racistes, menaçants et incitants à la haine et la violence.
</li><li>h. Aucune insertion à vocation promotionnelle, de produits réglementés ou soumis à une autorisation spécifique, n’est autorisée.
</li><li>i. Est interdit, toute publication contenant des images ou propos, choquant et pouvant heurter la sensibilité de chacun.
</li><li>j. Nous condamnons tout outrage aux bonnes mœurs et aux limites morales raisonnablement connues. Les responsables s’exposent à des sanctions et encourent des poursuites judiciaires.</li></ul>
<p>Vous veillerez scrupuleusement et dans les moindres détails au respect de ce chapitre et dénoncerez toute infraction et pratique douteuse, en la signalant.</p>

<h3>3. Protection des droits d’autrui</h3>

<p>Dans le respect des droits d’autrui, il est du devoir de chaque utilisateur de s’assurer des points suivants :</p>

<ul><li>a. Vous n’utiliserez pas de contenu original pouvant enfreindre les droits d’autrui.
</li><li>b. Vous n’utiliserez pas de contenu susceptible d’enfreindre la loi.
</li><li>c. Nous pouvons retirer librement et sans préavis, tout contenu ou information que vous publierez sur ePlugg si nous jugeons que celle-ci est en infraction immédiate avec cette Déclaration.
</li><li>d. Si, sans justification, nous venions à retirer un contenu précis en raison d'une infraction avérée, vous avez le moyen de faire appel.
</li><li>e. Si vous enfreignez les droits afférant à cette déclaration à plusieurs reprises, nous pouvons aller jusqu’à supprimer votre compte.
</li><li>f. ePlugg est une marque déposée. Il vous est formellement interdit d’utiliser toute marque similaire associée à ePlugg et de manière général tout signe faisant allusion ou pouvant prêter à confusion, de manière directe comme indirecte à ePlugg (Sauf dérogation, sur autorisation écrite émanant de ePlugg).
</li><li>g. Il est formellement interdit de reproduire ou d’essayer de reproduire l’outil ePlugg et cela jusque dans sa moindre application.
</li><li>h. Vous ne publierez pas d’informations ou de documents personnels concernant une personne que vous.
</li><li>i. Dès lors qu’un contenu rendu public est partagé, il peut être partagé sans limite</li></ul>

<h3>4. Responsabilité</h3>

<ol><li>Vous êtes responsable de votre application et de son contenu, et de la façon dont vous utilisez votre compte ePlugg.
</li><li>Vous devez notamment vous assurer que votre compte et l'utilisation qui en est faite respecte les règles issues du code de bonne conduite de ePlugg qui s’apparente à cette présente Déclaration.
</li><li>Vous utiliserez, afficherez, partagerez ou transférerez aucune donnée à caractère douteux, pouvant prêté à confusion et/ou engendrer des interprétation nuisibles et ds dommages à autrui.
</li><li>Vous n’utiliserez pas l’outil ePlugg avec mauvaise intention ou mauvaise foi, en affichant, partageant et transférant des publications de manière contraire au code de bonne conduite de ePlugg, en les détournant de leur sujet.
</li><li>Vous ne commercialiserez en aucun cas les informations d’utilisateurs ou de tiers recueillies sur ePlugg.
</li><li>En cas d’acquisition d’une entreprise par un tiers, la nouvelle direction peut continuer d’utiliser le compte lié à cette entreprise.
</li><li>Nous pouvons vous demander de supprimer une donné ou un contenu si nous jugeons que celui-ci est utilisé d’une façon contraire à ce dont les utilisateurs et programmeurs de ePlugg sont en droit d’attendre.
</li><li>Nous pouvons limiter votre accès aux fonctionnalités offertes par l’outil ePlugg, si des abus avérés et signalements répétés ont été relevé.
</li><li>Nous nous octroyons le droit de vérifier la véracité de vos données et contenus afin d’assurer la fiabilité des informations issues de ePlugg.</li></ol>

<h3>5.  Droit de propriété</h3>

<p>Norkk.com est la propriété de la société « ePlugg » et celle-ci se réserve le droit :</p>

<ol><li>D’apporter, sans limite et sans le justifier, tout type de modification au logiciel.
</li><li>D’afficher de manière discrète, subtile et harmonieuse, sans vous consultez, tout type de contenu intelligent, sur vos pages apparentes, tels que des publicités.
</li><li>D’analyser vos données, toujours de manière anonyme, cela à des fins d’optimisation technique et de pertinence commerciale.</li></ol>

<p><strong>Notification :</strong> ePlugg en tant que produit et image, tout comme ses produits dérivés, sont déposés à
l’internationale et chacune des ses applications est brevetée universellement.</p>

<h3>6. Garantie de l’anonymat et profiling</h3>

<p>La gratuité du logiciel ePlugg, dès l’inscription et durant toute son utilisation est compensée par des publicités ciblées proposées aux annonceurs. Une base de données riche et précise, constituant pour les publicitaires et annonceurs, un argument de valeur à offrir à leur client.<br />
Il s’agit là de procédés et méthodes publicitaires qui ont fait leur preuve et dont la pertinence et l’efficacité procure un avantage concurrentiel indéniable.<br />
Pour ce faire, conformément aux limites fixées et indexées à la présente déclaration, vous accepterez les conditions suivantes :</p>

<ul><li>a. Vous nous donnez la permission d'utiliser de manière anonyme votre historique comportemental sur le logiciel ePlugg.
</li><li>b. Votre nom, votre photo, votre adresse, coordonnées et de manière générale aucune marque de votre identité ne sera communiquée et associée directement à une tiers partie.
</li><li>c. En aucun cas et d’aucune manière que ca soit nous ne communiquerons vos contenus et informations personnelles en vous identifiant nominativement.</li></ul>

<p><strong>Notification :</strong> Vous aurez toujours la possibilité d’utiliser vos paramètres de confidentialité pour limiter la façon dont vos informations personnelles peuvent être assimilés à du contenu que nous diffusons, de type commercial ou sponsorisé.</p>

<h3>7. Réglementation spécifique appliquée aux annonceurs</h3>

<p>Vous pouvez cibler votre public en achetant des espaces publicitaire sur ePlugg. A cet effet, vous  pouvez passer commande via notre portail publicitaire en ligne. Deux options s’offrent à vous :</p>

<ul><li>Soit vous nous communiquez le type de publicité que vous souhaitez diffuser et le budget dont vous disposez (nos spécialistes en marketing, vous feront la meilleure offre compte tenu de vos paramètres et de vos exigences).
</li><li>Soit vous faites vous-même votre choix sur le portail mis à disposition dans ce but.</li></ul>

<p>Si nous sommes amenés à collaborer dans le cadre de diffusion publicitaire, vous vous alignerez aux règles suivantes :</p>

<ul><li>a. Vos publicités respecteront les fondamentaux publicitaires, communs.
</li><li>b. Dans l’intérêt des 2 parties, il reviendra toujours à ePlugg, en dernier lieu, le choix de la taille, de l’emplacement et de la position de vos publicités.
</li><li>c. Nous ne garantissons pas la pertinence de vos publicités sur nos utilisateurs.
</li><li>d. Nous ne pouvons pas contrôler la façon dont la communauté ePlugg interagie avec vos publicités.
</li><li>e. Nous ne seront pas tenu responsable en cas de piratage, fraude au clic et tout autres agissements pouvant affecter le bon fonctionnement de nos programmes publicitaires et les coûts d'exploitation des publicités qui en découlent. Cependant nous disposons de systèmes perfectionnés pour détecter et filtrer toute activité jugée suspecte.
</li><li>f. Vous ne publierez pas de communiqué de presse ou de déclaration publique évoquant votre relation avec ePlugg, à des fins de marketing, de promotion ou autres.
</li><li>g. ePlugg est libre, en le justifiant, de refuser ou retirer toute publicité.
</li><li>h. Nous nous dégageons de toute responsabilité quant aux publicités mensongères et seul le commanditaire en assumera les conséquences.</li></ul>

<p><strong>Notification :</strong> La publicité ne constituant pas la principale vocation de ePlugg, il vous est interdit d’utiliser ce support comme un portail publicitaire à des fins marketing. Ce volet doit passer par ePlugg, il est géré directement et uniquement par nos services et cela de manière intégré et centralisé.</p>

<p>Pour ce qui est des publications pour le compte d’un tiers, vous devrez nous fournir la preuve écrite que vous en avez l’autorisation. Cette permission prendra la forme d’une procuration dans laquelle :</p>
<ul><li>i. Vous nous garantissez que vous êtes formellement et légalement habilité à interagir pour le compte de votre commanditaire, en nous présentant les documents faisant foi.
</li><li>ii. Vous acceptez le fait d’assumer les responsabilités inhérentes, relatives au code de réglementation publicitaire ci-dessus.</li></ul>

<h3>8. Amendements</h3>

<p>Pour des raisons pratiques, nous ne pouvons apporter des modifications à chaque déclaration relevée  
                comme inexacte ou mensongère. Vous recevrez alors un préavis vous invitant à corriger votre 
                contenu, au quel cas, ePlugg se réserve le droit de supprimer celui-ci. Cependant, ePlugg a le droit de 
                supprimer directement et sans préavis, des articles en contradiction avec sa politique et ses valeurs.</p> 
                <p>Au bout de plusieurs suppression de contenu et de suspension de compte, vous serez identifié et 
                catégoriser comme utilisateur indésirable, avec les conséquences que cela implique.<br />
                ePlugg est une société indépendante et nous sommes seuls juges et arbitres de nos décisions.</p>

<h3>9. Résiliation</h3>

<p>Vous êtes libre à tout moment et cela sans préavis de suspendre votre activité sur ePlugg. Il vous suffit pour cela de supprimer votre compte de manière définitive ou de le désactiver temporairement.<br />
Dans ce cas, la réglementation en vigueur de ePlugg, à travers cette déclaration deviendra caduque, et les conditions régissant les relations entre ePlugg et l’utilisateur, ne vous concerneront plus.</p>

<h3>10. Litiges</h3>

<p>Dès lors que vous acceptez la présente déclaration, aucune plainte ne pourra etre porter à l’encontre de ePlugg.
ePlugg est un logiciel, regroupant les compétences adéquates et dotés d’une expertise métier, qui assurera de bonne foi et de la meilleure volonté qui soit, le bon-fonctionnement et la sécurité de votre compte sur son réseau, dans la limite de cette déclaration.</p>

			
                    
                    
                    
                    
                    
                    <div class="clear"></div>
                </div>
                <div class="clear25"></div>
            </div>
            <?php include TPL_DIR.'generic/footer.tpl.php' ?>