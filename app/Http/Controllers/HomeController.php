<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\addUserRequest;
use App\Http\Requests\editUserRequest;
use App\Http\Requests\editPasswordRequest;
use App\Http\Requests\addBlogCategorieRequest;
use App\Http\Requests\editBlogCategorieRequest;
use App\Http\Requests\addBlogRequest;
use App\Http\Requests\editBlogRequest;
use App\Http\Requests\addServiceCategorieRequest;
use App\Http\Requests\editServiceCategorieRequest;
use App\Http\Requests\addServiceRequest;
use App\Http\Requests\editServiceRequest;
use App\Http\Requests\addProductCategorieRequest;
use App\Http\Requests\editProductCategorieRequest;
use App\Http\Requests\addProductRequest;
use App\Http\Requests\editProductRequest;
use App\Http\Requests\addCardRequest;
use App\Http\Requests\editCardRequest;
use App\Http\Requests\ImportExcelRequest;
use App\Http\Requests\addSliderRequest;
use App\Http\Requests\editSliderRequest;
use App\Http\Requests\addAdsRequest;
use App\Http\Requests\editAdsRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\CheckAdmin;
use App\User;
use App\BlogCate;
use App\Blog;
use App\Service;
use App\ServiceCate;
use App\Product;
use App\ProductCate;
use App\ProductImage;
use App\System;
use App\Menu;
use App\Card;
use App\Slider;
use App\Ads;
use Excel;
use App\Imports\UsersImport;
use App\Imports\UserImport;
use Maatwebsite\Excel\HeadingRowImport;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(CheckAdmin::class);
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index');
    }

    // User custom
    public function users(Request $request){
        if(isset($request->role)){
            $users = User::where('role',$request->role)->paginate(15);
        }
        else{
            $users = User::select()->paginate(15);
        }
        return view('admin.users',['users'=>$users,'request'=>$request]);
    }
    public function addUser(){
        return view('admin.addUser');
    }
    public function postAddUser(addUserRequest $request){
        $item = new User;
        $item -> add($request);
        if($item-> add($request)){
            return redirect()->route('users')->with(['flash_level'=>'success','flash_message'=>'Th??m th??nh c??ng']);
        }
        else{
            return redirect()->route('users')->with(['flash_level'=>'danger','flash_message'=>'Th??m kh??ng th??nh c??ng']);
        }

    }
    public function editUser($id){
        $user = User::where('id',$id)->get()->first();
        return view('admin.editUser',['user'=>$user]);
    }
    public function postEditUser(editUserRequest $request, $id){
        
        $item = new User;
        $item->edit($request,$id);
        if($item-> edit($request,$id)){
            return redirect()->route('editUser',$id)->with(['flash_level'=>'success','flash_message'=>'S???a th??ng tin t??i kho???n th??nh c??ng']);
        }
        else{
            return redirect()->route('editUser',$id)->with(['flash_level'=>'danger','flash_message'=>'S???a th??ng tin t??i kho???n kh??ng th??nh c??ng vui l??ng li??n h??? qu???n tr??? vi??n h??? th???ng ????? bi???t chi ti???t']);
        }

    }
    public function postEditPassword(editPasswordRequest $request, $id){
        $item = new User;
        $item->editPassword($request,$id);
        if($item-> editPassword($request,$id)){
            return redirect()->route('editUser',$id)->with(['flash_level'=>'success','flash_message'=>'S???a m???t kh???u th??nh c??ng']);
        }
        else{
            return redirect()->route('editUser',$id)->with(['flash_level'=>'danger','flash_message'=>'S???a m???t kh???u kh??ng th??nh c??ng']);
        }

    }
    // End User Custom

    // blog
    public function blogCategories(Request $request){
        $categories = BlogCate::select()->paginate(15);
        return view('admin.blogCategories',['categories'=>$categories,'request'=>$request]);
    }
    public function addBlogCategorie(){
        $categories = BlogCate::select()->get();
        return view('admin.addBlogCategorie',['categories'=>$categories]);
    }
    public function postAddBlogCategorie(addBlogCategorieRequest $request){
        $item = new BlogCate;
        $item -> add($request);
        return redirect()->route('blogCategories')->with(['flash_level'=>'success','flash_message'=>'Th??m th??nh c??ng']); 
    }
    public function editBlogCategorie($id){
        $categories = BlogCate::where('id','!=',$id)->get();
        $cate = BlogCate::where('id',$id)->get()->first();
        if($cate->parent_id != ''){
            $parent = BlogCate::where('id',$cate->parent_id)->get()->first();
            return view('admin.editBlogCategorie',['cate'=>$cate, 'categories'=>$categories,'parent'=>$parent]);
        }
        else{
            return view('admin.editBlogCategorie',['cate'=>$cate, 'categories'=>$categories]);
        }
        
    }
    public function postEditBlogCategorie(editBlogCategorieRequest $request, $id){
        $item = new BlogCate;
        $item->edit($request,$id);
        return redirect()->route('editBlogCategorie',$id)->with(['flash_level'=>'success','flash_message'=>'S???a th??nh c??ng']);
    }
    public function deleteBlogCategorie($id){
        $item = BlogCate::where('id',$id)->get()->first();
        $item->delete();
        return redirect()->route('blogCategories')->with(['flash_level'=>'success','flash_message'=>'X??a tin t???c th??nh c??ng']); 
    }
    public function blogs(Request $request){
        $blogs = Blog::select()->paginate(15);
        return view('admin.blogs',['blogs'=>$blogs,'request'=>$request]);
    }
    public function addBlog(){
        $categories = BlogCate::select()->get();
        return view('admin.addBlog',['categories'=>$categories]);
    }
    public function postAddBlog(addBlogRequest $request){
        $item = new Blog;
        $item -> add($request);
        return redirect()->route('blogs')->with(['flash_level'=>'success','flash_message'=>'Th??m th??nh c??ng']); 
    }
    public function editBlog($id){
        $categories = BlogCate::select()->get();
        $blog = Blog::where('id',$id)->get()->first();
        return view('admin.editBlog',['blog'=>$blog,'categories'=>$categories]);
    }
    public function postEditBlog(editBlogRequest $request, $id){
        $item = new Blog;
        $item->edit($request,$id);
        return redirect()->route('editBlog',$id)->with(['flash_level'=>'success','flash_message'=>'S???a th??nh c??ng']);
    }
    public function deleteBlog($id){
        $item = Blog::where('id',$id)->get()->first();
        $item->delete();
        return redirect()->route('blogs')->with(['flash_level'=>'success','flash_message'=>'X??a tin t???c th??nh c??ng']); 
    }
    // end blog

    // service
    public function serviceCategories(Request $request){
        $categories = ServiceCate::select()->paginate(15);
        return view('admin.serviceCategories',['categories'=>$categories,'request'=>$request]);
    }
    public function addServiceCategorie(){
        $categories = ServiceCate::select()->get();
        return view('admin.addServiceCategorie',['categories'=>$categories]);
    }
    public function postAddServiceCategorie(addServiceCategorieRequest $request){
        $item = new ServiceCate;
        $item -> add($request);
        return redirect()->route('serviceCategories')->with(['flash_level'=>'success','flash_message'=>'Th??m danh m???c d???ch v??? th??nh c??ng']); 
    }
    public function editServiceCategorie($id){
        $categories = ServiceCate::where('id','!=',$id)->get();
        $cate = ServiceCate::where('id',$id)->get()->first();
        if($cate->parent_id != ''){
            $parent = ServiceCate::where('id',$cate->parent_id)->get()->first();
            return view('admin.editServiceCategorie',['cate'=>$cate, 'categories'=>$categories,'parent'=>$parent]);
        }
        else{
            return view('admin.editServiceCategorie',['cate'=>$cate, 'categories'=>$categories]);
        }
        
    }
    public function postEditServiceCategorie(editServiceCategorieRequest $request, $id){
        $item = new ServiceCate;
        $item->edit($request,$id);
        return redirect()->route('editServiceCategorie',$id)->with(['flash_level'=>'success','flash_message'=>'S???a danh m???c d???ch v??? th??nh c??ng']);
    }
    public function deleteServiceCategorie($id){
        $item = ServiceCate::where('id',$id)->get()->first();
        $item->delete();
        return redirect()->route('serviceCategories')->with(['flash_level'=>'success','flash_message'=>'X??a danh m???c d???ch v??? th??nh c??ng']); 
    }
    public function services(Request $request){
        $services = Service::select()->paginate(15);
        return view('admin.services',['services'=>$services,'request'=>$request]);
    }
    public function addService(){
        $categories = ServiceCate::select()->get();
        return view('admin.addService',['categories'=>$categories]);
    }
    public function postAddService(addServiceRequest $request){
        $item = new Service;
        $item -> add($request);
        return redirect()->route('services')->with(['flash_level'=>'success','flash_message'=>'Th??m d???ch v??? th??nh c??ng']); 
    }
    public function editService($id){
        $categories = ServiceCate::select()->get();
        $service = Service::where('id',$id)->get()->first();
        return view('admin.editService',['service'=>$service,'categories'=>$categories]);
    }
    public function postEditService(editServiceRequest $request, $id){
        $item = new Service;
        $item->edit($request,$id);
        return redirect()->route('editService',$id)->with(['flash_level'=>'success','flash_message'=>'S???a d???ch v??? th??nh c??ng']);
    }
    public function deleteService($id){
        $item = Service::where('id',$id)->get()->first();
        $item->delete();
        return redirect()->route('services')->with(['flash_level'=>'success','flash_message'=>'X??a d???ch v??? th??nh c??ng']); 
    }
    // end service

    // product
    public function productCategories(Request $request){
        $categories = ProductCate::select()->paginate(15);
        return view('admin.productCategories',['categories'=>$categories,'request'=>$request]);
    }
    public function addProductCategorie(){
        $categories = ProductCate::select()->get();
        return view('admin.addProductCategorie',['categories'=>$categories]);
    }
    public function postAddProductCategorie(addProductCategorieRequest $request){
        $item = new ProductCate;
        $item -> add($request);
        return redirect()->route('productCategories')->with(['flash_level'=>'success','flash_message'=>'Th??m danh m???c s???n ph???m th??nh c??ng']); 
    }
    public function editProductCategorie($id){
        $categories = ProductCate::where('id','!=',$id)->get();
        $cate = ProductCate::where('id',$id)->get()->first();
        if($cate->parent_id != ''){
            $parent = ProductCate::where('id',$cate->parent_id)->get()->first();
            return view('admin.editProductCategorie',['cate'=>$cate, 'categories'=>$categories,'parent'=>$parent]);
        }
        else{
            return view('admin.editProductCategorie',['cate'=>$cate, 'categories'=>$categories]);
        }
        
    }
    public function postEditProductCategorie(editProductCategorieRequest $request, $id){
        $item = new ProductCate;
        $item->edit($request,$id);
        return redirect()->route('editProductCategorie',$id)->with(['flash_level'=>'success','flash_message'=>'S???a danh m???c s???n ph???m th??nh c??ng']);
    }
    public function deleteProductCategorie($id){
        $item = ProductCate::where('id',$id)->get()->first();
        $item->delete();
        return redirect()->route('productCategories')->with(['flash_level'=>'success','flash_message'=>'X??a danh m???c s???n ph???m th??nh c??ng']); 
    }
    public function products(Request $request){
        $products = Product::orderBy('id','DESC')->paginate(15);
        return view('admin.products',['products'=>$products,'request'=>$request]);
    }
    public function addProduct(){
        $categories = ProductCate::select()->get();
        $users = User::where('role',3)->orWhere('role',4)->select()->get();
        return view('admin.addProduct',compact('categories','users'));
    }
    public function postAddProduct(addProductRequest $request){
        $item = new Product;
        $item -> add($request);
        return redirect()->route('products')->with(['flash_level'=>'success','flash_message'=>'Th??m s???n ph???m th??nh c??ng']); 

        

    }
    public function editProduct($id){
        $categories = ProductCate::select()->get();
        $users = User::where('role',3)->orWhere('role',4)->select()->get();
        $product = Product::where('id',$id)->get()->first();
        return view('admin.editProduct',compact('categories','users','product'));
    }
    public function postEditProduct(editProductRequest $request, $id){
        $item = new Product;
        $item->edit($request,$id);
        return redirect()->route('editProduct',$id)->with(['flash_level'=>'success','flash_message'=>'S???a s???n ph???m th??nh c??ng']);
    }
    public function deleteProduct($id){
        $item = Product::where('id',$id)->get()->first();
        $item->delete();
        return redirect()->route('products')->with(['flash_level'=>'success','flash_message'=>'X??a s???n ph???m th??nh c??ng']); 
    }

    public function deleteProductImage($id){
        $item = ProductImage::where('id',$id)->get()->first();
        $item->delete();
        return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'X??a ???nh th??nh c??ng']); 
    }
    // end product
    // system 
    public function editSystem(){
        $system = System::where('id',1)->get()->first();
        return view('admin.editSystem',['system'=>$system]);
    }
    public function postEditSystem(Request $request){
        $item = new System;
        $item->edit($request);
        return redirect()->route('editSystem')->with(['flash_level'=>'success','flash_message'=>'C???p nh???t h??? th???ng th??nh c??ng']);
    }
    // end system

    // cards
    public function cards(Request $request){
        $cards = Card::select()->paginate(100);
        return view('admin.cards',['cards'=>$cards,'request'=>$request]);
    }
    public function addCard(){
        
        return view('admin.addCard');
    }
    public function postAddCard(addCardRequest $request){
        $item = new Card;
        $item -> add($request);
        return redirect()->route('cards')->with(['flash_level'=>'success','flash_message'=>'Th??m th??? th??nh c??ng']); 
    }
    public function editCard($id){
        
        $card = Card::where('id',$id)->get()->first();
        return view('admin.editCard',['card'=>$card]);
    }
    public function postEditCard(editCardRequest $request, $id){
        $item = new Card;
        $item->edit($request,$id);
        return redirect()->route('editCard',$id)->with(['flash_level'=>'success','flash_message'=>'S???a th??ng tin th??? th??nh c??ng']);
    }
    public function deleteCard($id){
        $item = Card::where('id',$id)->get()->first();
        $item->delete();
        return redirect()->route('cards')->with(['flash_level'=>'success','flash_message'=>'X??a th??? th??nh c??ng']); 
    }
    public function uploadExcel(ImportExcelRequest $request){
        $file = $request->file('excel');
        $headings = (new HeadingRowImport)->toArray($file);
        
        if(count($headings[0][0]) < 4 || $headings[0][0][0] != 'name' || $headings[0][0][1] != 'email' || $headings[0][0][2] != 'phone' || $headings[0][0][3] != 'password'){
            return redirect()->back()->with(['flash_level'=>'danger','flash_message'=>'T???i l??n kh??ng th??nh c??ng. ?????nh d???ng file d??? li???u kh??ng ????ng']); 
        }
        else{
            Excel::import(new UserImport, $file);
            return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'T???i d??? li???u l??n th??nh c??ng nh???ng tr?????ng d??? li???u tr??ng email ho???c s??? ??i???n tho???i s??? kh??ng ???????c ghi ????']); 
        }
        
    }
    // end cards

    // menu 
    public function editMenu(){
        $menus = Menu::where('parent_id',null)->orderBy('stt','ASC')->get();
        $productCategories = ProductCate::where('display',1)->get();
        $blogCategories = BlogCate::where('display',1)->get();
        return view('admin.menu',['productCategories'=>$productCategories,'blogCategories'=>$blogCategories,'menus'=>$menus]);
    }
    public function updateMenu(Request $request){
        $item = new Menu;
        $item->updateMenu($request);
    }
    public function deleteMenu($array){
        $item = new Menu;
        $item->deleteItems($array);
    }
    // end menu
    //slider
    public function sliders(Request $request){
        $sliders = Slider::select()->paginate(10);
        return view('admin.sliders',['sliders'=>$sliders,'request'=>$request]);
    }
    public function addSlider(){
        
        return view('admin.addSlider');
    }
    public function postAddSlider(addSliderRequest $request){
        $item = new Slider;
        $item -> add($request);
        return redirect()->route('sliders')->with(['flash_level'=>'success','flash_message'=>'Th??m slider th??nh c??ng']); 
    }
    public function editSlider($id){
        
        $slider = Slider::where('id',$id)->get()->first();
        return view('admin.editSlider',['slider'=>$slider]);
    }
    public function postEditSlider(editSliderRequest $request, $id){
        $item = new Slider;
        $item->edit($request,$id);
        return redirect()->route('editSlider',$id)->with(['flash_level'=>'success','flash_message'=>'S???a slider th??nh c??ng']);
    }
    public function deleteSlider($id){
        $item = Slider::where('id',$id)->get()->first();
        $item->delete();
        return redirect()->route('sliders')->with(['flash_level'=>'success','flash_message'=>'X??a slider th??nh c??ng']); 
    }
    // end slider

    //Ads
    public function adss(Request $request){
        if(isset($request->type)){
            $adss = Ads::where('type',$request->type)->paginate(10);
        }
        else{
            $adss = Ads::select()->paginate(10);
        }
        
        return view('admin.adss',['adss'=>$adss,'request'=>$request]);
    }
    public function addAds(){
        
        return view('admin.addAds');
    }
    public function postAddAds(addAdsRequest $request){
        $item = new Ads;
        $item -> add($request);
        return redirect()->route('adss')->with(['flash_level'=>'success','flash_message'=>'Th??m banner th??nh c??ng']); 
    }
    public function editAds($id){
        
        $ads = Ads::where('id',$id)->get()->first();
        return view('admin.editAds',['ads'=>$ads]);
    }
    public function postEditAds(editAdsRequest $request, $id){
        $item = new Ads;
        $item->edit($request,$id);
        return redirect()->route('editAds',$id)->with(['flash_level'=>'success','flash_message'=>'S???a banner th??nh c??ng']);
    }
    public function deleteAds($id){
        $item = Ads::where('id',$id)->get()->first();
        $item->delete();
        return redirect()->route('Adss')->with(['flash_level'=>'success','flash_message'=>'X??a banner th??nh c??ng']); 
    }
    // end slider
}
