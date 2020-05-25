<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$text = $_POST['text'];
$token = "1238076847:AAGnS8DuObE16cFP-kogVU43_xWRe5rP3tw";
$chat_id = "-486643221";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон:' => $phone,
  'Комментарий: ' => $text,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>
