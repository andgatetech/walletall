<?php
/**
 * Created by PhpStorm.
 * User: alam
 * Date: 12/2/18
 * Time: 8:19 PM
 */

namespace App\Repositories;

use App\Models\TransactionType;

class TransactionTypeRepository implements RepositoryInterface
{
    protected $model;

    public function __construct(TransactionType $model)
    {
        $this->model = $model;
    }

    // Get all instances of model
    public function all()
    {
        return $this->model->all();
    }

    // create a new record in the database
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    // update record in the database
    public function update(array $data, $id)
    {
        $record = $this->find($id);
        return $record->update($data);
    }

    // remove record from the database
    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    // show the record with the given id
    public function show($id)
    {
        return $this->model->findOrFail($id);
    }

    // Set the associated model
    public function  setModel($model){
        $this->model = $model;
        return $this;
    }

    // Eager load database relationships
    public function with($relations){
        return $this->model->with($relations);
    }

}