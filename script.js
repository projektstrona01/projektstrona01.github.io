// Funkcja do pobierania i wyświetlania produktów
async function fetchProducts() {
    try {
        const response = await fetch('http://localhost/Zadankoszkola/15.12.2024B/get_products.php'); // Pobieranie danych
        const products = await response.json(); // Parsowanie danych JSON

        const productsContainer = document.getElementById('products-container'); // Znajdź kontener na produkty
        productsContainer.innerHTML = ''; // Wyczyść zawartość kontenera

        // Tworzenie elementów HTML dla każdego produktu
        products.forEach(product => {
            const productElement = document.createElement('div');
            productElement.classList.add('product');

            productElement.innerHTML = `
                <img src="${product.obrazek_url}" alt="${product.nazwa}">
                <h3>${product.nazwa}</h3>
                <p>${product.opis}</p>
                <p><strong>Cena: ${product.cena} PLN</strong></p>
            `;

            productsContainer.appendChild(productElement);
        });
    } catch (error) {
        console.error('Błąd podczas pobierania produktów:', error);
    }
}

// Wywołanie funkcji przy ładowaniu strony
document.addEventListener('DOMContentLoaded', fetchProducts);