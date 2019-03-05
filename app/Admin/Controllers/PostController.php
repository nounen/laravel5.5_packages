<?php

namespace App\Admin\Controllers;

use App\Post;
use App\Http\Controllers\Controller;
use App\User;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class PostController extends Controller
{
    use HasResourceActions;

    protected $description = '文章管理';

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('列表')
            ->description($this->description)
            ->body($this->indexGrid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('详情')
            ->description($this->description)
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('编辑')
            ->description($this->description)
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('创建')
            ->description($this->description)
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function indexGrid()
    {
        $grid = new Grid(new Post);

        $grid->id('Id');
        $grid->user()->name('作者');
        $grid->title('标题');
        $grid->cover_url('封面');
        $grid->created_at('创建时间');
        $grid->updated_at('修改时间');

        // 查询过滤
        $grid->filter(function($filter) {
            // 去掉默认的id过滤器
            $filter->disableIdFilter();

            // 在这里添加字段过滤器
            $filter->like('title', '标题');

            $filter->between('created_at', '创建时间')->datetime();
        });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Post::findOrFail($id));

        $show->id('Id');
        $show->user_id('作者');
        $show->title('标题');
        $show->content('内容');
        $show->cover_url('封面');
        $show->created_at('创建时间');
        $show->updated_at('修改时间');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Post);
        $form->select('user_id', '作者')->options(User::getOptions());
        $form->text('title', '标题');
        $form->editor('content', '内容');
        $form->image('cover_url', '封面')->uniqueName();

        // 添加开关操作
        $form->switch('released', '发布？');
        // 不需要保存的字段
        $form->ignore(['released']);

        return $form;
    }
}
