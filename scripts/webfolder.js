function makeWebFolders() {
	var links = document.getElementsByTagName("a");
	for (var i = 0; i < links.length; i++) {
		if (links[i].className == "webfolder") {
			links[i].addBehavior("#default#anchorClick");
			links[i].setAttribute("folder", document.location);
			links[i].setAttribute("href", document.location);
		}
	}
}
myAddEvent(window, "load", makeWebFolders);