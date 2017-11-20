<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 13.11.17
 * Time: 15:13
 */

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;


class UploadForm extends Model
{
    /*
     * @var UploadedFile
     */
    public $file;

    public function rules()
    {
        return [
          ['file', 'file', 'skipOnEmpty' => false, 'extensions' => 'zip'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->file->saveAs('../uploads/'. $this->file->baseName .'_'.time() .'.' . $this->file->extension);
            return true;
        } else {
            return false;
        }
    }
}