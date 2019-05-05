<?php

Route::post('commands/getResponse', 'CommandResponseController@getResponse');
Route::resource('commands', 'CommandController');
Route::post('sentence/tokenize', 'SentenceController@tokenizeSentence');
