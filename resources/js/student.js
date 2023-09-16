document.addEventListener("DOMContentLoaded", () => {
    const optBtns = document.querySelectorAll(".btn-student-options");

    optBtns.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            const id = e.target.attributes.id.value.slice(-1);
            const tooltip = document.getElementById(`tooltip-student-${id}`);

            tooltip.classList.add("flex");
            tooltip.classList.remove("hidden");

            tooltip.addEventListener("mouseleave", () => {
                tooltip.classList.remove("flex");
                tooltip.classList.add("hidden");
            });
        });
    });

    const deleteBtns = document.querySelectorAll(".tooltip-option-delete");
    const deleteDialog = document.getElementById("dialog-student-delete");

    deleteBtns.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            deleteDialog.showModal();

            const id = e.target.attributes["data-id"].value;

            const form = document.getElementById("form-student-delete");
            form.action = `/students/${id}/delete`;
        });
    });

    const cancelDelBtn = document.getElementById("btn-delete-cancel");

    cancelDelBtn.addEventListener("click", () => {
        deleteDialog.close();
    });
});
