USE sklep;

CREATE TABLE produkty (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nazwa VARCHAR(255) NOT NULL,
    opis TEXT NOT NULL,
    cena DECIMAL(10,2) NOT NULL,
    obrazek_url VARCHAR(255) NOT NULL
);

-- Przykładowe dane
INSERT INTO produkty (nazwa, opis, cena, obrazek_url) VALUES
('Buty', 'Wygodne buty do biegania.', 199.99, 'https://a.allegroimg.com/s1024/0c86f7/a566a2d346d495c233675e470ff9'),
('Buty', 'Wygodne buty do biegania.', 299.99, 'https://gigantsport.pl/14850-large_default/buty-sportowe-m%C4%99skie-4f-circle-4fmm00fspom026-czerwone.jpg'),
('Buty', 'Wygodne buty do biegania.', 399.99, 'https://i3.mediaport.pl/images/products/73/74/85/nike-dm0829010-air_max_alpha_trainer_5-1.jpg'),
('Buty', 'Wygodne buty do biegania.', 499.99, 'https://www.sport-club.pl/images/items/23331/fotoychqvn_big.jpg'),
('Koszulki', 'Wygodne Koszulki.', 199.99, 'https://elmix24.pl/15393-home_default/mascot-t-shirt-bawelniana-koszulka-robocza-calais-m-jasny-niebieski.jpg'),
('Koszulki', 'Wygodne Koszulki.', 299.99, 'https://elmix24.pl/15284-home_default/mascot-t-shirt-bawelniana-koszulka-robocza-calais-ciemny-granat-l.jpg'),
('Koszulki', 'Wygodne Koszulki.', 399.99, 'https://elmix24.pl/17063-home_default/mascot-t-shirt-bawelniana-koszulka-robocza-calais-czerwien-kubanska.jpg'),
('Koszulki', 'Wygodne Koszulki.', 499.99, 'https://elmix24.pl/15474-home_default/mascot-t-shirt-bawelniana-koszulka-robocza-calais-l-ciemny-antracyt.jpg'),
('Bluzy', 'Wygodne Bluzy.', 199.99, 'https://diwu.pl/1769-large_default/krotka-bluza-damska-biala.jpg'),
('Bluzy', 'Wygodne Bluzy.', 299.99, 'https://diwu.pl/1777-large_default/krotka-bluza-damska-biala.jpg'),
('Bluzy', 'Wygodne Bluzy.', 399.99, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJdet_7gAbX1aMqPGpcauHGln78b00feZFEUSQ7nH6EW1yT_ltzCAoJsLkoMizL54daWQ&usqp=CAU'),
('Bluzy', 'Wygodne Bluzy.', 499.99, 'https://mamokup.pl/image/cache/catalog/Product%20Image/Mullido/bluzy%20zip/Bluza%20z%20kapturem%20zip%20bezowa_mullido_mamokup_pl-1000x1000.jpg'),
('Czapki', 'Wygodne Czapki.', 199.99, 'https://radziszewska.com/media/products/01d4f430c2ab1842008e0121abbbee3e/images/thumbnail/big_cz2-czarma.jpg?lm=1730124180'),
('Czapki', 'Wygodne Czapki.', 299.99, 'https://el-presidente.pl/wp-content/uploads/2023/11/czapka-kurwa-ale-pizdzi-zimowa-el-presidente.jpg'),
('Czapki', 'Wygodne Czapki.', 399.99, 'https://sklep.wlokniarz.com/1482-large_default/czapka-zimowa-dziecieca-2024.jpg'),
('Czapki', 'Wygodne Czapki.', 499.99, 'https://esterashop.com/userdata/public/gfx/7048/ciepla-czapka-z-merynosa-bordowa.jpg'),
('Spodnie', 'Wygodne Spodnie.', 199.99, 'https://jarmix-militaria.pl/img/imagecache/38001-39000/1000x1000/product-media/38001-39000/DSC_5855-1000x1000-nobckgr.webp'),
('Spodnie', 'Wygodne Spodnie.', 299.99, 'https://rowerowelove.shop/environment/cache/images/1200_1200_productGfx_14911/FOOG-Spodnie-JUST-RIDE-.webp'),
('Spodnie', 'Wygodne Spodnie.', 399.99, 'https://images.mtbiker.sk/eshop/big/214490-kalhoty-mountain-equipment-zeno-fz-pant-black-sh-9564d7bb1bc1d1cf4ab8b21c842271b0.jpg'),
('Spodnie', 'Wygodne Spodnie.', 499.99, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTL3bTpG_ErjMiO7olHO9OOlQtSevICDUCcNQ&s');
