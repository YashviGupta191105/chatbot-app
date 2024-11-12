<?php

namespace App\Http\Controllers;
use App\Services\VultrService; // Import VultrService correctly

use Illuminate\Http\Request;
use App\Models\ChatbotResponse;

class ChatbotController extends Controller
{
    private $vultrService;

    public function __construct(VultrService $vultrService)
    {
        $this->vultrService = $vultrService;
    }

    public function index()
    {
        return view('index'); // Ensure this Blade file exists
    }

    public function handleMessage(Request $request)
    {
        $message = $request->input('message'); // Get the message input
        
        // Check if the message is empty
        if (empty($message)) {
            return response()->json(['reply' => 'Please enter a valid message.']);
        }
    
        // Normalize the message (convert to lowercase for comparison)
        $message = strtolower($message);
    
        // Retrieve the first response where any of the keywords match
        $response = ChatbotResponse::whereRaw('LOWER(keywords) LIKE ?', ["%{$message}%"])->first();
    
        if ($response) {
            // Return the matched response if found
            return response()->json(['reply' => $response->response]);
        }
    
        // Default response if no match is found
        $defaultReply = 'I am not sure how to respond to that, but I can help you with menopause-related queries.';
        return response()->json(['reply' => $defaultReply]);
    }
}

