<?php

namespace App\Admin\Controllers;

use App\Models\Driver;
use App\Models\UploadedDocument;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class DriverController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Driver';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Driver());

        $grid->column('id', __('Id'));
        $grid->column('first_name', __('First name'));
        $grid->column('last_name', __('Last name'));
        $grid->column('social_security_no', __('Social security no'));
        $grid->column('desired_number', __('Desired number'));
        $grid->column('agreed_accept_account', __('Agreed accept account'));
        $grid->column('agreed_accept_terms', __('Agreed accept terms'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('contact_phone', __('Contact phone'));
        $grid->column('contact_email', __('Contact email'));
        $grid->column('emergency_contact_name', __('Emergency contact name'));
        $grid->column('emergency_contact_phone', __('Emergency contact phone'));

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
        /**
         * @var Driver $driver
         */
        $driver = Driver::findOrFail($id);
        $show = new Show($driver);

        $show->field('id', __('Id'));
        $show->field('first_name', __('First name'));
        $show->field('last_name', __('Last name'));
        $show->field('social_security_no', __('Social security no'));
        $show->field('desired_number', __('Desired number'));
        $show->field('agreed_accept_account', __('Agreed accept account'));
        $show->field('agreed_accept_terms', __('Agreed accept terms'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('contact_phone', __('Contact phone'));
        $show->field('contact_email', __('Contact email'));
        $show->field('emergency_contact_name', __('Emergency contact name'));
        $show->field('emergency_contact_phone', __('Emergency contact phone'));

//        $show->divider();

//        $show->relation('uploadedDocuments', 'Documents');
        $show->uploadedDocuments('Uploaded documents', function ($documents) {

            $documents->resource('/admin/site/uploaded-documents');

            $documents->id();

            $documents->column('document_type', __('Document type'))->display(function($d) {
                return UploadedDocument::DOCUMENT_TYPES_ES[$d];
            });

            $documents->column('filename', __('Image'))
                ->image();

            $documents->created_at();
            $documents->updated_at();

            //            $documents->filter(function ($filter) {
//                $filter->like('content');
//            });
        });

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Driver());

        $form->text('first_name', __('First name'));
        $form->text('last_name', __('Last name'));
        $form->text('social_security_no', __('Social security no'));
        $form->text('desired_number', __('Desired number'));
        $form->datetime('agreed_accept_account', __('Agreed accept account'))->default(date('Y-m-d H:i:s'));
        $form->datetime('agreed_accept_terms', __('Agreed accept terms'))->default(date('Y-m-d H:i:s'));
        $form->text('contact_phone', __('Contact phone'));
        $form->text('contact_email', __('Contact email'));
        $form->text('emergency_contact_name', __('Emergency contact name'));
        $form->text('emergency_contact_phone', __('Emergency contact phone'));

        return $form;
    }
}
