let customer = document.getElementById("customer");
let owner = document.getElementById("owner");

function next(){
    if (customer.checked == true && owner.checked == false){
        window.location.href = "CUSTOMER/registerCustomer.php";
    }
    else{
        window.location.href = "./Owner/registerOwner.php";
    }
   
}