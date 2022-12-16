

         /*---------DEFINE ELEMENT ---------*/

   let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers);
    document.getElementById("noCart").textContent = productNumbers;
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    console.log(cartItems)
    var size = Object.keys(cartItems).length
    let product = document.getElementById('Container-product')
    let total = document.getElementById("priceTotal");
    total.textContent = 'MYR '+ parseFloat(localStorage.getItem('totalCost')).toFixed(2); 
    let card;
    let productItem =[]
   
     /*---------DEFINE ELEMENT ---------*/

     /*---------DEFINE ELEMENT OF FORM ---------*/

     var check = document.getElementsByName("radio");

     
     /*---------DEFINE ELEMENT OF FORM ---------*/



 /*---------DEFINE PRODUCT CONTAINER ---------*/
    if(cartItems && product){
     
      product.innerHTML ="";

      for(var x=0;x<size;x++){

            let obj = Object.values(cartItems)[x];   
            let pricePerItem =Object.values(cartItems)[x].price 
            let itemCart = Object.values(cartItems)[x].inCart;
            let totalPriceProduct = pricePerItem * itemCart;   
            productItem.push(Object.values(cartItems)[x].name);
            product.innerHTML +=  `
           
      <p id="product-Item"><a href="#" class="item">${obj.name} (${obj.inCart})</a> <span class="price"> $${totalPriceProduct}</span></p>
      <br>`;
       }

       console.log(productItem)  
    }
     /*---------DEFINE PRODUCT CONTAINER ---------*/

  
     
    function validateRadio(check){
      
      var valid =false;
       for(var z=0;z<check.length;z++){
    if(check[z].checked){
       valid = true;
      card = check[z].value;
      break;
    }
  }
        if(valid) {
          return true;
          }
          else return false;
  }

function Submit(){
  
  var name = document.getElementById("fname").value;
  var email = document.getElementById("email").value;
  var address = document.getElementById("adr").value;
  var city = document.getElementById("city").value;
  var state = document.getElementById("state").value;
  var zip = document.getElementById("zip").value;
  var cname = document.getElementById("cname").value;
  var ccnum = document.getElementById("ccnum").value;
  var phone = document.getElementById("phone").value;
  var cvv = document.getElementById("cvv").value;

   var text;

   //validate the form
   if(name.length < 5 ){
    text = "Please Enter full Name (Name must be more than five character)";
    window.alert(text)
    return false;
  }

   if(email.indexOf("@") == -1 || email.length < 6){
      text = "Please Enter valid Email";
      window.alert(text)
      return false;
    }
    if(address.length<=11 && address.length>=40){
      text = "address must be between 20 to 50 characters";
      window.alert(text)
      return false;
    }
    if(city.length<12 && city.length>25 ){
      text = "city must be between 12 to 25 characters";
      window.alert(text)
      return false;
    }
    if(state.length<=2 && state.length>6){
      text = "Enter a valid state";
      window.alert(text)
      return false;
    }
    if(isNaN(zip) && zip.length!=5){
      text = "Enter  a valid zip postcode";
      window.alert(text)
      return false;
    }

    if(!validateRadio(check)){
      window.alert("Please select payment method");
      return false;
  }

    if(cname.length<5){
      text = "Enter a valid name on card";
      window.alert(text)
      return false;
    }

    if(ccnum.length < 5){
      text = "Enter a valid input card number";
      window.alert(text)
      return false;
    }
    if(phone.length < 9){
      text = "Enter a valid input card number";
      window.alert(text)
      return false;
    }
    if(cvv.length<3){
      text = "CVV must be 3 digit";
      window.alert(text);
      return false;
    }

else

    address = address.concat(" ",city);

    
     //submit data with datatype of string to php using ajax
      cartItems =Object.values(cartItems);

    $.ajax({
      method: "POST",
      url: "order.php",
      data: {name:name,email:email,
        address:address,state:state,
        zip:zip, cname:cname,
        ccnum:ccnum,
        cartItems:cartItems,
        cvv:cvv,product:productItem,  
        total:total.textContent,
        card:card,
        phone:phone
         },           
      success : function(data){
    
        alert("Your tracking no is "+data);                                                 
      }
  });
  swal.fire({
    title: "Success!",
    text: "Your payment has been received",
    type: "success",
    icon: "success",
    }).then(function() {
    // Redirect the user to home page
   HomePage();
    });;
  return true;   
   }



  function HomePage(){
    if(Submit){
      localStorage.clear();
      window.location.replace("Home.php");
    }
  }


