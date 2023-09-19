<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Models\Setting;

/**
 * APIs for managing settings
 */
class SettingsController extends Controller
{
    /**
     * Get all settings
     *
     * @return \Illuminate\Http\Response
     */
    public function actionIndex()
    {
        $settings = Setting::all();
        // ->mapToGroups(function ($item, $key) {
        //     return [$item['category'] => $item];
        // });
        return $this->sendSuccessReponse(['settings' => $settings]);
    }

    /**
     * Update a setting
     *
     * @param SettingRequest $request
     * @return \Illuminate\Http\Response
     */
    public function actionUpdate(SettingRequest $request)
    {
        foreach ($request->settings as $settingData) {
            $setting = Setting::find($settingData['id']);
            $setting->value = $settingData['value'];
            $setting->save();
        }

        return $this->sendSuccessReponse();
    }
}
