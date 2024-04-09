// pointing the button
var btn = document.querySelector('.mouse-cursor-gradient-tracking');

// getting the offset of the page and binding the data on the css variable --x & --y
btn.onmousemove = function (e) {
  var x = e.pageX - btn.offsetLeft
  var y = e.pageY - btn.offsetTop
  btn.style.setProperty('--x', x + 'px')
  btn.style.setProperty('--y', y + 'px')
}

// NOTE

// If the element's parent has a positioning context (position: relative), you will need to subtract its offsets as well.

// var x = e.pageX - btn.offsetLeft - btn.offsetParent.offsetLeft
// var y = e.pageY - btn.offsetTop - btn.offsetParent.offsetTop