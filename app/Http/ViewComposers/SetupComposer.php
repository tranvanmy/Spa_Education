<?php

namespace App\Http\ViewComposers;

use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;
use App\Models\Setup;

class SetupComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        if (Schema::hasTable((new Setup())->getTable())) {
            $view->with('webSetup', Setup::first() ?: new Setup());
        }
    }
}
