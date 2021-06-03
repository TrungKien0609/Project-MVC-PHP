const getElement = (selection) => {
    const element = document.querySelector(selection)
    if (element) return element
    throw new Error(`Please check "${selection}" selector, no such element exist`)
}
const toggleNav = getElement("nav .toggle-nav");
const sidebarOverlay = getElement('.sidebar-overlay');
const closeBtn = getElement('.sidebar-close');
toggleNav.addEventListener('click', () => {
  sidebarOverlay.classList.add('show');
});
closeBtn.addEventListener('click', () => {
  sidebarOverlay.classList.remove('show');
});
const cartOverlay = getElement('.cart-overlay');
const closeCartBtn = getElement('.cart-close');
const toggleCartBtn = getElement('.toggle-cart');

toggleCartBtn.addEventListener('click', () => {
  cartOverlay.classList.add('show');
});
closeCartBtn.addEventListener('click', () => {
  cartOverlay.classList.remove('show');
});

const loading = getElement('.page-loading');
loading.style.display = 'none';

const main_img = getElement('.product-img .single-product-img');
const lisimg = document.querySelectorAll(".more-images img");
lisimg.forEach( element => {
  element.addEventListener('click',function(){
     main_img.src = element.src ; 
  })
})

