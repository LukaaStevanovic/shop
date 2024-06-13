const button=document.querySelector("#book-btn");
button.addEventListener("click", ()=>{
    var fName=document.getElementById("name").value;
    var lName=document.getElementById("surname").value;
    var bookdate=document.getElementById("appointment").value;
    var doctor=document.querySelector('input[name="doctortype"]:checked').value;
    if(fName=="" || lName=="" || bookdate=="")
    {
        alert("Please fill all fields.");
    }
    else{
    alert(`Thank you, your appointment at ${doctor} is saved under name ${fName} ${lName} on ${bookdate}`);
    }
})
