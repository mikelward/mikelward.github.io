// ==UserScript==
// @name        Link Tooltips
// @namespace   http://endbracket.net/
// @description Shows a link's title and address in the tooltip
//              Inspired by Fake Opera Tooltips and Nice Titles
// @include     *
// ==/UserScript

window.addEventListener("load", function(e) {
  var links = document.getElementsByTagName("a");
  if (!links.length) return;
  var link, i;
  for (i = 0; link = links[i]; ++i)
  {
    var href = link.getAttribute("href");
    var title = link.getAttribute("title");

    if (title && href)
    {
      link.setAttribute("title", title + " (" + href + ")");
    }
    else if (href)
    {  
      link.setAttribute("title", href);
    }
  }
}, false);
