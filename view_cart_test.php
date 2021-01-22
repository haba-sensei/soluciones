<?php

$ruta = "https://dniruc.apisperu.com/api/v1/ruc/";
$token = "?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6Imx5Y2FudHJvcG9uYXR1cmFsQGdtYWlsLmNvbSJ9.9R-_ZZidOyMpwGkOQzHARJUuKaZEv19HOyQlxac5DGQ";
$documento = "20601883164";
echo file_get_contents($ruta.$documento.$token);