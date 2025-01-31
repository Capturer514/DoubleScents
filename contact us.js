document.getElementById("contactForm").addEventListener("submit"), function(event) {
    event.preventDefault(); 
}

let name=document.getElementById("name").value;
let email=document.getElementById("email").value;
let message=document.getElementById("message").value;

if (name&&email&&message) {
    alert("Thank you for the message, " + name + ".We will be back to you soon!")
    document.getElementById("contactForm").requestFullscreen();
} else {
    alert("Please fill in all the fields first")
}
