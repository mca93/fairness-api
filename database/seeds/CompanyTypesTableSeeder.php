<?php

use Illuminate\Database\Seeder;
use App\Models\CompanyType;

class CompanyTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company_type = new CompanyType;

        $company_type->name = "Empresa Nacional";
        $company_type->save();

        $company_type = new CompanyType;

        $company_type->name = "Empresa Nacional";
        $company_type->save();

        $company_type = new CompanyType;

        $company_type->name = "Empresa Nacional";
        $company_type->save();

        $company_type = new CompanyType;

        $company_type->name = "Empresa Estrangeira";
        $company_type->save();

        $company_type = new CompanyType;

        $company_type->name = "Petty Cash";
        $company_type->save();

        $company_type = new CompanyType;

        $company_type->name = "Empresa em Nome Individual";
        $company_type->save();

        $company_type = new CompanyType;

        $company_type->name = "Instituições do Estado";
        $company_type->save();

        $company_type = new CompanyType;

        $company_type->name = "Associações";
        $company_type->save();

        $company_type = new CompanyType;

        $company_type->name = "ATM Agências";
        $company_type->save();

    }
}
