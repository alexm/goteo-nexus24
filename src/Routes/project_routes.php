<?php
/*
 * This file is part of the Goteo Package.
 *
 * (c) Platoniq y Fundación Goteo <fundacion@goteo.org>
 *
 * For the full copyright and license information, please view the README.md
 * and LICENSE files that was distributed with this source code.
 */

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$prjs = new RouteCollection();

//// PROJECT /////
/// TODO: more methods... ///

$prjs->add('project-edit', new Route(
    '/edit/{id}/{step}',
    array(
        '_controller' => 'Goteo\Controller\ProjectController::editAction',
        'step' => 'userProfile'
        )
));

$prjs->add('project-create', new Route(
    '/create',
    array('_controller' => 'Goteo\Controller\ProjectController::createAction')
));

// Favourite project

$prjs->add('project-favourite', new Route(
    '/favourite/{project_id}',
    array('_controller' => 'Goteo\Controller\ProjectController::favouriteAction')
));

// Delete Favourite project

$prjs->add('project-delete-favourite', new Route(
    '/delete-favourite',
    array('_controller' => 'Goteo\Controller\ProjectController::DeletefavouriteAction')
));

// Calculate investors average

$prjs->add('project-investors-required', new Route(
    '/investors-required',
    array('_controller' => 'Goteo\Controller\ProjectController::investorsRequiredAction',
        )
));

//TODO: quitar esta guarrada:
$prjs->add('project-raw', new Route(
    '/raw/{id}',
    array('_controller' => 'Goteo\Controller\ProjectController::rawAction')
));

$prjs->add('project-delete', new Route(
    '/delete/{id}',
    array('_controller' => 'Goteo\Controller\ProjectController::deleteAction')
));

$prjs->add('project-sections', new Route(
    '/{id}/{show}/{post}',
    array('_controller' => 'Goteo\Controller\ProjectController::indexAction',
        'id' => null, //optional
        'show' => 'home', //default
        'post' => null //optional
        )
));

return $prjs;