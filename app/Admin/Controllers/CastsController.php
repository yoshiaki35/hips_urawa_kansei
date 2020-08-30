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
        $grid->column('tag1_id', __('Tag1 id'));
        $grid->column('tag2_id', __('Tag2 id'));
        $grid->column('icon1_id', __('Icon1 id'));
        $grid->column('icon2_id', __('Icon2 id'));
        $grid->column('open_time_id', __('Open time id'));
        $grid->column('last_time_id', __('Last time id'));
        $grid->column('coment1', __('Coment1'));
        $grid->column('coment2', __('Coment2'));
        $grid->column('image_url1', __('Image url1'));
        $grid->column('image_url2', __('Image url2'));
        $grid->column('image_url3', __('Image url3'));
        $grid->column('image_url4', __('Image url4'));
        $grid->column('image_url5', __('Image url5'));
        $grid->column('image_url6', __('Image url6'));
        $grid->column('image_url7', __('Image url7'));
        $grid->column('movie', __('Movie'));
        $grid->column('bloodltype_id', __('Bloodltype id'));
        $grid->column('goingtowork', __('Goingtowork'));
        $grid->column('personality', __('Personality'));
        $grid->column('sorm', __('Sorm'));
        $grid->column('cigarettes', __('Cigarettes'));
        $grid->column('kenmei_id', __('Kenmei id'));
        $grid->column('goodplay', __('Goodplay'));
        $grid->column('charmpoint', __('Charmpoint'));
        $grid->column('hobbies_skills', __('Hobbies skills'));
        $grid->column('favoriteoppositesextype', __('Favoriteoppositesextype'));
        $grid->column('whatIwantmostnow', __('WhatIwantmostnow'));
        $grid->column('option1_id', __('Option1 id'));
        $grid->column('option2_id', __('Option2 id'));
        $grid->column('option3_id', __('Option3 id'));
        $grid->column('option4_id', __('Option4 id'));
        $grid->column('option5_id', __('Option5 id'));
        $grid->column('option6_id', __('Option6 id'));
        $grid->column('option7_id', __('Option7 id'));
        $grid->column('option8_id', __('Option8 id'));
        $grid->column('option9_id', __('Option9 id'));
        $grid->column('option10_id', __('Option10 id'));
        $grid->column('option11_id', __('Option11 id'));
        $grid->column('option12_id', __('Option12 id'));
        $grid->column('option13_id', __('Option13 id'));
        $grid->column('option14_id', __('Option14 id'));
        $grid->column('option15_id', __('Option15 id'));
        $grid->column('option16_id', __('Option16 id'));
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
        $icon2s = Icon::pluck::('name', 'id');
        $kenmeis= Kenmei::pluck('name', 'id');
        $lasttimes = Lasttime::pluck('name', 'id');
        $opentimes = Opentime::pluck('name', 'id');
        $options = Option::pluck('name', 'id');
        $tag1s = Tag1::pluck('name', 'id');
        $tag2s = Tag2::pluck('name', 'id');
        
        $form = new Form(new Cast());

        $form->text('name', __('Name'));
        $form->text('age', __('Age'));
        $form->text('size1', __('Size1'));
        $form->text('size2', __('Size2'));
        $form->number('tag1_id', __('Tag1 id'));
        $form->number('tag2_id', __('Tag2 id'));
        $form->number('icon1_id', __('Icon1 id'));
        $form->number('icon2_id', __('Icon2 id'));
        $form->number('open_time_id', __('Open time id'));
        $form->number('last_time_id', __('Last time id'));
        $form->textarea('coment1', __('Coment1'));
        $form->textarea('coment2', __('Coment2'));
        $form->text('image_url1', __('Image url1'));
        $form->text('image_url2', __('Image url2'));
        $form->text('image_url3', __('Image url3'));
        $form->text('image_url4', __('Image url4'));
        $form->text('image_url5', __('Image url5'));
        $form->text('image_url6', __('Image url6'));
        $form->text('image_url7', __('Image url7'));
        $form->text('movie', __('Movie'));
        $form->number('bloodltype_id', __('Bloodltype id'));
        $form->text('goingtowork', __('Goingtowork'));
        $form->text('personality', __('Personality'));
        $form->text('sorm', __('Sorm'));
        $form->text('cigarettes', __('Cigarettes'));
        $form->number('kenmei_id', __('Kenmei id'));
        $form->text('goodplay', __('Goodplay'));
        $form->text('charmpoint', __('Charmpoint'));
        $form->text('hobbies_skills', __('Hobbies skills'));
        $form->text('favoriteoppositesextype', __('Favoriteoppositesextype'));
        $form->text('whatIwantmostnow', __('WhatIwantmostnow'));
        $form->number('option1_id', __('Option1 id'));
        $form->number('option2_id', __('Option2 id'));
        $form->number('option3_id', __('Option3 id'));
        $form->number('option4_id', __('Option4 id'));
        $form->number('option5_id', __('Option5 id'));
        $form->number('option6_id', __('Option6 id'));
        $form->number('option7_id', __('Option7 id'));
        $form->number('option8_id', __('Option8 id'));
        $form->number('option9_id', __('Option9 id'));
        $form->number('option10_id', __('Option10 id'));
        $form->number('option11_id', __('Option11 id'));
        $form->number('option12_id', __('Option12 id'));
        $form->number('option13_id', __('Option13 id'));
        $form->number('option14_id', __('Option14 id'));
        $form->number('option15_id', __('Option15 id'));
        $form->number('option16_id', __('Option16 id'));
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
