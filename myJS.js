
function submitForm(pForm)
{
    document.getElementById("demo").innerHTML = "";
    if (pForm.username.value.length == 0)
    {
        document.getElementById("demo").innerHTML = "Enter a user name!";
        return;
    }
    else
    {
        var xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
            document.getElementById("demo").innerHTML = this.responseText;
        };
        xhttp.open("GET", "getUser.php?name=" + pForm.username.value, true);
        xhttp.send();
    }
}