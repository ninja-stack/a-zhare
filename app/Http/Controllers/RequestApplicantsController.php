<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommunityRequest;
use Illuminate\Http\Response;
use Log;
use JWTAuth;

use App\Post;
use illuminate\Http\Request;
use App\Mail\ApplicantMail;
use Illuminate\Support\Facades\Mail;

class RequestApplicantsController extends Controller
{
  public function getRequestApplicants(Request $request){
    $postId = $request->get('postId');
    
    $post = Post::find($postId);

    if(!$post) {
      return Response::create([
        'message' => 'No such post',
        'errors' => [
          'post' => [
            'Invalid post'
          ]
        ]
      ], 404, [
        'Content-Type' => 'application/json',
      ]);
    }

    $request_applicants = $post->applicants;

    return Response::create([
      'message' => 'Get request applicant successfully.',
      'applicants' => $request_applicants
    ], 200, [
      'Content-Type' => 'application/json',
    ]);
  }

  public function sendApplicantMail(Request $request){
    $email = $request->get('email');
    Mail::to($email)->send(new ApplicantMail()); 
    return  Response::create([
      'message' => 'Email send successfuly',
    ], 404, [
      'Content-Type' => 'application/json',
    ]);
  }
}