<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

Route::get('/service', function () {
    return view('service');
}); 
Route::get('/plumbing', function () {
    return view('plumbing');
}); 
Route::get('/electrical', function () {
    return view('electrical');
}); 
Route::get('/sanitary', function () {
    return view('sanitary');
}); 
Route::get('/safety', function () {
    return view('safety');
}); 
Route::get('/paint', function () {
    return view('paint');
}); 
Route::get('/other', function () {
    return view('other');
}); 
Route::get('/civil', function () {
    return view('civil');
});

Route::get('/interior', function () {
    return view('interior');
});

Route::get('/waterproofing', function () {
    return view('waterproofing');
});

Route::get('/painting', function () {
    return view('painting');
});

Route::get('/fire-rated', function () {
    return view('fire-rated');
});

Route::get('/expansion-control', function () {
    return view('expansion-control');
});

Route::get('/flooring', function () {
    return view('flooring');
});

Route::get('/fabrication', function () {
    return view('fabrication');
});

Route::get('/glass', function () {
    return view('glass');
});

Route::get('/upvc', function () {
    return view('upvc');
});

Route::get('/carpentry', function () {
    return view('carpentry');
});

Route::get('/aluminum-kitchen', function () {
    return view('aluminum-kitchen');
});

Route::get('/gypsum', function () {
    return view('gypsum');
});

Route::get('/false-ceiling', function () {
    return view('false-ceiling');
});

Route::post('/submit-form', [FormController::class, 'submit'])->name('form.submit');

