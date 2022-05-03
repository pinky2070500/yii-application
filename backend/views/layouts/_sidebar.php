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
            ]
        ]);
    } catch (Exception $e) {
    } ?>
</aside>