<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\AduanModel;
use CodeIgniter\API\ResponseTrait; 

class Aduan extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    use ResponseTrait;
    public function index()
    {
        //
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }
 
    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
        $model = new AduanModel();
        $json = $this->request->getJSON();
        if ($json) {
            $data = [
                'name' => $json->name,
                'email' => $json->email,
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
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
