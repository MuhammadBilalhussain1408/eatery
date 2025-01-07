<?php

if (!function_exists('validateRecaptcha')) {
    function validateRecaptcha($request)
    {
        $recaptchaResponse = $request->input('g-recaptcha-token');
        $secretKey = config('services.recaptcha_v3.secretKey');

        // Verify reCAPTCHA response using cURL
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, [
            'secret' => $secretKey,
            'response' => $recaptchaResponse,
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        $responseData = json_decode($response, true);

        if ($responseData && (!$responseData['success'] || $responseData['score'] < 0.5)) {
            return false;
        }

        // Proceed with form submission logic
        return true;
    }
}
