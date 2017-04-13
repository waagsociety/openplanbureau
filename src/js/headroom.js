function headroom(element) {

  var className = {
    up: 'scroll-up',
    down: 'scroll-down',
    top: 'scroll-top',
  }
  
  var viewportHeight = window.innerHeight
  var cached = {
    scrollY,
    direction: false,
  }

  return function(event) {
    
    var direction = cached.scrollY < scrollY
    if (direction !== cached.direction) {
      element.classList.add(direction ? className.down : className.up)
      element.classList.remove(direction ? className.up : className.down)
      if (direction) element.classList.remove(className.top)
    }

    if (!direction && scrollY <= 0) element.classList.add(className.top)

    cached.direction = direction
    cached.scrollY = scrollY

  }

}
