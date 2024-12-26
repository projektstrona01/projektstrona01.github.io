<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Nagłówek -->
    <header>
        <div class="logo">
            <h1><a href="index.php">SKLEP</a></h1>
        </div>
        <div class="timer" id="timer"></div>
        <div class="menu">
            <ul>
                <li><a href="index.php" class="opcje_menu">Home</a></li>
                <li><a href="index.php#sekcja_nowosci" class="opcje_menu">Nowości</a></li>
                <li><a href="index.php#sekcja_hity" class="opcje_menu">HITY</a></li>
                <li><a href="index.php#sekcja_wyprzedaz" class="opcje_menu">Wyprzedaż</a></li>
                <li><a href="kolekcje.html" class="opcje_menu">Kolekcje</a></li>
                <li><a href="onas.html" class="opcje_menu">O nas</a></li>
                <li><a href="kontakt.html" class="opcje_menu">Kontakt</a></li>
                <li><a href="koszyk.html"> <i class="fas fa-shopping-cart"></i></a></li>
            </ul>
        </div>
    </header>

    <!-- Sekcja Główna -->
    <section class="strona_glowna">
        <div class="strona_glowna_tresc">
            <h2>NAJLEPSZY SKLEP NA ŚWIECIE</h2>
            <p>Odkryj naszą najnowszą kolekcję!!!</p>
            <a href="#" class="przycisk_1">↓↓↓ Zobacz Okazję ↓↓↓</a>
        </div>
    </section>

    <!-- Sekcja produktów -->
    <section class="produkty" id="produkty">
        <div class="grupy_nazw_kolekcji">
            <!-- Sekcja Nowości -->
            <div class="sekcja_nowosci" id="sekcja_nowosci">
                <div class="naglowek_sekcja_nowosci">
                    <h2 class="nazwa_sekcja">Nowości</h2>
                </div>
                <div class="grupa_produkty" id="produkty_nowosci">
                    <!-- Produkty będą załadowane tutaj przez JS -->
                </div>
            </div>

            <!-- Sekcja Hity -->
            <div class="sekcja_hity" id="sekcja_hity">
                <div class="naglowek_sekcja_hity">
                    <h2 class="nazwa_sekcja">Hity</h2>
                </div>
                <div class="grupa_produkty" id="produkty_hity">
                    <!-- Produkty będą załadowane tutaj przez JS -->
                </div>
            </div>

            <!-- Sekcja Wyprzedaż -->
            <div class="sekcja_wyprzedaz" id="sekcja_wyprzedaz">
                <div class="naglowek_sekcja_wyprzedaz">
                    <h2 class="nazwa_sekcja">Wyprzedaż</h2>
                </div>
                <div class="grupa_produkty" id="produkty_wyprzedaz">
                    <!-- Produkty będą załadowane tutaj przez JS -->
                </div>
            </div>
        </div>
    </section>

    <script>
        // Funkcja do ładowania produktów
        fetch('get_products.php')
        .then(response => response.json())
        .then(data => {
            const nowosciSection = document.querySelector('#produkty_nowosci');
            const hitySection = document.querySelector('#produkty_hity');
            const wyprzedazSection = document.querySelector('#produkty_wyprzedaz');

            // Ładowanie produktów Nowości
            data.nowosci.forEach(product => {
                const produktDiv = document.createElement('div');
                produktDiv.classList.add('produkt');
                produktDiv.innerHTML = `
                    <img src="${product.obrazek_url}" alt="${product.nazwa}">
                    <h3>${product.nazwa}</h3>
                    <p>${product.opis}</p>
                    <span class="cena">${product.cena} PLN</span>
                    <a href="#" class="przycisk_dodaj_do_koszyka" onclick="addToCart(event, ${product.id}, '${product.nazwa}', '${product.obrazek_url}', ${product.cena})">Dodaj do koszyka</a>
                `;
                nowosciSection.appendChild(produktDiv);
            });

            // Ładowanie produktów Hity
            data.hity.forEach(product => {
                const produktDiv = document.createElement('div');
                produktDiv.classList.add('produkt');
                produktDiv.innerHTML = `
                    <img src="${product.obrazek_url}" alt="${product.nazwa}">
                    <h3>${product.nazwa}</h3>
                    <p>${product.opis}</p>
                    <span class="cena">${product.cena} PLN</span>
                    <a href="#" class="przycisk_dodaj_do_koszyka" onclick="addToCart(event, ${product.id}, '${product.nazwa}', '${product.obrazek_url}', ${product.cena})">Dodaj do koszyka</a>
                `;
                hitySection.appendChild(produktDiv);
            });

            // Ładowanie produktów Wyprzedaż
            data.wyprzedaz.forEach(product => {
                const produktDiv = document.createElement('div');
                produktDiv.classList.add('produkt');
                produktDiv.innerHTML = `
                    <img src="${product.obrazek_url}" alt="${product.nazwa}">
                    <h3>${product.nazwa}</h3>
                    <p>${product.opis}</p>
                    <span class="cena">${product.cena} PLN</span>
                    <a href="#" class="przycisk_dodaj_do_koszyka" onclick="addToCart(event, ${product.id}, '${product.nazwa}', '${product.obrazek_url}', ${product.cena})">Dodaj do koszyka</a>
                `;
                wyprzedazSection.appendChild(produktDiv);
            });
        })
        .catch(error => console.error('Błąd przy ładowaniu produktów:', error));

        // Funkcja do dodawania produktów do koszyka
        function addToCart(event, id, nazwa, obrazek_url, cena) {
            event.preventDefault(); // Zapobieganie domyślnemu działaniu linku

            // Pobranie koszyka z localStorage lub pustej tablicy, jeśli koszyk jest pusty
            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            // Sprawdzenie, czy produkt już jest w koszyku
            const productIndex = cart.findIndex(product => product.id === id);
            if (productIndex === -1) {
                // Jeśli produkt nie jest w koszyku, dodajemy go
                cart.push({ id, nazwa, obrazek_url, cena, quantity: 1 });
            } else {
                // Jeśli produkt jest w koszyku, zwiększamy ilość
                cart[productIndex].quantity += 1;
            }

            // Zapisanie zmodyfikowanego koszyka w localStorage
            localStorage.setItem('cart', JSON.stringify(cart));

            // Potwierdzenie dodania produktu
            alert('Produkt dodany do koszyka!');
        }
        
    </script>

        <!-- Sekcja o nas -->
    <section class="o_nas">
        <h2 class="sekcja_o_nas">O Nas</h2>
        <p class="o_nas_tekst">Nasza marka oferuje odzież premium, którą cechuje elegancja, wygoda i najwyższa jakość. Kreujemy modę dla tych, którzy cenią sobie ponadczasowy styl.</p>
        <a href="onas.html" class="dowiedz_sie_wiecej">Dowiedz się więcej</a>
    </section>

    <!-- Stopka -->
    <footer>
        <div class="footer-kolumna">
            <h3>Kontakt</h3>
            <p>Email: kontakt@odziez.pl</p>
            <p>Telefon: +48 123 456 789</p>
        </div>
        <div class="footer-kolumna">
            <h3>Szybkie linki:</h3>
            <ul>
                <li><a href="#">Polityka prywatności</a></li>
                <li><a href="#">Regulamin</a></li>
                <li><a href="#">Zwroty i reklamacje</a></li>
            </ul>
        </div>
        <div class="footer-kolumna">
            <h3>Śledź nas</h3>
            <ul class="social-media">
                <li><a href="https://www.facebook.com/">Facebook</a></li><br>
                <li><a href="https://www.instagram.com/">Instagram</a></li><br>
                <li><a href="https://x.com/?lang=pl">X</a></li>
            </ul>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>
