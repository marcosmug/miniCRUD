const toggles = document.querySelectorAll(".toggle");

toggles.forEach((toggle) => {
    toggle.addEventListener("click", () => {
        // Convert the data to array
        const allElementNames = toggle.getAttribute("data-toggle").split(" ");

        // For each element in the array, toggle the display: flex/block <--> none
        allElementNames.forEach((elem) => {
            elem = document.querySelector(elem);

            if (getComputedStyle(elem).display == "flex" || getComputedStyle(elem).display == "block") {
                elem.style.display = "none";
            } else {
                elem.style.display = "flex";
            }
        });
    });
});

function myFunction() {
    alert("Werkt helaas niet :( ");
}

    const loginPassword = document.querySelector("input[type=password]");
    const loginButton = document.querySelector("button[type=submit]");
    const loginForm = document.querySelector("form");


    loginButton.addEventListener("click", (e) => {
                e.preventDefault();

                let msg = "";

                if (loginPassword.value.length <= 2) {
                    msg += "Wachtwoord is te kort (minimaal 2 tekens)\n";
                }

                if (msg == "") {
                    loginForm.submit();
                } else {
                    alert(msg.trim());
                }

            
});