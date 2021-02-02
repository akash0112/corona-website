<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body onload="fetch()">

<?php
include 'header.php'
?>

<div class=" table-responsive container-fluid">
<table class=" table table-bordered  text-center" id="tbval">
<tr>
<th>Country</th>
<th>Total Confirmed</th>
<th>Total Recovered</th>
<th>Total Deaths</th>

</tr>
</table>
<script>

function fetch()
{
    $.get("https://api.covid19api.com/summary",
    function(data)
    {
       var tbval=document.getElementById('tbval');
       for(var i=1;i<(data['Countries'].length);i++)
       {
           var x=tbval.insertRow();
           x.insertCell(0);
           tbval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];
           tbval.rows[i].cells[0].style.background="lightblue";
           tbval.rows[i].cells[0].style.color="";

           x.insertCell(1);
           tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
           tbval.rows[i].cells[1].style.background="lightgreen";
           x.insertCell(2);
           tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];
           tbval.rows[i].cells[2].style.background="lightgreen";
          
           x.insertCell(3);
           tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];
           tbval.rows[i].cells[3].style.background="lightgreen";
         
    

       }
        
        
        
          })}

</script>
</div>

<?php
include 'footer.php'
?>
</body>
</html>