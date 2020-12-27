function myAddEvent(elem, type, handler, useCapture)
{
	if (elem.addEventListener)
		elem.addEventListener(type, handler, useCapture);
	else if (elem.attachEvent)
		elem.attachEvent("on"+type, handler);
}
