<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog_cms".
 *
 * @property integer $Id
 * @property string $Titulo
 * @property string $Contenido
 * @property integer $Publicar
 * @property string $Autor
 */
class blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog_cms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Titulo', 'Contenido', 'Publicar', 'Autor'], 'required'],
            [['Contenido'], 'string'],
            [['Publicar'], 'integer'],
            [['Titulo', 'Autor'], 'string', 'max' => 50],
            [['Titulo'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Titulo' => 'Titulo',
            'Contenido' => 'Contenido',
            'Publicar' => 'Publicar',
            'Autor' => 'Autor',
        ];
    }
}
