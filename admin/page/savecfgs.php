<?php

require_once("../config/database.php");
if (session_status() !== PHP_SESSION_ACTIVE) session_start();
switch ($_REQUEST['do']) {
    case "base":

        // 假设表单数据已经提交，获取表单数据并更新数据库
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $sitename = $_POST['sitename'];
            $logo = $_POST['logo'];
            $favicon = $_POST['favicon'];
            $info_1 = $_POST['info_1'];
            $info_2 = $_POST['info_2'];
            $info_3 = $_POST['info_3'];
            $tongji_code = $_POST['tongji_code'];

            // 调用更新数据的方法
            $result = updateFormData($sitename, $logo, $favicon, $info_1, $info_2, $info_3, $tongji_code);

            echo $result; // 返回更新数据的结果
        }

        break;

}

// 更新数据到数据库
function updateFormData($sitename, $logo, $favicon, $info_1, $info_2, $info_3, $tongji_code) {
    global $conn;

    // 使用预处理语句更新数据，防止 SQL 注入
    $stmt = $conn->prepare("UPDATE mb_config SET config_value = ? WHERE config_key = ?");

    // 依次更新表单数据
    $stmt->bind_param("ss", $config_value, $config_key);

    $config_key = 'webname';
    $config_value = $sitename;
    $stmt->execute();

    $config_key = 'logo';
    $config_value = $logo;
    $stmt->execute();

    $config_key = 'favicon';
    $config_value = $favicon;
    $stmt->execute();

    $config_key = 'info_1';
    $config_value = $info_1;
    $stmt->execute();

    $config_key = 'info_2';
    $config_value = $info_2;
    $stmt->execute();

    $config_key = 'info_3';
    $config_value = $info_3;
    $stmt->execute();

    $config_key = 'tongji_code';
    $config_value = $tongji_code;
    $stmt->execute();

    // 检查是否有错误
    if ($stmt->errno) {
        error_log("更新数据失败: " . $stmt->error, 0);
        return 500; // 返回 500 表示更新数据失败
    }

    $stmt->close();

    return 200; // 返回 200 表示更新数据成功
}
