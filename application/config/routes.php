<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'controllerWeb';
$route['registrasi'] = 'controllerMember/registrasi';
$route['login'] = 'controllerMember/login';
$route['logout'] = 'controllerMember/logout';
$route['profil'] = 'controllerMember/profil';
$route['profil/edit'] = 'controllerMember/editProfil';
$route['profil/newAd'] = 'controllerIklan/buatIklan';
$route['profil/pesan'] = 'controllerPesan/daftarPesan';
$route['profil/editAd/(:any)'] = 'controllerIklan/ubahIklan/$1';//urutan routes
$route['profil/hapusAd/(:any)'] = 'controllerIklan/hapusIklan/$1';
$route['profil/listAd/(:any)'] = 'controllerIklan/listIklanMember/$1';
$route['profil/listAd'] = 'controllerIklan/listIklanMember';
$route['profil/(:any)'] = 'controllerMember/lihatProfilMemberLain/$1';
$route['iklan/(:any)/(:any)'] = 'controllerIklan/tampilIklan/$1/$2';
$route['iklan/(:any)'] = 'controllerIklan/listSeluruhIklan/$1';
$route['admin/kelolaSistem/member/hapusMember/(:any)'] = 'controllerAdmin/hapusMember/$1';
$route['admin/kelolaSistem/iklan/hapusIklan/(:any)'] = 'controllerAdmin/hapusIklan/$1';
$route['admin/kelolaSistem/member'] = 'controllerAdmin/listMember';
$route['admin/login'] = 'controllerAdmin/loginAdmin';
$route['admin/logout'] = 'controllerAdmin/logoutAdmin';
$route['admin/kelolaSistem'] = 'controllerAdmin/kelolaSistem';
$route['admin/kelolaSistem/iklan'] = 'controllerAdmin/listIklan';
$route['pesan/(:any)/(:any)'] = 'controllerPesan/buatPesan/$1/$2';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
