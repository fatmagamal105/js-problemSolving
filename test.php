<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <style>
        div{
            font-size: 50px;
            }
    </style>
</head>
<body>
    <div id="message">
    <span id="counter"></span>
    </div>
    <button onclick="deleteCookie('username')">Delete Cookie</button>
    <script>
    
      function setCookie(Vname, exD)
    {
        var userName = document.getElementById("usernam").value;
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
        window.location.assign("test.php");
    }
    function getCookie()
    {
        var cookieV = document.cookie;
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
                image.src="1.jpg";
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
            image.src="2.jpg";
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
    

    
    </script>
</body>
</html>