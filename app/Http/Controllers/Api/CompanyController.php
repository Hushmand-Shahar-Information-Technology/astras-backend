<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Services\CompanyService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{
    protected $companyService;

    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    public function index()
    {
        return response()->json($this->companyService->getAll());
    }

    public function store(CompanyRequest $request)
    {
        $company = $this->companyService->create($request->validated());
        return response()->json($company, Response::HTTP_CREATED);
    }

    public function show(Company $company)
    {
        return response()->json($company);
    }

    public function update(CompanyRequest $request, Company $company)
    {
        $updatedCompany = $this->companyService->update($company, $request->validated());
        return response()->json($updatedCompany);
    }

    public function destroy(Company $company)
    {
        $this->companyService->delete($company);
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
