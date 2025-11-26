<?php
namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
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
        $products = Product::where('is_active', 1);
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
        DB::beginTransaction();
        try {
            $product = new Product();
            if ($id) {
                $product = Product::findOrFail($id);
            }
            $product->product_name = $data['product_name'];
            $product->quantity = $data['product_quantity'];
            $product->unit_price = $data['unit_price'];
            if ($data['attachment_url']) {
                deleteFromDisk($product->attachment_url);
                $product->attachment_url = storeToDisk($data['attachment_url'], 'products', time());
            }
            $product->user_id = Auth::id();
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
        Product::whereId($id)->update(['is_active' => 0]);
        return deleteResponse();
    }
}
