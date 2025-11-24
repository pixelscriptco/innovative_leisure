<?php
namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class Productontroller extends Controller
{
    protected function list()
    {
        if(hasReadAccess(4)) {
            return view('admin.product.list');
        }
        return redirect()->route('dashboard');
    }

    protected function listDT()
    {
        $products = Product::query();
        return DataTables::eloquent($products)
            ->setRowAttr(['data-id' => '{{$id}}'])
            ->addIndexColumn()
            ->addColumn('attachment_url_formatted', function($product) {
                return getFromDisk($product->attachment_url);
            })
            ->addColumn('read_access', '{{hasReadAccess(4)}}')
            ->addColumn('write_access', '{{hasWriteAccess(4)}}')
            ->addColumn('delete_access', '{{hasDeleteAccess(4)}}')
            ->addColumn('role', '{{role()}}')
            ->toJson();
    }

    protected function modal($id = false)
    {
        if ($id) {
            $product = Product::find($id);
        } else {
            $product = new Product();
        }
        return view('admin.product.modal', compact('product'));
    }

    protected function save(ProductRequest $data, $id = false)
    {
//        dd($data->all());
        DB::beginTransaction();
        try {
            $product = new Product();
            if ($id) {
                $product = Product::findOrFail($id);
            }
            $product->title = $data['title'];
            $product->location = $data['location'];
            $product->completion_date = date('Y-m-d', strtotime($data['completion_date']));
            $product->service_provided = $data['service_provided'];
            $product->description = $data['project_description'];
            if ($data['attachment_url']) {
                deleteFromDisk($product->attachment_url);
                $product->attachment_url = storeToDisk($data['attachment_url'], 'projects', time());
            }
            $product->save();
            DB::commit();
            return successResponse();
        } catch (\Exception $e) {
            DB::rollBack();
            return errorResponse($e->getMessage());
        }

    }

    protected function delete($id)
    {
        Product::whereId($id)->delete();
        return deleteResponse();
    }
}
