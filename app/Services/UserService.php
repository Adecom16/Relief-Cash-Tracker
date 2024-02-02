<?php

namespace App\Services;

use App\Models\User;
use App\Mail\VerificationEmail;
use Illuminate\Support\Facades\Mail;

class UserService
{
    public function sendVerificationEmail(User $user)
    {
        // Generate email verification token for the user
        $token = $user->email_verification_token;

        // Generate the verification URL
        $verificationUrl = route('verify.email', ['token' => $token]);

        // Send the verification email to the user
        Mail::to($user->email)->send(new VerificationEmail($verificationUrl));

        // Optionally, return a response or redirect to indicate that the email has been sent
    }
}
