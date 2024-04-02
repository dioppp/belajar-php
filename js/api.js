fetch("https://crudcrud.com/api/fdee84748e184191a3513937d5d794b3/product")
    .then((response) => response.json())
    .then((data) => {
        const productListDiv = document.getElementById("productList");
        data.forEach((product) => {
            const listItem = document.createElement("li");
            listItem.textContent = product.name;
            productListDiv.appendChild(listItem);
        });
    });