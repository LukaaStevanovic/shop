const button=document.querySelector("#submit");
button.addEventListener("click", () => {
    var subscribe=document.getElementById("subscribe-mail").value;
    if(subscribe="" || subscribe.includes("@")===false)
    {
        alert(`Enter valid email adress.`)
    }
    else
    {
        alert(`Your email has been succesfuly subscribed`);
    }
})