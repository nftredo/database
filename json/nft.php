<?php
$nums = 50;
$i = 0; // Начинаем счет с 0

while ($i <= $nums) {
    $filename = $i . '.json'; // Формируем имя файла
    
    // Форматируем номер для Diablo Gato #
    $number = $i + 1;

    // Форматируем номер для content_url и image
    $media_number = $i + 1;

    // Записываем данные в файл
    file_put_contents($filename, '{
  "name": "REDO 2.0 #' . $number . '",
  "description": "A homage to the creation of Pavel Durov, founder of TON - The Open Network and Telegram, Resistance Dog ($REDO), is a symbolic represtentation of our fight against censorship and freedom through digital resistance.",
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
