<?php

namespace App\Admin\Controllers;

use App\Models\Book;
use App\Models\Country;
use App\Models\Tags;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Widgets\Tab;
use App\Admin\Extensions\Tools\GridView;
use Illuminate\Http\Request;


class BookController extends Controller
{
    use ModelForm;


    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('小说管理');
            $content->description('');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('编辑小说');
            $content->description('');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('创建小说');
            $content->description('');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Book::class, function (Grid $grid) {

            $grid->book_name('作品名称');
            $grid->original_name( '作品原名');
            $grid->author("作者");

            $grid->image("图")->value(function ($image) {
                if($image=="")
                    return "";
                else if(substr($image,0,7)=="http://")
                    return "<img src='".$image."' style='width:100px;height:120px;'>";
                else if($image)
                    return "<img src='".config('admin.upload.host').$image."' style='width:100px;height:120px;'>";
            });

            $grid->book_url("作品原地址");

            $grid->license('是否拥有作品版权')->value(function ($translated_progress){
                if ($translated_progress == 0){return '有版权'; } else {return '有独家版权(自营)';}
            });

            $grid->translated_progress("翻译进度")->value(function ($translated_progress){
                if ($translated_progress == 0){return '译中'; } else {return '译完';}
            });

            $grid->writing_progress('写作进度')->value(function ($writing_progress){
                if ($writing_progress == 0){return '连载中'; } else {return '完结';}
            });
            $grid->state('状态')->value(function ($state){
                  if ($state == 0){return '未上架'; } else {return '上架';}
            });

            $grid->created_at('创建时间');
            $grid->updated_at('最后修改时间');

            $grid->disableExport();
            $grid->filter(function ($filter) {
                $filter->disableIdFilter();
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Book::class, function (Form $form) {

            $form->text('book_name', '作品名称');
            $form->text('original_name', '作品原名');
            $form->text('author',"作者");
            $form->textarea('book_intro',"作品简介");
            $form->textarea('original_book_intro',"作品原简介");
            $form->text('book_url',"作品原地址");
            $form->text('translator',"翻译者");
            $form->number('old_price','原价');
            $form->number('price','现价');

            $form->multipleSelect('tags')->options(Tags::all()->pluck('name', 'id'));


            $form->switch('is_fee','是否收费');
            $form->select('country_id','国家')->options(Country::all()->pluck('country_name', 'country_id'));
            $form->select('license','是否拥有作品版权')->options(['0'=>'有版权','1'=>'有独家版权(自营)']);
            $form->select('translated_progress',"翻译进度")->options(['0'=>'译中','1'=>'译完']);
            $form->select('writing_progress','写作进度')->options(['0'=>'连载中','1'=>'完结']);
            $form->select('state','状态')->options(['0'=>'未上架','1'=>'上架']);

            list($usec, $sec) = explode(" ", microtime());
            $name = $sec.str_replace('0.', '_',$usec);
            $form->image('image', "封面图")->move("book_images", $name.".jpg");

            $form->display('created_at', '创建时间');
            $form->display('updated_at', '最后修改时间');

            $form->saving(function (Form $form){
                $str = $form->tags;

            });
        });
    }
}
