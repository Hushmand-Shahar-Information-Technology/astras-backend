<?php

namespace App\Services;

use App\Models\Company;

class CompanyService
{
    public function getAll()
    {
        return Company::latest()->get();
    }

    public function create($data)
    {
        return Company::create(
            [
                'name' => $data['name'],
            ]
        );
    }

    public function update(Company $company, $data)
    {
        $company->update(
            [
                'name' => $data['name'],
            ]
        );
        return $company;
    }

    public function delete(Company $company)
    {
        return $company->delete();
    }
}