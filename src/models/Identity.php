<?php

/*
 * HIAM module for MRDP database compatibility
 *
 * @link      https://github.com/hiqdev/hiam-mrdp
 * @package   hiam-mrdp
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hiam\mrdp\models;

/**
 * Identity model for MRDP database.
 *
 * @property string $seller
 * @property integer $seller_id
 */
class Identity extends \hiam\models\Identity
{
    public $seller;
    public $seller_id;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return array_merge(parent::rules(), [
            ['seller_id',       'integer'],

            ['seller',          'trim'],
            ['seller',          'string', 'min' => 2, 'max' => 64],
        ]);
    }
}
