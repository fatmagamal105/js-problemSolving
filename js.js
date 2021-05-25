function setCookie(Vname, exD)
{
    var userName = document.getElementById("username").value;
    var maleG = document.getElementById("male");
    var femaleG = document.getElementById("female");
    var list = document.getElementById("color");
    var color = document.getElementById("color").selectedIndex;
    var date = new Date();

    Vname = userName;
    exD =  date.getMonth()+1; //expire date
    document.cookie = "username="+ Vname +";expires="+exD;

    var col = list.options[color].value;
    document.cookie ="color"+"="+ col +";expires="+exD;
    if(maleG.checked)
        document.cookie ="gender="+"male"+";expires="+exD;
    else if(femaleG.checked)
        document.cookie ="gender="+"female"+";expires="+exD;
}

function saveInfo()
{
    setCookie();
    window.location.assign("welcome.php");
}
function getCookie()
{
    cookieV = document.cookie;
    var name = cookieV.split("=")[1]; 

  
}

function allCookieList()
{
    var cookList =[];
    var sCookie= document.cookie.split(";")
    for(var i =0 ; i < sCookie.length; i++)
    {
        cookList[sCookie[i].split("=")[0].trim()]=sCookie[i].split("=")[1]
    }
    return cookList;
}

    function checkCookie() 
    {
        var resualt = allCookieList();
        var uName = resualt["username"];
        var Color = resualt["color"];
        var gen = resualt["gender"];

        var msg = document.getElementById("message");
        if(gen == "male")
        {    
            var image = document.createElement("img");
            image.src="images/1.jpg";
            msg.appendChild(image);
            if (typeof(Storage) != "undefined") 
            {
                if (localStorage.getItem("count") === "undefined") 
                {
                    localStorage.setItem("count", "1");
                }
                var count = localStorage.getItem("count");
                count++;
                
                localStorage.setItem("count", count);
                msg.innerHTML+= "welcome <span style='color:"+Color+";'>"+uName+
                    "</span> you have visited this site <span style='color:"+Color+";'>"+count+"</span> times";
            }
        }
    else
    {
        var image =document.createElement("img");
        image.src="images/2.jpg";
        msg.appendChild(image);
        if (typeof(Storage) != "undefined") 
        {
            if (localStorage.getItem("count") === "undefined") 
            {
                localStorage.setItem("count", "1");
            }
            var count = localStorage.getItem("count");
            count++;
            //count=0;
            localStorage.setItem("count"
                , count);
            msg.innerHTML+= "welcome <span style='color:"+Color+";'>"+uName+
                "</span> you have visited this site <span style='color:"+Color+";'>"+count+"</span> times";
        } 
    }
    }

    checkCookie();

    function deleteCookie(usename)
    {
        cookeName = getCookie();

        for (var i in cookeName) {
            
            document.cookie = usename + ";expires=1-1-2000";
    }

        console.log(document.cookie = usename + ";expires=1-1-2000");
    }
