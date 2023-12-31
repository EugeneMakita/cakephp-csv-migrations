<?php
/**
 * Copyright (c) Qobo Ltd. (https://www.qobo.biz)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Qobo Ltd. (https://www.qobo.biz)
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Utility\Inflector;

// Get title from the entity
$title = Inflector::singularize(Inflector::humanize(Inflector::underscore($moduleAlias)));

$options = [
    'entity' => $entity,
    'fields' => $fields,
    'title' => __('Edit {0}', $title),
    'handlerOptions' => ['entity' => $entity]
];
echo $this->element('CsvMigrations.View/post', ['options' => $options]);
