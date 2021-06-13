const UploadFiles = document.getElementById("images");
const filename = document.getElementById("upload_field");
const file_error = document.getElementById("file_error");
UploadFiles.addEventListener("change", function () {
    if (this.value.match(/\.(jpg|png|jepg)$/)) {
        if (UploadFiles.files.length > 4) {
            file_error.innerHTML = "You can select only 4 images";
            UploadFiles.value = "";
            filename.innerHTML = "";
        } else {
            let temp= "";
            for(let i=0;i<UploadFiles.files.length;i++){
                 temp+= UploadFiles.files[i].name + "<br>";
            }
            filename.innerHTML = temp;
            file_error.innerHTML = "";
        }
    }
    else
    {
        UploadFiles.value = "";
        filename.innerHTML = "";
        file_error.innerHTML = "Image must be end with .jpg or .png or .jepg";
    }
})
