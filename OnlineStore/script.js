//fetching button from page
let fetchBtn = document.getElementById('btn');

//adding event listener to button
fetchBtn.addEventListener('click', items);

//items function will run when we click on the button
function items() {
    //fetching search id from page
    var srch = document.getElementById('srch').value;
    var para = `srch=${srch}`;
    console.log(para);

    //instantiate an xhr object
    var xhr = new XMLHttpRequest();

    //open object
    xhr.open('POST', 'db.php', true);

    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
    //sending information

    xhr.send(para);
    xhr.onload = function() {
        var output = document.getElementById('output-ajax');
        //if output is successfull this will run
        if (this.status == 200) {
            output.innerHTML = this.response;
        } //if any error occured it will show the error
        else {
            output.innerHTML = `Error with status code ${this.status}`;
        }
    }
}