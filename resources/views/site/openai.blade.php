<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenAI Chat</title>
</head>
<body>

    <h1>OpenAI Chat</h1>

    <form action="{{ route('openai.chat') }}" method="post">
        @csrf
        <label for="input">Your Question:</label>
        <textarea name="input" id="input" rows="5" required></textarea>
        <br>
        <button type="submit">Ask</button>
    </form>

    @isset($output)
        <hr>
        <label for="output">Response:</label>
        <textarea id="output" rows="5" readonly>{{ $output }}</textarea>
    @endisset

</body>
</html>
