<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['login'] = 'login';

$route['projet'] = 'projet';
$route['projet/nouveau'] = 'projet/nouveau';
$route['projet/recherche'] = 'projet/recherche';
$route['projet/modifier'] = 'projet/modifier';
$route['projet/supprimer/(:any)'] = 'projet/supprimer/$1';
$route['projet/listeTache'] = 'projet/listeTache';
$route['projet/ajouterTache'] = 'projet/ajouterTache';
$route['projet/retirerTache'] = 'projet/retirerTache';
$route['projet/listeEquipier'] = 'projet/listeEquipier';
$route['projet/ajouterEquipier'] = 'projet/ajouterEquipier';
$route['projet/retirerEquipier'] = 'projet/retirerEquipier';
$route['projet/(:any)'] = 'projet/view/$1';

$route['tache'] = 'tache';
$route['tache/nouveau'] = 'tache/nouveau';
$route['tache/modifier'] = 'tache/modifier';
$route['tache/supprimer/(:any)'] = 'tache/supprimer/$1';
$route['tache/(:any)'] = 'tache/view/$1';

$route['personne'] = 'personne';
$route['personne/nouveau'] = 'personne/nouveau';
$route['personne/recherche'] = 'personne/recherche';
$route['personne/modifier'] = 'personne/modifier';
$route['personne/supprimer/(:any)'] = 'personne/supprimer/$1';
$route['personne/(:any)'] = 'personne/view/$1';

$route['default_controller'] = 'login';

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
/* Conserver au cas ou 
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
*/
