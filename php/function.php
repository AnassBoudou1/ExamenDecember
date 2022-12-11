<?php



$inlog = false;
if(isset($_POST['name']) && $_POST['email'] == "Anass"){
    $inlog = true;
}

function navbar($conn,$inlog){
       
    $returnString = "
<nav class=\"navbar navbar-expand-lg bg-light\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"index.php\">
            <img src=\"img/logo.jpg\" alt=\"Dierenarts\" height=\"100\">
        </a>
        
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" aria-current=\"page\" href=\"index.php\">Home</a>
                </li>
                <div class=\"collapse navbar-collapse\" id=\"navbarNavDarkDropdown\">
                <ul class=\"navbar-nav\">
                  <li class=\"nav-item \">
                    <a class=\"nav-link\" aria-current=\"page\" href=\"dieren.php\">Dieren</a>
                  </li>
                </ul>
              </div>";
    if($inlog===false){
        $returnString .= "
                <li class=\"nav-item\">
                    <a class=\"nav-link\" aria-current=\"page\" href=\"login.php\">Login</a>
                </li>";
    }else{
        $returnString .= "
                
        <li class=\"nav-item\">
            <a class=\"nav-link\" aria-current=\"page\" href=\"Bijwerken.php\">Bewerken</a>
        <li class=\"nav-item\">
        </li> 
            <a class=\"nav-link\" aria-current=\"page\" href=\"logoff.php\">logoff</a>
        </li>";
    }
    $returnString .= "
            </ul>
        </div>
    </div>
</nav>";

return $returnString;
};

?>