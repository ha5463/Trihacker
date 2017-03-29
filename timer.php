<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <script language ="javascript" >
        var tim;
       
        var min =59;
        var sec = 60;
        var f = new Date();
        function f1() {
            f2();
            document.getElementById("starttime").innerHTML = "Started At : " + f.getHours() + ":" + f.getMinutes();
             
          
        }
        function f2() {
            if (parseInt(sec) > 0) {
                sec = parseInt(sec) - 1;
                document.getElementById("showtime").innerHTML = "Your Left Time  is :"+min+" Minutes ," + sec+" Seconds";
                tim = setTimeout("f2()", 1000);
            }
            else if(parseInt(sec) == 0 && parseInt(min) == 0) {
                    alert('Time Over');
                    window.location="home.php";
            }
            else {
                if (parseInt(sec) == 0) {
                    min = parseInt(min) - 1;
                    if (parseInt(min) == 0) {
                        clearTimeout(tim);
                        location.href = "default5.aspx";
                    }
                    else {
                        sec = 60;
                        document.getElementById("showtime").innerHTML = "Your Left Time  is :" + min + " Minutes ," + sec + " Seconds";
                        tim = setTimeout("f2()", 1000);
                    }
                }
               
            }
        }
    </script>
</head>
<body onload="f1()" >
    <form id="form1" runat="server">
    <div>
      <table width="100%" align="center">
        <tr>
          <td>
            <div id="starttime"></div>
 
            <div id="endtime"></div>    
 
            <div id="showtime"></div>
          </td>
        </tr>
        <tr>
          <td>
             
              
 
            
              
          </td>
         
        </tr>
      </table>
      
 
   
 
    </div>
    </form>
</body>
</html>