<?php

use yii\bootstrap4\Nav; ?>
<aside class="shadow">
    <?php try {
        echo Nav::widget([
            'options' => [
                'class' => 'd-flex flex-column nav-pills',
            ],
            'items' => [
                [
                    'label' => 'Map',
                    'url' => ['/site/index']
                ],
                [
                    'label' => 'Danh sách Sở-Ngành',
                    'url' => ['/so-nganh/index']
                ],
                [
                    'label' => 'Danh sách Khu công nghiệp',
                    'url' => ['/khu-cn/index']
                ]
            ]
        ]);
    } catch (Exception $e) {
    } ?>
</aside>