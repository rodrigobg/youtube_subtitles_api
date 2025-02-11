# youtube_subtitles_api

Extract subtitles in any language directly from YouTube with this 100% Free PHP API.

## Features
- Extract YouTube subtitles in multiple languages
- Simple and easy-to-use PHP implementation
- Requires a free API key
- Returns clean and formatted subtitle text
- Limit of 150 requests per day
- Increase your limit buy credits api

## Get Your Free API Key
To use this API, you need to sign up for a free API key:

[Get your free API key here](https://api.dicasbrasil.com.br/gestao/signup)

## Installation

1. Clone the repository:
   ```sh
   git clone https://github.com/rodrigobg/youtube_subtitles_api.git
   cd youtube_subtitles_api
   ```

2. Install dependencies using Composer:
   ```sh
   composer install
   ```

## Usage

```php
<?php

// Include the vendor autoload file
include_once("vendor/autoload.php");

// Define the API key
$api_key = "YOUR_API_KEY_HERE";

// Get the video ID from the GET request
$videoid = isset($_GET['videoid']) ? $_GET['videoid'] : null;

if ($videoid) {
    // Get the API URL for the given video ID
    $youtube_api = get_youtube_api_url($videoid);

    if ($youtube_api) {
        // Make a CURL request to fetch subtitles
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $youtube_api,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => http_build_query(["api_key" => $api_key]),
            CURLOPT_HTTPHEADER => ["Content-Type: application/x-www-form-urlencoded"],
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        var_dump($response);  // Display the response
    } else {
        echo "Invalid YouTube API URL.";
    }
} else {
    echo "Missing 'videoid' parameter.";
}
?>
```

## API Endpoint

You can also use this API via a web request. Example:

```sh
curl -X POST "https://api.yourdomain.com/extratortube?videoid=Vt-yaSLqopE" \
     -d "api_key=YOUR_API_KEY_HERE"
```

## Contributing
Contributions are welcome! Feel free to submit a pull request or open an issue.

Please consider making small donations to my PayPal account of at least $3.00 per month so that I can continue to keep the project running for everyone, since with many people using it the server costs will become more expensive. I thank everyone in advance and look forward to your feedback.
My PayPal donation link:
https://api.dicasbrasil.com.br/doar

## License
This project is licensed under the MIT License.




