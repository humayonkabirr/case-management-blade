<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Api\DistrictService;
use App\Services\Api\DivisionService;
use App\Services\Api\UnionService;
use App\Services\Api\UpazilaService;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    protected $divisionService, $districtService, $upazilaService, $unionService;

    public function __construct(DivisionService $divisionService, DistrictService $districtService, UpazilaService $upazilaService, UnionService $unionService)
    {
        $this->divisionService = $divisionService;
        $this->districtService = $districtService;
        $this->upazilaService = $upazilaService;
        $this->unionService = $unionService;
    }

    public function divisions()
    {
           return response()->json($this->divisionService->list());
    }

    public function districts($id = null)
    {
        return response()->json($this->districtService->listByDivision($id));
    }

    public function upazilas($id = null)
    {
        return response()->json($this->upazilaService->listByDistrict($id));
    }

    public function unions($id = null)
    {
        return response()->json($this->unionService->listByUpazila($id));
    }
}
