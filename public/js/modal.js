/* ===== LEGAL NOTICES MODAL =====*/
window.onload = () => {
    // We retrieve all the opening buttons of the modal
    const modalButtons = document.querySelectorAll("[data-toggle=modal]");

    for(let button of modalButtons) {
        button.addEventListener("click", function(e) {
            // We stop the navigation
            e.preventDefault();
            // We get the data-target
            let target = this.dataset.target
            // Retrieve the correct modal
            let modal = document.querySelector(target);
            // Display the modal window
            modal.classList.add("show");

            // We get the closing buttons
            const modalClose = modal.querySelectorAll("[data-dismiss=dialog]");

            for(let close of modalClose) {
                close.addEventListener("click", () => {
                    // We delete the modal window
                    modal.classList.remove("show");
                });
            }

            // We handle the closing of the modal window when clicking on the gray area
            modal.addEventListener("click", function(){
                this.classList.remove("show");
            });
            // We avoid the propagation of the click from a child to its parent
            modal.children[0].addEventListener("click", function(e) {
                // We stop the propagation
                e.stopPropagation();
            })
        });
    }
}