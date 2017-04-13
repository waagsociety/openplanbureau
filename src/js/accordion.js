function loadAccordion(){
  var accordions = toArray(document.querySelectorAll('.accordion.container'))
  
  const toggleAccordion = toggles => event => {

    const { target } = event
    let $match = null
    
    toggles.forEach($toggle => {
      if ($toggle === target) $match = $toggle
    })

    if ($match) toggles.forEach($toggle => {
      if ($toggle === $match) $toggle.parentNode.classList.toggle('open')
    })
  }


  accordions.forEach($parent => {
    const toggles = toArray($parent.querySelectorAll('.is-toggle'))
    $parent.addEventListener('click', toggleAccordion(toggles))
  })

  function toArray(value) {
    return Array.prototype.slice.call(value)
  }
}

