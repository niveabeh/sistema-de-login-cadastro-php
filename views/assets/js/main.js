

const form = document.getElementById("searchForm");

form.addEventListener("submit", function (event) {
    event.preventDefault();

    const search = document.getElementById("pesquisar").value;

    window.location.href = "sistema.php?search=" + encodeURIComponent(search);
});



console.log("Arquivo carregado");