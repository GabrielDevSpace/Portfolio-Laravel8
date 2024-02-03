<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenAI API Test</title>
</head>
<body>

    <div>
        <h1>OpenAI API Test</h1>

        <?php
            $api_key = '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';
            $prompt = 'Say this is a test';

            $url = 'https://api.openai.com/v1/chat/completions';
            $model = 'gpt-3.5-turbo';
            $max_tokens = 7;
            $temperature = 0;

            $data = [
                'model' => $model,
                'prompt' => $prompt,
                'max_tokens' => $max_tokens,
                'temperature' => $temperature,
            ];

            $headers = [
                'Content-Type: application/json',
                'Authorization: Bearer ' . $api_key,
            ];

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            $result = curl_exec($ch);

            if (curl_errno($ch)) {
                echo 'Error: ' . curl_error($ch);
            }

            curl_close($ch);

            $response = json_decode($result);

            if (isset($response->choices[0]->text)) {
                echo '<p>Generated Text: ' . $response->choices[0]->text . '</p>';
            } else {
                echo '<p>Error in API response</p>';
            }
        ?>
    </div>

</body>
</html>
