const loading = document.querySelector('.page-loading');
if(loading ){
loading.style.display = 'none';
}

const main_img = document.querySelector('.product-img .single-product-img');
const lisimg = document.querySelectorAll(".more-images img");
lisimg.forEach( element => {
  element.addEventListener('click',function(){
     main_img.src = element.src ; 
  })
})

