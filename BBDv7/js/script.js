    /*Open and close nav menu*/
    function toggleMenu(){
    /*Get all menu a elements */
        var menu = document.getElementById("myTopnav");
        if(menu.className === "nav") {
        menu.className += " responsive"; 
        } else{
            menu.className ="nav";
        }
        
    }