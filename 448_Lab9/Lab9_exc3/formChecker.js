function validateInput(){
    //has to: ensures quantities are valid, number of books, 
    //username is valid, password exisits, shipping option was selected. 

    if( document.getElementsByTagName("shipping").HTML !== 'undefined'){
        alert("all good");
        return true;
    }
    alert("shipping not selected");
    return false;
}

//alert("invalid found");
//alert("all good");