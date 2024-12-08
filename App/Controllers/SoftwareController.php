<?php
namespace App\Controllers;

use App\Models\SoftwareHacking;

class SoftwareController {

    public function index() {
        $software = SoftwareHacking::all();
        require '../resources/views/software/index.blade.php';
    }

    public function create() {
        require '../resources/views/software/create.blade.php';
    }

    public function store() {
        $name = $_POST['name'];
        $type = $_POST['type'];
        $description = $_POST['description'];
        $platform = $_POST['platform'];
        $license = $_POST['license'];
        $official_url = $_POST['official_url'];
        $data = $_POST['data'];

        $newSoftware = new SoftwareHacking([
            'name' => $name,
            'type' => $type,
            'description' => $description,
            'platform' => $platform,
            'license' => $license,
            'official_url' => $official_url,
            'data' => $data,

        ]);
        $newSoftware->save();
        header('Location: /software');
    }

    public function edit($id) {
        $software = (new \App\Models\SoftwareHacking)->find($id);
        if(!$software) {
            header('Location: /software');
            exit();
        }
        require '../resources/views/software/edit.blade.php';
    }
    public function update($id) {
        $software = (new SoftwareHacking)->find($id);
        if (!$software) {
            header('Location: /software');
            exit();
        }

        $software->name = $_POST['name'];
        $software->type = $_POST['type'];
        $software->description = $_POST['description'];
        $software->platform = $_POST['platform'];
        $software->license = $_POST['license'];
        $software->data = $_POST['data'];
        $software->official_url = $_POST['official_url'];
        $software->save();

        header('Location: /software');
    }






    public function delete($id) {
        if ($id === null) {
            header('Location: /software');
            exit();
        }
        $book = (new \App\Models\SoftwareHacking)->find($id);
        return require '../resources/views/software/delete.blade.php';
    }

    public function destroy($id) {
        $software = (new \App\Models\SoftwareHacking)->delete($id);
        if (!$software) {
            header('Location: /software');
            exit();
        }
        $software->delete($id);
        header('Location: /software');
    }
    public function show($id) {
        $software = (new \App\Models\SoftwareHacking)->find($id);
        if (!$software) {
            header('Location: /software');
            exit();
        }
        require '../resources/views/software/show.blade.php';
    }

    public function confirmDelete($id) {
        $book = (new \App\Models\SoftwareHacking)->find($id);
        return require '../resources/views/software/delete.blade.php';
    }
}
