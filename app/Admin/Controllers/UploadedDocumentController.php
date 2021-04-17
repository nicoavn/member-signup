<?php

namespace App\Admin\Controllers;

use App\Models\Driver;
use App\Models\UploadedDocument;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Storage;

class UploadedDocumentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'UploadedDocument';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new UploadedDocument());

        $grid->column('id', __('Id'))->sortable();

        $grid->column('driver_id', __('Driver'))->display(function($driverId) {
            $driver = Driver::find($driverId);
            return $driver['first_name'] . " " . $driver['last_name'];
        })->sortable();

        $grid->column('document_type', __('Document type'))->display(function($d) {
            return UploadedDocument::DOCUMENT_TYPES_ES[$d];
        });
        $grid->column('filename', __('Image'))
            ->image();
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
        $show = new Show(UploadedDocument::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('document_type', __('Document type'));
        $show->field('filename', __('Filename'));
        $show->field('driver_id', __('Driver id'));
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
        $form = new Form(new UploadedDocument());

        $form->text('document_type', __('Document type'));
        $form->text('filename', __('Filename'));
        $form->number('driver_id', __('Driver id'));

        return $form;
    }
}
