document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".book-btn").forEach(button => {
        button.addEventListener("click", function () {
            let slotId = this.dataset.id;
            fetch("book.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: "id=" + slotId
            }).then(response => response.text()).then(data => {
                if (data.trim() === "success") location.reload();
            });
        });
    });

    document.querySelectorAll(".release-btn").forEach(button => {
        button.addEventListener("click", function () {
            let slotId = this.dataset.id;
            fetch("release.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: "id=" + slotId
            }).then(response => response.text()).then(data => {
                if (data.trim() === "success") location.reload();
            });
        });
    });
});
