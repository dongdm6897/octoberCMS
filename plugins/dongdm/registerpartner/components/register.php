<?php
/**
 * Created by PhpStorm.
 * User: Anonymus
 * Date: 06/03/2018
 * Time: 11:07 CH
 */

namespace Dongdm\Registerpartner\Components;
use Cms\Classes\ComponentBase;
use Dongdm\Registerpartner\Models\Form;
use Flash;
use Input;
use Redirect;
use ValidationException;
use Validator;
use System\Models\File;
class Register extends ComponentBase{

    /**
     * Returns information about this component, including name and description.
     */
    public function componentDetails()
    {
       return [
           'name' => 'Partner',
           'description' => 'List of Partner'
       ];

    }
    public function onRun()
    {
        $this->register = $this->loadForm();
    }

    function loadForm(){
        return Form::all();
    }

    public $register;

    public function onSubmit(){

        $validator = Validator::make(
            $form = Input::all(), [
                'name' => 'required',
                'address' => 'required',
                'product' => 'required',
                'description' => 'required'
            ]
        );

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }



        $form = new Form();
        $form->name = Input::get('name');
        $form->address = Input::get('address');
        $form->product = Input::get('product');
        $form->description = Input::get('description');
        $form->avatarimage = Input::file('avatarimage');
        $form->save();
        Flash::success('Đã thêm thành công!');


    }
    public function onImageUpload() {
        $image = Input::all();

        $file = (new File())->fromPost($image['avatarimage']);

        return[
            '#imageResult' => '<img src="' . $file->getThumb(200, 200, ['mode' => 'crop']) . '" >'
        ];
    }
}

?>