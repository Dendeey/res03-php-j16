window.addEventListener("DOMContentLoaded", function(){  

    let $articles = document.querySelectorAll("#last-projects article");  
   
    for(let i = 0; i < $articles.length; i++)  
    {  
        let $url = $articles[i].getAttribute("data-img");  
        $articles[i].style.backgroundImage = `url("${$url}")`;  
        
    }  

    
 });