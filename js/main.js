let carts = document.querySelectorAll('.add-cart');
var noti = document.querySelector('h5');
var button = document.getElementsByClassName('btn-checkOut');



let products =[
    {
      name:'Converse X Ambush',
      tag: 'ConverseXAmbush',
      price:749.00,
      img:'converse',
      inCart:0
    },
    {
      name:'NIKE ACG GORE-TEX',
      tag: 'NIKEACGGORE-TEX',
      price:399.00,
      img:'nikeAcg',
      inCart:0
    },
    {
      name:'Jordan React Elevation',
      tag: 'JordanReactElevation',
      price:269.00,
      img:'jordan-react',
      inCart:0
    },
    {
      name:'Nike RYZ ',
      tag: 'NikeRYZ',
      price:229.70,
      img:'nikeRYZ',
      inCart:0
    },
    {
      name:'Nike SuperRep Go',
      tag: 'NikeSuperRepGo',
      price:600.00,
      img:'nikeGo',
      inCart:0
    },
    {
      name:'Jordan Zoom TRUNNER',
      tag: 'JordanZoomTRUNNER',
      price:689.00,
      img:'jordan-zoom',
      inCart:0
    },
    {
      name:'Air Jordan XXXV PF',
      tag: 'AirJordanXXXVPF',
      price:689.90,
      img:'air-jordan',
      inCart:0
    },
    {
      name:'Jordan Zoom1',
      tag: 'JordanZoom1',
      price:149.90,
      img:'shoe1',
      inCart:0
    },
    {
      name:'Nike SuperRep Surge',
      tag: 'NikeSuperRepSurge',
      price:589.00,
      img:'shoe2',
      inCart:0
    },
    {
      name:'ZOOM X REP',
      tag: 'ZOOMXREP',
      price:485.00,
      img:'shoe3',
      inCart:0
    },
    {
      name:'ALEXANDER MCQUEEN',
      tag: 'ALEXANDERMCQUEEN',
      price:1479.90,
      img:'shoe4',
      inCart:0
    },
    {
      name:'Converse Green',
      tag: 'ConverseGreen',
      price:765.00,
      img:'shoe5',
      inCart:0
    },
    {
      name:'Nike Rain',
      tag: 'NikeRain',
      price:245.00,
      img:'shoe6',
      inCart:0
    },
    {
      name:'Converse 70"s"',
      tag: 'Converse70"s"',
      price:599.00,
      img:'shoe7',
      inCart:0
    },
    {
      name:'Nike Jordan Allstar',
      tag: 'NikeJordanAllstar',
      price:712.00,
      img:'shoe8',
      inCart:0
    },
    {
      name:'Nike All Run',
      tag: 'NikeAllRun',
      price:700.00,
      img:'shoe9',
      inCart:0
    },
    {
      name:'Converse DUCK CTA',
      tag: 'ConverseDUCKCTA',
      price:600.00,
      img:'ctaDuckBoot',
      inCart:0
    },
    {
      name:'OffWhite TMWILL',
      tag: 'OffWhiteTMWILL',
      price:768.00,
      img:'OffWhite',
      inCart:0
    },
];
function checkout()

{  
  let productNumbers = localStorage.getItem('cartNumbers');
  productNumbers = parseInt(productNumbers);

  let cartItems = localStorage.getItem("productsInCart");
  cartItems = JSON.parse(cartItems);
  
  if(productNumbers!=0 && cartItems){

  
    window.location.replace("checkOut.html");
  }
}
  

for(let i=0; i< carts.length; i++) {
    carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);
        window.alert('Added to cart');
        totalCost(products[i]);
    });
}

/* reload back the total cart from local storage */
function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');
    if( productNumbers ) {
        noti.setAttribute('data-count', productNumbers);
    }
}

/* calculate the cart Numbers if there is an update from the user */
function cartNumbers(product, action) {
    let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers);

    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if( action ) {
        localStorage.setItem("cartNumbers", productNumbers - 1);
        noti.setAttribute('data-count', productNumbers - 1);
        console.log("action running");
    } else if( productNumbers ) {
        localStorage.setItem("cartNumbers", productNumbers + 1);
        noti.setAttribute('data-count', productNumbers + 1);
    } else {
        localStorage.setItem("cartNumbers", 1);
        noti.setAttribute('data-count', 1);
    }
    setItems(product);
}

/* set each product with its tag*/
function setItems(product) {
    // let productNumbers = localStorage.getItem('cartNumbers');
    // productNumbers = parseInt(productNumbers);
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    console.log(cartItems);

    if(cartItems != null) {
        let currentProduct = product.tag;

        if( cartItems[currentProduct] == undefined ) {
            cartItems = {
                ...cartItems,
                [currentProduct]: product
            }
        }
        cartItems[currentProduct].inCart += 1;

    } else {
        product.inCart = 1;
        cartItems = {
            [product.tag]: product
        };
    }

    localStorage.setItem('productsInCart', JSON.stringify(cartItems));
}

/* calculate total cost  when there is an update or changes */
function totalCost( product, action ) {
    let cart = localStorage.getItem("totalCost");

    if( action) {
        cart = parseFloat(cart);

        localStorage.setItem("totalCost", cart - product.price);
    } else if(cart != null) {

        cart = parseFloat(cart);
        localStorage.setItem("totalCost", cart + product.price);

    } else {
        localStorage.setItem("totalCost", product.price);
    }
}

