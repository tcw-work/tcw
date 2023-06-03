<?php
$json = '{
    "registration_ids": [
        "cKqBtNWWf5M:APA91bF-3lKFfgxivDjBH-G0jwvW5xtsDxT4Hf6oouNA0arUqsOC7_Qe28MG1Ru9t8fiVS9jF9-JXIT4--q5V5Fo3mbcbbAYNERO7aKgVqBIYKUbREpEyMZzkvPWMlm_MmdeTfBVnVwH",
        "fnJ7zBo1SfE:APA91bGO4pI7AXej0hw_eWuT8uLmfUKwRyZjEgwYoE28kf7iAew36wS0oznEsAWnTSI15lTkpgOM_J763eJzOojlcLN-qxkQzAJb7lfoehZpoFvYuyWfMN-x8k6E2QGNzL_gXIRNxPQq",
    ],
        "notification":
        {
            "title": "TCWプッシュ通知テスト送信",
            "body": "TCW 送信テストですの本文です",
             "click_action":"/"
        },

    }';

$ch = curl_init();

$headers = array(
    'Content-Type: application/json',
    'Authorization: key=AAAATiunwiY:APA91bH9h5-2QOcsIM5YXBRo0lMybb3puR0AI_p2dbcXTa21gHkT7WfslBaKMdCnaUHTjGg72FyQRLP3uaQwz-Ahn8xFkVHX8uIknAlE3x1QLEK1_vzbmwPK4Jbh4bIrCu5nAYJWw-tQ'
);

curl_setopt_array($ch, array(
    CURLOPT_URL => 'https://fcm.googleapis.com/fcm/send',
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => $json
));

$response = curl_exec($ch);

curl_close($ch);

?>