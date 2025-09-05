<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $category = $_POST["category"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $url = $_POST["url"];

    // تولید favicon از URL
    $parsed_url = parse_url($url);
    $favicon = $parsed_url["scheme"] . "://" . $parsed_url["host"] . "/favicon.ico";

    // مسیر فایل
    $json_file = "data/category_sites.json";

    // خواندن فایل
    $json_data = json_decode(file_get_contents($json_file), true);

    // اگر دسته‌بندی وجود نداشت، بساز
    if (!isset($json_data[$category])) {
        $json_data[$category] = [];
    }

    // اضافه کردن داده جدید
    $json_data[$category][] = [
        "title" => $title,
        "description" => $description,
        "favicon" => $favicon,
        "url" => $url
    ];

    // ذخیره در فایل
    file_put_contents($json_file, json_encode($json_data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

    // انتقال به صفحه موفقیت
    header("Location: success.php?success=1");
    exit;
}
?>