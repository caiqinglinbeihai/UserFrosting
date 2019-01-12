<?php
/**
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @copyright Copyright (c) 2019 Alexander Weissman
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/LICENSE.md (MIT License)
 */

/**
 * Routes for administrative activity monitoring.
 */
$app->group('/activities', function () {
    $this->get('', 'UserFrosting\Sprinkle\Admin\Controller\ActivityController:pageList')
        ->setName('uri_activities');
})->add('authGuard');

$app->group('/api/activities', function () {
    $this->get('', 'UserFrosting\Sprinkle\Admin\Controller\ActivityController:getList');
})->add('authGuard');
