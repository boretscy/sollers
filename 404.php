<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404", "Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Страница не найдена");
?>

<div class="container my-5 text-center">
    <h1 class="display-4 fw-bold mb-3">404</h1>
    <p class="fs-4 text-muted mb-4">К сожалению, запрашиваемая страница не найдена.</p>
    <a href="/" class="btn-model-action bg-yaorange text-white text-decoration-none px-4 py-3 b-radius-yaradius-8 d-inline-block">На главную</a>
</div>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>
