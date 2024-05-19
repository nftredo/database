<?php
$nums = 99;
$i = 0; // Начинаем счет с 0

while ($i <= $nums) {
    $filename = $i . '.json'; // Формируем имя файла
    
    // Форматируем номер для Diablo Gato #
    $number = $i + 1;

    // Форматируем номер для content_url и image
    $media_number = $i + 1;

    // Записываем данные в файл
    file_put_contents($filename, '{
  "name": "Diablo Gato #' . $number . '",
  "description": "The great, terrible and good friend of Diablo Gato",
  "content_url": "https://nftnova.org/nft/gato/v/' . $media_number . '.mp4",
  "image": "https://nftnova.org/nft/gato/i/' . $media_number . '.jpg",
  "attributes": [
      {
        "trait_type": "Rare",
        "value": "WANTED"
      }
    ]
}');

    $i++; // Инкрементируем $i
}
?>
