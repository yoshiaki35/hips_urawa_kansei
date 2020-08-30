<?php

namespace App\Admin\Controllers;

use App\Cast;
use App\Bloodltype;
use App\Icon1;
use App\Icon2;
use App\Kenmei;
use App\Lasttime;
use App\Opentime;
use App\Option;
use App\Tag1;
use App\Tag2;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CastsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Cast';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Cast());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('age', __('Age'));
        $grid->column('size1', __('Size1'));
        $grid->column('size2', __('Size2'));
        $grid->tag1()->name('Tag1');
        $grid->tag2()->name('Tag2');
        $grid->icon1()->name('Icon1');
        $grid->icon2()->name('Icon2');
        $grid->open_time()->name('Opentime');
        $grid->last_time()->name('Lasttime');
        $grid->column('coment1', __('Coment1'));
        $grid->column('coment2', __('Coment2'));
        $grid->column('image_url1', __('Image url1'))->image();
        $grid->column('image_url2', __('Image url2'))->image();
        $grid->column('image_url3', __('Image url3'))->image();
        $grid->column('image_url4', __('Image url4'))->image();
        $grid->column('image_url5', __('Image url5'))->image();
        $grid->column('image_url6', __('Image url6'))->image();
        $grid->column('image_url7', __('Image url7'))->image();
        $grid->column('movie', __('Movie'));
        $grid->bloodltype()->name('Bloodltype id');
        $grid->column('goingtowork', __('Goingtowork'));
        $grid->column('personality', __('Personality'));
        $grid->column('sorm', __('Sorm'));
        $grid->column('cigarettes', __('Cigarettes'));
        $grid->kenmei()->name('Kenmei id');
        $grid->column('goodplay', __('Goodplay'));
        $grid->column('charmpoint', __('Charmpoint'));
        $grid->column('hobbies_skills', __('Hobbies skills'));
        $grid->column('favoriteoppositesextype', __('Favoriteoppositesextype'));
        $grid->column('whatIwantmostnow', __('WhatIwantmostnow'));
        $grid->option1()->name('Option1');
        $grid->option2()->name('Option2');
        $grid->option3()->name('Option3');
        $grid->option4()->name('Option4');
        $grid->option5()->name('Option5');
        $grid->option6()->name('Option6');
        $grid->option7()->name('Option7');
        $grid->option8()->name('Option8');
        $grid->option9()->name('Option9');
        $grid->option10()->name('Option10 id');
        $grid->option11()->name('Option11 id');
        $grid->option12()->name('Option12 id');
        $grid->option13()->name('Option13 id');
        $grid->option14()->name('Option14 id');
        $grid->option15()->name('Option15 id');
        $grid->option16()->name('Option16 id');
        $grid->column('schedule1', __('Schedule1'));
        $grid->column('schedule2', __('Schedule2'));
        $grid->column('schedule3', __('Schedule3'));
        $grid->column('schedule4', __('Schedule4'));
        $grid->column('schedule5', __('Schedule5'));
        $grid->column('schedule6', __('Schedule6'));
        $grid->column('schedule7', __('Schedule7'));
        $grid->column('dto_id', __('Dto id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Cast::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('age', __('Age'));
        $show->field('size1', __('Size1'));
        $show->field('size2', __('Size2'));
        $show->field('tag1_id', __('Tag1 id'));
        $show->field('tag2_id', __('Tag2 id'));
        $show->field('icon1_id', __('Icon1 id'));
        $show->field('icon2_id', __('Icon2 id'));
        $show->field('open_time_id', __('Open time id'));
        $show->field('last_time_id', __('Last time id'));
        $show->field('coment1', __('Coment1'));
        $show->field('coment2', __('Coment2'));
        $show->field('image_url1', __('Image url1'));
        $show->field('image_url2', __('Image url2'));
        $show->field('image_url3', __('Image url3'));
        $show->field('image_url4', __('Image url4'));
        $show->field('image_url5', __('Image url5'));
        $show->field('image_url6', __('Image url6'));
        $show->field('image_url7', __('Image url7'));
        $show->field('movie', __('Movie'));
        $show->field('bloodltype_id', __('Bloodltype id'));
        $show->field('goingtowork', __('Goingtowork'));
        $show->field('personality', __('Personality'));
        $show->field('sorm', __('Sorm'));
        $show->field('cigarettes', __('Cigarettes'));
        $show->field('kenmei_id', __('Kenmei id'));
        $show->field('goodplay', __('Goodplay'));
        $show->field('charmpoint', __('Charmpoint'));
        $show->field('hobbies_skills', __('Hobbies skills'));
        $show->field('favoriteoppositesextype', __('Favoriteoppositesextype'));
        $show->field('whatIwantmostnow', __('WhatIwantmostnow'));
        $show->field('option1_id', __('Option1 id'));
        $show->field('option2_id', __('Option2 id'));
        $show->field('option3_id', __('Option3 id'));
        $show->field('option4_id', __('Option4 id'));
        $show->field('option5_id', __('Option5 id'));
        $show->field('option6_id', __('Option6 id'));
        $show->field('option7_id', __('Option7 id'));
        $show->field('option8_id', __('Option8 id'));
        $show->field('option9_id', __('Option9 id'));
        $show->field('option10_id', __('Option10 id'));
        $show->field('option11_id', __('Option11 id'));
        $show->field('option12_id', __('Option12 id'));
        $show->field('option13_id', __('Option13 id'));
        $show->field('option14_id', __('Option14 id'));
        $show->field('option15_id', __('Option15 id'));
        $show->field('option16_id', __('Option16 id'));
        $show->field('schedule1', __('Schedule1'));
        $show->field('schedule2', __('Schedule2'));
        $show->field('schedule3', __('Schedule3'));
        $show->field('schedule4', __('Schedule4'));
        $show->field('schedule5', __('Schedule5'));
        $show->field('schedule6', __('Schedule6'));
        $show->field('schedule7', __('Schedule7'));
        $show->field('dto_id', __('Dto id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $bloodltypes = Bloodltype::pluck('name', 'id');
        $icon1s = Icon1::pluck('name', 'id');
        $icon2s = Icon2::pluck('name','id');
        $opentimes = Opentime::pluck('name', 'id');
        $lasttimes = Lasttime::pluck('name', 'id');
        $options = Option::pluck('name', 'id');
        $kenmeis = Kenmei::pluck('name', 'id');
        $tag1s = Tag1::pluck('name', 'id');
        $tag2s = Tag2::pluck('name', 'id');
        $form = new Form(new Cast());

        $form->text('name', __('Name'));
        $form->text('age', __('Age'));
        $form->text('size1', __('Size1'));
        $form->text('size2', __('Size2'));
        $form->select('tag1_id', 'Tag1 id')->options($tag1s);
        $form->select('tag2_id', 'Tag2')->options($tag2s);
        $form->select('icon1_id', 'Icon1')->options($icon1s);
        $form->select('icon2_id', 'Icon2')->options($icon2s);
        $form->select('open_time_id', 'Opentime')->options($opentimes);
        $form->select('last_time_id', 'Lasttime')->options($lasttimes);
        $form->textarea('coment1', __('Coment1'));
        $form->textarea('coment2', __('Coment2'));
        $form->image('image_url1', __('Image url1'));
        $form->image('image_url2', __('Image url2'));
        $form->image('image_url3', __('Image url3'));
        $form->image('image_url4', __('Image url4'));
        $form->image('image_url5', __('Image url5'));
        $form->image('image_url6', __('Image url6'));
        $form->image('image_url7', __('Image url7'));
        $form->file('movie', __('Movie'));
        $form->select('bloodltype_id', 'Bloodltype')->options($bloodltypes);
        $form->text('goingtowork', __('Goingtowork'));
        $form->text('personality', __('Personality'));
        $form->text('sorm', __('Sorm'));
        $form->text('cigarettes', __('Cigarettes'));
        $form->select('kenmei_id', 'Kenmei id')->options($kenmeis);
        $form->text('goodplay', __('Goodplay'));
        $form->text('charmpoint', __('Charmpoint'));
        $form->text('hobbies_skills', __('Hobbies skills'));
        $form->text('favoriteoppositesextype', __('Favoriteoppositesextype'));
        $form->text('whatIwantmostnow', __('WhatIwantmostnow'));
        $form->select('option1_id', 'Option1')->Options($options);
        $form->select('option2_id', 'Option2')->Options($options);
        $form->select('option3_id', 'Option3')->Options($options);
        $form->select('option4_id', 'Option4')->Options($options);
        $form->select('option5_id', 'Option5')->Options($options);
        $form->select('option6_id', 'Option6')->Options($options);
        $form->select('option7_id', 'Option7')->Options($options);
        $form->select('option8_id', 'Option8')->Options($options);
        $form->select('option9_id', 'Option9')->Options($options);
        $form->select('option10_id', 'Option10')->options($options);
        $form->select('option11_id', 'Option11')->options($options);
        $form->select('option12_id', 'Option12')->options($options);
        $form->select('option13_id', 'Option13')->options($options);
        $form->select('option14_id', 'Option14')->options($options);
        $form->select('option15_id', 'Option15')->options($options);
        $form->select('option16_id', 'Option16')->options($options);
        $form->text('schedule1', __('Schedule1'));
        $form->text('schedule2', __('Schedule2'));
        $form->text('schedule3', __('Schedule3'));
        $form->text('schedule4', __('Schedule4'));
        $form->text('schedule5', __('Schedule5'));
        $form->text('schedule6', __('Schedule6'));
        $form->text('schedule7', __('Schedule7'));
        $form->number('dto_id', __('Dto id'));

        return $form;
    }
}
