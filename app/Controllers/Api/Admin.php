<?php

namespace App\Controllers\Api;

use App\Models\UserModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Admin extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return mixed
     */
    use ResponseTrait;

    public function index()
    {
        //
        // echo 'aa';
        return $this->respondCreated('aa');
    }

    /**
     * Return the properties of a resource object.
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $model = new UserModel();
        $data = $model->get_user($id);
        if ($data) {
            $response = [
                'status' => 201,
                'messages' => [
                    'success' => $data,
                ],
            ];

            return $this->respondCreated($response);
        } else {
            return $this->failNotFound('No Data Found with id '.$id);
        }
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return mixed
     */
    public function create()
    {
        $model = new UserModel();
        $json = $this->request->getJSON();
        if ($json) {
            $data = [
                'name' => $json->name,
                'email' => $json->email,
            ];
        } else {
            $input = $this->request->getRawInput();
            $data = [
                'name' => $input['name'],
                'email' => $input['email'],
            ];
        }
        $model->create_user($data);
        $response = [
            'status' => 201,
            'messages' => [
                'success' => 'Product created successfully',
            ],
        ];

        return $this->respondCreated($response);
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $model = new UserModel();
        $json = $this->request->getJSON();
        if ($json) {
            $data = [
                'name' => $json->name,
                'email' => $json->email,
            ];
        } else {
            $input = $this->request->getRawInput();
            $data = [
                'name' => $input['name'],
                'email' => $input['email'],
            ];
        }
        $model->update_user($id, $data);
        $response = [
            'status' => 200,
            'error' => null,
            'messages' => [
                'success' => 'Data Updated',
            ],
        ];

        return $this->respond($response);
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model = new UserModel();
        try {
            $data = $model->delete_user($id);
            $response = [
                'status' => 201,
                'messages' => [
                    'success' => 'Data Deleted',
                ],
            ];

            return $this->respondCreated($response);
        } catch (\Throwable $th) {
            return $this->fail('Gagal');
        }
    }
}
