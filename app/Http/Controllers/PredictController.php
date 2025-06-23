<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PredictController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): RedirectResponse
    {
        // Validate the request
        $request->validate([
            'input' => 'required|string|max:300',
        ]);

        $input = $request->input('input');

        try {
            // Make API call to sentiment analysis service
            // You can replace the URL with your own API endpoint in the .env, but since this project is specifically for https://github.com/Silvikusuma04/Analisis-Sentimen-Mypertamina it will use the provided URL by default
            $apiUrl = config('services.sentiment.api_url');
            $response = Http::post($apiUrl, [
                'text' => $input
            ]);

            // Check if response is successful
            if ($response->successful()) {
                $indonesianSentiment = $response->json('sentiment');

                // Map Indonesian sentiment to English
                $sentimentMap = [
                    'positif' => 'positive',
                    'negatif' => 'negative',
                    'netral' => 'neutral'
                ];

                $prediction = $sentimentMap[strtolower($indonesianSentiment)] ?? $indonesianSentiment;
            } else {
                // Handle API error
                return redirect()->route('dashboard')
                    ->withErrors(['input' => 'Failed to get prediction: ' . $response->body()])
                    ->withInput();
            }
        } catch (\Exception $e) {
            // Handle network or other exceptions
            return redirect()->route('dashboard')
                ->withErrors(['input' => 'Failed to connect to prediction service: ' . $e->getMessage()])
                ->withInput();
        }

        // Store the prediction to history
        auth()->user()->history()->create([
            'input' => $input,
            'prediction' => $prediction,
        ]);

        // Return to dashboard with prediction data
        return redirect()->route('dashboard')
            ->with('prediction', $prediction)
            ->with('input', $input);
    }
}
