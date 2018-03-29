<?php

namespace common\models;

use Yii;
use 	yii\helpers\Url;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $category_id
 * @property string $type
 * @property string $modelNo
 * @property string $manufactureDate
 * @property double $cost
 * @property int $isFeatured
 * @property int $isNew
 * @property string $imageUrl
 * @property string $imageUrl2
 * @property string $date
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'category_id', 'type', 'cost', 'imageUrl', 'date'], 'required'],
            [['description'], 'string'],
            [['category_id', 'warranty', 'isFeatured', 'isNew'], 'integer'],
            [['manufactureDate', 'date'], 'safe'],
            [['cost'], 'number'],
            [['name'], 'string', 'max' => 255],
            [['type'], 'string', 'max' => 100],
            [['modelNo'], 'string', 'max' => 50],
            [['imageUrl', 'imageUrl2'], 'file',  'skipOnEmpty' => false, 'extensions' => 'png, gif, jpeg, jpg'],
            [['name'], 'unique'],
        ];
    }


    public function upload()
    {
        if ($this->validate()) {


            $this->imageUrl->saveAs(Url::to('@frontend/web/uploads/'). $this->imageUrl->baseName . '.' . $this->imageUrl->extension);
            $this->imageUrl2->saveAs(Url::to('@frontend/web/uploads/') . $this->imageUrl2->baseName . '.' . $this->imageUrl2->extension);
            return true;
        } else {
            return false;
        }
    }



    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'category_id' => 'Category ID',
            'type' => 'Type',
            'modelNo' => 'Model No',
            'manufactureDate' => 'Manufacture Date',
            'cost' => 'Cost',
            'warranty' => 'Warranty',
            'isFeatured' => 'Featured',
            'isNew' => 'New',
            'imageUrl' => 'Image Url',
            'imageUrl2' => 'Image Url 2',
            'date' => 'Date',
        ];
    }




}
