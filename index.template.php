<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title>Pokeduel Dex</title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//play.yugiohduel.net/style/font-awesome.css" />
	<link rel="stylesheet" href="/theme/panels.css?" />
	<link rel="stylesheet" href="/theme/main.css?" />
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="//play.yugiohduel.net/style/utilichart.css?" />
	<link rel="stylesheet" href="/theme/pokedex.css?" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first" href="//play.yugiohduel.net/"><img src="/images/logo.png" alt="Yugioh Duel" width="146" height="44" /> Home</a></li>
				<li><a class="button cur" href="/">Pok&eacute;dex</a></li>
				<li><a class="button" href="//replay.yugiohduel.net/">Replay</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.yugiohduel.net/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
	<div class="pfx-panel"><div class="pfx-body">
<?php if ($_SERVER['REQUEST_URI'][0] === '/' && !ctype_alnum($_SERVER['REQUEST_URI'][1])) { ?>
		<form class="pokedex">
			<h1>
				<a href="/">Pok&eacute;dex</a>
			</h1>
			<ul class="tabbar centered" style="margin-bottom: 18px"><li><button class="button nav-first cur" value="">Search</button></li><li><button class="button" value="pokemon/">Pokémon</button></li><li><button class="button nav-last" value="moves/">Moves</button></li></ul>
			<div class="searchboxwrapper">
				<input class="textbox searchbox" type="search" name="q" value="<?php echo @$_REQUEST['q'] ?>" autocomplete="off" autofocus placeholder="Search Pok&eacute;mon, moves, abilities, items, types, or more" />
			</div>
			<noscript><p>
				<strong>Requires JavaScript!</strong>
			</p></noscript>
			<p class="buttonbar">
				<button type="submit" class="button"><strong>Pok&eacute;dex Search</strong></button> <button onclick="alert(['That\'s pretty cool.','Your mom\'s feeling lucky.','I see.','If you feel lucky for more than four hours, perhaps you should see a doctor.'][Math.floor(Math.random()*4)]); return false" class="button">I'm Feeling Lucky</button>
			</p>
		</form>
		<div class="results">
		</div>
<?php } else { ?>
		<noscript><p>
			<strong>Requires JavaScript!</strong>
		</p></noscript>
		<p>
			Loading...
		</p>
<?php } ?>
	</div></div>
	<script src="/js/lib/jquery-1.12.4.min.js"></script>
	<script src="/js/lib/lodash.min.js"></script>
	<script src="/js/lib/backbone-min.js"></script>
	<script src="/js/panels.js?"></script>

	<script src="//play.yugiohduel.net/config/config.js?"></script>
	<script src="//play.yugiohduel.net/js/battledata.js?"></script>
	<script src="//play.yugiohduel.net/data/search-index.js?"></script>
	<script src="//play.yugiohduel.net/data/pokedex.js?"></script>
	<script src="//play.yugiohduel.net/data/teambuilder-tables.js?"></script>
	<script src="//play.yugiohduel.net/data/learnsets.js?"></script>
	<script src="//play.yugiohduel.net/data/moves.js?"></script>
	<script src="//play.yugiohduel.net/data/abilities.js?"></script>
	<script src="//play.yugiohduel.net/data/items.js?"></script>
	<script src="//play.yugiohduel.net/data/formats-data.js?"></script>
	<script src="//play.yugiohduel.net/data/typechart.js?"></script>
	<script src="//play.yugiohduel.net/data/aliases.js?"></script>
	<script src="//play.yugiohduel.net/js/battle-dex-search.js?"></script>
	<script src="//play.yugiohduel.net/js/search.js?"></script>
	<script src="/js/pokedex.js?"></script>
	<script src="/js/pokedex-pokemon.js?"></script>
	<script src="/js/pokedex-moves.js?"></script>
	<script src="/js/pokedex-search.js?"></script>
	<script src="/js/router.js?"></script>

</body></html>
