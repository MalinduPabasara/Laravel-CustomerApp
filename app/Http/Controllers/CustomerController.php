<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Services\CustomerService;
use App\Transformers\CustomerTransformer;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Prewk\Result\ResultException;

class CustomerController extends Controller
{
    /**
     * @var CustomerService
     */
    protected CustomerService $customerService;

    /**
     * @param CustomerService $customerService
     */
    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $result = Customer::all();

        return fractal($result, new CustomerTransformer)->respond(201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     * @throws ResultException
     * @throws Exception
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'nic' => 'required',
            'email' => 'required',
            'birthday' => 'required'
        ]);

        $result = $this->customerService->addCustomer($request);

        return fractal($result->unwrap(), new CustomerTransformer)->respond(201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     * @throws Exception
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'nic' => 'required',
            'email' => 'required',
            'birthday' => 'required'
        ]);

        $result = $this->customerService->updateCustomer($request, $id);

        return fractal($result->unwrap(), new CustomerTransformer)->respond(201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $post = Customer::find($id);
        $post->delete();

    }
}
