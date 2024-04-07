const arrow =  document.querySelector(".arrow_bottom");
const searchDiv = document.querySelector(".search_container");
const BackProdFormBtn = document.querySelector(".prod-form-back-btn>p>img");
const AddNewProdBtn = document.querySelector(".Add-new-prod-btn");
const AddProdContainer = document.querySelector(".add-prod-container");

document.querySelector(".search_input").addEventListener("click", function() {
    arrow.classList.toggle('rotate180');
    searchDiv.classList.toggle('open');
});

BackProdFormBtn.addEventListener("mouseover", () => {
    BackProdFormBtn.classList.toggle('rotate180');
});

BackProdFormBtn.addEventListener("mouseout", () => {
    BackProdFormBtn.classList.toggle('rotate180');
});

AddNewProdBtn.addEventListener("click", () => {
    AddProdContainer.style.display = "block";
});

BackProdFormBtn.addEventListener("click", () => {
    AddProdContainer.style.display = "none";
});

// ADD CLICK EVENT


document.querySelector(".upload-zone>button").addEventListener("click", () => {

    
    const ProdName = document.querySelector("#prodNameInput").value;
    const ProdPrice = document.querySelector("#prodPriceInput").value;
    const ProdDesc = document.querySelector("#ProdDesc").value;
    const ProdImages = document.querySelector("#ImageInput").files;
    const ProdCategory = document.querySelector("#CategoryChoice").value;
    // console.log(ProdDesc.value, ProdName.value, ProdPrice.value, ProdCategory.value);

    const formData = new FormData();
    formData.append("prod_name", ProdName);
    formData.append("prod_price", ProdPrice);
    formData.append("prod_desc", ProdDesc);
    formData.append("category", ProdCategory);

    for (let i = 0; i < ProdImages.length; i++) {
        formData.append("images[]", ProdImages[i]['name']);
    }
    
    $.ajax({ 
        type: "post",
        url: "/home/add-prod",
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            console.log(response);

            document.getElementById('myform').reset();
            AddProdContainer.style.display = "none";

        }
    });


});




