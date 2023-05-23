function ExecuteScript(strId)
{
  switch (strId)
  {
      case "6nkiDGCUVhd":
        Script1();
        break;
      case "6L7RFpIQTcB":
        Script2();
        break;
      case "5jrSjq5Ulz3":
        Script3();
        break;
      case "5tn8vwRF089":
        Script4();
        break;
      case "6CGRi9eXV10":
        Script5();
        break;
      case "5c8Y7Tu2fIN":
        Script6();
        break;
      case "6nha8o1F25G":
        Script7();
        break;
      case "6VWPKCQAcZV":
        Script8();
        break;
      case "6IzeuhoJ0to":
        Script9();
        break;
      case "6a8DaeqFaWy":
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
request.open("POST", "https://script.google.com/macros/s/AKfycbzqowt6sNayTdT7plMNs0sXMms4wTAD415Zq49AnKcASRD39Q2-PFiW8hxA9Pi5Gmrl/exec");
request.send(formData);
}

