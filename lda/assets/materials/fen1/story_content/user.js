function ExecuteScript(strId)
{
  switch (strId)
  {
      case "5XH2Dy7vg0m":
        Script1();
        break;
      case "6C5TXCUN2tC":
        Script2();
        break;
      case "5ldQFPlM214":
        Script3();
        break;
      case "633nECbvpOV":
        Script4();
        break;
      case "6S2Xk9yBXPG":
        Script5();
        break;
      case "5t7sbI0Tqsh":
        Script6();
        break;
      case "5uzZrJlLndz":
        Script7();
        break;
      case "6k40SU0yk8z":
        Script8();
        break;
      case "6TsJv0hq4Mh":
        Script9();
        break;
      case "5kgrsmEpr1I":
        Script10();
        break;
  }
}

function Script1()
{
  var start = new Date();
var startComparable = Date.parse(start);
var player = GetPlayer();
player.SetVar("1_Start",startComparable);
}

function Script2()
{
  var end = new Date();
var endComparable = Date.parse(end);
var player = GetPlayer();
player.SetVar("1_End",endComparable);
}

function Script3()
{
  var player = GetPlayer();
var startComparable = player.GetVar('1_Start');
var endComparable = player.GetVar('1_End');
var ms = endComparable - startComparable;
var s = ms % 1000;
ms = (ms - s) / 1000;
var secs = ms % 60;
ms = (ms - secs) / 60;
var mins = ms % 60;
var hrs = (ms - mins) / 60;
player.SetVar("1_Hours",hrs);
player.SetVar("1_Minutes",mins);
player.SetVar("1_Seconds",secs);
}

function Script4()
{
  var start = new Date();
var startComparable = Date.parse(start);
var player = GetPlayer();
player.SetVar("2_Start",startComparable);
}

function Script5()
{
  var end = new Date();
var endComparable = Date.parse(end);
var player = GetPlayer();
player.SetVar("2_End",endComparable);
}

function Script6()
{
  var player = GetPlayer();
var startComparable = player.GetVar('2_Start');
var endComparable = player.GetVar('2_End');
var ms = endComparable - startComparable;
var s = ms % 1000;
ms = (ms - s) / 1000;
var secs = ms % 60;
ms = (ms - secs) / 60;
var mins = ms % 60;
var hrs = (ms - mins) / 60;
player.SetVar("2_Hours",hrs);
player.SetVar("2_Minutes",mins);
player.SetVar("2_Seconds",secs);
}

function Script7()
{
  var start = new Date();
var startComparable = Date.parse(start);
var player = GetPlayer();
player.SetVar("3_Start",startComparable);
}

function Script8()
{
  var end = new Date();
var endComparable = Date.parse(end);
var player = GetPlayer();
player.SetVar("3_End",endComparable);
}

function Script9()
{
  var player = GetPlayer();
var startComparable = player.GetVar('3_Start');
var endComparable = player.GetVar('3_End');
var ms = endComparable - startComparable;
var s = ms % 1000;
ms = (ms - s) / 1000;
var secs = ms % 60;
ms = (ms - secs) / 60;
var mins = ms % 60;
var hrs = (ms - mins) / 60;
player.SetVar("3_Hours",hrs);
player.SetVar("3_Minutes",mins);
player.SetVar("3_Seconds",secs);
}

function Script10()
{
  var player = GetPlayer();

var name = player.GetVar("firstName");
var KelimeD = player.GetVar("counter");
var KelimeY = player.GetVar("wrongcounter");
var kelimem = player.GetVar("1_Minutes");
var kelimes = player.GetVar("1_Seconds");
var okumam = player.GetVar("2_Minutes");
var okumas = player.GetVar("2_Seconds");
var BilgiD = player.GetVar("counter2");
var BilgiY = player.GetVar("wrongcounter2");
var bilgim = player.GetVar("3_Minutes");
var bilgis = player.GetVar("3_Seconds");

var formData = new FormData();
formData.append("Ad", name);
formData.append("KelimeTestiD", KelimeD);
formData.append("KelimeTestiY", KelimeY);
formData.append("KelimeM", kelimem);
formData.append("KelimeS", kelimes);
formData.append("OkumaM", okumam);
formData.append("OkumaS", okumas);
formData.append("BilgiTestiD", BilgiD);
formData.append("BilgiTestiY", BilgiY);
formData.append("BilgiM", bilgim);
formData.append("BilgiS", bilgis);

var request = new XMLHttpRequest();
request.open("POST", "https://script.google.com/macros/s/AKfycbyESd2dJQVjI5OM3lvWSzzT4gxXLaH3sp1Xzjg-FkKn5RG94lpLUuNbaBVHB3PSZVqHZQ/exec");
request.send(formData);
}

