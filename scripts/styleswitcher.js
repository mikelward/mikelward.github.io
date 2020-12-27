/*
 * vim: set noet ts=4:
 * styleswitcher - JavaScript functions to handle persistent stylesheets
 * http://www.alistapart.com/articles/alternate/
 * (c) 2001-2004 Paul Sowden and others
 */
function setActiveStyleSheet(title)
{
	var i, a, found;
	for (i=0; (a = document.getElementsByTagName("link")[i]); i++)
	{
		if (a.getAttribute("rel").indexOf("style") != -1 &&
			a.getAttribute("title"))
		{
			a.disabled = true;
			if (a.getAttribute("title") == title)
			{
				a.disabled = false;
			}
		}
	}
}

function setDefaultStyleSheet()
{
	setActiveStyleSheet(getPreferredStyleSheet());
}

function getActiveStyleSheet()
{
	var i, a;
	for (i=0; (a = document.getElementsByTagName("link")[i]); i++)
	{
		if (a.getAttribute("rel").indexOf("style") != -1 &&
			a.getAttribute("title") && !a.disabled)
			return a.getAttribute("title");
	}
	return null;
}

function getPreferredStyleSheet()
{
	var i, a;
	for (i=0; (a = document.getElementsByTagName("link")[i]); i++)
	{
		if (a.getAttribute("rel").indexOf("style") != -1 &&
			a.getAttribute("rel").indexOf("alt") == -1 &&
			a.getAttribute("title"))
			return a.getAttribute("title");
	}
	return null;
}

window.onload = function(e)
{
	var cookie = readCookie("style");
	//var title = cookie ? cookie : getPreferredStyleSheet();
	var title;
	if (cookie && cookie != "null")
	{
		title = cookie;
	}
	else
	{
		title = getPreferredStyleSheet();
	}
	setActiveStyleSheet(title);
}

window.onunload = function(e)
{
	var title = getActiveStyleSheet();
	createCookie("style", title, 365);
}

var cookie = readCookie("style");
var title = cookie ? cookie : getPreferredStyleSheet();
setActiveStyleSheet(title);

// vi: set sw=4 ts=4:
