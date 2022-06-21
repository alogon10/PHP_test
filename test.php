<?php
$company = htmlspecialchars($_POST['name'], ENT_QUOTES);
print $company . "さんご登録ありがとうございます";