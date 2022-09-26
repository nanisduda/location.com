<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Article;
use App\Models\Article as AppArticle;
use App\Models\Tag;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ArticleController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Article(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->column('category');
            $grid->column('author');
            $grid->column('cover')->image('/storage/',80);
            $grid->column('tags');
            $grid->column('hot_desc');
            $grid->column('comment_cnt');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Article(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('category');
            $show->field('author');
            $show->field('cover');
            $show->field('content');
            $show->field('tags');
            $show->field('hot_desc');
            $show->field('comment_cnt');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Article(), function (Form $form) {
            $form->display('id');
            $form->text('title');
            $form->select('category')->options(AppArticle::MAPPING_CAT)->default(AppArticle::CAT_NEWS);
            $form->text('author')->default('admin');
            $form->image('cover');
            $form->editor('content');
            $form->multipleSelect('tags')->options(Tag::query()->pluck('name', 'id'))->saving(function ($value) {
                return join(',', $value);
            });
            $form->number('hot_desc');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
