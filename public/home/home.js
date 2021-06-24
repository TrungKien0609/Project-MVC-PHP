const toggleNav = document.querySelector("nav .toggle-nav");
const sidebarOverlay = document.querySelector('.sidebar-overlay');
const closeBtn = document.querySelector('.sidebar-close');
toggleNav.addEventListener('click', () => {
  sidebarOverlay.classList.add('show');
});
closeBtn.addEventListener('click', () => {
  sidebarOverlay.classList.remove('show');
});


const cartOverlay = document.querySelector('.cart-overlay');
const closeCartBtn = document.querySelector('.cart-close');
const toggleCartBtn = document.querySelector('.toggle-cart');

toggleCartBtn.addEventListener('click', () => {
  cartOverlay.classList.add('show');
});
closeCartBtn.addEventListener('click', () => {
  cartOverlay.classList.remove('show');
});

const image_form = document.getElementById("image_form");
const upload_image_error = document.getElementById("upload_error");
function changeImage() {
  let xhr = new XMLHttpRequest(); //creating XML Oject
  xhr.open("POST", "http://localhost/MVC_Kien/ajax/check_upload_image", true);
  xhr.onload = function () {
    if (xhr.readyState === XMLHttpRequest.DONE)
      if (xhr.status === 200) {
        console.log(xhr.response);
        let data = JSON.parse(xhr.response);
        if (data === "true") {
          location.reload();
        }
        else {
          upload_image_error.innerHTML = data;
        }
      }
  }
  let formData = new FormData(image_form) // creating a new FormData object , trình duyệt đã hổ trợ gửi form thông qua Fromdata . Nếu trình duyệt không hổ trợ thì phải sử dụng 
  // Xhr.requestHeader("kiểu dữ liệu gửi vd Json thì dùng Content-type","aplicaiton/x-www-form-urlencoded") thông qua x-www-form-urlencoded( bị giới hạn dung lượng data khi gửi)
  // muốn không bị giới hạn thì dùng aplicaiton/multipart/form-data
  xhr.send(formData);
}

const dashboard_user = document.querySelector(".acc-logo .manage_accout");
function usertoggle() {
  if (dashboard_user.classList.contains("active")) {

    dashboard_user.classList.remove("active");
  }
  else
    dashboard_user.classList.add("active");
}

