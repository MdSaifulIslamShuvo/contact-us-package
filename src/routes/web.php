<?php

Route::group(["namespace" => "Shuvo\Contact\Http\Controllers"], function () {

    Route::get("contact", "ContactController@contactForm")->name("contact");
    Route::post("contact", "ContactController@sendContact")->name("contact");

});
