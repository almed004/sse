<!DOCTYPE html> 
<html>
<head>
<title>SSE Show</title>
</head>
<body>
<h1 id="basket"></h1>
<script>
    var source = new EventSource("sender.php");

        source.onmessage = function(event) {            
            document.getElementById("basket").innerHTML = event.data;
        }
</script>
</body>
</html>