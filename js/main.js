console.log("test new page")
function setCookie(cname,cage,exdays) {
    
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    cname = document.getElementById("name").value;
    cage = document.getElementById("age").value;

    console.log(cname, "cname")
    console.log(cage, "cvalue")
    document.cookie = "name=" + cname +";expires="+d.toGMTString();
    document.cookie = "age=" + cage +";expires="+d.toGMTString();
    window.location.assign("./welcome.html")
    
    // document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
}

function getAllCookies()
{
    
    // var allcookies = document.cookie;
    // console.log(allcookies)
    var assCookie = [];
    var splitCookie = document.cookie.split(";");

    for (let i = 0; i < assCookie.length; i++) {
        assCookie[splitCookie[i].split("-")[0].trim()] = splitCookie[i].split("-")[1];
        
    }

    return assCookie;

}
window.onload = function displayGreetings()
    {
        var allCookies  =  getAllCookies();
		var name  = allCookies['name'];
		var age   = allCookies['name'];
		
		var hElem =  document.createElement('h2');
		document.body.appendChild(hElem);

		var txt = gender + "welcome " + name + "your age is" + age;

		hElem.appendChild(document.createTextNode(txt));
    }
  

