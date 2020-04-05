document.getElementById("btntoggle").onclick = function () {
    if (document.getElementById("topbar").style.marginTop == "-270px") {
        document.getElementById("topbar").style.marginTop = "0px";
    } else {
        document.getElementById("topbar").style.marginTop = "-270px";
    }
    if (document.getElementById("content").style.paddingTop == "0px") {
        document.getElementById("content").style.paddingTop = "180px";
    } else {
        document.getElementById("content").style.paddingTop = "0px";
    }
}

var text, parser, xmlDoc;
text = "<index>" +
    "<lesson>" +
    "<title>Home page</title>" +
    "<url>https://tieuchanlong.github.io</url>" +
    "</lesson>" +
    "<lesson>" +
    "<title>Unity game</title>" +
    "<url>unitygame.html</url>" +
    "</lesson>" +
    "<lesson>" +
    "<title> C# projects</title>" +
    "<url>csharp-project.html</url>" +
    "</lesson>" +
    "<lesson>" +
    "<title>Augmented Reality project</title>" +
    "<url>ar-vr-project.html</url>" +
    "</lesson>" +
    "<lesson>" +
    "<title>Contributors</title>" +
    "<url>contributors.html</url>" +
    "</lesson>" +
    "</index>";

parser = new DOMParser();
xmlDoc = parser.parseFromString(text, "text/xml");
var n = xmlDoc.getElementsByTagName("title").length;
for (var i = 0; i < n; ++i) {
    var title = xmlDoc.getElementsByTagName("title")[i].childNodes[0].nodeValue;
    var url = xmlDoc.getElementsByTagName("url")[i].childNodes[0].nodeValue;
    var ul = document.getElementById("choiceList");
    var li = document.createElement("li");
    var a = document.createElement("a");
    a.setAttribute("href", url);
    a.appendChild(document.createTextNode(title));
    li.appendChild(a);
    ul.appendChild(li);
}
