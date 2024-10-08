<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */
 'menu' => [[
		'icon' => 'fa fa-sitemap',
		'title' => 'Dashboard',
		'url' => 'javascript:;',
			'url' => '/dashboard',
			'title' => 'Dashboard',
			'route-name' => 'dashboard'
	],[
		'icon' => 'fa fa-utensils',
		'title' => 'POS System',
		'url' => '/pos/customer-order',
	],[
	'icon' => 'fa fa-gift',
		'title' => 'Manage Menu',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => '/menu/daftar',
			'title' => 'Daftar Menu',
			'route-name' => '/menu/daftar'
		],[
			'url' => '/menu/kategori',
			'title' => 'Daftar Kategori',
			'route-name' => '/menu/kategorir'
		]]
	],[
		'icon' => 'fa fa-table',
		'title' => 'Laporan',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
				'url' => '/laporan/transaksi',
				'title' => 'Transaksi',
				'route-name' => 'laporan-transaksi'
			],[
				'url' => '/laporan/pengeluaran',	
				'title' => 'Pengeluaran',
				'route-name' => 'laporan-pengeluaran'
			],[
				'url' => '/laporan/pemasukan',
				'title' => 'Pemasukan',
				'route-name' => 'laporan-pemasukan'
			],[
				'url' => '/laporan/penjualan',
				'title' => 'Penjualan',
				'route-name' => 'laporan-penjualan'
			]]
		],[
			'icon' => 'fa fa-cog',
				'title' => 'Pengaturan',
				'url' => 'javascript:;',
				'caret' => true,
				'sub_menu' => [[
					'url' => '/pengaturan',
					'title' => 'Pengaturan Struk',
					'route-name' => '/pengaturan'
				]]
	],[
		'icon' => 'fa fa-key',
		'title' => 'LRL',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => '/login',
			'title' => 'Login',
			'route-name' => 'login'
		],[
			'url' => '/register',
			'title' => 'Register',
			'route-name' => 'register'
		],[
			'url' => '/login',
			'title' => 'Logout',
			'route-name' => 'login'
		]]

	]]
];
