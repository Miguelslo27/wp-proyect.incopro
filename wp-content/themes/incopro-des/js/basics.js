console.log ('Basics scripts loaded');

var $ = function ($selector, type, pos) {
	var r = document.querySelectorAll ($selector);

	switch (type) {
		case 'Array':
			var rArray = [];
			for (var i = 0, n; n = r[i]; ++i) rArray.push (n);
			r = rArray;
		break;
	}

	if (pos || pos === 0) {
		switch (pos) {
			default:
				r = r[pos];
			case 'first':
				r = r[0];
			break;
			case 'last':
				r = r[r.length -1];
			break;
		}
	}

	return r;
};

// When document is ready
window.onload = function (event) {
	// Get all Stream Players
	var $streamPlayers = $ ('.stream-player', 'Array');
	// For Each player
	$streamPlayers.forEach (function (node, index) {
		// Debug
		console.log ("Node SreamerPlayer -> ", node);
		console.log ("Index SreamerPlayer -> ", index);

		node.streamer = new StreamerPlyr (node);
		console.log ("Streamer -> ", node.streamer);
	});

	var $menuPagesAction = $ ('#header .nav-bar a.icon.ion-navicon', null, 'first');
	var $menuUserAction = $ ('#header .nav-bar a.icon.ion-log-in', null, 'first');
	var $menuCategories = $ ('#header .categories-nav a.categories-menu', null, 'first');

	$menuPagesAction.onclick = function (event) {
		var $menuPages = $ ('#header .nav-bar .pages', null, 'first');
		$menuPages.style.display = $menuPages.style.display == 'block' ? 'none' : 'block';
	}

	$menuUserAction.onclick = function (event) {
		var $menuUser = $ ('#header .nav-bar .user-cmds.responsive.res480', null, 'first');
		$menuUser.style.display = $menuUser.style.display == 'block' ? 'none' : 'block';
	}

	$menuCategories.onclick = function (event) {
		var $menuCategories = $ ('#header .categories-nav .categories', null, 'first');
		var $downIcon = $ ('#header .categories-nav a.categories-menu .icon.ion-ios-arrow-down', null, 'first');
		var $upIcon = $ ('#header .categories-nav a.categories-menu .icon.ion-ios-arrow-up', null, 'first');

		$downIcon.style.display = $menuCategories.style.display == 'block' ? 'inline-block' : 'none';
		$upIcon.style.display = $menuCategories.style.display == 'block' ? 'none' : 'inline-block';
		$menuCategories.style.display = $menuCategories.style.display == 'block' ? 'none' : 'block';
	}

}