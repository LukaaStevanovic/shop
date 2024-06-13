var btn=document.querySelector("#message-btn")
btn.addEventListener('click', ()=>{
    var fName=document.getElementById("name").value;
    var lName=document.getElementById("surname").value;
    var msg=document.getElementById("message").value;
    if(fName=="" || lName=="" || msg=="")
    {
        alert("Please fill all fields.")
    }
    else{alert(`Your message under name ${fName} ${lName} has been submitted. Preview of message: "${msg}"`);}
})