   /**
     * CPW2 by Rodrigo Prestes Machado
     * 
     * CPW2 is licensed under a
     * Creative Commons Attribution 4.0 International License.
     * You should have received a copy of the license along with this
     * work. If not, see <http://creativecommons.org/licenses/by/4.0/>.
     *
    */

// Global XMLHttpRequest
var xmlHttp;

/*
  Creates a client in the system
*/
function fnCreate() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  xmlHttp.onreadystatechange = createCallback;
  xmlHttp.open(
    "GET",
    "server.php?op=create&&name=" + name + "&&email=" + email,
    true
  );
  xmlHttp.send();
}

/*
  Callback to handle the response of the fnCreate function
*/
function createCallback() {
  if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
    var json = JSON.parse(xmlHttp.responseText);
    var table = document.getElementById("tableData");
    createRow(table, json);
  }
}

/*
Reads all clients from data base
*/
function fnRead() {
  xmlHttp = new XMLHttpRequest();
  xmlHttp.onreadystatechange = readCallback;
  xmlHttp.open("GET", "server.php?op=read", true);
  xmlHttp.send();
}

/*
Callback to handle the response of the fnRead function
*/
function readCallback() {
  if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
    // get json from the server
    var json = JSON.parse(xmlHttp.responseText);
    var table = document.getElementById("tableData");
    for (var key in json) {
      createRow(table, json[key]);
    }
  }
}

/*
Enables the form update
*/
function enableUpdate(id) {
  var tr = document.getElementById(id);
  var trChildNodes = tr.childNodes;

  for (var index = 0; index <= 1; index++) {
    // Get the table value
    var text = trChildNodes[index].innerText;
    trChildNodes[index].innerText = "";

    //Creating the input element
    var input = document.createElement("input");
    input.setAttribute("onblur", "fnUpdate(" + id + ");");
    // seting the old value
    input.value = text;
    // append to the column
    trChildNodes[index].appendChild(input);
  }
}

/*
Updates a client in the data base
*/
function fnUpdate(id) {
  var tr = document.getElementById(id);
  var trChildNodes = tr.childNodes;
  var textName = trChildNodes[0].firstChild.value;
  var textEmail = trChildNodes[1].firstChild.value;

  var url =
    "server.php?op=update&id=" +
    id +
    "&name=" +
    textName +
    "&email=" +
    textEmail;

  xmlHttp.onreadystatechange = updateCallback;
  xmlHttp.open("GET", url, true);
  xmlHttp.send();
}

/*
Callback to handle the response of the fnUpdate function
*/
function updateCallback() {
  if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
    var json = JSON.parse(xmlHttp.responseText);
    var tr = document.getElementById(json.id);
    var trChildNodes = tr.childNodes;
    trChildNodes[0].innerText = json.name;
    trChildNodes[1].innerText = json.email;
  }
}

/*
Deletes a client 
*/
function fnDelete(id) {
  xmlHttp.onreadystatechange = deleteCallback;
  xmlHttp.open("GET", "server.php?op=delete&&id=" + id, true);
  xmlHttp.send();
}

/*
  Callback to handle the response of the fnDelete function
*/
function deleteCallback() {
  if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
    var json = JSON.parse(xmlHttp.responseText);
    // If returns true of the server then remove table row
    if (json.result === "true") {
      //gets the table row
      var tr = document.getElementById(json.id);
      // get table row parent
      var trParent = tr.parentNode;
      // remove table row
      trParent.removeChild(tr);
    }
  }
}

/*
  DOM do create a table row
*/
function createRow(table, json) {
  // Creating table row with the data base id
  var tr = document.createElement("tr");
  tr.setAttribute("id", json.id);

  // Creating table columns
  var tdName = document.createElement("td");
  var tdEmail = document.createElement("td");
  var tdDelete = document.createElement("td");
  var tdUpdate = document.createElement("td");

  // adding data in the columns
  tdName.innerText = json.name;
  tdEmail.innerText = json.email;

  // adding the delete image to the column
  var imgDelete = document.createElement("img");
  imgDelete.setAttribute("src", "img/delete.png");
  imgDelete.setAttribute("onclick", "fnDelete(" + json.id + ");");
  tdDelete.appendChild(imgDelete);

  // adding the update image to the column
  var imgUpdate = document.createElement("img");
  imgUpdate.setAttribute("src", "img/update.png");
  imgUpdate.setAttribute("onclick", "enableUpdate(" + json.id + ");");
  tdUpdate.appendChild(imgUpdate);

  // adding the columns in the row
  tr.appendChild(tdName);
  tr.appendChild(tdEmail);
  tr.appendChild(tdDelete);
  tr.appendChild(tdUpdate);

  // adding the row in the table
  table.appendChild(tr);
}
