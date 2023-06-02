function save()
{
    var d = new Date();
    d.setTime(d.getTime() + (7*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = `backgroundColor=${document.getElementById('bck-clr').value}; ${expires};`
    document.cookie =`textColor=${document.getElementById('txt-clr').value}; ${expires}`
    
}

function reset()
{
    document.cookie = "backgroundColor=; Max-Age=-99999999;";
    document.cookie = "textColor=; Max-Age=-99999999;";

    document.body.style.backgroundColor = "#222930";
    document.body.style.color = "#e9e9e9";
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

function changeColors() {
    if (document.cookie) {
        document.body.style.backgroundColor = getCookie("backgroundColor");
        document.body.style.color = getCookie("textColor");
        alert(`You set the text color to ${getCookie("textColor")} and the background color to ${getCookie("backgroundColor")}`)
    }
}