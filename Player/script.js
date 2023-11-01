const inputs = document.querySelectorAll("input"),
button = document.querySelector("button");



inputs.forEach((input, index1) =>{
    input.addEventListener("keyup", ()=> {
        const currentInput = input,
        nextInput = input.nextElementSibling,
        prevInput = input.previousElementSibling;

        if(currentInput.value.length > 1){
            currentInput.value = "";
            return;
        }

        if(nextInput && nextInput.hasAttribute("disabled") && currentInput.value !== ""){
            nextInput.removeAttribute("disabled");
            nextInput.focus();
        }
        
        document.addEventListener("keydown", function(e) {
            if (e.key === "Backspace") {
                // Find the index of the currently focused input
                const index1 = inputs.indexOf(document.activeElement);
        
                if (index1 !== -1 && prevInput) {
                    // Disable the currently focused input
                    inputs[index1].setAttribute("disabled", true);
                    
                    // Clear the value of the currently focused input
                    inputs[index1].value = "";
        
                    // If there's a previous input, focus on it
                    if (index1 > 0) {
                        prevInput.focus();
                    }
                }
            }
        });
        
        
        if(!inputs[3].disabled && inputs[3].value !== ""){
            button.classlist.add("active");
            return;
        }
        button.classlist.remove("active");
    });
});

window.addEventListener("load", () => inputs[0].focus());