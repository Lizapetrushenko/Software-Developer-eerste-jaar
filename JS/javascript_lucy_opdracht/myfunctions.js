function showDateTime()
{_
   /* const timestamp = Date.now();
    const currentDate = new Date (timestamp);
    const formattedDate = currentDate.toLocaleString();
    document.getElementById('dateTime').innerHTML = formattedDate;*/
const currentdate = new Date();
let year = currentdate.getFullYear();
let month = currentdate.getMonth();
let day = currentdate.getDay();
let hours = currentdate.getHours();
let minutes = currentdate.getMinutes();
let seconds = currentdate.getSeconds();

let formattedDate = "De datum is:" + day + '-'+ month + "-" + year;
document.getElementById("dateTime").innerHTML = formattedDate;

}
function showHelloInAlertBox()
{
    alert("Hello World");
}
function showHelloInConsole()
{
    console.log("Hello World");
}
function changeText()
{
    document.getElementById("resultText").innerHTML = "DIT IS DE NIEUWE TEKST";
}
function changeOutputDivStyle(){
    console.log(document.getElementById("outputDiv").className);
    document.getElementById("outputDiv").className = "newStyle";
}