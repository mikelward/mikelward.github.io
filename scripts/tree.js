//
// tree.js
// Collapsible document tree
//
// Michael Wardle
// October 6, 2004
//

//
// The intended method of operation is to create a section with class
// "collapsible" and include a toggle widget (a heading) as one of its
// children.  Clicking on the heading causes all peer nodes in the
// section (except for the toggle widget) to be hidden/shown.
//
// Example:
// <div class="collapsible">
// <h2>Collapsible</h2>
// <ul>
// <li>Item 1</li>
// <li>Item 2</li>
// </ul>
// </div>
//

myAddEvent(window, "load", setClickToExpand);
//myAddEvent(window, "load", setHoverToExpand);

// Hide every node in the tree
function collapseTree()
{
	nodes = document.getElementsByTagName("*");
	for (var i = 0; i < nodes.length; i++)
		if (isCollapsible(nodes[i]) && nodes[i].id != "introduction")
			hideSection(nodes[i]);
}
// Show every node in the tree
function expandTree()
{
	nodes = document.getElementsByTagName("*");
	for (var i = 0; i < nodes.length; i++)
		if (isCollapsible(nodes[i]) &&
			nodes[i].id != "introduction" &&
			nodes[i].id != "start")
			showSection(nodes[i]);
}
// Hide a node
function hide(node)
{
	if (!node || !node.style) return false;
	node.style.display = "none";
}
// Hide a node's children except for the toggle widget (the heading)
function hideSection(node)
{
	if (!node.childNodes) return false;
	for (var i = 0; i < node.childNodes.length; i++) {
		if (!isHeading(node.childNodes[i])) {
			hide(node.childNodes[i]);
		}
	}
}
// Hide the section of the parent node
function hideSectionOfParent(node)
{
	hideSection(this.parentNode);
}
function hideTree(event)
{
	peers = this.parentNode.childNodes;
	for (i = 0; i < peers.length; i++)
		if (isCollapsible(peers[i]))
			hide(peers[i]);
}
// Test whether a node is explicitly allowed to be hidden and shown
// (true if the node's class contains "collapsible")
function isCollapsible(node)
{
	if ((" "+node.className+" ").indexOf("collapsible") != -1)
		return true;
	else
		return false;
}
// Test whether a node is a heading
function isHeading(node)
{
	if (!node.tagName) return false;
	if (node.tagName.match(/^h|h\d$/i))
		return true;
	else
		return false;
}
// Test whether a node is at level one in the tree
function isTop(node)
{
	if ((" "+node.className+" ").indexOf("top") != -1)
		return true;
	else
		return false;
}
// Make clicking on a section's heading toggle the section's visibility
// (clickable hierarchical menus)
function setClickToExpand()
{
	headingTypes = new Array("h1", "h2", "h3", "h4", "h5", "h6");
	for (var i = 0; i < headingTypes.length; i++) {
		headings = document.getElementsByTagName(headingTypes[i]);
		for (var j = 0; j < headings.length; j++)
			headings[j].onclick = toggleSectionOfParent;
	}
}
// Make hovering over a section's heading toggle the section's visibility
// (hoverable hierarchical menus)
// XXX - not yet working
function setHoverToExpand()
{
	headingTypes = new Array("h1", "h2", "h3", "h4", "h5", "h6");
	for (var i = 0; i < headingTypes.length; i++) {
		headings = document.getElementsByTagName(headingTypes[i]);
		for (var j = 0; j < headings.length; j++) {
			headings[j].onmouseover = showSectionOfParent;
			myAddEvent(headings[j].parentNode, "mouseout", hideSection, false);
		}
	}
	//var content = document.getElementByTagId("content");
	//content.onmouseover = collapseTree();
}
// Show a node
function show(node)
{
	if (!node || !node.style) return false;
	node.style.display = "";
}

// Show a section
function showSection(node)
{
	if (!node.childNodes) return false;
	for (var i = 0; i < node.childNodes.length; i++) {
		if (!isHeading(node.childNodes[i])) {
			show(node.childNodes[i]);
		}
	}
}
// Show a section that is the parent of this node
function showSectionOfParent(node)
{
	showSection(this.parentNode);
}
function showTree(event)
{
	var peers = this.parentNode.childNodes;
	for (var i = 0; i < peers.length; i++)
		if (isCollapsible(peers[i]))
			show(peers[i]);
}
// Show top level nodes
function showTop()
{
	nodes = document.getElementsByTagName("*");
	for (var i = 0; i < nodes.length; i++)
		if (isTop(nodes[i]))
			showSection(nodes[i]);
}
// Toggle the visibility of a node
function toggleNode(node)
{
	if (!node.style) return false;
	if (node.style.display == "none")
		node.style.display = "";
	else
		node.style.display = "none";
}
// Toggle the visibility of a node's parent
function toggleSectionOfParent()
{
	toggleSection(this.parentNode);
}
// Toggle the visibility of a node's non-heading peers
function togglePeersOfNode(node)
{
	if (!node) return false;
	if (!node.parentNode) return false;
	return toggleSection(node.parentNode);
}
// Toggle the visibility of a node's non-heading children
function toggleSection(node)
{
	if (!isCollapsible(node)) return false;
	if (!node.childNodes) return false;
	for (i = 0; i < node.childNodes.length; i++)
		if (!isHeading(node.childNodes[i]))
			toggleNode(node.childNodes[i]);
}
// Toggle the visibility of a node's collapsible children
// (old style where a section's children were marked collapsible)
function toggleTree(event)
{
	peers = this.parentNode.childNodes;
	for (i = 0; i < peers.length; i++)
		if (isCollapsible(peers[i]))
			if (peers[i].style.display == "none")
				peers[i].style.display = "";
			else
				peers[i].style.display = "none";
}
