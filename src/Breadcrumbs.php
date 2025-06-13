<?php

namespace hyper;

class Breadcrumbs extends \yii\bootstrap5\Breadcrumbs
{
    public $options = ['class' => 'breadcrumb m-0'];
    public $homeLink = [
        'label' => 'Hyper',
        'url'   => ['/'],
    ];
}
