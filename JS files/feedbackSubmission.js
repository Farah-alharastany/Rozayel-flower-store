function thankMessage() {
    let email = document.forms["feedForm"]["email"].value;
    let Name = document.forms["feedForm"]["Name"].value;
    alert("Thank you " + Name + " for your faeedback, we will respond to you at this email: " + email);
}