async function loadAssemblies(category) {
    try {
        const response = await fetch(`catalog/${category}`);
        const data = await response.json();

        if (data.error) {
            console.error("Ошибка:", data.error);
            return;
        }

        document.getElementById("assemblies").innerHTML = data.map(item => `<p>${item}</p>`).join("");

        // Подсветка активной кнопки
        document.querySelectorAll(".categories button").forEach(btn => btn.classList.remove("active"));
        document.querySelector(`[data-category="${category}"]`).classList.add("active");
    } catch (error) {
        console.error("Ошибка загрузки:", error);
    }
}

document.querySelectorAll(".categories button").forEach(button => {
    button.addEventListener("click", () => {
        const category = button.getAttribute("data-category");
        loadAssemblies(category);
    });
});