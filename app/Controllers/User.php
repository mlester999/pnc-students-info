<?php

namespace App\Controllers;

class User extends BaseController
{

    public function new()
    {
        return view('User/new', [
            'user' => ['name' => '', 'section' => '', 'student_number' => '', 'contact_number' => '']
        ]);
    }

    public function create()
    {
        $model = new \App\Models\UserInfoModel;

        $result = $model->insert([
            'name' => $this->request->getPost("name"),
            'section' => $this->request->getPost("section"),
            'student_number' => $this->request->getPost("student_number"),
            'contact_number' => $this->request->getPost("contact_number"),
        ]);

        if ($result === false) {
            return redirect()->back()->with('errors', $model->errors())->withInput();
        } else {
            return redirect()->to("/");
        }
    }

    public function edit($id)
    {
        $model = new \App\Models\UserInfoModel;

        $user = $model->find($id);

        if ($user === null) {
            return redirect()->to("/");
        } else {
            return view('User/edit', [
                'user' => $user
            ]);
        }
    }

    public function update($id)
    {
        $model = new \App\Models\UserInfoModel;

        $result = $model->update($id, [
            'name' => $this->request->getPost("name"),
            'section' => $this->request->getPost("section"),
            'student_number' => $this->request->getPost("student_number"),
            'contact_number' => $this->request->getPost("contact_number"),
        ]);

        if ($result) {
            return redirect()->to("/");
        } else {
            return redirect()->back()->with('errors', $model->errors())->withInput();
        }
    }

    public function delete($id)
    {
        $model = new \App\Models\UserInfoModel;

        $user = $model->find($id);
    
        return view('User/delete', [
            'user' => $user
        ]);
    }

    public function postDelete($id)
    {
        $model = new \App\Models\UserInfoModel;

        $user = $model->find($id);

        $model->delete($user);

        return redirect()->to('/')->with('info', 'User Deleted Successfully');
    }
}

// Made by Mark Lester T. Acak