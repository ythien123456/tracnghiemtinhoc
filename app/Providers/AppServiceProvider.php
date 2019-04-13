<?php

namespace App\Providers;

use App\Http\Models\ExamTypes;
use App\Http\Models\Modules;
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
        $moduleList = Modules::select('ModuleID','ModuleName','ModuleType')->get();
        View::share(['examTypeList' => $examTypeList, 'moduleList' => $moduleList]);
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
