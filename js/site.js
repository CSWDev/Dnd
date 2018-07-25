function nextSection(sender)
{
    var id = $(sender).closest("section").attr("id");
    document.getElementById(id).style.display = "none";
    id++;
    document.getElementById(id).style.display = "table";
}

function backSection(sender)
{
    var id = $(sender).closest("section").attr("id");
    document.getElementById(id).style.display = "none";
    id--;
    document.getElementById(id).style.display = "table";
}

function reChooseRace(sender)
{
    var id = $(sender).closest("section").attr("id");
    document.getElementById(id).style.display = "none";
    document.getElementById("1").style.display = "table";
}

function reChooseClass(sender)
{
    var id = $(sender).closest("section").attr("id");
    document.getElementById(id).style.display = "none";
    document.getElementById("2").style.display = "table";
}


function getClass(sender)
{
    document.getElementById("userClass").innerHTML = (sender.parentNode.parentNode.id);
    document.getElementById("userClassImg").src = $(sender).parent().parent().find("img").attr("src");
}

function getRace(sender)
{
    document.getElementById("userRace").innerHTML = (sender.parentNode.parentNode.id);
    document.getElementById("userRaceImg").src = $(sender).parent().parent().find("img").attr("src");

}
