<!DOCTYPE html>
<html>
<body>

<p>Display some text when the checkbox is checked:</p>

Yes: <input type="checkbox" id="myCheck"  onclick="myFunction()">
No: <input type="checkbox" id="checkbox[]"  onclick="myFunction()">
Yes: <input type="checkbox" id="myCheck"  onclick="myFunction()">
No: <input type="checkbox" id="checkbox[]"  onclick="myFunction()">
<input id="text" nam="" style="display:none">

<script>
function myFunction() {
    var checkBox = document.getElementById("myCheck");
    var text = document.getElementById("text");
    if (checkBox.checked == true){
        text.style.display = "block";
    } else {
       text.style.display = "none";
    }
}
</script>

</body>
</html>
