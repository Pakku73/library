const searchInput = document.getElementById("search");
const categoriesInput = document.getElementById("categories");
const resultsDiv = document.getElementById("results");

searchInput.addEventListener("input", searchRequest);
categoriesInput.addEventListener("input", searchRequest);

function searchRequest() {
    const search = searchInput.value;
    const categories = categoriesInput.value;
 
    let url = `https://www.googleapis.com/books/v1/volumes?q=`;
 
    if (search) {
        url += `intitle:${search}`;
    }

    if (categories) {
        url += `+subject:${categories}`;
    }
 
    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error('Erreur lors de la recherche');
            }
            return response.json();
        })
        .then(data => {
            displayResults(data);
        })
        .catch(error => {
            console.error("Erreur lors de la recherche :", error);
        });
}

function displayResults(data) {
    resultsDiv.innerHTML = "";
 
    if (data.items && data.items.length > 0) {
        data.items.forEach(item => {
            const title = item.volumeInfo.title;
            const authors = item.volumeInfo.authors ? item.volumeInfo.authors.join(", ") : "Auteur inconnu";
            const categories = item.volumeInfo.categories ? item.volumeInfo.categories.join(", ") : "Catégorie inconnue";
            const thumbnail = item.volumeInfo.imageLinks ? item.volumeInfo.imageLinks.thumbnail : "https://via.placeholder.com/128x196?text=Image+non+disponible";
 
            const bookDiv = document.createElement("div");
            bookDiv.innerHTML = `
                <h2>${title}</h2>
                <img src="${thumbnail}" alt="${title}" style="width: 128px; height: 196px;">
                <p>Auteur(s): ${authors}</p>
                <p>Catégorie(s): ${categories}</p>
            `;
 
            resultsDiv.appendChild(bookDiv);
        });
    } else {
        resultsDiv.innerHTML = "<p>Aucun livre trouvé.</p>";
    }
}
