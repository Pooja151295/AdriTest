<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;
use DataTables;
class CompanyController extends Controller
{
	public function index(Request $request){
		if ($request->ajax()) {
			$data = Company::select('*')->get();
			return Datatables::of($data)->addIndexColumn()
				->addColumn('action', function($row){
					$edit_btn = '<a class="btn btn-primary" href="company/'.$row->id.'/edit">Edit</a>';
				$delete_btn = '<a class="btn btn-primary" href="company-delete/'.$row->id.'">Delete</a>';
					return $edit_btn." ".$delete_btn;
				})
				
				->addColumn('logo', function ($row) { 
					// $url=asset("../storage/app/public/".$row->logo); 
					$url=url("storage/app/public/".$row->logo); 
					return '<img src='.$url.' border="0" width="40" class="img-rounded" align="center" />'; 
			 	})
				 ->rawColumns(['logo','action'])
				 
				->make(true);
		}
		return view('company');
	}
	public function create(){
		return view('create_company');
	}
	public function add(Request $request){
		$request->validate([
			'name' => 'required',
			'email' => 'required',
		]);
		$data = $request->all();
		
		$Company = new Company;
		if(!empty($request->file('logo'))) {
			$file = $request->file('logo');
			$fileName = time() . '.'. $file->getClientOriginalExtension();
			$image['filePath'] = $fileName;
			$file->move('../storage/app/public', $fileName);
			$Company->logo= $fileName;
			
		  } 
		$Company->name= $data['name'];
		$Company->email= $data['email'];
		$Company->url= $data['url'];
		$Company->contact_person= $data['contact_person'];
		$Company->save();
		return redirect()->route('company')->with('success','Your company has been created successfully.');
	}
	public function edit(Request $request,Company $company)
	{
		$id = $request->route('id');
		$data = $company::where('id', $id)->first();
		return view('company_edit',compact('data'));
	}
	public function update(Request $request, Company $data)
	{
		$request->validate([
			'name' => 'required',
			'email' => 'required',
		]);
		
		$id =  $request->input('id');
		$data = Company::where('id', $id)->first();
		if(!empty($request->file('logo'))) {
			$file = $request->file('logo');
			$fileName = time() . '.'. $file->getClientOriginalExtension();
			$image['filePath'] = $fileName;
			$file->move('../storage/app/public', $fileName);
			$data->logo= $fileName;
		} 
   	 	$input=$request->all();
		$data->fill($input)->save();
		return redirect()->route('company')->with('success','Your company data has been updated successfully');
	}
	public function destroy(Request $request,Company $post)
	{
		$id = $request->route('id');
		$post::where('id', $id)->delete();
		return view('company')
						->with('success','Your post has been deleted successfully');
	}
}
