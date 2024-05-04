<?php

namespace App\Services;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

class SettingService
{
    function GetSetting()
    {
        return Cache::rememberForever('setting', function () {
            return Setting::pluck('value', 'key')->toArray();
        });
    }
    function SetSetting()
    {
        $setting = $this->GetSetting();
        config()->set('setting', $setting);
    }
    function clearSetting()
    {
        Cache::forget('setting');
    }
}
