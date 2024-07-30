//register validation starts
function register(){
    //check wheather text box empty
    let cusname = document.getElementById("name").value;
    if(cusname == "" || cusname == undefined){
        alert ("Customer name can not be empty...");
        return false;
    }

    //check wheather email box empty
    let cusemail = document.getElementById("email").value;
    if(cusemail == "" || cusemail == undefined){
        alert (" Customer email can not be empty...");
        return false;
    }

    //check wheather date empty
    let cusdate = document.getElementById("date").value;
    if(cusdate == "" || cusdate == undefined){
        alert (" Date can not be empty...");
        return false;
    }

    //check wheather number box empty
    let cusnum = document.getElementById("number").value;
    if(cusnum == "" || cusnum == undefined){
        alert (" Number can not be empty...");
        return false;
    }    

    //check wheather length of the number
    // if(cusnum.length != 10){
    //     alert("phone number must be 10 numbers");
    //     return false;
    // }

    //check wheather length of the password
    let cuspassw = document.getElementById("password").value;
    if(cuspassw.length== 10){
        alert("password must be 8 numbers");
        return false;
    }

    if(cuspassw == "" || cuspassw == undefined){
        alert (" password can not be empty...");
        return false;
    } 
    //check wheather renter password
    if(cuspassw == repassword){
        alert("password not equal   ")
    }

    //check wheather password characters
    
    let minLength = 8;
    let hasUpperCase = /[A -Z]/.test(cuspassw);
    let hasLowerCase = /[a - z]/.test(cuspassw);
    let hasNumber = /[0 - 9]/.test(cuspassw);

    if(cuspassw.length < minLength || !hasUpperCase || !hasLowerCase || !hasNumber){
        password.textContent = "Password must be atleast 8 characters long and contain at least one uppercase letter, one lowercase letter, and one number";
    }else{
        password.textContent ="";
    }


}

// admin page add button


//index page login button
function loginclick(){
    let user = prompt("Enter who are you..? (customer or admin)");
    if(user==customer){
        window.open('login.php');
    }else if(user==admin){
        window.open('admin_login.php');
    }else{
        alert("Invalid input");
    }
    
}
//login button end