/* -----------------CART.HTML-------------*/

/* display all the added cart in cart.html */
function displayCart() {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    let cartCost = localStorage.getItem("totalCost");
    cartCost = parseFloat(cartCost).toFixed(2);

    let productContainer = document.querySelector('.products');
    var Empty = document.getElementsByClassName('.cart-empty');
    if(cartCost == 0){
      EmptyCart();
    }
    
    if( cartItems  && productContainer) {
     
     
        productContainer.innerHTML = '';
        Object.values(cartItems).map( (item, index) => {
         
            productContainer.innerHTML += 
           ` 
            <div class="product">
            <ion-icon name="close-circle-outline"></ion-icon>
            <img src="./img/check/${item.img}.jpg">
            <span>${item.name}</span>
            </div>
            <div class="price"><h4>&nbsp;&nbsp;&nbsp;$${item.price}</h4></div>
              <div class="quantity">
          <ion-icon name="caret-back-outline" class="decrease "></ion-icon>
          <span>${item.inCart}</span>
          <ion-icon class="increase" name="caret-forward-outline"></ion-icon>
              </div>
              <div class="total"><h4>  MYR ${parseFloat(item.inCart * item.price).toFixed(2)}</h4>
              </div>
              `;
        });
        productContainer.innerHTML +=`
        <div class="basketTotalContainer">
        <h4 class = " basketTotalTitle">
        Basket Total : </h4>
        <h4 class ="basketTotal">MYR ${cartCost}
         </h4>
         </div>
        <div class="check-out">
        <button class="btn-checkOut" onclick="checkout()">CHECK OUT</button>
        </div>`;
        
        deleteButtons();
        console.log('cart Cost is '+cartCost);
        manageQuantity();

      }
      else {
        console.log(cartItems);
        productContainer.innerHTML +=`
        <div class="empty-cart">
        <h4 class = "cart-empty">
        YOUR SHOPPING CART IS EMPTY :( </h4>
        `;
      }
    }

   //function for Increment and Decrement Quantity 
function manageQuantity() {
    let decreaseButtons = document.querySelectorAll('.decrease');
    let increaseButtons = document.querySelectorAll('.increase');
    let currentQuantity = 0;
    let currentProduct = '';
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    for(let i=0; i < increaseButtons.length; i++) {
      
            decreaseButtons[i].addEventListener('click', () => {
            console.log(cartItems);
            currentQuantity = decreaseButtons[i].parentElement.querySelector('span').textContent;
            console.log(currentQuantity);
            currentProduct = decreaseButtons[i].parentElement.previousElementSibling.previousElementSibling.querySelector('span').textContent.replace(/ /g,'').trim();
            console.log(currentProduct);

            if( cartItems[currentProduct].inCart > 1 ) {
                cartItems[currentProduct].inCart -= 1;
                cartNumbers(cartItems[currentProduct], "decrease");
                totalCost(cartItems[currentProduct], "decrease");
                localStorage.setItem('productsInCart', JSON.stringify(cartItems));
                displayCart();
            }
        });

        increaseButtons[i].addEventListener('click', () => {
            console.log(cartItems);
            currentQuantity = increaseButtons[i].parentElement.querySelector('span').textContent;
            console.log(currentQuantity);
            currentProduct = increaseButtons[i].parentElement.previousElementSibling.previousElementSibling.querySelector('span').textContent.replace(/ /g,'').trim();
            console.log(currentProduct);

            cartItems[currentProduct].inCart += 1;
            cartNumbers(cartItems[currentProduct]);
            totalCost(cartItems[currentProduct]);
            localStorage.setItem('productsInCart', JSON.stringify(cartItems));
            displayCart();
        });       
    }
}

//Function to remove object from local Storage
function deleteButtons() {
    
    let deleteButtons = document.querySelectorAll('.product ion-icon');
    let productNumbers = localStorage.getItem('cartNumbers');
    let cartCost = localStorage.getItem("totalCost");
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    let productName;

    console.log(cartCost);

      for(let i=0; i < deleteButtons.length; i++) {
        deleteButtons[i].addEventListener('click', () => {
          
            productName = deleteButtons[i].parentElement.textContent.replace(/ /g,'').trim();
            console.log(cartItems);
           
            localStorage.setItem('cartNumbers', productNumbers - cartItems[productName].inCart);
            localStorage.setItem('totalCost', cartCost - ( cartItems[productName].price * cartItems[productName].inCart));
           
            console.log(cartCost);
            delete cartItems[productName];
            localStorage.setItem('productsInCart', JSON.stringify(cartItems));


            displayCart();
                            
            onLoadCartNumbers();
            
        })
     
    }   

}

/* clear the local storage if there is no longer product in cart.html*/
function EmptyCart(){
  let cartCost = localStorage.getItem("totalCost");
  console.log(cartCost);
    var Empty = document.getElementsByClassName('.cart-empty');
    console.log(cartCost);
    localStorage.clear();
}


onLoadCartNumbers();
displayCart();

