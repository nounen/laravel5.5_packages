<?php

namespace App\Admin\Controllers;

use App\Profile;
use App\User;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class UserController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
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
            ->header('Detail')
            ->description('description')
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
            ->header('Edit')
            ->description('description')
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
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function indexGrid()
    {
        $grid = new Grid(new User);

        // 第一列显示 Id 字段，并将这一列设置为可排序列
        // 通过 display($callback) 方法扩展这一列的显示内容
        $grid->id('Id')->sortable()->display(function ($id) {
            return "ID:{$id}";
        });
        $grid->name('用户名');
        $grid->email('邮箱');

        // User 的 一对一 关联模型 Profile 列表查看
        $grid->profile()->age('年龄');
        $grid->profile()->gender_name('性别');

//        $grid->password('密码');
//        $grid->remember_token('Remember token');
        $grid->created_at('创建时间');
        $grid->updated_at('更新时间');

        // 添加不存在的字段
        $grid->no_exist('不存在字段')->display(function () {
            return '不存在字段...';
        });

        // 默认倒序
        $grid->model()->orderBy('id', 'desc');

        // filter($callback) 方法用来设置表格的简单搜索框
        $grid->filter(function ($filter) {
            // 设置created_at字段的范围查询
            $filter->between('created_at', '注册时间')->datetime();
        });

        // 每页条数
        $grid->paginate(3);

        // 设置分页选择器选项
        $grid->perPages([3, 5, 7, 10]);

        // 禁用创建按钮
//        $grid->disableCreateButton();

        // 禁用分页条
//        $grid->disablePagination();

        // 禁用查询过滤器
//        $grid->disableFilter();

        // 禁用导出数据按钮
//        $grid->disableExport();

        // 禁用行选择checkbox
//        $grid->disableRowSelector();

        // 禁用行操作列. TODO: 如何自定义列操作？
//        $grid->disableActions();

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
        $show = new Show(User::findOrFail($id));

        $show->id('Id');
        $show->name('Name');
        $show->email('Email');
        $show->password('Password');
        $show->remember_token('Remember token');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User);

        $form->text('name', '名字');
        $form->email('email', '邮箱');

        $form->password('password', '密码')
            ->rules([
            'required',
            'min:6',
        ]);

        // 电话号码输入框 && 表单验证
        $form->mobile('profile.phone', '手机')
            ->rules([
                'required',
            ]);

        // 字输入框
        $form->number('profile.age', '年龄')
            ->min(1)
            ->max(120);

        // 下拉选择框 && 表单验证
        $form->select('profile.gender', '性别')
            ->options(Profile::GENDER_OPTIONS)
            ->rules([
                'required',
            ]);

        return $form;
    }
}
