let id = 0;

function addStudent() {
    id +=1;

    let name = document.getElementById('name').value;
    let classRoll = document.getElementById('classRoll').value;
    let boardRoll = document.getElementById('boardRoll').value;
    let phoneNo = document.getElementById('phoneNo').value;
    let address = document.getElementById('address').value;

    document.getElementById('studentList').innerHTML += "<tr><td>"+id+"</td><td>"+name+"</td><td>"+classRoll+"</td><td>"+boardRoll+"</td><td>"+phoneNo+"</td><td>"+address+"</td></tr>";
}


