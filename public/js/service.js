function validateForm() {
    console.log('postClick');
    let contactNameInput = document.getElementById("contactName");
    let contactName = contactNameInput.value;
    let contactEmailInput = document.getElementById("contactEmail");
    let contactEmail = contactEmailInput.value;

    // Validatie
    if(!contactName.match(/^[a-zA-Z_]+$/)){
        alert('Vul een naam in die enkel bestaat uit letters, hoofdletters en/of underscore');
        contactNameInput.value = "";
        return false;
    } else if (!contactEmail.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
        alert('Vul een geldig e-mailadres in');
        contactEmailInput.value = "";
        return false;
    }
    return true;
}