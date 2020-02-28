/* Modal Functionality */
function createTemplate(HTMLString) {
  const html = document.implementation.createHTMLDocument();
  html.body.innerHTML = HTMLString;
  return html.body.children[0];
}

const openModalSubscribe = () => {
  const modalElement = document.getElementById('subscribe-modal');
  modalElement.classList.toggle('active');
  window.scrollTo(0, 0)
}

const openModal = (portalId, formId, sfdcCampaignId) => {
  const modalElement = document.getElementById('modal');
  modalElement.classList.toggle('active');

  // window.scrollTo(0, 0);


  if (portalId && formId && sfdcCampaignId) {
    const formContainer = document.getElementById('form-container');
	formContainer.innerHTML = '<div class="hubspot-form"></div>';


	   var script = document.createElement("script");
	   script.type = 'text/javascript';
      var code = document.createTextNode(`hbspt.forms.create({
          portalId: "${portalId}",
          formId: "${formId}",
          sfdcCampaignId: "${sfdcCampaignId}"
        })`);

      script.appendChild(code);
      document.querySelector(".hubspot-form").append(script);

  } else {
    console.log('we need IDs');
  }
}

/* Tabs Functionality */
const openSolution = (event) => {
  const activeSolution = document.querySelector('.solution__navigate-item.active');
  const targetImg = event.target.parentNode.dataset.target;
  let solutionImage = document.querySelector('.solution__image.active');

  activeSolution.classList.remove('active');
  event.target.parentNode.classList.add('active');
  solutionImage.classList.remove('active');

  switch (targetImg) {
    case 'clienteling':
      solutionImage = document.getElementById('solution-clienteling');
      solutionImage.classList.add('active');
      break;
    case 'checkout':
      solutionImage = document.getElementById('solution-checkout');
      solutionImage.classList.add('active');
      break;
    case 'assisted':
      solutionImage = document.getElementById('solution-assisted');
      solutionImage.classList.add('active');
      break;
    case 'runner':
      solutionImage = document.getElementById('solution-runner');
      solutionImage.classList.add('active');
      break;
  }
}

/* Mobile Menu */
var btnMenu = document.getElementById('btnMenu');
// var btnCloseMenu = document.getElementById('btnCloseMenu');
var menu = document.getElementById('menuMobile');
btnMenu.addEventListener("click", function () {
    this.classList.toggle('is-active');
    if( this.classList.contains('is-active') ){
        menu.style.display = "flex";
    }else{
        menu.style.display = "none";
    }

});
// btnCloseMenu.addEventListener("click", function () {
//   menu.style.display = "none";
// });
