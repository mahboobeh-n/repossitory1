<?php


namespace App\Http\Controllers\back;
use App\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{

    public function index()
    {
        $portfolios = Portfolio::orderBy('id', 'DESC')->paginate(20);

        return view('back.portfolios.portfolios', compact('portfolios'));
    }


    public function create()
    {
        return view('back.portfolios.create');

    }


    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'فیلد عنوان را وارد نمایید'
        ];
        $validatedData = $request->validate([
            'name' => 'required',

        ], $messages);

        $portfolio = new Portfolio();
        $portfolio->name = $request->input('name');
        $portfolio->tag = $request->input('tag');
        $portfolio->link = $request->input('link');
        $portfolio->description = $request->input('description');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $location = public_path('/images/');
            $file->move($location, $filename);
            $portfolio->image = $filename;

        } else {

            $portfolio->image = '';
        }
        $portfolio->save();

        $msg = "ذخیره ی نمونه کار جدید با موفقیت انجام شد";
        return redirect(route('admin.portfolios'))->with('success', $msg);
    }


    public function show(Category $category)
    {
        //
    }


    public function edit(Portfolio $portfolio)
    {


//        $portfolios = Portfolio::all();

        return view('back.portfolios.edit',compact('portfolio'));

    }


    public function update(Request $request, Portfolio $portfolio)
    {
        $messages = [
            'name.required' => 'فیلد عنوان را وارد نمایید',
        ];
        $validatedData = $request->validate([
            'name' => 'required',

        ], $messages);
        try {
            $portfolio->update($request->all());
            $portfolio->save();


        } catch (Exception $exception) {

            return redirect(route('admin.portfolios.edit'))->with('warning', $exception->getCode());
        }

        $msg = "ذخیره ی نمونه کار با موفقیت انجام شد";
        return redirect(route('admin.portfolios'))->with('success', $msg);
    }


    public function destroy(portfolio $portfolio)
    {
        try {
            $portfolio->delete();
        } catch (Exception $exception) {
            return redirect(route('admin.portfolios'))->with('warning', $exception->getCode());
        }

        $msg = "آیتم مورد نظر حذف گردید";
        return redirect(route('admin.portfolios'))->with('success', $msg);
    }
}







