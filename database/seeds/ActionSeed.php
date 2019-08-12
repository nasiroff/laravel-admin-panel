<?php

use Illuminate\Database\Seeder;

class ActionSeed extends Seeder
{



    public function run()
    {

        $actions = [];
        $counter = 0;
        foreach (\Illuminate\Support\Facades\Route::getRoutes()->getRoutes() as $route){
            $action = $route->getActionName();
            if ($action != "Closure") {
                $actionController = explode('@', $action);
                $actions[$counter]['action_controller'] = $actionController[0];
                $actions[$counter++]['action_method'] = $actionController[1];
            }
        }

        \App\Models\Action::insert($actions);
    }
}
