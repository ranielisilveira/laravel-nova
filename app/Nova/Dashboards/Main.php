<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\AveragePrice;
use App\Nova\Metrics\NewProducts;
use App\Nova\Metrics\NewUsers;
use App\Nova\Metrics\ProductsPerDay;
use App\Nova\Metrics\RegisteredUsers;
use App\Nova\Metrics\UsersPerRole;
use App\Nova\Metrics\UsersPerRolePizza;
use Laravel\Nova\Dashboards\Main as Dashboard;

class Main extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            new UsersPerRole(),
            new UsersPerRolePizza(),
            new RegisteredUsers(),
            new ProductsPerDay(),
            new AveragePrice(),
            new NewUsers(),
            new NewProducts()

        ];
    }


    /**
     * @return string
     */
    public function name()
    {
        return 'Dashboard';
    }
}
