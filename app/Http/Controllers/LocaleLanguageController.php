<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleLanguageController extends Controller
{
    public function changeLanguage(string $iso)
    {
        if ($iso == 'ar' || $iso == 'en') {
            session()->put('locale',$iso);
            $notifications = array('message' => __('files.language was changed'), 'alert-type' => 'success');
            return redirect()->back()->with($notifications);
        }

        $notifications = array('message' => __('files.language was not found'), 'alert-type' => 'info');
        return redirect()->back()->with($notifications);
    }

    public function locale()
    {
        return app()->getLocale();
    }

    public function play()
    {
        return url()->full();
    }
}
