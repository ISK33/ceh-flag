// SELECT ELEMENTS
const productsEl = document.querySelector(".products");
const cartItemsEl = document.querySelector(".cart-items");
const subtotalEl = document.querySelector(".subtotal");
const totalItemsInCartEl = document.querySelector(".total-items-in-cart");

// RENDER PRODUCTS
function renderProdcuts() {
    products.forEach((product) => {
        productsEl.innerHTML += `<div class="col-lg-4 col-md-6 mb-4">
                <div class="height-100 card d-flex flex-column align-items-center">
                    <div class="product-name">${product.name}</div>
                    <div class="card-img"> <img src="${product.imgSrc}" alt="${product.name}">
                    <div class="card-body pt-5">
                        <div class="text-muted text-center mt-auto">Available Colors</div>
                        <div class="d-flex align-items-center justify-content-center colors my-2">
                            <div class="btn-group" data-toggle="buttons" data-tooltip="tooltip" data-placement="right" title="choose color"> <label class="btn btn-red form-check-label"> <input class="form-check-input" type="radio" autocomplete="off"> </label> <label class="btn btn-blue form-check-label active"> <input class="form-check-input" type="radio" autocomplete="off"> </label> <label class="btn btn-green form-check-label"> <input class="form-check-input" type="radio" autocomplete="off"> </label> <label class="btn btn-orange form-check-label"> <input class="form-check-input" type="radio" autocomplete="off"> </label> <label class="btn btn-pink form-check-label"> <input class="form-check-input" type="radio" autocomplete="off"> </label> </div>
                        </div>
                        <div class="d-flex align-items-center price justify-content-center">
                            <div class="del mx-2"><span class="text-dark">5500 uah</span></div>
                            <div class="font-weight-bold">${product.price}</div>    
                        
                        </div>
                        <div class="btn btn-success d-block mt-2 mx-auto add_to_cart" onclick="addToCart(${product.id})">Add to Cart</div> 
                    </div>
                </div>
            </div>`;
    });
}
renderProdcuts();

// // cart array
let cart = JSON.parse(localStorage.getItem("CART")) || [];
updateCart();

// ADD TO CART
function addToCart(id) {
    // check if prodcut already exist in cart
    if (cart.some((item) => item.id === id)) {
        changeNumberOfUnits("plus", id);
    } else {
        const item = products.find((product) => product.id === id);

        cart.push({
            ...item,
            numberOfUnits: 1,
        });
    }

    updateCart();
}

// // update cart
function updateCart() {
    renderCartItems();
    renderSubtotal();

    // save cart to local storage
    localStorage.setItem("CART", JSON.stringify(cart));
}

// calculate and render subtotal
function renderSubtotal() {
    let totalPrice = 0,
        totalItems = 0;

    cart.forEach((item) => {
        totalPrice += item.price * item.numberOfUnits;
        totalItems += item.numberOfUnits;
    });

    subtotalEl.innerHTML = `Subtotal (${totalItems} items): $${totalPrice.toFixed(
        2
    )}`;
    totalItemsInCartEl.innerHTML = totalItems;
}

// render cart items
function renderCartItems() {
    cartItemsEl.innerHTML = ""; // clear cart element
    cart.forEach((item) => {
        cartItemsEl.innerHTML += `
    <div class="cart-item col-12 mb-3">
    <div class="item-info" onclick="removeItemFromCart(${item.id})">
        <img src="${item.imgSrc}" alt="${item.name}">
        <h4>${item.name}</h4>
    </div>
    <div class="unit-price mx-auto text-center">
        <small>$</small>${item.price}
    </div>
    <div class="btn mt-2 mx-auto w-100  units text-center"> 
    <div class="input-group w-100 mx-auto"> 
    <span class="input-group-prepend"> 
    <button type="button" class="btn btn-outline-secondary btn-number${item.id} minus" data-type="minus" data-field="quant[1]" onclick="changeNumberOfUnits('minus', ${item.id})"> 
    <span class="fa fa-minus"></span> 
    </button> 
    </span> 
    
    <input type="text" name="quant[1]" class="form-control input-number${item.id} text-center" disabled value="${item.numberOfUnits}"> 
    
    <span class="input-group-append"> 
    <button type="button" class="btn btn-outline-secondary btn-number${item.id} plus" data-type="plus" data-field="quant[1]" onclick="changeNumberOfUnits('plus', ${item.id})"> 
    <span class="fa fa-plus"></span> 
    </button> 
    </span> 
    </div> 
</div>`;
    });
}
// "</div>";

// remove item from cart
function removeItemFromCart(id) {
    cart = cart.filter((item) => item.id !== id);

    updateCart();
}

// change number of units for an item
function changeNumberOfUnits(action, id) {
    cart = cart.map((item) => {
        let numberOfUnits = item.numberOfUnits;

        if (item.id === id) {
            if (action === "minus" && numberOfUnits > 1) {
                numberOfUnits--;
            } else if (action === "plus" && numberOfUnits < item.instock) {
                numberOfUnits++;
            }
        }

        return {
            ...item,
            numberOfUnits,
        };
    });

    updateCart();
}
