const FormDeleter = document.querySelectorAll("form.deleter");

FormDeleter.forEach((FormDeleter) => {
    FormDeleter.addEventListener("submit", function (event) {
        event.preventDefault();
        const Choice = window.confirm(
            "Sei sicuro di voler eliminare il progetto"
        );
        if (Choice) {
            this.submit();
        }
    });
});
