<?php

namespace App\Models;

use App\Http\Controllers\HomeController;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Settings
 * @package App\Models
 *
 * @property $name;
 * @property @value;
 *
 */
class Settings extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'settings';


    /**
     * @var array
     */
    protected $fillable = ['name', 'value'];

    /**
     * @return array
     */
    static function getAll()
    {

        $settingsData = [
            'lang' => HomeController::getLang(),
            'logoImgFile' => '',
            'ico' => '',
            'phone1' => '',
            'phone2' => '',
            'email' => '',
            'langing_bg_1' => '',
            'langing_bg_2' => '',
            'photoForPhotoGallery' => '',
            'videoForVideoGallery' => '',
        ];

        $defaultWithLangs = ['title', 'keywords', 'description', 'logotext', 'home_section_title', 'home_section_text'];

        foreach ($defaultWithLangs as $k) {
            $settingsData[$k . '_ro'] = '';
            $settingsData[$k . '_ru'] = '';
            $settingsData[$k . '_en'] = '';
        }

        $settings = Settings::all();
        foreach ($settings as $row){
            $settingsData[$row->name] = $row->value;
        };

        if (!$settingsData['logoImgFile']) {
            $settingsData['logoImgFile'] = 'no-image.png';
        }

        return $settingsData;
    }
}
