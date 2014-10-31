<?php

Route::get('/home', function()
{
return View::make('home');
});
Route::get('/about', function()
{
return View::make('about');
});

Route::post('contact', function()
{
$data = Input::all();
$rules = array(
'subject' => 'required',
'message' => 'required'
);

$validator = Validator::make($data, $rules);

if($validator->fails()) {
return Redirect::to('contact')->withErrors($validator)->withInput();
}

$emailcontent = array (
'subject' => $data['subject'],
'emailmessage' => $data['message']
);

Mail::send('emails.contactemail', $emailcontent, function($message)
{
$message->to('support@learninglaravel.net','Learning Laravel Support')
->subject('Contact via Our Contact Form');
});

return 'Your message has been sent';

});