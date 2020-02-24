/* Modal Functionality */
const openModal = () => {
  const modalElement = document.getElementById('modal')
  modalElement.classList.toggle('active')
  window.scrollTo(0, 0)
}

/* Tabs Functionality */
const openSolution = (event) => {
  const activeSolution = document.querySelector('.solution__navigate-item.active')
  const targetImg = event.target.parentNode.dataset.target
  let solutionImage = document.querySelector('.solution__image.active')

  activeSolution.classList.remove('active')
  event.target.parentNode.classList.add('active')
  solutionImage.classList.remove('active')

  switch (targetImg) {
    case 'clienteling':
      solutionImage = document.getElementById('solution-clienteling')
      solutionImage.classList.add('active')
      break;
    case 'checkout':
      solutionImage = document.getElementById('solution-checkout')
      solutionImage.classList.add('active')
      break;
    case 'assisted':
      solutionImage = document.getElementById('solution-assisted')
      solutionImage.classList.add('active')
      break;
    case 'runner':
      solutionImage = document.getElementById('solution-runner')
      solutionImage.classList.add('active')
      break;
  }
}

/* Mobile Menu */
var btnMenu = document.getElementById('btnMenu');
var btnCloseMenu = document.getElementById('btnCloseMenu');
var menu = document.getElementById('menuMobile');
btnMenu.addEventListener("click", function () {
  menu.style.display = "flex";
});
btnCloseMenu.addEventListener("click", function () {
  menu.style.display = "none";
});