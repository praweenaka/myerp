function GetXmlHttpObject()
{
    var xmlHttp = null;
    try
    {
        // Firefox, Opera 8.0+, Safari
        xmlHttp = new XMLHttpRequest();
    } catch (e)
    {
        // Internet Explorer
        try
        {
            xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e)
        {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    return xmlHttp;
}

function new_inv() {

    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null) {
        alert("Browser does not support HTTP Request");
        return;
    }

    var url = "accountants_data.php";
    var params = "Command=" + "getdt";
    params = params + "&ls=" + "new";
    // params = params + "&uniq=" + document.getElementById('uniq').value; 
    xmlHttp.open("POST", url, true);

    xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlHttp.setRequestHeader("Content-length", params.length);
    xmlHttp.setRequestHeader("Connection", "close");

    xmlHttp.onreadystatechange = assign_dt;
    xmlHttp.send(params);
}



function assign_dt() {
    var XMLAddress1;
    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("id");
        var idno = XMLAddress1[0].childNodes[0].nodeValue;
        if (idno.length === 1) {
            idno = "A/0000" + idno;
        } else if (idno.length === 2) {
            idno = "A/000" + idno;
        } else if (idno.length === 3) {
            idno = "A/00" + idno;
        } else if (idno.length === 4) {
            idno = "A/0" + idno;
        } else if (idno.length === 5) {
            idno = "A/" + idno;
        }

        document.getElementById("accno").value = idno;

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("uniq");
        document.getElementById("uniq").value = XMLAddress1[0].childNodes[0].nodeValue;
    }
}



function imgup(cdata) {

    var files = $('#file-3')[0].files; //where files would be the id of your multi file input
//or use document.getElementById('files').files;

for (var i = 0, f; f = files[i]; i++) {
    var name = document.getElementById('file-3');
    var alpha = name.files[i];
    console.log(alpha.name);
    var data = new FormData();
    var batchno = document.getElementById('batchno').value;
    data.append('Command', "imageup");
    data.append('file', alpha);
    data.append('batchno', batchno);
    $.ajax({
        url: 'addfiles_data.php',
        data: data,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (msg) {
            alert(msg);

        }
    });
}
}

function addRow() {
    var k = Math.floor(Math.random() * 1000000);
    var table = document.getElementById("myTable");

    var row = table.insertRow(table.length);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);


    cell1.setAttribute("id", "code"+k);
    cell2.setAttribute("id", "name"+k);

    cell3.setAttribute("contenteditable", "true");
    cell3.setAttribute("onkeyup", "qtyTot();");

    // cell7.setAttribute("contenteditable", "true");
    cell1.innerHTML = '<input type="text"  class="form-control" >';
    cell2.innerHTML = '<input type="text"  class="form-control" >';
    cell3.innerHTML = '<input type="text"   class="form-control">';   
    cell4.innerHTML = '<input type="button" value="-" onclick="deleteRow(this)">';


    qtyTot();
}

function save_inv()
{

    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null)
    {
        alert("Browser does not support HTTP Request");
        return;
    }

    var url = 'accountants_data.php';
    var params = 'Command=' + 'save_inv';
    params = params + '&accno=' + document.getElementById('accno').value;
    params = params + '&name=' + document.getElementById('name').value;
    params = params + '&salutation=' + document.getElementById('salutation').value;
    params = params + '&fname=' + document.getElementById('fname').value;
    params = params + '&lname=' + document.getElementById('lname').value;
    params = params + '&address=' + document.getElementById('address').value;
    params = params + '&outno=' + document.getElementById('outno').value;
    params = params + '&nic=' + document.getElementById('nic').value; 
    params = params + '&possition=' + document.getElementById('possition').value; 
    xmlHttp.open("POST", url, true);
    xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlHttp.setRequestHeader("Content-length", params.length);
    xmlHttp.setRequestHeader("Connection", "close");

    xmlHttp.onreadystatechange = save;

    xmlHttp.send(params);



}

function save()
{
    var XMLAddress1;

    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")
    {
        if (xmlHttp.responseText == "Saved") {
           document.getElementById('msg_box').innerHTML = "<div class='alert alert-success' role='alert'><span class='center-block'>Saved</span></div>";
           setTimeout("location.reload(true);", 500);
       } else {
         document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>" + xmlHttp.responseText + "</span></div>";

     }

 }
}