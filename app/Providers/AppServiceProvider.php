<?php

namespace App\Providers;

use App\Http\Models\ExamTypes;
use App\Http\Models\Modules;
use App\Http\Models\PostCategories;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $examTypeList = ExamTypes::select('TypeTitle','TypeSlug')->orderBy('TypeID')->get();
        $moduleList = Modules::select('ModuleID','ModuleName')->get();
        $categoryList = PostCategories::select('CategoryID','CategoryName','CategoryType')->get();
        View::share([
            'examTypeList' => $examTypeList,
            'moduleList' => $moduleList,
            'categoryList' => $categoryList
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
